@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Kategori Blog')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Kategori Blog'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('script')
    {{ $dataTable->scripts() }}
@endpush
