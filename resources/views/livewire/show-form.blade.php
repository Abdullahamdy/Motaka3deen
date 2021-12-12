@extends('frontend.layout.head_foot')
@section('css')
@livewireStyles
@endsection
@section('content')


    @livewire('member-add')


    @section('script')
        @livewireScripts
    @endsection
@endsection
