@extends('layouts.admin')

@section('content')
    {!! form($form) !!}
    @include('partials.admin.file', ['file'=> $object->picture])
    @include('partials.admin.tinymce')
@endsection