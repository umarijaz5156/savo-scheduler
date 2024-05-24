<x-web-layout>
    <!-- Hero Section -->
    <section>
        {{-- {{ dd($img) }} --}}
        <div class="container mx-auto mt-[120px] lg:mt-[210px] 2xl:max-w-[1530px] px-4">
            <div class="w-full" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                <div class="h-[613px] bg-cover bg-center hero-img bg-no-repeat w-full"
                    style="background-image: url({{ $img?->guid }})"></div>
            </div>
            <div class="flex md:flex-row flex-col-reverse gap-10 w-full mt-9">

                <div class="w-full">
                    <h1 class="text-4xl hero-head sm:text-5xl" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-easing="linear">{{ $blog->post_title }}</h1>
                    {{-- <h2 class="text-4xl hero-head sm:text-5xl text-[#424242] mt-3" data-aos="fade-right"
                        data-aos-delay="600" data-aos-duration="1000" data-aos-easing="linear">
                        I think so,this is it
                    </h2> --}}
                    <div class="text-base hero-head leading-[36px] mt-4" data-aos="fade-right" data-aos-delay="1200"
                        data-aos-duration="1000" data-aos-easing="linear">
                        {!! $blog->post_content !!}
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section -->

    <!-- Keywords -->
    {{-- <section class="my-[40px]">
        <div class="container mx-auto 2xl:max-w-[1530px] px-4">
            <div class="w-full sm:max-w-[900px]">
                <ul class="flex w-full justify-start gap-y-[10px] sm:gap-y-[20px] lg:gap-x-[80px] flex-wrap"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Warehouse</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Storage</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Delievery Options</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Load 50kg</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Manage Stock</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">FBA</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Amazon</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Stock</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Prep Center</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 rounded text-base bg-transparent text-[#5A514E] lg:p-0"
                            aria-current="page">Reseller</a>
                    </li>
                </ul>
            </div>
        </div>
    </section> --}}
    <!-- Keywords -->

    <!-- Paragpraphs -->
    {{-- <section class="par-cont">
        <div class="container 2xl:max-w-[1530px] px-4 mx-auto">
            <div class="">
                <p class="text-[#444444] para leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] para mt-4 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] para mt-4 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] para mt-4 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] para mt-4 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] para mt-4 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] para mt-4 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
            </div>
        </div>
    </section> --}}
    <!-- Paragpraphs -->

    <!-- Mid Section -->
    {{-- <section class="mid-sec my-10">
        <div class="container mx-auto 2xl:max-w-[1530px] px-4">
            <div class="h-[700px] bg-center bg-no-repeat bg-cover w-full"
                style="background-image: url({{ asset('images/mid-sec.png') }})" data-aos="zoom-in"
                data-aos-duration="800" data-aos-easing="linear"></div>
            <div>
                <p class="text-[#444444] mt-8 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
                <p class="text-[#444444] mt-5 leading-[36px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="linear">
                    Logística de Amazon es el modelo comercial más poderoso y rentable
                    jamás creado. Le permite ganar dinero con Amazon sin siquiera
                    comprar o vender un solo producto. hay muchos negocios que se pueden
                    ejecutar bajo Logística de Amazon, desde productos físicos hasta
                    productos digitales y servicios. Esta guía cubrirá todo lo que
                    necesita saber para comenzar con FBA para que finalmente pueda
                    comenzar a vivir la vida de sus sueños.
                </p>
            </div>
        </div>
    </section> --}}
    <!-- Mid Section -->

    <!-- Categories -->
    {{-- <section class="category">
        <div class="container mx-auto px-4 2xl:max-w-[1530px]">
            <h1 class="text-3xl cat-head mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                Related Keywords</h1>
            <div class="mt-3 gap-x-10 gap-y-5 grid sm:grid-cols-2 lg:grid-cols-4">
                <div class="cat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                    <div style="background-image: url({{ asset('images/related-cat.png') }})"
                        class="h-[250px] bg-cover bg-center bg-no-repeat"></div>
                    <div class="flex mt-2 items-center justify-between">
                        <span class="text-xs w-fit h-fit text-orange-400 font-light">FBA
                        </span>
                        <span class="flex gap-1 items-center"><i
                                class="fas text-gray-400 w-fit h-fit text-[7px] fa-circle"></i>
                            <p class="text-gray-400 text-[12px]">20mins ago</p>
                        </span>
                        <span class="flex gap-1.5 items-center"><i
                                class="fa-light fa-eye text-gray-400 w-fit h-fit text-[9px]"></i>
                            <p class="text-gray-400 text-[12px]">456</p>
                        </span>
                    </div>
                    <p class="text-[#444444] mt-3">
                        Logística de Amazon es el modelo comercial más poderoso y rentable
                        jamás creado. Le permite ganar dinero con Amazon sin siquiera
                        comprar o vender un solo producto.
                    </p>
                </div>
                <div class="cat-card" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000"
                    data-aos-easing="linear">
                    <div style="background-image: url({{ asset('images/related-cat.png') }})"
                        class="h-[250px] bg-cover bg-center bg-no-repeat"></div>
                    <div class="flex mt-2 items-center justify-between">
                        <span class="text-xs w-fit h-fit text-orange-400 font-light">FBA
                        </span>
                        <span class="flex gap-1 items-center"><i
                                class="fas text-gray-400 w-fit h-fit text-[7px] fa-circle"></i>
                            <p class="text-gray-400 text-[12px]">20mins ago</p>
                        </span>
                        <span class="flex gap-1.5 items-center"><i
                                class="fa-light fa-eye text-gray-400 w-fit h-fit text-[9px]"></i>
                            <p class="text-gray-400 text-[12px]">456</p>
                        </span>
                    </div>
                    <p class="text-[#444444] mt-3">
                        Logística de Amazon es el modelo comercial más poderoso y rentable
                        jamás creado. Le permite ganar dinero con Amazon sin siquiera
                        comprar o vender un solo producto.
                    </p>
                </div>
                <div class="cat-card" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000"
                    data-aos-easing="linear">
                    <div style="background-image: url({{ asset('images/related-cat.png') }})"
                        class="h-[250px] bg-cover bg-center bg-no-repeat"></div>
                    <div class="flex mt-2 items-center justify-between">
                        <span class="text-xs w-fit h-fit text-orange-400 font-light">FBA
                        </span>
                        <span class="flex gap-1 items-center"><i
                                class="fas text-gray-400 w-fit h-fit text-[7px] fa-circle"></i>
                            <p class="text-gray-400 text-[12px]">20mins ago</p>
                        </span>
                        <span class="flex gap-1.5 items-center"><i
                                class="fa-light fa-eye text-gray-400 w-fit h-fit text-[9px]"></i>
                            <p class="text-gray-400 text-[12px]">456</p>
                        </span>
                    </div>
                    <p class="text-[#444444] mt-3">
                        Logística de Amazon es el modelo comercial más poderoso y rentable
                        jamás creado. Le permite ganar dinero con Amazon sin siquiera
                        comprar o vender un solo producto.
                    </p>
                </div>
                <div class="cat-card" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000"
                    data-aos-easing="linear">
                    <div style="background-image: url({{ asset('images/related-cat.png') }})"
                        class="h-[250px] bg-cover bg-center bg-no-repeat"></div>
                    <div class="flex mt-2 items-center justify-between">
                        <span class="text-xs w-fit h-fit text-orange-400 font-light">FBA
                        </span>
                        <span class="flex gap-1 items-center"><i
                                class="fas text-gray-400 w-fit h-fit text-[7px] fa-circle"></i>
                            <p class="text-gray-400 text-[12px]">20mins ago</p>
                        </span>
                        <span class="flex gap-1.5 items-center"><i
                                class="fa-light fa-eye text-gray-400 w-fit h-fit text-[9px]"></i>
                            <p class="text-gray-400 text-[12px]">456</p>
                        </span>
                    </div>
                    <p class="text-[#444444] mt-3">
                        Logística de Amazon es el modelo comercial más poderoso y rentable
                        jamás creado. Le permite ganar dinero con Amazon sin siquiera
                        comprar o vender un solo producto.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Categories -->
    <!-- Testimonials section -->
    <section class="mt-8">
        <div class="container xl:max-w-screen-2xl mx-auto px-4">
            <div class="rounded-3xl w-full pt-5 pb-5 sm:pb-20 px-6 sm:px-24" style="box-shadow: 0px 4px 30px rgba(56, 71, 109, 0.09);">
                <h1 class="text-4xl font-bold text-[#1F2B59] my-8">{{ $comments->count() }} Comments</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-20">
                    @foreach ($comments as $comment)
                        <figure class="max-w-screen-md border-b pb-2 mb-5">
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex  items-center mb-4 text-yellow-300">
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </div>
                                <div class="flex justify-start items-center gap-2 opacity-30 text-sm">
                                    <i class="fa-light fa-calendar"></i>
                                    <span>{{ \Carbon\Carbon::parse($comment->comment_date)->diffForHumans() }}</span>
                                </div>
                            </div>
                            <blockquote>
                                <p class="text-base font-semibold text-gray-900">{!! $comment->comment_content !!}</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-6 space-x-3">
                                {{-- <img class="w-6 h-6 rounded-full" src="{{ \Models\User::where('name', $comment->comment_author)->first('') }}" alt="profile picture"> --}}
                                <div class="flex items-center flex-col lg:flex-row gap-1 lg:gap-3 lg:divide-x-2 divide-gray-300 drk:divide-gray-700">
                                    <cite class=" font-medium text-gray-900">{{ $comment->comment_author }}</cite>
                                    {{-- <cite class="lg:pl-3 text-sm font-light text-gray-500 drk:text-gray-400">CTO at Flowbite</cite> --}}
                                </div>
                            </figcaption>
                        </figure>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section -->

    <!-- TextBox -->
    <section>

        <livewire:blog-comment :blog="$blog->ID"/>

    </section>
    {{-- <section class="my-10 text-box">
        <div class="container mx-auto 2xl:max-w-[1530px] px-4">
            <form action="#">
                <textarea name="" style="resize: none; box-shadow: 0px 4px 50px 5px #f5931e33" id=""
                    class="w-full bg-transparent border border-[#F5931E] focus:border-[#F5931E] focus:ring-transparent pl-4 pt-4"
                    placeholder="Leave a reply" rows="10"></textarea>
                <div class="w-full flex mt-3 justify-end">
                    <button
                        class="w-fit flex font-semibold hover:bg-[#e17f09] items-center py-2 pl-4 pr-4 text-black text-sm bg-[#F5931E] lg:text-[#5A514E]"
                        type="button">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section> --}}
    <!-- TextBox -->


</x-web-layout>
