

@extends('admin.layouts.main',[
								'page_header'		=> 'الفيديوهات',
								'page_description'	=> 'عرض ',
                                  'link' => url('admin/allvideo')
								])
@section('content')

    <div class="ibox box-primary">

        <br>
        <br>


        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>

                    <th class="text-center">الفيديوهات</th>

                    <th class="text-center">حذف</th>
                    </thead>
                    <tbody>





@inject('gallary','App\Models\Gallary')

@php

$galaries = $gallary-> whereNotNull('embed')->get();
@endphp
                    @foreach ($galaries as $video)







                            <tr id="removable{{$video->id}}">
                                <td>


                                    <div class="row">
                                        <div class="col-md-3" style="width:30%;display:inline-block ; justify-content:space-around"  >
                                            <div class="media-body">
                                                <iframe width="560" height="315" src="{{ $video->embed }}" frameborder="0" allowfullscreen>
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                                <td class="text-center">

                                    <button

                                        id="{{$video->id}}"
                                        data-token="{{ csrf_token() }}"
                                        data-route="{{url('admin/delete-video/'.$video->id)}}"
                                        type="button"
                                        class="destroy btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{-- {!! $images->appends(request()->all())->render() !!} --}}



        </div>
    </div>
@stop

@section('script')

@stop


