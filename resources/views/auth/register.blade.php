<x-guest-layout>

    <section
        class="relative after:content-[''] after:absolute after:bg-[#f5931e8c] after:top-0 after:right-0 after:bottom-0 after:w-[calc(35%_+_1vw)]">
        <div class="container mx-auto px-4 min-h-screen flex justify-center items-center relative z-10 py-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-full lg:place-content-center">
                <div class="w-full h-full lg:max-w-[600px] rounded-[20px] bg-white pt-7 px-8 sm:px-14 pb-20 border border-[#F5931E]"
                    style="box-shadow: 0px 19px 40px rgba(0, 0, 0, 0.05)">
                    <h1 class="text-4xl md:text-5xl font-semibold text-[#5A514E]">
                        {{ __('auth.Sign_up') }}
                    </h1>
                    ​
                    <x-validation-errors class="mb-4" />
                    <form class="mt-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <label for="name" class="block text-[#5A514E] font-semibold">{{ __('auth.name') }}</label>
                            <input :value="old('name')" type="text" name="name" id="name"
                                placeholder="{{ __('auth.enter_name') }}"
                                class="w-full px-4 py-3 rounded-lg bg-white mt-2 border border-gray-200 focus:ring-[#F5931E] focus:border-[#F5931E] focus:outline-none"
                                autocomplete autofocus required />
                        </div>
                        ​
                        <div>
                            <label for="email" class="block text-[#5A514E] font-semibold">{{ __('auth.email') }}</label>
                            <input :value="old('email')" type="email" name="email" id="email"
                                placeholder="{{ __('auth.enter_email') }}"
                                class="w-full px-4 py-3 rounded-lg bg-white mt-2 border-gray-200 focus:ring-[#F5931E] border focus:border-[#F5931E] focus:outline-none"
                                autocomplete required />
                        </div>
                        ​
                        <div class="">
                            <div class="flex justify-between items-center">
                                <label for="password" class="block text-[#5A514E] font-semibold">{{ __('auth.passw')
                                    }}</label>
                                ​
                                {{-- <a href="{{ route('password.request') }}"
                                    class="text-sm font-normal text-gray-700 hover:text-[#F5931E] focus:text-[#F5931E]">{{
                                    __('auth.forgot_password') }}</a> --}}
                            </div>
                            <input :value="old('password')" type="password" name="password" id="password"
                                placeholder="{{ __('auth.enter_password') }}"
                                class="w-full px-4 py-3 rounded-lg bg-white mt-2 border border-gray-200 focus:ring-[#F5931E] focus:border-[#F5931E] focus:outline-none"
                                required />
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-between items-center">
                                <label for="password" class="block text-[#5A514E] font-semibold">{{
                                    __('auth.enter_password_again') }}</label>
                            </div>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="{{ __('auth.enter_password_again') }}"
                                class="w-full px-4 py-3 rounded-lg bg-white mt-2 border-gray-200 focus:ring-[#F5931E] border focus:border-[#F5931E] focus:outline-none"
                                required />
                        </div>
                        ​
                        <button type="submit"
                            class="block bg-[#F5931E] border border-[#F5931E] hover:bg-transparent hover:text-[#F5931E] text-white rounded-full uppercase font-semibold py-3 mt-10 w-max mx-auto px-9">
                            {{ __('auth.Sign_up') }}
                        </button>
                        ​
                        <button type="submit"
                            class="flex justify-center items-center gap-4 bg-transparent border border-transparent text-[#5a514e4f] rounded-full font-semibold py-3 mt-5 w-max mx-auto px-6 hover:bg-gray-200">
                            <img class="" src="{{ asset('images/google.png') }}" alt=""> {{
                            __('auth.sign_up_with_google') }}
                        </button>
                    </form>
                    ​
                    <div class="text-center">
                        <p class="mt-8 text-[#5a514e4f]">
                            {{ __('auth.have_an_account') }}
                            <a href="{{ route('login') }}" class="text-[#f5931e] font-semibold">{{ __('auth.sign_in')
                                }}</a>
                        </p>
                    </div>
                </div>
                <div class="hidden lg:flex justify-center items-center">
                    <img src="{{ asset('images/signup-img.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-label for="name" :value="{{ __('Name') }}" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-label for="terms">
                <div class="flex items-center">
                    <x-checkbox name="terms" id="terms" required />

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                            of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                            Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-label>
        </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
    </x-authentication-card> --}}
</x-guest-layout>
