<x-web-layout>

  <!-- Hero Section -->
  <section class="flex items-center mt-[120px] lg:mt-[210px]">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="grid lg:grid-cols-2 py-6 lg:py-0 place-items-center">
        <div class="space-y-6" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
          <div>
            <span class="text-[#F5931E] text-sm font-medium">
              {{ __('homepage.hero.label') }}
            </span>
            <h1 class="text-4xl sm:text-5xl sm:leading-[70px] font-extrabold text-[#5A514E]">
              {{ __('homepage.hero.title') }}
            </h1>
            <p class="text-[#5A514E] font-normal text-lg mt-4">
                {{ __('homepage.hero.description') }}
            </p>
          </div>
          <div class="flex justify-start items-center gap-11 mt-14">
            <a href="{{ route('fbm') }}"
              class="inline-flex items-center gap-2 group text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] rounded text-base px-8 py-4 text-center"
              style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="#5A514E">
                <path d="M11.5 0.273438H7L12 8.14649L7 16.0195H11.5L16.5 8.14649L11.5 0.273438Z" />
                <path d="M4.5 0.273438H0L5 8.14649L0 16.0195H4.5L9.5 8.14649L4.5 0.273438Z" />
              </svg>
              FBM
            </a>

            <a  href="{{ route('fba') }}"
              class="inline-flex items-center gap-2 text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] rounded text-base px-8 py-4 text-center"
              style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="#5A514E">
                <path d="M11.5 0.273438H7L12 8.14649L7 16.0195H11.5L16.5 8.14649L11.5 0.273438Z" />
                <path d="M4.5 0.273438H0L5 8.14649L0 16.0195H4.5L9.5 8.14649L4.5 0.273438Z" />
              </svg>
              FBA
            </a>
          </div>
        </div>
        <div class="lg:block hidden" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
          <img class="mx-auto" src="{{ asset('images/savo-hero-section.png') }}" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section -->

  <!-- icon Box Section -->
  <section class="pt-8 lg:pt-24">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="grid lg:grid-cols-2 gap-10 place-items-center">
        <div data-sal="fade">
          <h1 class="text-4xl sm:leading-[70px] font-extrabold text-[#5A514E]">
            {{ __('homepage.about.heading') }}
          </h1>
          <p class="text-[#5A514E] font-normal text-lg mt-4">
            {{ __('homepage.about.description') }}
          </p>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="p-6 xl:p-10 border border-[#F5931E] bg-[#F4EFE6]"
            style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2)" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear" >
            <div class="space-y-6 text-center text-[#5A514E]">
              <div class="bg-[#5A514E] rounded-full w-24 h-24 mx-auto flex justify-center items-center">
                <img class="w-9" src="{{ asset('images/clock-icon.png') }}" alt="" />
              </div>
              <h1 class="text-lg font-bold">{{ __('homepage.about.speed') }}</h1>
              <p class="text-sm">
                {{ __('homepage.about.speed_description') }}
              </p>
            </div>
          </div>
          <div class="p-6 xl:p-10 border border-[#F5931E] bg-[#F4EFE6]"
            style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2)" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear" data-aos-delay="300">
            <div class="space-y-6 text-center text-[#5A514E]">
              <div class="bg-[#5A514E] rounded-full w-24 h-24 mx-auto flex justify-center items-center">
                <img class="w-9" src="{{ asset('images/dollar-icon.png') }}" alt="" />
              </div>
              <h1 class="text-lg font-bold">{{ __('homepage.about.payment') }}</h1>
              <p class="text-sm">
                {{ __('homepage.about.payment_description') }}
              </p>
            </div>
          </div>
          <div class="p-6 xl:p-10 border border-[#F5931E] bg-[#F4EFE6]"
            style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2)" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear" data-aos-delay="600">
            <div class="space-y-6 text-center text-[#5A514E]">
              <div class="bg-[#5A514E] rounded-full w-24 h-24 mx-auto flex justify-center items-center">
                <img class="w-9" src="{{ asset('images/heart-shake.png') }}" alt="" />
              </div>
              <h1 class="text-lg font-bold">{{ __('homepage.about.reliance') }}</h1>
              <p class="text-sm">
                {{ __('homepage.about.reliance_description') }}
              </p>
            </div>
          </div>
          <div class="p-6 xl:p-10 border border-[#F5931E] bg-[#F4EFE6]"
            style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2)" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear" data-aos-delay="900">
            <div class="space-y-6 text-center text-[#5A514E]">
              <div class="bg-[#5A514E] rounded-full w-24 h-24 mx-auto flex justify-center items-center">
                <img class="w-9" src="{{ asset('images/msg-icon.png') }}" alt="" />
              </div>
              <h1 class="text-lg font-bold">{{ __('homepage.about.communication') }}</h1>
              <p class="text-sm">
                {{ __('homepage.about.communication_description') }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- icon Box Section -->

  <!-- excellent Location -->
  <section class="pt-8 lg:pt-24">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="grid lg:grid-cols-2 gap-10 place-items-center">
        <div data-sal="slide-right" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
          <img src="{{ asset('images/excelent-location.png') }}" alt="" />
        </div>
        <div data-sal="slide-left"data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
          <h1 class="text-4xl sm:leading-[70px] font-extrabold text-[#5A514E]">
            {{ __('homepage.location.title') }}
          </h1>
          <p class="text-[#5A514E] font-normal sm:text-lg mt-4">
            {{ __('homepage.location.description') }}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- excellent Location -->

  <!-- HOW DO WE DO IT ? -->
  <section class="pt-8 lg:pt-24">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="lg:text-center">
        <h1 class="text-4xl sm:leading-[70px] font-extrabold text-[#5A514E]" data-aos="zoom-in" data-aos-duration="1000">
          {{ __('homepage.how.title') }}
        </h1>
      </div>
      <div class="grid sm:grid-cols-2 mt-10">
        <div class="h-[380px] lg:h-[500px] bg-no-repeat bg-center bg-cover order-0"
          style="background-image: url({{ asset('images/prepration-bg.png') }})" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="h-[380px] lg:h-[500px] bg-[#F2EBDD] flex justify-center items-center px-4 order-1"
          data-aos="zoom-in" data-aos-duration="1000">
          <div class="max-w-sm">
            <div>
              <img class="mx-auto" src="{{ asset('images/prepration-icon.png') }}" alt="" />
            </div>
            <div class="text-center text-[#5A514E]">
              <h1 class="my-5 font-bold text-xl">
                {{ __('homepage.how.card1_title') }}
              </h1>
              <p class="text-base font-normal">
                {{ __('homepage.how.card1_description') }}
              </p>
            </div>
          </div>
        </div>
        <div class="h-[380px] lg:h-[500px] bg-[#F2EBDD] flex justify-center items-center px-4 order-3 sm:order-2"
          data-aos="zoom-in" data-aos-duration="1000">
          <div class="max-w-sm">
            <div>
              <img class="mx-auto" src="{{ asset('images/sync-with-icon.png') }}" alt="" />
            </div>
            <div class="text-center text-[#5A514E]">
              <h1 class="my-5 font-bold text-xl">   {{ __('homepage.how.card2_title') }}</h1>
              <p class="text-base font-normal">
                {{ __('homepage.how.card2_description') }}
              </p>
            </div>
          </div>
        </div>
        <div class="h-[380px] lg:h-[500px] bg-no-repeat bg-center bg-cover order-2 sm:order-3"
          style="background-image: url({{ asset('images/sync-with-bg.png') }})" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>
      <div class="grid sm:grid-cols-2">
        <div class="h-[380px] lg:h-[500px] bg-no-repeat bg-center bg-cover order-0"
          style="background-image: url({{ asset('images/storage-bg.png') }})" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="h-[380px] lg:h-[500px] bg-[#F2EBDD] flex justify-center items-center px-4 order-1"
          data-aos="zoom-in" data-aos-duration="1000">
          <div class="max-w-sm">
            <div>
              <img class="mx-auto" src="{{ asset('images/storage-icon.png') }}" alt="" />
            </div>
            <div class="text-center text-[#5A514E]">
              <h1 class="my-5 font-bold text-xl">{{ __('homepage.how.card3_title') }}</h1>
              <p class="text-base font-normal">
                {{ __('homepage.how.card3_description') }}
              </p>
            </div>
          </div>
        </div>
        <div class="h-[380px] lg:h-[500px] bg-[#F2EBDD] flex justify-center items-center px-4 order-3 sm:order-2"
          data-aos="zoom-in" data-aos-duration="1000">
          <div class="max-w-sm">
            <div>
              <img class="mx-auto" src="{{ asset('images/work-icon.png') }}" alt="" />
            </div>
            <div class="text-center text-[#5A514E]">
              <h1 class="my-5 font-bold text-xl">{{ __('homepage.how.card4_title') }}</h1>
              <p class="text-base font-normal">
                {{ __('homepage.how.card4_description') }}
              </p>
            </div>
          </div>
        </div>
        <div class="h-[380px] lg:h-[500px] bg-no-repeat bg-center bg-cover order-2 sm:order-3"
          style="background-image: url({{ asset('images/work-bg.png') }})" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>
    </div>
  </section>
  <!-- HOW DO WE DO IT ? -->

  <!-- BENEFITS ON SIGN UP -->
  <section class="pt-8 lg:pt-24"  >
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="grid lg:grid-cols-2 lg:place-items-center gap-10">
        <div class="w-full" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
          <h1 class="text-4xl sm:leading-[70px] font-extrabold text-[#5A514E]">
            {{ __('homepage.benefits.title') }}
          </h1>
          <ul class="space-y-6 mt-9">
            <li class="pl-9 relative text-[#5A514E] font-bold">
              <img class="absolute left-0 top-1" src="{{ asset('images/ticklist.png') }}" alt="" />
              {{ __('homepage.benefits.benefit1') }}
            </li>
            <li class="pl-9 relative text-[#5A514E] font-bold">
              <img class="absolute left-0 top-1" src="{{ asset('images/ticklist.png') }}" alt="" />
              {{ __('homepage.benefits.benefit2') }}
            </li>
            <li class="pl-9 relative text-[#5A514E] font-bold">
              <img class="absolute left-0 top-1" src="{{ asset('images/ticklist.png') }}" alt="" />
              {{ __('homepage.benefits.benefit3') }}
            </li>
            <li class="pl-9 relative text-[#5A514E] font-bold">
              <img class="absolute left-0 top-1" src="{{ asset('images/ticklist.png') }}" alt="" />
              {{ __('homepage.benefits.benefit4') }}
            </li>
            <li class="pl-9 relative text-[#5A514E] font-bold">
              <img class="absolute left-0 top-1" src="{{ asset('images/ticklist.png') }}" alt="" />
              {{ __('homepage.benefits.benefit5') }}
            </li>
            <li class="pl-9 relative text-[#5A514E] font-bold">
              <img class="absolute left-0 top-1" src="{{ asset('images/ticklist.png') }}" alt="" />
              {{ __('homepage.benefits.benefit6') }}
            </li>
          </ul>
          <a href="#"
            class="inline-flex items-center gap-2 mt-9 text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] rounded text-base px-8 py-4 text-center"
            style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="#5A514E">
              <path d="M11.5 0.273438H7L12 8.14649L7 16.0195H11.5L16.5 8.14649L11.5 0.273438Z"></path>
              <path d="M4.5 0.273438H0L5 8.14649L0 16.0195H4.5L9.5 8.14649L4.5 0.273438Z"></path>
            </svg>
            {{ __('homepage.register') }}
          </a>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
          <img src="{{ asset('images/benifits-bg.png') }}" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- BENEFITS ON SIGN UP -->

  <!-- hover Cards -->
  <section class="pt-8 lg:pt-24" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-easing="linear">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 py-10">
        <div class="relative bg-gray-200 overflow-hidden shadow-lg group cursor-pointer">
          <img class="w-full h-96 object-cover" src="{{ asset('images/home-card-1.png') }}" alt="your-image-description" />
          <div
            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
            <div class="p-4 -translate-y-10 group-hover:translate-y-0 transition duration-500 ease-in-out">
              <h3 class="text-white text-lg font-bold mb-2">
                {{ __('homepage.services.service1_title') }}
              </h3>
              <p class="text-gray-300 text-sm">
                {{ __('homepage.services.service1_description') }}
              </p>
            </div>
          </div>
          <div
            class="absolute bottom-0 left-0 right-0 w-full py-6 text-center px-2 group-hover:opacity-0 transition duration-500 ease-in-out bg-[#5A514E]">
            <h3 class="text-white text-base xl:text-lg font-bold mb-2">
                {{ __('homepage.services.service1_title') }}
            </h3>
          </div>
        </div>
        <div class="relative bg-gray-200 overflow-hidden shadow-lg group cursor-pointer">
          <img class="w-full h-96 object-cover" src="{{ asset('images/home-card-2.png') }}" alt="your-image-description" />
          <div
            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
            <div class="p-4 -translate-y-10 group-hover:translate-y-0 transition duration-500 ease-in-out">
              <h3 class="text-white text-lg font-bold mb-2">
                   {{ __('homepage.services.service2_title') }}
              </h3>
              <p class="text-gray-300 text-sm">
                {{ __('homepage.services.service2_description') }}
              </p>
            </div>
          </div>
          <div
            class="absolute bottom-0 left-0 right-0 w-full py-6 text-center px-2 group-hover:opacity-0 transition duration-500 ease-in-out bg-[#5A514E]">
            <h3 class="text-white text-base xl:text-lg font-bold mb-2">
                 {{ __('homepage.services.service2_title') }}
            </h3>
          </div>
        </div>
        <div class="relative bg-gray-200 overflow-hidden shadow-lg group cursor-pointer">
          <img class="w-full h-96 object-cover" src="{{ asset('images/home-card-3.png') }}" alt="your-image-description" />
          <div
            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
            <div class="p-4 -translate-y-10 group-hover:translate-y-0 transition duration-500 ease-in-out">
              <h3 class="text-white text-lg font-bold mb-2">
                {{ __('homepage.services.service3_title') }}
              </h3>
              <p class="text-gray-300 text-sm">
                {{ __('homepage.services.service3_description') }}
              </p>
            </div>
          </div>
          <div
            class="absolute bottom-0 left-0 right-0 w-full py-6 text-center px-2 group-hover:opacity-0 transition duration-500 ease-in-out bg-[#5A514E]">
            <h3 class="text-white text-base xl:text-lg font-bold mb-2">
              {{ __('homepage.services.service3_title') }}
            </h3>
          </div>
        </div>
        <div class="relative bg-gray-200 overflow-hidden shadow-lg group cursor-pointer">
          <img class="w-full h-96 object-cover" src="{{ asset('images/home-card-1.png') }}"alt="your-image-description" />
          <div
            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
            <div class="p-4 -translate-y-10 group-hover:translate-y-0 transition duration-500 ease-in-out">
              <h3 class="text-white text-lg font-bold mb-2">
                    {{ __('homepage.services.service4_title') }}
              </h3>
              <p class="text-gray-300 text-sm">
                {{ __('homepage.services.service4_description') }}
              </p>
            </div>
          </div>
          <div
            class="absolute bottom-0 left-0 right-0 w-full py-6 text-center px-2 group-hover:opacity-0 transition duration-500 ease-in-out bg-[#5A514E]">
            <h3 class="text-white text-base xl:text-lg font-bold mb-2">
                  {{ __('homepage.services.service4_title') }}
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hover Cards -->

  <section class="pt-8 lg:pt-24" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear" >
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="grid lg:grid-cols-2 gap-10 lg:place-items-center">
        <div class="w-full">
          <div class="space-y-2">
            <h1 class="text-[#5A514E] font-extrabold text-4xl leading-[50px]">
                {{ __('homepage.join.title') }} <br class="hidden sm:block" />
             {{ __('homepage.join.FAMILY TODAY !') }}
            </h1>
            <p class="text-[#5A514E] text-2xl">{{ __('homepage.join.description') }}</p>
          </div>
          <a href="{{ route('register') }}"
            class="mt-6 inline-flex items-center gap-2 text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] rounded text-base px-8 py-4 text-center"
            style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="#5A514E">
              <path d="M11.5 0.273438H7L12 8.14649L7 16.0195H11.5L16.5 8.14649L11.5 0.273438Z"></path>
              <path d="M4.5 0.273438H0L5 8.14649L0 16.0195H4.5L9.5 8.14649L4.5 0.273438Z"></path>
            </svg>
            {{ __('homepage.register') }}
          </a>
        </div>
        <div>
          <img src="{{ asset('images/join-savo.png') }}" alt="" />
        </div>
      </div>
    </div>
  </section>

</x-web-layout>
