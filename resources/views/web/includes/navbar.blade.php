  <!-- navbar -->
  <nav class=" border-gray-200  px-2 sm:px-4 py-2.5 rounded fixed top-0 w-full z-50"
    :class="{ 'shadow-[0px_10px_30px_0.18px_#a0a0a02e] transition duration-300 bg-[rgba(244,_234,_217,_1)]' : showBar }"
    @scroll.window="showBar = (window.pageYOffset > 50) ? true : false">
    <div class="container 2xl:max-w-screen-2xl flex flex-wrap lg:flex-nowrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">
        <img src="{{ asset('images/savo-logo.png') }}" class="" alt="Savo Logo" />
      </a>
      <div class="flex lg:hidden lg:order-2">
        <button data-collapse-toggle="navbar-cta" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-cta">
        <ul
          class="flex flex-col lg:items-center p-4 mt-4 border border-gray-100 rounded-lg bg-white lg:flex-row lg:space-x-5 xl:space-x-8 lg:mt-0 text-base font-semibold lg:border-0 lg:bg-transparent lg:drk:bg-gray-900">
          <li>
            <a href="/"
              class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent">{{ __('navbar.home') }}</a>
          </li>
          <li>
            <a href="{{ route('about') }}"
              class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent">{{ __('navbar.about-us') }}</a>
          </li>
          <li>
            <div class="group inline-block relative w-full">
              <button
                class="py-2 pl-3 pr-[8.px] text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent justify-between inline-flex items-center w-full">
                <span class="mr-1">{{ __('navbar.services') }}</span>
                <svg class="fill-current h-[22px] w-[22px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </button>
              <ul
                class="absolute bg-white rounded-md shadow-lg w-full lg:w-max hidden text-[#5A514E] group-hover:block animate-[show-transition_0.5s_ease-in-out]">
                <li class="">
                  <a class="rounded-t hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap hover:text-[#F5931E]"
                    href="{{ route('fbm') }}">FBM</a>
                </li>
                <li class="">
                  <a class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap hover:text-[#F5931E]" href="{{ route('fba') }}">FBA</a>
                </li>
                {{-- <li class="">
                  <a class="rounded-b hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap hover:text-[#F5931E]"
                    href="../../Savo-dashboard/public/dashboard.html">Savo Dashboard</a>
                </li> --}}
              </ul>
            </div>
          </li>
          <li>
            <a href="{{ route('booking') }}"
              class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent">{{ __('navbar.booking') }}</a>
          </li>
          <li>
            <a href="{{ route('contact-us') }}"
              class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent">{{ __('navbar.contact_us') }}</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100  lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent">{{ __('navbar.Blog') }}</a>
          </li>
          <li>
            <div class="group inline-block relative w-full">
                <button
                  class="py-2 pl-3 pr-[8.px] text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#F5931E] lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent justify-between inline-flex items-center w-full">
                  <span class="mr-1">{{ __('navbar.lan') }}</span>
                  <svg class="fill-current h-[22px] w-[22px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                  </svg>
                </button>
                <ul
                  class="absolute bg-white rounded-md shadow-lg w-full  hidden text-[#5A514E] group-hover:block animate-[show-transition_0.5s_ease-in-out]">
                  <li class="">
                    <a class="rounded-t hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap hover:text-[#F5931E]"
                    href="{{ route('language', ['locale' => 'en']) }}">EN</a>
                  </li>
                  <li class="">
                    <a class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap hover:text-[#F5931E]" href="{{ route('language', ['locale' => 'es']) }}">ES</a>
                  </li>

                </ul>
              </div>


            {{-- <select id="countries_multiple"
              class=" text-[#5A514E] border-none lg:hover:text-[#F5931E] py-2 pl-[13px]  cursor-pointer rounded-lg ring-0 block w-full lg:w-[85px] bg-transparent ">
              <option selected disabled>Lan</option>
              <option value="en"><a href="{{ route('language', ['locale' => 'en']) }}">EN</a></option>
              <option value="es"><a href="{{ route('language', ['locale' => 'es']) }}">ES</a></option>

            </select> --}}
          </li>
{{--          @if (!Auth::check())--}}
{{--          <li class="lg:hidden">--}}
{{--            <a href="{{ route('register') }}"--}}
{{--              class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent">{{ __('navbar.sign_out') }}</a>--}}
{{--          </li>--}}
{{--          <li class="lg:block hidden">--}}
{{--            <a href="{{ route('register') }}"--}}
{{--              class="inline-block text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] hover:text-[#F5931E] rounded text-base px-6 py-3 text-center mr-3 lg:mr-0"--}}
{{--              style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)">{{ __('navbar.sign_up_now') }}</a>--}}
{{--          </li>--}}
{{--          @else--}}
{{--          <li class="lg:hidden">--}}

{{--            <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                @csrf--}}

{{--                <a  href="{{ route('logout') }}"--}}
{{--                class="block py-2 pl-3 pr-4 text-[#5A514E] rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-blue-700 lg:p-0 lg:drk:hover:text-white lg:drk:hover:bg-transparent"   @click.prevent="$root.submit();">{{ __('navbar.sign_out') }}</a>--}}
{{--            </form>--}}
{{--        </li>--}}
{{--        <li class="lg:block hidden">--}}
{{--            <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                @csrf--}}

{{--                <a  href="{{ route('logout') }}"--}}
{{--                class="inline-block text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] hover:text-[#F5931E] rounded text-base px-6 py-3 text-center mr-3 lg:mr-0"--}}
{{--                style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)"   @click.prevent="$root.submit();">{{ __('navbar.sign_out') }}</a>--}}
{{--            </form>--}}


{{--        </li>--}}
{{--          @endif--}}


        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->
