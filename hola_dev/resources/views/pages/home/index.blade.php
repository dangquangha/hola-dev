@extends('layouts.app')

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/home/category.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <!-- CATEGORY -->
            @include('pages.home.components.category')
            
            <!-- HOT -->
            @include('pages.home.components.hot')

            <!-- FEATURES -->
            @include('pages.home.components.features')

            <!-- NEWS -->
            @include('pages.home.components.news')
        </div>
    </div>
@endsection