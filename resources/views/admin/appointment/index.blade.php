@extends('admin.layouts.app')

@section('admin_content')

    <div class="py-12 px-5 md:px-10 pt-72" >

        <div class="bg-white p-5 md:p-16">
            @if (session()->has('message'))
                <div x-data="{ open: true }" x-show="open" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('message') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-green-500 cursor-pointer" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.414 6l5.293-5.293a1 1 0 1 0-1.414-1.414L12 4.586 6.707-.707a1 1 0 0 0-1.414 1.414L10.586 6l-5.293 5.293a1 1 0 1 0 1.414 1.414L12 7.414l5.293 5.293a1 1 0 0 0 1.414-1.414L13.414 6z"/>
                                </svg>
                    </span>
                </div>
            @endif
            <h1 class="text-2xl pb-3 pt-3">Appointment</h1>
                <div class="mt-3">
                    <div class="text-end">
                        <a href="{{ route('appointment.create') }}"  type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer  tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Add New Appointment</a>
                    </div>

                    <table class="items-center w-full mt-5 mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                        <thead class="align-bottom">
                        <tr>

                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">s-time__e-time</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">DAY + DATE + timezone</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Duration</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Client name</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Client email</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Client number</th>
                            <th class="px-2 py-3 w-20 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">link</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">status</th>
                            <th class="px-2 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white  border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $sortedAppointments = $appointments->sortBy(function ($appointment) {
                                return $appointment->slot->availability->date;
                            });

                            $perPage = 8;
                            $currentPage = request()->get('page', 1);
                            $slicedAppointments = $sortedAppointments->slice(($currentPage - 1) * $perPage, $perPage);
                            $paginatedAppointments = new \Illuminate\Pagination\LengthAwarePaginator(
                                $slicedAppointments,
                                $sortedAppointments->count(),
                                $perPage,
                                $currentPage
                            );
                                $paginatedAppointments->setPath(url()->current());

                        @endphp
                        @foreach ($paginatedAppointments as $appointment)
                            @php
                                $date = $appointment->slot->availability->date;
                                if (!isset($currentDate) || $date !== $currentDate) {
                                    $currentDate = $date;
                                    $counter = 0;
                                }
                            @endphp
                            <tr class="">
                                <td colspan="9" class="font-bold m-3"> @if ($counter % $perPage === 0)
                                        <h2>{{ $currentDate }}</h2>
                                    @endif</td>
                            </tr>
                                <tr>

                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->id }}</p>
                                </td>

                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->slot->start_time . '-' . $appointment->slot->end_time }}</p>
                                </td>

                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->slot->availability->day.'('.$appointment->slot->availability->date.')' .'(' . $appointment->timezone . ')' }}</p>
                                </td>
                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->slot->availability->duration}}</p>
                                </td>
                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->client_name }}</p>
                                </td>
                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->client_email }}</p>
                                </td>
                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $appointment->client_number ?? '' }}</p>
                                </td>
                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0   leading-tight dark:text-white dark:opacity-80 text-slate-400"><a class="text-blue-500" href="{{$appointment->meet_link }}">Link</a>  </p>
                                </td>
                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0  leading-tight dark:text-white dark:opacity-80 text-slate-400">@if($appointment->status == 0) <p class="text-red-700">not-completed </p> @else <p class="text-green-700">completed</p> @endif </p>
                                </td>

                                <td class="px-2 py-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <a href="{{route('appointment.edit', $appointment->id)}}" class=" font-semibold leading-tight dark:text-white btn-primary btn-sm dark:opacity-80 text-slate-600"> <i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('appointment.delete', $appointment->id)}}" class=" ml-3 font-semibold leading-tight dark:text-red text-red-400 btn-danger btn-sm dark:opacity-80"> <i class="fa-solid fa-trash"></i>  </a>
                                </td>
                            </tr>
                            @php $counter++; @endphp

                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="mt-5">
                    {{ $paginatedAppointments->links() }}
                </div>
        </div>

    </div>
@endsection

