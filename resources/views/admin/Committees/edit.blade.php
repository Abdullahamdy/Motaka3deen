
@extends('admin.layouts.main',[
    'page_header'       => 'الجمعيات',
    'page_description'  => ' تعديل   ',
    'link' => url('admin/Committees')
    ])
@section('content')
<!-- general form elements -->
<div class="box box-primary">
<!-- form start -->
{!! Form::model($model,[
// 'action' => ['Admin\PackagesController@update' . $record->id]
'url'=>url('admin/Committees/'.$model->id),
'id'=>'myForm',
'role'=>'form',
'method'=>'PUT',
'files' => true
])!!}

<div class="box-body">
<div class="clearfix"></div>
<br>
@include('admin.Committees.form')

<div class="box-footer">
<button type="submit" class="btn btn-primary">حفظ</button>
</div>

</div>
{!! Form::close()!!}

</div><!-- /.box -->

@endsection
