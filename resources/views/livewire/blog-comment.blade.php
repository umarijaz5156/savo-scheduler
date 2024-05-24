<div>
    <section class="my-10 text-box">
        <div class="container mx-auto 2xl:max-w-[1530px] px-4">
            @if(session()->has('success'))
                <div class="p-4 mb-4 text-sm text-white rounded-lg bg-[#F5931E]" role="alert">
                    <span class="font-medium">{{ __('contact.Message_sent_successfully') }}</span>
                </div>
            @endif
            <form action="#">
                <textarea name="" wire:model.debounce='comment' style="resize: none; box-shadow: 0px 4px 50px 5px #f5931e33" id=""
                    class="w-full bg-transparent border border-[#F5931E] focus:border-[#F5931E] focus:ring-transparent pl-4 pt-4"
                    placeholder="Leave a reply" rows="10"></textarea>
                <div class="w-full flex mt-3 justify-end">
                    <button  wire:click='save'
                        class="w-fit flex font-semibold hover:bg-[#e17f09] items-center py-2 pl-4 pr-4 text-black text-sm bg-[#F5931E] lg:text-[#5A514E]"
                        type="button">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
