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
                <img class="mx-auto" src="{{ asset('images/calendar-globe.png') }}" alt="" />
            </div>
        </div>
    </section>

    <!-- Hero Section -->

    <!-- Main Content -->
    <section class="mt-20">
        <div class="container mx-auto px-4 2xl:max-w-[1530px]">
            <div class="flex lg:flex-row flex-col gap-8 h-full w-full">
                <div
                    class="w-full lg:w-8/12"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-easing="linear"
                >
                    <img src="{{ asset('images/confirm-booking.png') }}" class="" alt="" />
                </div>
                <div
                    class="w-full lg:w-4/12"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-easing="linear"
                >
                    <div
                        class="border-[#F5931E] h-full px-5 pb-10 border bg-[#F4EFE6]"
                        style="box-shadow: 0px 4px 50px 5px rgba(245, 147, 30, 0.2)"
                    >
                        <h1 class="text-[#5A514E] text-[32px] font-bold mt-20">
                            Confirmed
                        </h1>
                        <p class="text-[#5A514E] text-lg">
                            You are scheduled with Savo Prep.
                        </p>
                        <div class="my-[30px] space-y-5 pb-7 border-b border-[#DEDEDE]">
                            <div class="flex gap-7 items-center">
                                <div
                                    class="px-2.5 py-1.5"
                                    style="
                      background: #f4efe6;
                      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                      border-radius: 5px;
                    "
                                >
                                    <i class="fa-solid fa-user text-[20px] text-[#F5931E]"></i>
                                </div>
                                <h6 class="text-[#5A514E] font-semibold">Meeting With Me</h6>
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
                                        class="fa-solid fa-calendar text-[20px] text-[#F5931E]"
                                    ></i>
                                </div>
                                <h6 class="text-[#5A514E]">
                                    <?php

                                    $timestampStart = strtotime($slot->start_time);
                                    $start_time = date("h.i A", $timestampStart);

                                    $timestampEnd = strtotime($slot->end_time);
                                    $end_time = date("h.i A", $timestampEnd);
                                    ?>
                                    {{ $start_time }} - {{ $end_time }}, {{ $availability->day }}, {{ $availability->date }}
                                </h6>
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
                                        class="fa-regular fa-earth-asia text-[20px] text-[#F5931E]"
                                    ></i>
                                </div>

                                <h6 class="text-[#5A514E]">{{ $appointment->timezone }}</h6>
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
                                    <i class="fa-solid fa-phone text-[20px] text-[#F5931E]"></i>
                                </div>
                                <h6 class="text-[#5A514E]">123-456-789</h6>
                            </div>
                            <p class="text-[#5A514E] text-sm">
                                A confirmation has been sent to your email address.
                            </p>
                        </div>
                        <div>
                            <h1 class="text-[#5A514E] font-bold">
                                Simple. Automated. Scheduling.
                            </h1>
                            <form class="mt-2">
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <input type="search" id="default-search" class="block w-full p-4 pl-4 text-sm text-gray-900 placeholder:text-[#5a514e5c] border border-gray-300 rounded-lg bg-[#ece6de94] focus:ring-[#F5931E] focus:border-[#F5931E]" placeholder="user@gmail.com" required>
                                    <button type="submit" class="mt-2 sm:mt-0 sm:absolute text-[#5A514E] right-2.5 bottom-2.5 bg-[#F5931E] hover:bg-transparent hover:text-[#F5931E] focus:ring-4 focus:outline-none focus:ring-[#F5931E] rounded-lg text-sm px-4 py-2 border border-transparent hover:border-[#F5931E] font-semibold">Free Sign up</button>
                                </div>
                                <p class="mt-1 text-[#5a514e5c] text-sm">
                                    No credit card requried
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content -->

</x-web-layout>
