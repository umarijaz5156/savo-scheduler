<x-web-layout>
  <!-- Hero Section -->
  <section class="flex items-center pt-[180px] lg:pt-[230px]">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div
        class=""
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-easing="linear"
      >
        <img class="mx-auto" src="{{ asset('images/fbm-globe.png') }}" alt="" />
      </div>
    </div>
  </section>
  <!-- Hero Section -->

  <!-- Steps 1-->
  <section class="pt-8 lg:pt-24">
    <div class="container mx-auto px-4 2xl:max-w-[1530px]">
      <div class="flex gap-y-7 lg:flex-row flex-col w-full">
        <div
          class="flex w-full 1 lg:w-6/12 gap-5 items-start"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="linear"
        >
          <div class="!w-[80px] lg:block hidden">
            <img class="w-[80px]" src="{{ asset('images/step-1.svg') }}" alt="" />
          </div>
          <div class="w-fit">
            <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold">
              {{ __('fbm.STEP1') }}
            </h1>
            <h2
              class="text-[#5A514E] mt-4 font-light text-2xl leading-9 sm:text-[32px]"
            >
             {{ __('fbm.Reception of your Products') }}
            </h2>
            <p
              class="text-[#5A514E] mt-2 text-sm sm:text-[16px] xl:text-[18px] text-justify leading-8"
            >
            {{ __('fbm.step1_description') }}
            </p>
          </div>
        </div>
        <div
          class="w-full lg:w-6/12 block h-[247px] lg:h-auto"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="linear"
        >
          <div
            class="w-full h-full bg-center opacity-[35%] steps bg-no-repeat bg-contain"
            style="background-image: url({{ asset('images/step-1-truck.svg') }})"
          ></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Steps 1-->

  <!-- Steps 2-->
  <section class="py-10 lg:py-0">
    <div class="container mx-auto relative px-4 2xl:max-w-[1530px]">
      <div class="absolute right-0 lg:block hidden w-6/12 top-0" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
        <img class="w-full" src="{{ asset('images/border-1.svg') }}" alt="" />
      </div>
      <div
        class="absolute right-0 lg:block hidden w-6/12 bottom-[-116px] xl:bottom-[-113px]"
        data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"
      >
        <img class="w-full" src="{{ asset('images/border-2.svg') }}" alt="" />
      </div>
      <div class="flex gap-y-7 relative lg:py-20 lg:flex-row flex-col w-full">
        <div class="flex w-full 1 lg:order-2 lg:w-6/12 gap-5 items-start">
          <div class="!w-[90px] lg:block hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
            <img class="w-[90px]" src="{{ asset('images/step-2-img.svg') }}" alt="" />
          </div>
          <div class="w-fit" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
            <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold">
                {{ __('fbm.Step2') }}
            </h1>
            <h2
              class="text-[#5A514E] mt-4 font-light text-2xl leading-9 sm:text-[32px]"
            >
              {{ __('fbm.Storage') }}
            </h2>
            <p
              class="text-[#5A514E] mt-2 text-sm sm:text-[16px] xl:text-[18px] text-justify leading-8"
            >
                {{ __('fbm.step2_description') }}
            </p>
          </div>
        </div>
        <div class="w-full lg:order-1 lg:w-6/12 block h-[247px] lg:h-auto">
          <div
            class="w-full h-full bg-center opacity-[35%] steps bg-no-repeat bg-contain"
            style="background-image: url({{ asset('images/step-2.svg') }})"
          ></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Steps 2-->

  <!-- Steps 3-->
  <section class="py-10 lg:py-0" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
    <div
      class="container w-full relative h-full mx-auto px-4 2xl:max-w-[1530px]"
    >
      <div class="flex gap-y-7 h-full lg:flex-row flex-col w-full">
        <div class="flex w-full h-full 1 lg:w-6/12 gap-5 items-start">
          <div class="!w-[80px] lg:block hidden">
            <img class="w-[80px]" src="{{ asset('images/step-1.svg') }}" alt="" />
          </div>
          <div class="w-fit relative">
            <div class="absolute left-0 lg:block hidden w-full bottom-0">
              <img class="w-full" src="{{ asset('images/border-3.svg') }}" alt="" />
            </div>
            <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold">
              {{ __('fbm.Step3') }}
            </h1>
            <h2
              class="text-[#5A514E] mt-4 font-light text-2xl leading-9 sm:text-[32px]"
            >
             {{ __('fbm.Preparations') }}
            </h2>
            <p
              class="text-[#5A514E] mt-2 text-sm sm:text-[16px] xl:text-[18px] text-justify lg:pb-[170px] xl:pb-[250px] 2xl:pb-[270px] leading-8"
            >
             {{ __('fbm.step3_description') }}
            </p>
          </div>
        </div>
        <div class="w-full lg:w-6/12 mt-5 block h-[350px] lg:h-auto">
          <div
            id="step-3"
            class="w-full h-full bg-center opacity-[35%] steps bg-no-repeat bg-contain"
            style="background-image: url({{ asset('images/step-3.svg') }})"
          ></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Steps 3-->

  <!-- Steps 4-->
  <section class="py-10 relative top-0 lg:py-0" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
    <img
      src="{{ asset('images/Oval.png') }}"
      class="absolute object-contain lg:block hidden !w-[400px] h-[650px] translate-x-[-25%] left-0"
      alt=""
    />
    <div class="container mx-auto relative px-4 2xl:max-w-[1530px]">
      <div class="flex gap-y-7 relative lg:flex-row flex-col w-full">
        <div class="flex w-full 1 lg:order-2 lg:w-6/12 gap-5 items-start">
          <div class="!w-[90px] lg:block hidden">
            <img class="w-[90px]" src="{{ asset('images/step-4.svg') }}" alt="" />
          </div>
          <div class="w-fit">
            <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold">
                {{ __('fbm.Step4') }}
            </h1>
            <h2
              class="text-[#5A514E] mt-4 font-light text-2xl leading-9 sm:text-[32px]"
            >
        {{ __('fbm.Shipping') }}
            </h2>
            <p
              class="text-[#5A514E] mt-2 text-sm sm:text-[16px] xl:text-[18px] text-justify leading-8"
            >
            {{ __('fbm.step4_description') }}
            </p>
          </div>
        </div>
        <div class="w-full lg:order-1 lg:w-6/12 block h-[340px] lg:h-auto">
          <div
            class="w-full h-full bg-center opacity-[35%] steps bg-no-repeat bg-contain"
            style="background-image: url({{ asset('images/step-4-img.svg') }})"
          ></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Steps 4-->

  <!-- FBM Cost -->
  <section class="my-10 sm:my-20">
    <div class="container mx-auto px-4 2xl:max-w-[1530px]">
      <div data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear">
        <h1
          class="text-4xl text-center sm:text-[50px] text-[#5A514E] font-bold"
        >
          {{ __('fbm.FBM Costs') }}
        </h1>
        <p
          class="text-[#5A514E] mt-4 text-sm sm:text-[16px] text-center xl:text-[18px] leading-8"
        >
          {{ __('fbm.The cost of our services start with the number of products shipped.') }}
        </p>
      </div>
      <div class="grid gap-x-5 mt-20 gap-y-8 md:grid-cols-2 lg:grid-cols-3">
        <div
          class="border px-4 pb-10 py-3 relative border-[#F5931E] bg-[#F4EFE6]"
          style="box-shadow: 0px 4px 50px 5px #f5931e33"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="linear"
        >
          <span
            href="#"
            class="bg-[#F5931E] absolute top-0 right-0 text-base xl:text-lg font-bold py-3 px-2 text-[#5A514E]"
            style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"
            >{{ __('fbm.ESSENTIAL') }}</span
          >
          <div class="flex items-start justify-start">
            <div class="">
              <img src="{{ asset('images/coin.svg') }}" class="w-full" alt="" />
            </div>
          </div>
          <div
            class="text-sm mt-[60px] text-[#5A514E] font-medium font-[poppins]"
          >
            {{ __('fbm.Quantity') }} 25-100 {{ __('fbm.Elements') }}
          </div>
          <div class="flex gap-2">
            <a
              href="#"
              class="text-[#5A514E] flex gap-2 items-baseline h-fit font-bold text-[40px]"
              ><span>$ </span>2.25
              <h6 class="text-sm h-fit text-[#5A514E] font-medium">/ {{ __('fbm.item') }}</h6>
            </a>
          </div>
          <div class="mt-8">
            <ul class="space-y-6">
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
            </ul>
          </div>
          <img
            class="absolute right-5 object-cover bottom-5 w-[120px]"
            src="{{ asset('images/group-1.png') }}"
            alt=""
          />
        </div>
        <div
          class="border px-4 pb-10 py-3 relative border-[#F5931E] bg-[#F4EFE6]"
          style="box-shadow: 0px 4px 50px 5px #f5931e33"
          data-aos-delay="300"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="linear"
        >
          <span
            href="#"
            class="bg-[#F5931E] absolute top-0 right-0 text-base xl:text-lg font-bold py-3 px-2 text-[#5A514E]"
            style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"
            >{{ __('fbm.INTERMEDIATE') }}</span
          >
          <div class="flex items-start justify-start">
            <div class="">
              <img src="{{ asset('images/coin.svg') }}" class="w-full" alt="" />
            </div>
          </div>
          <div
            class="text-sm mt-[60px] text-[#5A514E] font-medium font-[poppins]"
          >

            {{ __('fbm.Quantity') }} 25-100 {{ __('fbm.Elements') }}
          </div>
          <div class="flex gap-2">
            <a
              href="#"
              class="text-[#5A514E] flex gap-2 items-baseline h-fit font-bold text-[40px]"
              ><span>$ </span>2.25
              <h6 class="text-sm h-fit text-[#5A514E] font-medium">/ {{ __('fbm.item') }}</h6>
            </a>
          </div>
          <div class="mt-8">
            <ul class="space-y-6">
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
            </ul>
          </div>
          <img
            class="absolute right-5 bottom-5"
            src="{{ asset('images/group-2.svg') }}"
            alt=""
          />
        </div>
        <div
          class="border px-4 pb-10 py-3 relative border-[#F5931E] bg-[#F4EFE6]"
          style="box-shadow: 0px 4px 50px 5px #f5931e33"
          data-aos-delay="600"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="linear"
        >
          <span
            href="#"
            class="bg-[#F5931E] absolute top-0 right-0 text-base xl:text-lg font-bold py-3 px-2 text-[#5A514E]"
            style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"
            >{{ __('fbm.PROFESSIONAL') }}</span
          >
          <div class="flex items-start justify-start">
            <div class="">
              <img src="{{ asset('images/coin.svg') }}" class="w-full" alt="" />
            </div>
          </div>
          <div
            class="text-sm mt-[60px] text-[#5A514E] font-medium font-[poppins]"
          >
          {{ __('fbm.Quantity') }} 25-100 {{ __('fbm.Elements') }}

          </div>
          <div class="flex gap-2">
            <a
              href="#"
              class="text-[#5A514E] flex gap-2 items-baseline h-fit font-bold text-[40px]"
              ><span>$ </span>2.25
              <h6 class="text-sm h-fit text-[#5A514E] font-medium">/ {{ __('fbm.item') }}</h6>
            </a>
          </div>
          <div class="mt-8">
            <ul class="space-y-6">
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
              <li class="flex items-center gap-3">
                <i class="fa-regular text-[#F5931E] text-[22px] fa-check"></i>
                <p class="text-sm text-[#9C9D95]">{{ __('fbm.Medium Box') }} $3</p>
              </li>
            </ul>
          </div>
          <img
            class="absolute right-5 bottom-5"
            src="{{ asset('images/group-3.svg') }}"
            alt=""
          />
        </div>
      </div>
    </div>
  </section>
  <!-- FBM Cost -->

  <!-- Second Last Cont -->
  <section class="my-10"
  data-aos="fade-right"
  data-aos-duration="1000"
  data-aos-easing="linear">
    <div class="container mx-auto px-4 2xl:max-w-[1530px]">
      <div
        class="border px-4 py-8 relative border-[#F5931E] bg-[#F4EFE6]"
        style="box-shadow: 0px 4px 50px 5px #f5931e33"
      >
        <div
          class="flex sm:flex-row flex-col gap-y-10 px-2 sm:px-[33px] md:px-[75px] lg:px-[150px] xl:px-[200px] 2xl:px-[270px] w-full"
        >
          <div class="w-full">
            <h1 class="text-[#F5931E] font-bold text-4xl">{{ __('fbm.FBM STORAGE') }}</h1>
            <p class="text-sm font-medium text-[#5A514E]">
              {{ __('fbm.Prices for storage of your FBM Items') }}
            </p>
            <div class="mt-[60px] sm:mt-[100px]">
              <p class="font-light text-[#5A514E]">{{ __('fbm.Per Pallet') }}</p>
              <div class="flex gap-2">
                <a
                  href="#"
                  class="text-[#F5931E] flex gap-2 items-baseline h-fit font-bold text-[40px]"
                  ><span>$ </span>2.25
                  <h6 class="text-sm h-fit text-[#5A514E] font-normal">
                    / {{ __('fbm.month') }}
                  </h6>
                </a>
              </div>
              <p class="text-sm h-fit text-[#5A514E] font-normal">
                {{ __('fbm.STORAGE_WILL_BE_DEDUCTED') }}
              </p>
            </div>
          </div>
          <div class="flex justify-center items-center">
            <img src="{{ asset('images/second-last-cont.svg') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Second Last Cont -->

  <!--Last Cont -->
  <section class="" data-aos="fade-left"
  data-aos-duration="1000"
  data-aos-easing="linear">
    <div class="container mx-auto relative px-4 2xl:max-w-[1530px]">
      <div
        class="border px-10 py-8 relative border-[#F5931E] bg-[#5A514E]"
        style="box-shadow: 0px 4px 50px 5px #f5931e33"
      >
        <div
          class="bg-[#F5931E] absolute top-0 right-0 text-[30px] xl:text-[40px] font-bold py-3 px-2 text-[#F5EFE7]"
          style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"
        >
          {{ __('fbm.ESSENTIAL') }}
        </div>
        <div
          class="flex justify-between flex-wrap gap-y-3 max-w-[650px] mt-[117px] items-center"
        >
          <div>
            <div class="flex gap-2">
              <a
                href="#"
                class="text-[#F5931E] flex gap-2 items-baseline h-fit font-bold text-[50px]"
                ><span>$ </span>2.25
                <h6 class="text-sm h-fit text-[white] font-normal">
                  / {{ __('fbm.month') }}
                </h6></a
              >
            </div>
            <h6 class="sm:text-lg h-fit text-[white] font-normal">
              {{ __('fbm.XL Storage') }}
            </h6>
          </div>
          <div class="h-fit border-b pb-1 border-[#877C76]">
            <div class="flex gap-2 items-center">
              <i class="fa-solid text-[#F5931E] fa-square"></i>
              <h6 class="sm:text-lg h-fit text-[white] font-normal">
                48*40 {{ __('fbm.One Pallet') }}
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Last Cont -->

</x-web-layout>
