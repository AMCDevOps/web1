@extends('frontend.layouts.layout')

@section('meta')
    <meta property="og:site_name" content="Kontak Kami | Klinik Artha Medical Centre" />
    <meta property="og:url" content="{{ url('/kontak') }}" />
    <meta property="og:description" content="" />
@endsection

@section('title', 'Kontak Kami')

@section('content')
    <div class="w-full">
        <div class="flex bg-white h-[32vh]">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl ms-5 font-semibold text-gray-800 md:text-4xl animate-flip-up animate-ease-linear animate-delay-500">
                        <span class="font-bold bg-gradient-to-br from-orange-600 to-yellow-300 bg-clip-text text-transparent">
                            Kontak
                        </span>
                        <span class="font-bold bg-gradient-to-bl from-cyan-700 to-cyan-300 bg-clip-text text-transparent">
                            Kami
                        </span>
                    </h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base animate-fade-right animate-ease-linear animate-delay-500">
                        Kami selalu siap menerima pesan anda, jangan khawatir karena pesan anda rahasia dan di enkripsi langsung oleh sistem kami
                    </p>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2 animate-fade-left animate-ease-linear animate-delay-700" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1560268744-aaab797cdfc4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80)">
                    <div class="h-full bg-gradient-to-tr from-cyan-700 to-orange-700 opacity-30"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font relative animate-fade-up animate-ease-linear animate-delay-700">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=-0.232650, 115.798018&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">
                <span class="font-bold bg-gradient-to-br from-orange-600 to-yellow-300 bg-clip-text text-transparent">
                    Hubungi
                </span>
                <span class="font-bold bg-gradient-to-bl from-cyan-700 to-cyan-300 bg-clip-text text-transparent">
                    Kami
                </span>
            </h2>
            <p class="leading-relaxed mb-5 text-gray-600">Jangan ragu untuk menghubungi dan lebih dekat dengan kami.</p>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">
                    <i class="fa fa-user me-2"></i>
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required placeholder="John Doe Jr.">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">
                    <i class="fa fa-envelope me-2"></i>
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required placeholder="alamat@email.com">
            </div>
            <div class="relative mb-4">
                <label for="phone" class="leading-7 text-sm text-gray-600">
                    <i class="fa fa-phone me-2"></i>
                    Nomor Telpon <span class="text-red-500">*</span>
                </label>
                <input type="number" id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required placeholder="628123456890">
            </div>
            <div class="relative mb-4">
                <label for="department" class="leading-7 text-sm text-gray-600">
                    <i class="fa fa-list-ul me-2"></i>
                    Bagian <span class="text-red-500">*</span> (yang ingin dihubungi)
                </label>
                <select name="department" id="department" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    <option value="" hidden>Pilih..</option>
                    <option value="" disabled>Pilih..</option>
                    <option value="general">Umum</option>
                    <option value="vachine">Pelayanan Vaksin</option>
                    <option value="health">Pelayanan Kesehatan</option>
                    <option value="partner">Kemitraan</option>
                </select>
            </div>
            <div class="relative mb-4">
                <label for="company" class="leading-7 text-sm text-gray-600">
                    <i class="fa fa-hotel me-2"></i>
                    Perusahaan (kosongkan jika tidak ada)
                </label>
                <input type="text" id="company" name="company" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="PT. CV. UD.">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">
                    <i class="fa fa-comment-dots me-2"></i>
                    Pesan <span class="text-red-500">*</span>
                </label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required placeholder="Pesan anda..."></textarea>
            </div>
            <button class="text-white bg-gradient-to-tr from-orange-700 to-yellow-500 border-0 py-2 px-6 focus:outline-none rounded text-lg">
                <i class="fa fa-paper-plane me-2"></i>
                Kirim
            </button>
            <p class="text-xs text-gray-500 mt-3">Mohon menunggu balasan dari tim kami untuk tindak lanjut pesan anda, dan jangan khawatir karena pesan anda ter-enkripsi dan rahasia.</p>
        </div>
        </div>
    </section>
@endsection
