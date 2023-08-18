@extends('frontend.layouts.layout')

@section('meta')
    <meta property="og:site_name" content="Blog | Klinik Artha Medical Centre" />
    <meta property="og:url" content="{{ url('/blog') }}" />
    <meta property="og:description" content="" />
@endsection

@section('title', 'Blog')

@section('content')
    <div class="w-full">
        <div class="flex bg-white h-[32vh] animate-fade-up">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl ms-5 font-semibold text-gray-800 md:text-4xl animate-flip-up animate-ease-linear animate-delay-500">
                        <span class="font-bold bg-gradient-to-br from-orange-600 to-yellow-300 bg-clip-text text-transparent">Bl</span><span class="font-bold bg-gradient-to-bl from-cyan-700 to-cyan-300 bg-clip-text text-transparent">og</span>
                    </h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base animate-fade-right animate-ease-linear animate-delay-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut nulla culpa suscipit corporis blanditiis impedit eum aliquam, eligendi dolores eos.</p>
                    {{-- <div class="flex justify-center lg:justify-start mt-6">
                        <button></button>
                    </div> --}}
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2 animate-fade-left animate-ease-linear animate-delay-700" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1498766707495-856f300a5821?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80)">
                    <div class="h-full bg-gradient-to-tr from-cyan-700 to-orange-700 opacity-30"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                <div class="lg:flex">

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2 animate-fade-up animate-ease-linear animate-delay-1000">
                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:text-gray-600 ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-xs text-gray-500">
                            <i class="fa fa-user me-2"></i>
                            <a href="#" class="me-2">
                                Abdullah Khodir
                            </a> <i class="fa fa-grip-lines-vertical"></i>
                            <i class="fa fa-layer-group mx-2"></i>
                            <a href="#" class="me-2">
                                Health
                            </a>
                            <br/>
                            <i class="fa fa-calendar-days mt-1 me-2"></i> 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:text-gray-600 ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-xs text-gray-500">
                            <i class="fa fa-user me-2"></i>
                            <a href="#" class="me-2">
                                Abdullah Khodir
                            </a> <i class="fa fa-grip-lines-vertical"></i>
                            <i class="fa fa-layer-group mx-2"></i>
                            <a href="#" class="me-2">
                                Health
                            </a>
                            <br/>
                            <i class="fa fa-calendar-days mt-1 me-2"></i> 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1544654803-b69140b285a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:text-gray-600 ">
                            Morning routine to boost your mood
                        </a>

                        <span class="text-xs text-gray-500">
                            <i class="fa fa-user me-2"></i>
                            <a href="#" class="me-2">
                                Abdullah Khodir
                            </a> <i class="fa fa-grip-lines-vertical"></i>
                            <i class="fa fa-layer-group mx-2"></i>
                            <a href="#" class="me-2">
                                Health
                            </a>
                            <br/>
                            <i class="fa fa-calendar-days mt-1 me-2"></i> 25 November 2020</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1547&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:text-gray-600 ">
                            All the features you want to know
                        </a>

                        <span class="text-xs text-gray-500">
                            <i class="fa fa-user me-2"></i>
                            <a href="#" class="me-2">
                                Abdullah Khodir
                            </a> <i class="fa fa-grip-lines-vertical"></i>
                            <i class="fa fa-layer-group mx-2"></i>
                            <a href="#" class="me-2">
                                Health
                            </a>
                            <br/>
                            <i class="fa fa-calendar-days mt-1 me-2"></i> 30 September 2020</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:text-gray-600 ">
                            Minimal workspace for your inspirations
                        </a>

                        <span class="text-xs text-gray-500">
                            <i class="fa fa-user me-2"></i>
                            <a href="#" class="me-2">
                                Abdullah Khodir
                            </a> <i class="fa fa-grip-lines-vertical"></i>
                            <i class="fa fa-layer-group mx-2"></i>
                            <a href="#" class="me-2">
                                Health
                            </a>
                            <br/>
                            <i class="fa fa-calendar-days mt-1 me-2"></i> 13 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:text-gray-600 ">
                            What do you want to know about Blockchane
                        </a>

                        <span class="text-xs text-gray-500">
                            <i class="fa fa-user me-2"></i>
                            <a href="#" class="me-2">
                                Abdullah Khodir
                            </a> <i class="fa fa-grip-lines-vertical"></i>
                            <i class="fa fa-layer-group mx-2"></i>
                            <a href="#" class="me-2">
                                Health
                            </a>
                            <br/>
                            <i class="fa fa-calendar-days mt-1 me-2"></i> 20 October 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
