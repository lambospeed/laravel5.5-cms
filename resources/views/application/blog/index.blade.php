@extends('layouts.blog')

@section('title'){{ getTitle() }}@endsection
@section('description'){{ getDescription() }}@endsection

@section('content')
    @include('partials.application.articles')
@endsection
