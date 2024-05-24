<div>



        <!-- Hero Section -->
        <section class="flex items-center pt-[180px] lg:pt-[230px]">
           <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
             <div class="" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="linear">
                 <img class="mx-auto" src="{{ asset('images/blogs-globe.png') }}" alt="">
             </div>
           </div>
         </section>
         <!-- Hero Section -->

           <!-- Tabs -->
           <section class="pt-8 lg:pt-24">
             <div class="container mx-auto px-4 2xl:max-w-[1530px]">
               <div  >

                 <!-- Tab Buttons -->
                 <div class="flex flex-wrap border-b border-gray-200 drk:border-gray-700">
                    <button wire:click='setTab(0)'
                    class="tab-control font-bold  text-base  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 {{ $activeTab === 0 ? 'active !text-base text-[#F5931E] border-b-2 !border-[#F5931E]' : 0}} "
                   >All</button>

                    @foreach ($categories as $category)
                    {{-- {{ dd($category->term_id) }} --}}
                        <button wire:click="setTab({{ $category->term_id }})"
                        class="tab-control font-bold  text-base  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 {{ $activeTab === $category->term_id ? 'active !text-base text-[#F5931E] border-b-2 !border-[#F5931E]' : ''}}"
                    >{{$category->name}}</button>
                    @endforeach

                   {{-- <button @click="activeTab = 1"
                   class="tab-control font-bold  text-sm  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 "
                   :class="{ 'active !text-sm text-[#F5931E] border-b-2 !border-[#F5931E] ': activeTab === 1 }">UI Design</button>
                   <button @click="activeTab = 2"
                   class="tab-control font-bold  text-sm  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 "
                   :class="{ 'active !text-sm text-[#F5931E] border-b-2 !border-[#F5931E] ': activeTab === 2 }">UX Design</button>
                   <button @click="activeTab = 3"
                   class="tab-control font-bold  text-sm  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 "
                   :class="{ 'active !text-sm text-[#F5931E] border-b-2 !border-[#F5931E] ': activeTab === 3 }">Product Design</button>
                   <button @click="activeTab = 4"
                   class="tab-control font-bold  text-sm  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 "
                   :class="{ 'active !text-sm text-[#F5931E] border-b-2 !border-[#F5931E] ': activeTab === 4 }">Articles</button>
                   <button @click="activeTab = 5"
                   class="tab-control font-bold  text-sm  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 "
                   :class="{ 'active !text-sm text-[#F5931E] border-b-2 !border-[#F5931E] ': activeTab === 5 }">Tutorials</button>
                   <button @click="activeTab = 6"
                   class="tab-control font-bold  text-sm  text-[#5A514E] border-b-2 border-transparent px-5 !py-3.5 "
                   :class="{ 'active !text-sm text-[#F5931E] border-b-2 !border-[#F5931E]] ': activeTab === 6 }">News</button> --}}
                 </div>
                 <!-- Tab Buttons -->

                 <!-- Tab Content -->
                 <div class="mt-[60px] sm:mt-[124px]">
                   <div class="tab-panel " >
                    <div class="grid gap-x-5 gap-y-10  md:grid-cols-2">
                        @foreach ($blogs as $blog)

                        <div class="w-full h-full"  data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                            <div style="background-image: url({{ $blog->guid }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                            <div class="text-sm text-[#5A514E] font-semibold mt-4">{{ \Carbon\Carbon::parse($blog->post_date)->format('M d, Y') }}</div>
                            <div class="text-xl text-[#5A514E] font-bold mt-4">{{ $blog->post_title }}</div>
                            <div class="h-[70px] mt-3 text-base !leading-[22.5px] overflow-hidden">
                                {!! $blog->post_content !!}

                            </div>
                            <div class="mt-[30px]"><a href="{{ route('web.blog-post', ['id'=> $blog->ID]) }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                          </div>
                        @endforeach
{{--
                     <div class="w-full h-full"  data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-2.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div>
                     <div class="w-full h-full" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-3.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div>
                     <div class="w-full h-full" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-4.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div>
                      <div class="w-full h-full" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-5.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div>
                      <div class="w-full h-full" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-6.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div>
                     <div class="w-full h-full" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-7.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div>
                     <div class="w-full h-full" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear">
                       <div style="background-image: url({{ asset('images/Blog-8.png') }});" class="w-full bg-center bg-cover bg-no-repeat h-[415px]"></div>
                       <div class="text-sm text-[#5A514E] font-semibold mt-4">NOV 23 2020</div>
                       <div class="text-xl text-[#5A514E] font-bold mt-4">This way is wrong way about UI Design</div>
                       <p class="mt-3 text-base !leading-[22.5px]">A quick guide to assisting users in the challenging steps from learning
                       about your podcast on the web.  A quick guide to assisting users in the challenging steps from learning about your podcast on the web.</p>
                       <div class="mt-[30px]"><a href="{{ route('web.blog-post') }}" class="border-b border-[#F5931E] font-medium text-[#F5931E] text-sm !mt-10">READ MORE</a></div>
                     </div> --}}
                    </div>
                   </div>
                   {{-- <div class="tab-panel " :class="{ 'active': $activeTab === 1 }"
                   x-show.transition.in.opacity.duration.600="{{ $activeTab === 1 }}">
                   <h1>Tab 2</h1>
                   </div>
                   <div class="tab-panel " :class="{ 'active': $activeTab === 2 }"
                   x-show.transition.in.opacity.duration.600="{{ $activeTab === 2 }}">
                   <h1>Tab 3</h1>
                   </div>
                   <div class="tab-panel " :class="{ 'active': $activeTab === 3 }"
                   x-show.transition.in.opacity.duration.600="{{ $activeTab === 3 }}">
                   <h1>Tab 4</h1>
                   </div>
                   <div class="tab-panel " :class="{ 'active': $activeTab === 4 }"
                    x-show.transition.in.opacity.duration.600="{{ $activeTab === 4 }}">
                   <h1>Tab 5</h1>
                   </div>
                   <div class="tab-panel " :class="{ 'active': $activeTab === 5 }"
                   x-show.transition.in.opacity.duration.600="{{ $activeTab === 5 }}">
                   <h1>Tab 6</h1>
                   </div>
                   <div class="tab-panel " :class="{ 'active': $activeTab === 6 }"
                   x-show.transition.in.opacity.duration.600="{{ $activeTab === 6 }}">
                   <h1>Tab 7</h1>
                   </div> --}}
                 </div>
                 <!-- Tab Content -->

             </div>
           </section>
           <!-- Tabs -->


</div>
