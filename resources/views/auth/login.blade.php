<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <section
      class="relative after:content-[''] after:absolute after:bg-[#f5931e8c] after:top-0 after:right-0 after:bottom-0 after:w-[calc(35%_+_1vw)]"
    >
      <div
        class="container mx-auto px-4 min-h-screen flex justify-center items-center relative z-10 py-10"
      >
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-full lg:place-content-center">
          <div
            class="w-full h-full lg:max-w-[600px] rounded-[20px] bg-white pt-7 px-8 sm:px-14 pb-20"
            style="box-shadow: 0px 19px 40px rgba(0, 0, 0, 0.05)"
          >
            <p class="text-[#00000080] mb-3">{{ __('auth.welcome') }}</p>
            <h1 class="text-4xl md:text-5xl font-semibold text-[#5A514E]">
              {{ __('auth.sign_in') }}
            </h1>
            <x-validation-errors class="mb-4" />
            <form class="mt-6" method="POST" action="{{ route('login') }}">
                @csrf
              <div>
                <label for='email' class="block text-[#5A514E] font-semibold">{{ __('auth.email') }}</label>
                <input
                :value="old('email')"
                  type="email"
                  name="email"
                  id="email"
                  autofocus
                  placeholder="{{ __('auth.enter_email') }}"
                  class="w-full px-4 py-3 rounded-lg bg-white mt-2 border border-gray-200 focus:ring-[#F5931E] focus:border-[#F5931E] focus:outline-none"
                  autocomplete
                  required
                />
              </div>

              <div class="mt-4">
                <div class="flex justify-between items-center">
                  <label for="password" class="block text-[#5A514E] font-semibold">{{ __('auth.passw') }}</label>

                  <a
                  href="{{ route('password.request') }}"
                    class="text-sm font-normal text-gray-700 hover:text-[#F5931E] focus:text-[#F5931E]"
                    >{{ __('auth.forgot_password') }}</a
                  >
                </div>
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="{{ __('auth.enter_password') }}"

                  class="w-full px-4 py-3 rounded-lg bg-white mt-2 border border-gray-200 focus:ring-[#F5931E] focus:border-[#F5931E] focus:outline-none"
                  required
                />
              </div>

              <button
                type="submit"
                class="block bg-[#F5931E] border  border-[#F5931E] hover:bg-transparent hover:text-[#F5931E] text-white rounded-full uppercase font-semibold py-3 mt-10 w-max mx-auto px-9"
              >
                {{ __('auth.sign_in') }}<i class="fa-regular fa-arrow-right"></i>
              </button>
            </form>


          </div>
          <div class="hidden lg:flex justify-center items-center">
            <img src="{{ asset('images/signin-img.png') }}" alt="" />
          </div>
        </div>
      </div>
    </section>

{{--
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}
    {{-- </x-authentication-card> --}}
</x-guest-layout>
