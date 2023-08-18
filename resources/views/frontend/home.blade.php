@extends('frontend.layouts.layout')

@section('meta')
    <meta property="og:site_name" content="Klinik Artha Medical Centre" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:description" content="" />
@endsection

@section('title', 'Beranda')

@section('content')
<div class="w-full">
    <div class="flex bg-white h-screen animate-fade-up">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl animate-flip-up animate-ease-linear animate-delay-500"><span class="font-bold bg-gradient-to-br from-cyan-500 to-green-200 bg-clip-text text-transparent">Artha Med</span><span class="font-bold bg-gradient-to-r from-yellow-500 to-orange-600 bg-clip-text text-transparent">ical Centre</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base animate-fade-right animate-ease-linear animate-delay-500">KLINIK ARTHA MEDICAL CENTRE adalah Klinik Pratama yang didirikan pada tanggal 20 Juni 2022 berdasarkan SK. DINKES dan telah terverifikasi DPMPTSP melalui OSS RBA</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    {{-- <button class="px-4 py-3 bg-gradient-to-br from-orange-600 to-yellow-500 font-semibold text-xs rounded-full text-white hover:bg-gradient-to-tr from-orange-600 to-yellow-500 duration-300 ease-linear">
                        <i class="fa fa-sign-in me-2"></i>
                        Masuk
                    </button>
                    <button class="mx-4 px-4 py-4 bg-gradient-to-br from-cyan-600 to-green-500 font-semibold text-xs rounded-full text-white hover:bg-gradient-to-tr from-cyan-600 to-green-500 duration-300 ease-linear">
                        <i class="fa fa-user-plus me-2"></i>
                        Daftar
                    </button> --}}
                    @csrf
                    <button class="px-4 py-4 bg-gradient-to-br from-red-600 to-red-300 font-semibold text-xs rounded-full text-white hover:bg-gradient-to-tl from-red-600 to-red-300 duration-300 ease-linear animate-jump-in animate-ease-linear animate-delay-1000" onclick="window.location.href='{{ url('/tentang-kami') }}';">
                        Selengkapnya
                        <i class="fa fa-angles-right ms-2 animate-pulse animate-infinite animate-ease-linear"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2 animate-fade-left animate-ease-linear animate-delay-700" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1512678080530-7760d81faba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80)">
                <div class="h-full bg-gradient-to-tr from-cyan-700 to-orange-700 opacity-30"></div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gradient-to-r from-orange-600 to-orange-400">
    <div class="container">
        <section></section>
    </div>
</div>
@endsection
