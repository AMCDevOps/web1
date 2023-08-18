@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Blog')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Blog'])
    <div class="container-fluid py-4"></div>
@endsection
