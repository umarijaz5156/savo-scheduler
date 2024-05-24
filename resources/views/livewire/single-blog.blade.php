<div>
    <!-- Hero Section -->
    <section>
        <div
          class="container mx-auto mt-[120px] lg:mt-[210px] 2xl:max-w-[1530px] px-4"
        >
          <div class="flex md:flex-row flex-col-reverse gap-10 w-full">
            <div class="w-full md:w-5/12">
              <h1 class="text-4xl hero-head sm:text-5xl" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">{{ $blog->post_title }}</h1>
              {{-- <h2 class="text-4xl hero-head sm:text-5xl text-[#424242] mt-3" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000" data-aos-easing="linear">
                I think so,this is it
              </h2> --}}
              <div class="text-base hero-head leading-[36px] mt-4" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1000" data-aos-easing="linear">
               {!! $blog->post_content !!}
              </div>
              <h1 class="text-3xl hero-head mt-4" data-aos="fade-right" data-aos-delay="1800" data-aos-duration="1000" data-aos-easing="linear">Related Keywords</h1>
            </div>
            <div class="w-full md:w-7/12" data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="linear">
              <div
                class="md:h-full h-[413px] bg-cover bg-center hero-img bg-no-repeat w-full"
                style="background-image: url({{ $blog->guid }})"
              ></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero Section -->

</div>
