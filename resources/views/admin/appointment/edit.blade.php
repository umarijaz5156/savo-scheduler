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

            <h1 class="text-2xl pb-3 pt-3">Create Appointment</h1>
            <form action="{{ route('appointment.update') }}" method="post">
                @csrf
                <div id="dynamic_field">
                    <div class="grid gap-6 mb-6 md:grid-cols-2" id="">
                        <div>
                            <input type="hidden" value="{{ $appointment->id  }}" name="appointment_id">
                            <input type="hidden" value="{{ $appointment->slot->availability_id }}" name="old_availability">

                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="btn_availability" required name="availability" class="btn_availability bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>Choose a day with date</option>
                                @foreach($futureAvailabilities as $availability)
                                    <option  value="{{ $availability->id }}" {{ $availability->id == $appointment->slot->availability_id ? 'Selected' : '' }}>{{ $availability->day . ' (' . $availability->date  .')' }}</option>
                                @endforeach
                            </select>
                            @error('day') <span class="text-red-700">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Available Slot</label>
                            <select id="btn_available_slots" name="slot_id" class="btn_available_slots bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach($slots as $slot)
                                    <option  value="{{ $slot->id }}" {{ $slot->id == $appointment->slot_id ? 'Selected' : '' }}>{{ $slot->start_time . '---' . $slot->start_time }}</option>
                                @endforeach
                            </select>
                            @error('slot_id') <span class="text-red-700">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Name</label>
                            <input type="text" name="client_name" value="{{ $appointment->client_name }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
                            @error('client_name') <span class="text-red-700">{{ $message }}</span> @enderror

                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Email</label>
                            <input type="email" name="client_email" value="{{ $appointment->client_email }}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email" required>
                            @error('client_email') <span class="text-red-700">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Number</label>
                            <input type="text" name="client_number" value="{{ $appointment->client_number }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1234567890" required>
                            @error('client_number') <span class="text-red-700">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select name="status" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option  value="1" {{ $appointment->status == 1 ? 'Selected' : '' }}>Completed</option>
                                <option  value="0" {{ $appointment->status == 0 ? 'Selected' : '' }}>Not Completed</option>

                            </select>
                        </div>

                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('admin_scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn_availability').on('change', function() {
                var selectedValue = $(this).val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                var url = '{{ route("appointment.getSlots", ":id") }}';
                url = url.replace(':id', selectedValue);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        var select2 = $('#btn_available_slots');
                        select2.empty();

                        $.each(response.data, function(index, item) {
                            select2.append($('<option>', {
                                value: item.id,
                                text: item.start_time + '---' + item.end_time
                            }));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
