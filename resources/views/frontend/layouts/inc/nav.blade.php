<header class="bg-white">
    <nav class="flex justify-between items-center w-[92%] mx-auto animate-fade-down">
        <div>
            <a href="{{ url('/') }}">
                <img class="w-52 my-2" src="{{ asset('assets/img/amc.png') }}" alt="Klinik Artha Medical Centre">
            </a>
        </div>
        <div class="links duration-300 ease-linear md:static absolute backdrop-blur-md bg-white/30 md:min-h-fit min-h-[55vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/') }}">Beranda</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="#">Layanan Kami</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="#">Mitra</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/kontak') }}">Kontak Kami</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            {{-- <button class="bg-gradient-to-br from-orange-600 to-orange-300 text-white px-5 py-2 rounded-full font-semibold">
                <i class="fa fa-sign-in me-2"></i>
                Masuk
            </button>
            <button class="text-white bg-gradient-to-t from-cyan-500 to-green-500 px-5 py-2 rounded-full hover:bg-cyan-400 font-semibold">
                <i class="fa fa-user-plus me-2"></i>
                Daftar
            </button> --}}
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>
</header>

