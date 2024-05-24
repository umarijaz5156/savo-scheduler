<x-web-layout>


     <!-- Hero Section -->
     <section class="flex items-center pt-[180px] lg:pt-[230px]">
        <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
          <div class="" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear">
              <img class="mx-auto" src="{{ asset('images/FBA-img.png') }}" alt="">
          </div>
        </div>
      </section>
      <!-- Hero Section -->

      <!-- icon Box Section data-sal-delay="300" -->
      <section class="pt-8 lg:pt-24" >
        <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full space-y-12 lg:space-y-0">
          <div class="grid lg:grid-cols-2 gap-10 relative place-items-center">
              <div
             data-aos="fade-up"
             data-aos-duration="1000" data-aos-easing="linear"
              class="md:pl-24 relative">
                  <img class="absolute right-0 md:left-0 top-0 w-20" src="{{ asset('images/fab-step-1.png') }}" alt="">
                  <div class="text-[#5A514E] space-y-4">
                      <h1 class="text-4xl font-bold">{{ __('fba.step1') }}</h1>
                      <h4 class="text-3xl font-normal">{{ __('fba.Reception of your Products') }}</h4>
                      <p class="">{{ __('fba.step1_description') }}</p>
                  </div>
              </div>
              <div
             data-aos="fade-up"
             data-aos-duration="1000" data-aos-easing="linear"
              class="hidden lg:block"
              >
                  <img class="mx-auto" src="{{ asset('images/fab-step-1-img.png') }}" alt="">
              </div>
          </div>
          <div class="grid lg:grid-cols-2 gap-10 lg:py-28 xl:py-48 relative place-items-center">
              <img data-aos="fade-up"data-aos-duration="1000" data-aos-easing="linear" class="absolute right-0 -top-2.5 w-[550px] xl:w-auto hidden lg:block" src="{{ asset('images/step-1-line.png') }}" alt="">
              <img data-aos="fade-up"data-aos-duration="1000" data-aos-easing="linear" class="absolute right-0 -bottom-10 w-[550px] xl:w-auto hidden lg:block" src="{{ asset('images/step-2-line.png') }}" alt="">
              <div
             data-aos="fade-up"
             data-aos-duration="1000" data-aos-easing="linear"
              class="hidden lg:block"
              >
                  <img class="mx-auto" src="{{ asset('images/fab-step-2-img.png') }}" alt="">
              </div>
              <div
             data-aos="fade-up"
             data-aos-duration="1000" data-aos-easing="linear"
              class="md:pl-24 relative">
                  <img class="absolute right-0 md:left-0 top-0 w-20" src="{{ asset('images/fab-step-2.png') }}" alt="">
                  <div class="text-[#5A514E] space-y-4">
                      <h1 class="text-4xl font-bold">{{ __('fba.step2') }}</h1>
                      <h4 class="text-3xl font-normal">{{ __('fba.Preparation Process') }}</h4>
                      <p class="">{{ __('fba.step2_description') }}</p>
                  </div>
              </div>
          </div>
          <div class="grid lg:grid-cols-2 gap-10 relative place-items-center lg:pt-12">
              <div
             data-aos="fade-up"
             data-aos-duration="1000" data-aos-easing="linear"
              class="md:pl-24 relative">
                  <img class="absolute right-0 md:left-0 top-0 w-20" src="{{ asset('images/fab-step-3.png') }}" alt="">
                  <div class="text-[#5A514E] space-y-4">
                      <h1 class="text-4xl font-bold">{{ __('fba.step3') }}</h1>
                      <h4 class="text-3xl font-normal">{{ __('fba.Shipping') }}</h4>
                      <p class="">{{ __('fba.step2_description') }}</p>
                  </div>
              </div>
              <div
             data-aos="fade-up"
             data-aos-duration="1000" data-aos-easing="linear"
              class="hidden lg:block"
              >
                  <img class="mx-auto" src="{{ asset('images/fab-step-3-img.png') }}" alt="">
              </div>
          </div>
        </div>
      </section>
      <!-- icon Box Section -->

      <!--  Costs -->
      <section class="pt-8 lg:pt-24">
        <div class="mx-auto px-4 sm:px-12 h-full">
          <div class="lg:text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear">
            <h1 class="text-4xl sm:leading-[70px] font-extrabold text-[#5A514E]" >
              {{ __('fba.Costs') }}
            </h1>
            <p class="text-[#5A514E]">{{ __('fba.The cost of our services start with the number of products shipped') }}</p>
          </div>
         <div class="mt-14 space-y-4">
              <div class="bg-[#5A514E] border border-[#F5931E] pt-20 px-4 pb-6 lg:p-4 lg:h-64 flex justify-center items-center relative" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" data-aos="fade-up"
              data-aos-duration="1000" data-aos-easing="linear">
                  <div class="bg-[#F5931E] absolute lg:w-72 xl:w-[380px] lg:h-24 right-0 top-0 flex justify-end items-end p-4">
                      <h1 class="text-white font-bold text-4xl ">{{ __('fba.Essential') }}</h1>
                  </div>
                  <div class="grid sm:grid-cols-2  lg:grid-cols-3 gap-5 w-full h-full">
                      <div class="flex justify-start items-end order-1 lg:order-1">
                          <div class="">
                              <h1 class="text-[#F5931E] text-4xl font-bold">$ 1.25 <span class="text-white font-normal text-lg">/{{ __('fba.item') }}</span></h1>
                              <h4 class="text-white text-lg">{{ __('fba.Elements Standard size') }}</h4>
                          </div>
                      </div>
                      <div class="flex justify-center items-center order-3 lg:order-2">
                          <div class="space-y-4 w-full">
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="flex sm:justify-center items-center order-2 lg:order-3 row-span-2 lg:row-span-1">
                          <p class="text-white text-lg font-semibold">{{ __('fba.Quantity') }} 25 – 100</p>
                      </div>
                  </div>
              </div>
              <div class="bg-[#5A514E] border border-[#F5931E] pt-20 px-4 pb-6 lg:p-4 lg:h-64 flex justify-center items-center relative" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" data-aos="fade-up"
              data-aos-duration="1000" data-aos-easing="linear">
                  <div class="bg-[#F5931E] absolute lg:w-72 xl:w-[380px] lg:h-24 right-0 top-0 flex justify-end items-end p-4">
                      <h1 class="text-white font-bold text-4xl ">{{ __('fba.Intermediate') }}</h1>
                  </div>
                  <div class="grid sm:grid-cols-2  lg:grid-cols-3 gap-5 w-full h-full">
                      <div class="flex justify-start items-end order-1 lg:order-1">
                          <div class="">
                              <h1 class="text-[#F5931E] text-4xl font-bold">$ 1.10 <span class="text-white font-normal text-lg">/{{ __('fba.item') }}</span></h1>
                              <h4 class="text-white text-lg">{{ __('fba.Elements Standard size') }}</h4>
                          </div>
                      </div>
                      <div class="flex justify-center items-center order-3 lg:order-2">
                          <div class="space-y-4 w-full">
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="flex sm:justify-center items-center order-2 lg:order-3 row-span-2 lg:row-span-1">
                          <p class="text-white text-lg font-semibold">{{ __('fba.Quantity') }} 101 – 300</p>
                      </div>
                  </div>
              </div>
               <div class="bg-[#5A514E] border border-[#F5931E] pt-20 px-4 pb-6 lg:p-4 lg:h-64 flex justify-center items-center relative" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" data-aos="fade-up"
               data-aos-duration="1000" data-aos-easing="linear">
                  <div class="bg-[#F5931E] absolute lg:w-72 xl:w-[380px] lg:h-24 right-0 top-0 flex justify-end items-end p-4">
                      <h1 class="text-white font-bold text-4xl ">{{ __('fba.Ultimate') }}</h1>
                  </div>
                  <div class="grid sm:grid-cols-2  lg:grid-cols-3 gap-5 w-full h-full">
                      <div class="flex justify-start items-end order-1 lg:order-1">
                          <div class="">
                              <h1 class="text-[#F5931E] text-4xl font-bold">$ 1 <span class="text-white font-normal text-lg">/{{ __('fba.item') }}</span></h1>
                              <h4 class="text-white text-lg">{{ __('fba.Elements Standard size') }}</h4>
                          </div>
                      </div>
                      <div class="flex justify-center items-center order-3 lg:order-2">
                          <div class="space-y-4 w-full">
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                              <div class="flex md:justify-between items-center gap-3">
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                                  <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                      <div class="bg-[#F5931E] w-2.5 h-2.5">
                                      </div>
                                      <p class="text-white text-sm">{{ __('fba.Product inspection') }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="flex sm:justify-center items-center order-2 lg:order-3 row-span-2 lg:row-span-1">
                          <p class="text-white text-lg font-semibold">{{ __('fba.Quantity') }} 301 – 600</p>
                      </div>
                  </div>
              </div>
         </div>
        </div>
      </section>
      <!--  Costs -->


      <section class="pt-8 lg:pt-24">
        <div class="container 2xl:max-w-screen-2xl mx-auto px-4">
          <div class="max-w-6xl mx-auto px-14 py-24 text-center relative border border-[#F5931E] " style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2);" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear">
            <img src="{{ asset('images/pin-red.png') }}" class="absolute -top-6 -right-6" alt="">
            <img class="mx-auto " src="{{ asset('images/Isolation_Mode.png') }}" alt="">
            <h1 class="text-[#F5931E] text-4xl font-bold mt-12">{{ __('fba.Basic storage fee will be charged after 1st month') }}</h1>
          </div>
        </div>
      </section>

      <!--  Additional -->
      <section class="pt-8 lg:pt-24">
        <div class="mx-auto px-4 sm:px-12 h-full">
          <div class="lg:text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear"  >
            <h1 class="text-4xl sm:leading-[70px] font-extrabold text-[#5A514E]" data-sal="zoom-in">
              {{ __('fba.Additional') }}
            </h1>
            <p class="text-[#5A514E]">{{ __('fba.Basic storage fee will be charged after 1st month') }}</p>
          </div>
         <div class="mt-14 space-y-4">
            <div class="border border-[#F5931E] pt-20 px-4 pb-6 lg:p-4 lg:h-64 flex justify-center items-center relative" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 w-full h-full">
                    <div class="flex justify-start items-start order-1 lg:order-1">
                        <div class="">
                          <img src="{{ asset('images/gray-coin-bg.png') }}" class="mb-14" alt="">
                          <p class="text-base text-[#F5931E] font-semibold mb-2 uppercase">{{ __('fba.BOXES') }}</p>
                          <h1 class="text-[#F5931E] text-4xl font-bold uppercase">{{ __('fba.COST PER BOX') }}</h1>
                        </div>
                    </div>
                    <div class="flex justify-center items-center order-3 lg:order-2">
                        <div class="space-y-4 w-full">
                            <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                                <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                    <div class="bg-[#F5931E] w-2.5 h-2.5">
                                    </div>
                                    <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                                </div>
                                <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                    <div class="bg-[#F5931E] w-2.5 h-2.5">
                                    </div>
                                    <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                                </div>
                            </div>
                            <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                                <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                    <div class="bg-[#F5931E] w-2.5 h-2.5">
                                    </div>
                                    <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                                </div>
                                <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                    <div class="bg-[#F5931E] w-2.5 h-2.5">
                                    </div>
                                    <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                                </div>
                            </div>
                            <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                                <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                    <div class="bg-[#F5931E] w-2.5 h-2.5">
                                    </div>
                                    <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                                </div>
                                <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                    <div class="bg-[#F5931E] w-2.5 h-2.5">
                                    </div>
                                    <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex sm:justify-center items-end flex-col order-2 lg:order-3 row-span-2 lg:row-span-1">
                        <p class="text-[#5A514E] text-sm font-semibold"><strong>{{ __('fba.NOTE') }}: {{  __('fba.The cost of our services start with the number of products shipped') }}</strong> </p>
                        <img class="object-cove w-[120px] mt-9" src="{{ asset('images/group-1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="border border-[#F5931E] pt-20 px-4 pb-6 lg:p-4 lg:h-64 flex justify-center items-center relative" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 w-full h-full">
                  <div class="flex justify-start items-start order-1 lg:order-1">
                      <div class="">
                        <img src="{{ asset('images/gray-coin-bg.png') }}" class="mb-14" alt="">
                        <p class="text-base text-[#F5931E] font-semibold mb-2 uppercase">{{ __('fba.Additional') }} {{ __('fba.FEATURES') }}</p>
                        <h1 class="text-[#F5931E] text-4xl font-bold uppercase">{{ __('fba.Additional') }}</h1>
                      </div>
                  </div>
                  <div class="flex justify-center items-center order-3 lg:order-2">
                      <div class="space-y-4 w-full">
                          <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                          </div>
                          <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                          </div>
                          <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="flex sm:justify-center items-end flex-col order-2 lg:order-3 row-span-2 lg:row-span-1">
                      <img class="object-cove w-[120px] mt-9" src="{{ asset('images/group-2.svg') }}" alt="">
                  </div>
              </div>
            </div>
            <div class="border border-[#F5931E] pt-20 px-4 pb-6 lg:p-4 lg:h-64 flex justify-center items-center relative" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 w-full h-full">
                  <div class="flex justify-start items-start order-1 lg:order-1">
                      <div class="">
                        <img src="{{ asset('images/gray-coin-bg.png') }}" class="mb-14" alt="">
                        <p class="text-base text-[#F5931E] font-semibold mb-2 uppercase">{{ __('fba.TO') }} {{ __('fba.CONSULT') }}</p>
                        <h1 class="text-[#F5931E] text-4xl font-bold uppercase">{{ __('fba.CONSULT') }}</h1>
                      </div>
                  </div>
                  <div class="flex justify-center items-center order-3 lg:order-2">
                      <div class="space-y-4 w-full">
                          <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                          </div>
                          <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                          </div>
                          <div class="flex md:justify-between lg:justify-start items-center gap-6 lg:gap-x-20 gap-y-3">
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                              <div class="flex justify-start items-center gap-2 border-b border-[#877C76] pb-1">
                                  <div class="bg-[#F5931E] w-2.5 h-2.5">
                                  </div>
                                  <p class="text-[#5A514E] text-sm">{{ __('fba.Product inspection') }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="flex sm:justify-center items-end flex-col order-2 lg:order-3 row-span-2 lg:row-span-1">
                      <img class="object-cove w-[120px] mt-9" src="{{ asset('images/group-3.svg') }}" alt="">
                  </div>
              </div>
            </div>
         </div>
        </div>
      </section>
      <!--  Additional -->

</x-web-layout>
