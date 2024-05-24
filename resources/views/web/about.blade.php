<x-web-layout>

      <!-- Hero Section -->
      <section class="flex items-center pt-[180px] lg:pt-[230px]">
        <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
          <div class="" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear">
              <img class="mx-auto" src="{{ asset('images/about-us-globe.png') }}" alt="">
          </div>
        </div>
      </section>
      <!-- Hero Section -->


      <!-- text -->
      <section class="pt-8 lg:pt-24">
        <div class="container mx-auto px-4 2xl:max-w-[1530px] text-[#5A514E]" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
          <p class="text-[14px] !leading-[32px] md:text-[18px]" >
            <span class="text-[24px] font-medium md:text-[32px]">
             {{ __('about.title') }}
            </span>
            {{ __('about.description1') }}
          </p>
          <div class="grid lg:grid-cols-2">
            <div class="mt-6">
              <p class="text-[14px] !leading-[32px] md:text-[18px]">
                {{ __('about.description2') }}
              </p>
            </div>
            <div
              style="background-image: url({{ asset('images/About-Us.png') }})"
              class="bg-no-repeat lg:h-auto h-[446px] bg-center bg-contain"
            ></div>
          </div>
        </div>
      </section>
      <!-- text -->

      <!-- FAQ -->
      <section class="mt-10 sm:mt-20">
        <div class="container mx-auto px-4 2xl:max-w-[1530px]">
          <div data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
            <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold">
             {{ __('Frequently asked questions') }}
            </h1>
          </div>
          <div data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
            <div class="mt-[40px]" x-data="{selected:1}">
              <ul class="shadow-box max-w-[1050px]">
                <li class="relative w-full">
                  <button
                    type="button"
                    class="w-full px-4 sm:px-8 bg-[#5A514E0F] py-5 text-left bg-opacity-10"
                    @click="selected !== 1 ? selected = 1 : selected = null"
                  >
                    <div class="flex items-center justify-between">
                      <div class="flex items-center gap-3">
                        <img src="./images/home-add.svg" alt="" /><span
                          class="text-sm sm:text-base text-[#5A514E] font-normal"
                          >{{ __('about.faq_question1') }}</span
                        >
                      </div>
                      <i
                        class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#5A514E]"
                        x-bind:class="selected == 1 ? 'rotate-180 ' : ''"
                      ></i>
                    </div>
                  </button>
                  <div
                    class="relative overflow-auto bg-[#5A514E0F] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in"
                    x-bind:class="selected == 1 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                    id="style-2"
                  >
                    <div class="p-6">
                      <div>
                        <p
                          class="!leading-10 text-[#5A514E] text-sm sm:text-base"
                        >
                        {{ __('about.faq_answer1') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="relative w-full">
                  <button
                    type="button"
                    class="w-full px-4 sm:px-8 bg-[#5A514E0F] py-5 text-left bg-opacity-10"
                    @click="selected !== 2 ? selected = 2 : selected = null"
                  >
                    <div class="flex items-center justify-between">
                      <div class="flex items-center gap-3">
                        <img src="./images/home-add.svg" alt="" /><span
                          class="text-sm sm:text-base text-[#5A514E] font-normal"
                          >{{ __('about.faq_question2') }}</span
                        >
                      </div>
                      <i
                        class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#5A514E]"
                        x-bind:class="selected == 2 ? 'rotate-180 ' : ''"
                      ></i>
                    </div>
                  </button>
                  <div
                    class="relative overflow-auto bg-[#5A514E0F] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in"
                    x-bind:class="selected == 2 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                    id="style-2"
                  >
                    <div class="p-6">
                      <div>
                        <p
                          class="!leading-10 text-[#5A514E] text-sm sm:text-base"
                        >
                        {{ __('about.faq_answer2') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="relative w-full">
                  <button
                    type="button"
                    class="w-full px-4 sm:px-8 bg-[#5A514E0F] py-5 text-left bg-opacity-10"
                    @click="selected !== 3 ? selected = 3 : selected = null"
                  >
                    <div class="flex items-center justify-between">
                      <div class="flex items-center gap-3">
                      <span
                          class="text-sm sm:text-base text-[#5A514E] font-normal"
                          >{{ __('about.faq_question3') }}</span
                        >
                      </div>
                      <i
                        class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#5A514E]"
                        x-bind:class="selected == 3 ? 'rotate-180 ' : ''"
                      ></i>
                    </div>
                  </button>
                  <div
                    class="relative overflow-auto bg-[#5A514E0F] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in"
                    x-bind:class="selected == 3 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                    id="style-2"
                  >
                    <div class="p-6">
                      <div>
                        <p
                          class="!leading-10 text-[#5A514E] text-sm sm:text-base"
                        >
                            {{ __('about.faq_answer3') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="relative w-full">
                  <button
                    type="button"
                    class="w-full px-4 sm:px-8 bg-[#5A514E0F] py-5 text-left bg-opacity-10"
                    @click="selected !== 5 ? selected = 5 : selected = null"
                  >
                    <div class="flex items-center justify-between">
                      <div class="flex items-center gap-3">
                        <img src="./images/home-add.svg" alt="" /><span
                          class="text-sm sm:text-base text-[#5A514E] font-normal"
                          >{{ __('about.faq_question4') }}</span
                        >
                      </div>
                      <i
                        class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#5A514E]"
                        x-bind:class="selected == 5 ? 'rotate-180 ' : ''"
                      ></i>
                    </div>
                  </button>
                  <div
                    class="relative overflow-auto bg-[#5A514E0F] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in"
                    x-bind:class="selected == 5 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                    id="style-2"
                  >
                    <div class="p-6">
                      <div>
                        <p
                          class="!leading-10 text-[#5A514E] text-sm sm:text-base"
                        >
                        {{ __('about.faq_answer4') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="relative w-full">
                  <button
                    type="button"
                    class="w-full px-4 sm:px-8 bg-[#5A514E0F] py-5 text-left bg-opacity-10"
                    @click="selected !== 6 ? selected = 6 : selected = null"
                  >
                    <div class="flex items-center justify-between">
                      <div class="flex items-center gap-3">
                        <img src="./images/home-add.svg" alt="" /><span
                          class="text-sm sm:text-base text-[#5A514E] font-normal"
                          >{{ __('about.faq_question5') }}</span
                        >
                      </div>
                      <i
                        class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#5A514E]"
                        x-bind:class="selected == 6 ? 'rotate-180 ' : ''"
                      ></i>
                    </div>
                  </button>
                  <div
                    class="relative overflow-auto bg-[#5A514E0F] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in"
                    x-bind:class="selected == 6 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                    id="style-2"
                  >
                    <div class="p-6">
                      <div>
                        <p
                          class="!leading-10 text-[#5A514E] text-sm sm:text-base"
                        >
                        {{ __('about.faq_answer5') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="relative w-full">
                  <button
                    type="button"
                    class="w-full px-4 sm:px-8 bg-[#5A514E0F] py-5 text-left bg-opacity-10"
                    @click="selected !== 7 ? selected = 7 : selected = null"
                  >
                    <div class="flex items-center justify-between">
                      <div class="flex items-center gap-3">
                        <img src="./images/home-add.svg" alt="" /><span
                          class="text-sm sm:text-base text-[#5A514E] font-normal"
                          >{{ __('about.faq_question6') }}</span
                        >
                      </div>
                      <i
                        class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#5A514E]"
                        x-bind:class="selected == 7 ? 'rotate-180 ' : ''"
                      ></i>
                    </div>
                  </button>
                  <div
                    class="relative overflow-auto bg-[#5A514E0F] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in"
                    x-bind:class="selected == 7 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                    id="style-2"
                  >
                    <div class="p-6">
                      <div>
                        <p
                          class="!leading-10 text-[#5A514E] text-sm sm:text-base"
                        >
                        {{ __('about.faq_answer6') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>


</x-web-layout>
