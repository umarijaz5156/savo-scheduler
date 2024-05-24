@extends('emails.layout')

@section('email_content')

    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <h1 class="text-2xl text-center text-[#F5931E]"> {{ $details['client_title']  }}</h1><br>

        <header>
            <a href="#">
                <img class="w-auto h-7 sm:h-8" src="{{ asset('images/savo-logo.png') }}" alt="">

            </a>
        </header>

        <main class="mt-8">
            <h2 class="text-gray-700 dark:text-gray-200">Hi {{ $details['name'] }},</h2>

            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                {{ $details['admin_title']  }}  <span class="font-semibold "> {{ env('APP_NAME') }}</span>.
            </p>
            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                Here is the details of the appointment<br>
                <span class="font-semibold ">Date: </span> <span>{{ $details['date'] }}</span><br>
                <span class="font-semibold ">Start Time: </span> <span>{{ $details['start_time'] }}</span><br>
                <span class="font-semibold ">End Time: </span> <span>{{ $details['end_time'] }}</span><br>
            </p>

            <a href="{{ $details['link'] }}" class="inline-block text-[#5A514E] font-bold bg-[#F5931E] border border-[#F5931E] hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-[#F5931E] hover:text-[#F5931E] rounded text-base px-6 py-3 text-center mr-3 lg:mr-0">
                Link
            </a>
            <p class="mt-3 text-blue-600">{{ $details['link'] }}</p>

            <p class="mt-8 text-gray-600 dark:text-gray-300">
                Thanks, <br>
                {{ env('APP_NAME') }} team
            </p>
        </main>


        <footer class="mt-8">
            <p class="mt-3 text-gray-500 dark:text-gray-400">©  {{ date('Y-m-d H:i:s') }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
        </footer>
    </section>

@endsection
