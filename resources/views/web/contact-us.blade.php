<x-web-layout>
<!-- Hero Section -->

<section class="flex items-center pt-[180px] lg:pt-[230px]">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
      <div class=""  data-aos="zoom-in"
      data-aos-duration="1000"
      data-aos-easing="linear">
        <img class="mx-auto" src="{{ asset('images/booking-globe.png') }}" alt="" />
      </div>
    </div>
  </section>
  <!-- Hero Section -->

  <!-- text -->
  <section class="pt-8 lg:pt-24">
    <div class="container mx-auto px-4 2xl:max-w-[1530px]">
      <div >
        <div
        data-aos="fade-right"
        data-aos-duration="1000"
        data-aos-easing="linear">
          <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold" >
            {{ __('contact.Welcome_To_The_Savo_Prep_Team') }}
          </h1>
          <p class="mt-3 text-[#5A514E] text-sm sm:text-base leading-10">
           {{ __('contact.description1') }} <br />
            {{ __('contact.description2') }}.
          </p>
        </div>
        <div
          class="grid mt-10 gap-5 lg:gap-[33px] sm:grid-cols-2 md:grid-cols-4"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="linear"
        >
          <div
            style="box-shadow: 0px 4px 50px 5px #f5931e33"
            class="border-2 flex justify-center items-center relative h-[150px] bg-[#5A514E] border-[#F5931E]"
          >
            <div
              class="bg-[#F5931E] mx-auto text-center position absolute top-0 translate-y-[-50%] w-fit px-3 h-fit pt-2 pb-1.5 rounded-full"
            >
              <i
                class="fa-regular text-[#5A514E] text-[22px] fa-location-dot"
              ></i>
            </div>
            <p class="text-[#F4EEE6] text-[14px] text-center px-5">
              7043 Girls School Ave, Indianapolis, IN 46241
            </p>
          </div>
          <div
            style="box-shadow: 0px 4px 50px 5px #f5931e33"
            class="border-2 flex justify-center items-center relative h-[150px] bg-[#5A514E] border-[#F5931E]"
          >
            <div
              class="bg-[#F5931E] mx-auto text-center position absolute top-0 translate-y-[-50%] w-fit px-3 h-fit pt-2 pb-1.5 rounded-full"
            >
              <i class="fa-solid text-[#5A514E] text-[18px] fa-phone"></i>
            </div>
            <p class="text-[#F4EEE6] text-[14px] text-center px-5">
              +1 317-516-9311
            </p>
          </div>
          <div
            style="box-shadow: 0px 4px 50px 5px #f5931e33"
            class="border-2 flex justify-center items-center relative h-[150px] bg-[#5A514E] border-[#F5931E]"
          >
            <div
              class="bg-[#F5931E] mx-auto text-center position absolute top-0 translate-y-[-50%] w-fit px-[10px] h-fit pt-2 pb-1.5 rounded-full"
            >
              <i
                class="fa-regular text-[#5A514E] text-[20px] fa-envelope"
              ></i>
            </div>
            <p class="text-[#F4EEE6] text-[14px] text-center px-5">
              Sandro@savoprep.com
            </p>
          </div>
          <div
            style="box-shadow: 0px 4px 50px 5px #f5931e33"
            class="border-2 flex justify-center items-center relative h-[150px] bg-[#5A514E] border-[#F5931E]"
          >
            <div
              class="bg-[#F5931E] mx-auto text-center position absolute top-0 translate-y-[-50%] w-fit px-[10px] h-fit pt-2 pb-1.5 rounded-full"
            >
              <i class="fa-regular text-[#5A514E] text-[20px] fa-clock"></i>
            </div>
            <p class="text-[#F4EEE6] text-[14px] text-center px-5">
              Monday – Friday 8:00 AM 5:00 PM
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- text -->

  <!-- Form-->
  <section
    class="py-20 bg-center bg-no-repeat bg-cover"
    style="background-image: url({{ asset('images/form-bg.png') }})"
  >
    <div class="container mx-auto px-4 2xl:max-w-[1530px]">
      <h1 class="text-3xl sm:text-[40px] text-[#5A514E] font-bold"  data-aos="fade-right"
      data-aos-duration="1000"
      data-aos-easing="linear">
        {{ __('contact.Fill_the_form_given_below') }}
      </h1>
      @if(session()->has('success'))
        <div class="p-4 mb-4 text-sm text-white rounded-lg bg-[#F5931E]" role="alert">
            <span class="font-medium">{{ __('contact.Message_sent_successfully') }}</span>
        </div>
      @endif
      <div class="flex w-full">
        <div class="w-full lg:w-6/12"  data-aos="fade-right"
        data-aos-duration="1000"
        data-aos-easing="linear">
          <div class="mt-10">
            <form action="{{ route('contact') }}" method="POST">
              @csrf
              <div class="grid sm:grid-cols-2 gap-x-4 gap-y-6">
                <div>
                  <input
                    name="name"
                    value="{{ old('name') }}"
                    required
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.Full_Name') }}"
                  />
                </div>
                <div>
                  <input
                    name="company"
                    value="{{ old('company') }}"
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.Company_Name') }}"
                  />
                </div>
                <div>
                  <input
                  value="{{ old('address') }}"
                    name="address"
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.Address') }}"
                  />
                </div>
                <div>
                  <input
                  value="{{ old('postal') }}"
                    name="postal"
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.Postal_code') }}"
                  />
                </div>
                <div>
                  <select
                    style="
                      background-image: url({{ asset('images/form-select.svg') }});
                      background-size: 12px;
                    "
                    name="country"
                    id="country"
                    class="text-[#969BA0] w-full text-xs py-2.5 font-[poppins] focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                  >
                    <option value="" disabled selected>{{ __('contact.Country') }}</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->name }}"  {{ $country->id == old('country') ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div>
                  <input
                  value="{{ old('state') }}"
                    name="state"
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.State') }}"
                  />
                </div>

                <div>
                  <select
                    style="
                      background-image: url(asset('images/form-select.svg'));
                      background-size: 12px;
                    "
                    name="heard"
                    id=""
                    class="text-[#969BA0] w-full text-xs py-2.5 font-[poppins] focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                  >
                    <option value="" disabled selected>
                      {{ __('contact.How_did_you_hear_about_us?') }}
                    </option>
                    <option  {{ 'google' == old('heard') ? 'selected' : '' }} value="google">{{ __('contact.Google') }}</option>
                    <option  {{ 'website' == old('heard') ? 'selected' : '' }} value="website">{{ __('contact.Another_website') }}</option>
                    <option  {{ 'friends' == old('heard') ? 'selected' : '' }} value="friends">{{ __('contact.Friends') }}</option>
                    <option  {{ 'article' == old('heard') ? 'selected' : '' }} value="article">{{ __('contact.Article') }}</option>
                    <option  {{ 'podcast' == old('heard') ? 'selected' : '' }} value="podcast">{{ __('contact.Podcast') }}</option>
                    <option  {{ 'fair' == old('heard') ? 'selected' : '' }} value="fair">{{ __('contact.fair') }}</option>
                    <option  {{ 'other' == old('heard') ? 'selected' : '' }} value="other">{{ __('contact.Others') }}</option>

                  </select>
                </div>
                <div>
                  <input
                  value="{{ old('phone') }}"
                    name="phone"
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.Phone_Number') }}"
                  />
                </div>
                <div>
                  <input
                    required
                    value="{{ old('email') }}"
                    name="email"
                    type="text"
                    class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                    placeholder="{{ __('contact.Email') }}"
                  />
                </div>
                <div>
                  <select
                    style="
                      background-image: url(asset('images/form-select.svg'));
                      background-size: 12px;
                    "
                    name="type"
                    id="type"
                    class="text-[#969BA0] w-full text-xs py-2.5 font-[poppins] focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                  >
                    <option value="" disabled selected>
                      {{ __('contact.Select_type_of_service') }}
                    </option>
                    <option {{ 'fba' == old('type') ? 'selected' : '' }}  value="fba">FBA</option>
                    <option {{ 'fbm' == old('type') ? 'selected' : '' }}  value="fbm">FBM</option>
                    <option {{ 'storage' == old('type') ? 'selected' : '' }}  value="storage">Storage</option>
                  </select>
                </div>

              </div>
              <div class="my-4">
                <textarea
                required
                value="{{ old('message') }}"
                    name="message"
                  type="text"
                  class="placeholder:text-[#969BA0] w-full placeholder:text-xs font-[poppins] text-sm focus:border-[#F5931E] focus:ring-1 focus:ring-[#F5931E] bg-transparent border-[#F5931E] font-light"
                  placeholder="{{ __('contact.Mention_your_needs') }}"
                ></textarea>
              </div>
              <div class="mt-6">
                <button
                  class="bg-[#F5931E] text-[#5A514E] flex items-center px-2.5 py-2.5 gap-1"
                >
                  <i class="fa-solid font-bold fa-angles-right"></i>
                  <p class="text-sm sm:text-[16px] font-bold">{{ __('contact.Submit') }}</p>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div
          class="w-6/12 lg:block hidden bg-contain bg-right bg-no-repeat"
          style="background-image: url({{ asset('images/form-img.png') }})"
          data-aos="fade-left"
          data-aos-duration="1000"
          data-aos-easing="linear"
        ></div>
      </div>
    </div>
  </section>
  <!-- Form-->

  <!-- Map -->
  <div id="map"></div>
  <!-- Map -->
  @push('scripts')
    <script>
         // Map
 function initAutocomplete() {
     var map = new google.maps.Map(document.getElementById('map'), {
       center: {lat: 27.3753, lng:67},
       zoom: 13,
       mapTypeId: 'roadmap'
     });

     // Create the search box and link it to the UI element.
     var input = document.getElementById('pac-input');
     var searchBox = new google.maps.places.SearchBox(input);
     map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

     // Bias the SearchBox results towards current map's viewport.
     map.addListener('bounds_changed', function() {
       searchBox.setBounds(map.getBounds());
     });

     var markers = [];
     // Listen for the event fired when the user selects a prediction and retrieve
     // more details for that place.
     searchBox.addListener('places_changed', function() {
       var places = searchBox.getPlaces();

       if (places.length == 0) {
         return;
       }

       // Clear out the old markers.
       markers.forEach(function(marker) {
         marker.setMap(null);
       });
       markers = [];

       // For each place, get the icon, name and location.
       var bounds = new google.maps.LatLngBounds();
       places.forEach(function(place) {
         if (!place.geometry) {
           console.log("Returned place contains no geometry");
           return;
         }
         var icon = {
           url: place.icon,
           size: new google.maps.Size(71, 71),
           origin: new google.maps.Point(0, 0),
           anchor: new google.maps.Point(17, 34),
           scaledSize: new google.maps.Size(25, 25)
         };

         // Create a marker for each place.
         markers.push(new google.maps.Marker({
           map: map,
           icon: icon,
           title: place.name,
           position: place.geometry.location
         }));

         if (place.geometry.viewport) {
           // Only geocodes have viewport.
           bounds.union(place.geometry.viewport);
         } else {
           bounds.extend(place.geometry.location);
         }
       });
       map.fitBounds(bounds);
     });
   }


        </script>
  @endpush
</x-web-layout>
