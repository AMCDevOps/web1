@extends('frontend.layouts.layout')

@section('meta')
    <meta property="og:site_name" content="Tentang Kami | Klinik Artha Medical Centre" />
    <meta property="og:url" content="{{ url('/tentang-kami') }}" />
    <meta property="og:description" content="" />
@endsection

@section('title', 'Tentang Kami')

@section('content')
    <div class="w-full">
        <div class="flex bg-white h-[32vh] animate-fade-up">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl ms-5 font-semibold text-gray-800 md:text-4xl animate-flip-up animate-ease-linear animate-delay-500">
                        <span class="font-bold bg-gradient-to-br from-orange-600 to-yellow-300 bg-clip-text text-transparent">
                            Tentang
                        </span>
                        <span class="font-bold bg-gradient-to-bl from-cyan-700 to-cyan-300 bg-clip-text text-transparent">
                            Kami
                        </span>
                    </h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base animate-fade-right animate-ease-linear animate-delay-500">Yuk kenal kami lebih dekat, kami ceritakan semua kisah tentang kami dan perjalan bisnis kami mulai dari awal semua ada disini.</p>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2 animate-fade-left animate-ease-linear animate-delay-700" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80)">
                    <div class="h-full bg-gradient-to-tr from-cyan-700 to-orange-700 opacity-30"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <p class="px-8 md:px-12 my-8 text-sm md:text-base text-justify animate-fade-up animate-ease-linear animate-delay-700">
            KLINIK ARTHA MEDICAL CENTRE adalah Klinik Pratama yang didirikan pada tanggal 20 Juni 2022 berdasarkan SK. DINKES No.440.001.10/1908/YANKES7SDA/2022 dan telah terverifikasi DPMPTSP melalui OSS RBA dengan No. Sertifikat Standard : 04032200518920007 dibawah naungan <span class="font-bold">PT. ARTHA ROYAL NUSANTARA</span> yang terdaftar di Kementerian Hukum dan Hak Asasi Manuisa Republik Indonesia dengan No. AHU 0043427.AH.01.11 Tahun 2022 Tanggal 4 Maret 2022 yang berlokasi di Jl. Sendawar Raya, RT.029, Kel. Melak Ulu, Kec Melak, Kab. Kutai Barat.</br></br>

            Klinik Artha Medical Centre (AMC) melayani Kesehatan Masyarakat antara lain Pasien Umum, dan Perusahan yang ada di kawasan Kutai Barat dan Mahakam Ulu, melayani Medical Check-Up karyawan dan calon Karyawan Perusahaan, pelayanan bedah minor serta tindakan medis lainnya.</br></br>

            Tim kami adalah tenaga professional yang berpengalaman dalam memberikan jasa bantuan medis, baik dalam lingkup perusahan maupun perorangan.
        </p>
    </div>
@endsection
