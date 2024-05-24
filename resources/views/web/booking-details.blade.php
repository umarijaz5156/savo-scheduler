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
                <img class="mx-auto" src="./images/calendar-globe.png" alt="" />
            </div>
        </div>
    </section>
    <!-- Hero Section -->

    <!-- Lets Talk -->
    <section class="pt-8 lg:pt-24">
        <div class="container mx-auto px-4 2xl:max-w-[1530px]">
            <div
                style="background-image: url(./images/lets-talk-bg.png)"
                class="h-80 md:h-[270px] overflow-hidden relative bg-right bg-no-repeat bg-cover w-full"
                data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"
            >
                <div
                    style="
              background: linear-gradient(
                269.98deg,
                rgba(90, 81, 78, 0.89) 0.02%,
                rgba(90, 81, 78, 0.89) 100.56%,
                rgba(90, 81, 78, 0) 100.23%,
                rgba(90, 81, 78, 0.89) 99.98%,
                rgba(90, 81, 78, 0) 99.99%
              );
              transform: matrix(-1, 0, 0, 1, 0, 0);
            "
                    class="positi absolute top-0 left-0 right-0 bottom-0 z-0 w-full h-full"
                ></div>
                <div
                    class="absolute z-[1] sm:bottom-10 pr-4 bottom-4 left-4 sm:left-10"
                >
                    <div class="flex gap-3 sm:gap-5 items-center">
                        <h1 class="text-white text-xl sm:text-[40px]">
                            Hello Lets talk !!
                        </h1>
                        <img
                            class="sm:w-auto w-[30px]"
                            src="./images/Hand-shake.png"
                            alt=""
                        />
                    </div>
                    <p class="text-sm sm:text-[18px] mt-2 leading-10 text-[#F5EFE7]">
                        We offer a range of services that are sure to meet your needs,
                        whether you're looking for a <br />
                        one-time service or a recurring service, we're here to help and
                        available 24 hours a day.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Lets Talk -->

    <!-- Main Content -->
    <section class="mt-8">
        <div class="container mx-auto px-4 2xl:max-w-[1530px]">
            <div class="flex lg:flex-row flex-col gap-8 h-full w-full">
                <div class="w-full lg:w-8/12"  data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                    <div>
                        <form action="{{ route('booking.store') }}" method="post" class="space-y-4">
                            @csrf
                            <input type="hidden" name="slot_id" value="{{ $slot_id }}">
                            <div class="space-y-1">
                                <label for="name" class="text-[#5F5F5F] text-sm font-semibold">Name</label>
                                <input type="text" name="client_name" value="{{ old('client_name') }}" id="name" class="bg-[#ece6de73] block p-3.5 w-full z-20 text-sm text-gray-900 border border-transparent focus:ring-[#F5931E] focus:border-[#F5931E]" required>
                                @error('client_name') <span class="text-red-700">{{ $message }}</span>@enderror

                            </div>

                            <div class="space-y-1">
                                <label for="email" class="text-[#5F5F5F] text-sm font-semibold">Email</label>
                                <input type="email" id="email" name="client_email" value="{{ old('client_email') }}" class="bg-[#ece6de73] block p-3.5 w-full z-20 text-sm text-gray-900 border border-transparent focus:ring-[#F5931E] focus:border-[#F5931E]" required>
                                @error('client_email') <span class="text-red-700">{{ $message }}</span>@enderror

                            </div>

                            <div class="space-y-1">
                                <label for="message" class="text-[#5F5F5F] text-sm font-semibold">Add Guests Email (s) </label>
                                <textarea id="message" name="guest_emails" rows="4"  class="bg-[#ece6de73] block p-3.5 w-full z-20 text-sm text-gray-900 border border-transparent focus:ring-[#F5931E] focus:border-[#F5931E]"></textarea>
                                <p class="ml-auto text-sm text-[#5f5f5f78]">Notify up to 10 additional guests of the scheduled event.</p>
                            </div>

                            <div class="">
                                <div x-data="{ countryCode: '+1', isDropdownOpen: false, countryFlags: { '+1': 'us', '+44': 'gb-eng', '+91': 'in' } }" @click.away="isDropdownOpen = false" >
                                    <div class="relative space-y-1" class="">
                                        <label for="message" class="text-[#5F5F5F] text-sm font-semibold">Phone Number</label>
                                        <div class="flex items-center bg-[#ece6de73] ">
                                            <div class="relative max-w-[130px] w-full">

                                                <div x-data="{ isDropdownOpen: false, countryCode: '', countryFlags: { /* your country flags mapping here */ } }">
                                                    <button x-on:click="isDropdownOpen = !isDropdownOpen" type="button" class="bg-[#ece6de73]  border-primary flex justify-between items-center gap-2 w-full">
                                                        <ul class="bg-[#ece6de73] border-primary flex justify-between items-center gap-2 w-full">
                                                            <input name="country_code" pattern="\+[0-9]+" class="bg-[#ece6de73] block p-3.5 w-full z-20 text-sm text-gray-900 border border-transparent focus:ring-[#F5931E] focus:border-[#F5931E]" type="text"  list="countries" placeholder="+1">
                                                            <datalist id="countries">
                                                                @foreach($countries as $key => $country)
                                                                    <option value="{{ $key }}">{{ $key }} ({{ $country }})</option>
                                                                @endforeach
                                                            </datalist>
                                                        </ul>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="bg-[#DEDEDE] w-0.5 h-5">
                                            </div>

                                            <input type="text" pattern="[0-9]{10,}" name="client_number"  value="{{ old('client_number') }}" id="search-dropdown" class="bg-[#ece6de73] block p-3.5 w-full z-20 text-sm text-gray-900 border border-transparent focus:ring-[#F5931E] focus:border-[#F5931E]" placeholder="Number" pattern="[0-9]{10,}" required>

                                        </div>
                                        @error('client_number') <span class="text-red-700">{{ $message }}</span>@enderror
                                        @error('country_code') <span class="text-red-700">{{ $message }}</span>@enderror
                                        <p class="ml-auto text-sm text-[#5f5f5f78]">The number must be at least 10 digits</p>

                                    </div>
                                </div>
                            </div>


                            <div class="flex justify-end items-center">
                                <button type="submit" class="inline-flex items-center gap-2 group text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] rounded text-base px-8 py-4 text-center" style="box-shadow: 0px 18px 20px rgba(0, 150, 216, 0.1)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="#5A514E">
                                        <path d="M11.5 0.273438H7L12 8.14649L7 16.0195H11.5L16.5 8.14649L11.5 0.273438Z"></path>
                                        <path d="M4.5 0.273438H0L5 8.14649L0 16.0195H4.5L9.5 8.14649L4.5 0.273438Z"></path>
                                    </svg>
                                    Schedule Event
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full lg:w-4/12"  data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
                    <div
                        class="border-[#F5931E] h-full px-5  pb-10 border bg-[#F4EFE6]"
                        style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2)"
                    >
                        <h1 class="text-[#5A514E] text-[32px] font-bold mt-20">
                            Meeting with me
                        </h1>
                        <div class="mt-[30px] space-y-5">
                            <div class="flex gap-7 items-center">
                                <div
                                    class="px-2.5 py-1.5"
                                    style="
                        background: #f4efe6;
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                        border-radius: 5px;
                        "
                                >
                                    <i
                                        class="fa-regular text-[20px] text-[#F5931E] fa-clock"
                                    ></i>
                                </div>
                                <h6 class="text-[#5A514E] font-semibold">20min</h6>
                            </div>
                            <div class="flex gap-7 items-center">
                                <div
                                    class="px-2.5 py-1.5"
                                    style="
                        background: #f4efe6;
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                        border-radius: 5px;
                        "
                                >
                                    <i
                                        class="fa-regular text-[20px] text-[#F5931E] fa-phone"
                                    ></i>
                                </div>
                                <h6 class="text-[#5A514E] font-semibold">135-124-124</h6>
                            </div>
                        </div>
                        <div class="mt-9 space-y-6">
                            <div class="flex gap-4 items-center">
                                <i class="fa-solid text-[20px] text-[#F5931E] fa-check"></i>
                                <h6 class="text-[#5A514E] font-semibold text-sm">
                                    Talk about your company needs
                                </h6>
                            </div>
                            <div class="flex gap-4 items-center">
                                <i class="fa-solid text-[20px] text-[#F5931E] fa-check"></i>
                                <h6 class="text-[#5A514E] font-semibold text-sm">
                                    3PL services needed
                                </h6>
                            </div>
                            <div class="flex gap-4 items-center">
                                <i class="fa-solid text-[20px] text-[#F5931E] fa-check"></i>
                                <h6 class="text-[#5A514E] font-semibold text-sm">
                                    How to start working with us
                                </h6>
                            </div>
                            <div class="flex gap-4 items-center">
                                <i class="fa-solid text-[20px] text-[#F5931E] fa-check"></i>
                                <h6 class="text-[#5A514E] font-semibold text-sm">
                                    Q&A about our services
                                </h6>
                            </div>
                            <div class="flex gap-4 items-center">
                                <i class="fa-solid text-[20px] text-[#F5931E] fa-check"></i>
                                <h6 class="text-[#5A514E] font-semibold text-sm">
                                    Volume of Item expected / Shipments needed per month
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content -->

</x-web-layout>

