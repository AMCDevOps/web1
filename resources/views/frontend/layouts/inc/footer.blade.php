<div class="flex items-end w-full bg-white">
    <footer class="w-full text-gray-700 bg-gray-100 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <img class="md:w-[68%] w-[70%]" src="{{ asset('assets/img/amc.png') }}" alt="Klinik Artha Medical Centre">
                </a>
                {{-- <p class="mt-2 text-sm text-gray-500">Your Healt Solution</p> --}}
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-gray-500 cursor-pointer hover:text-blue-700" href="https://www.facebook.com/artha.medical/" target="_blank">
                            <i class="fa-brands fa-facebook text-xl"></i>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-orange-700" href="https://instagram.com/artha_medical" target="_blank">
                            <i class="fa-brands fa-instagram text-xl"></i>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700" href="https://tiktok.com/@artha_medical" target="_blank">
                            <i class="fa-brands fa-tiktok text-xl"></i>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-cyan-700" href="https://twitter.com/artha_medical" target="_blank">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-blue-700" href="https://linkedin.com/company/artha-medical-centre" target="_blank">
                            <i class="fa-brands fa-linkedin text-xl"></i>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-red-700" href="https://www.youtube.com/@Artha_Medical" target="_blank">
                            <i class="fa-brands fa-youtube text-xl"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-semibold tracking-widest text-gray-900 uppercase title-font">
                        Informasi
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Karir</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-semibold tracking-widest text-gray-900 uppercase title-font">
                        Layanan
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Layanan Kami</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Kemitraan</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Fasilitas</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-semibold tracking-widest text-gray-900 uppercase title-font">
                        Bantuan
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900" href="{{ url('/kontak') }}">Kontak Kami</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900" href="mailto:halo@arthamedical.com">halo@arhtamedical.com</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900" href="https://api.whatsapp.com/send?phone=6281255698969" target="_blank">+62 812 5569 8969</a>
                        </li>
                    </nav>
                </div>
                {{-- <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-semibold tracking-widest text-gray-900 uppercase title-font">
                        Lokasi
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Pricing</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                        </li>
                    </nav>
                </div> --}}
            </div>
        </div>
        <div class="bg-gray-300">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-gray-700 xl:text-center">Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="{{ url('/') }}" class="font-semibold">PT. Artha Royal Nusantara</a> <!-- | develope with <i class="fa fa-heart"></i> by: <a href="https://twenty2net.id" target="_blank" class="font-semibold">PT. TwentyTwo Network Indonesia</a> -->
                </p>
            </div>
        </div>
    </footer>
</div>
