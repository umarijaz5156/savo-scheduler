  <!-- footer -->
  <section class="pt-8 lg:pt-24 pb-3">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class="flex justify-center items-center border-t-2 border-[#5a514e36] pt-[40px] gap-8">
        <div
          class="group hover:shadow-2xl transition-all duration-300 ease-in bg-[#F5EFE7] hover:text-[white] cursor-pointer text-[23px] mr-[5px] w-[46px] h-[46px] rounded-3xl text-center leading-[50px] flex justify-center items-center hover:border-[#0D7BFC]"
          style="box-shadow: 0px 1.50859px 7.54294px rgba(0, 0, 0, 0.1);">
          <img class="" src="{{ asset('images/facebook.png') }}" alt="">
        </div>
        <div
          class="group hover:shadow-2xl transition-all duration-300 ease-in bg-[#F5EFE7]  hover:text-[white] cursor-pointer text-[23px] mr-[5px] w-[46px] h-[46px] rounded-3xl text-center leading-[50px] flex justify-center items-center hover:border-[#0D7BFC]"
          style="box-shadow: 0px 1.50859px 7.54294px rgba(0, 0, 0, 0.1);">
          <img class="" src="{{ asset('images/insta.png') }}" alt="">
        </div>
        <div
          class="group hover:shadow-2xl transition-all duration-300 ease-in bg-[#F5EFE7] hover:text-[white] cursor-pointer text-[23px] mr-[5px] w-[46px] h-[46px] rounded-3xl text-center leading-[50px] flex justify-center items-center hover:border-[#0D7BFC]"
          style="box-shadow: 0px 1.50859px 7.54294px rgba(0, 0, 0, 0.1);">
          <img src="{{ asset('images/linked-in.png') }}" alt="">
        </div>
      </div>
      <div class="flex justify-center items-center flex-wrap gap-y-6 gap-x-[60px] mt-[24px]">
        <a href="{{ route('about') }}" class="text-[#5A514E] text-base font-medium ">{{ __('homepage.about_us') }}</a>
        <a href="#" class="text-[#5A514E] text-base font-medium ">{{ __('homepage.Conditions') }}</a>
        <a href="{{ route('contact-us') }}" class="text-[#5A514E] text-base font-medium ">{{ __('navbar.contact_us') }}</a>
      </div>
      <div class="text-center mt-[41px]">
        <p class="text-[#5A514E] text-[16px] font-medium ">{{ __('homepage.all_rights_reserved') }}@savoprepcenter.com</p>
      </div>
    </div>
  </section>
  <!-- footer -->
