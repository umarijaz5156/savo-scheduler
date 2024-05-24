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
               @if (session()->has('error'))
                   <div x-data="{ open: true }" x-show="open" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                       <strong class="font-bold">Alert!</strong>
                       <span class="block sm:inline">{{ session('error') }}</span>
                       <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-green-500 cursor-pointer" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.414 6l5.293-5.293a1 1 0 1 0-1.414-1.414L12 4.586 6.707-.707a1 1 0 0 0-1.414 1.414L10.586 6l-5.293 5.293a1 1 0 1 0 1.414 1.414L12 7.414l5.293 5.293a1 1 0 0 0 1.414-1.414L13.414 6z"/>
                                </svg>
                            </span>
                   </div>
               @endif

               @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                               <p>error</p>
                           @endforeach
                       </ul>
                   </div>
               @endif
           <h1 class="text-2xl pb-3 pt-3">Create Availability</h1>
           <form action="{{ route('availability.store') }}" method="post">
               @csrf
               <div id="dynamic_field">
               <div class="grid gap-6 mb-6 md:grid-cols-5" id="">

                   <div>
                       <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                       <input type="date" name="date[]"  id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                       @error('date') <span class="text-red-700">{{ $message }}</span> @enderror

                   </div>
                   <div>
                       <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label>
                       <input type="time" name="start_time[]"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                       @error('start_time') <span class="text-red-700">{{ $message }}</span> @enderror

                   </div>
                   <div>
                       <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Time</label>
                       <input type="time" name="end_time[]"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                       @error('end_time') <span class="text-red-700">{{ $message }}</span> @enderror

                   </div>
                   <div>
                       <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slots Duration</label>
                       <input type="number" name="duration[]"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="in mints" required>
                       @error('duration') <span class="text-red-700">{{ $message }}</span> @enderror

                   </div>
                    <div>
                        <button type="button" name="add" id="add" class="btn btn-success mt-7 inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-600 border-0 rounded-lg shadow-md cursor-pointer tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Add More</button>
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
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            // $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter Sizes of Products" name="name[]" class="name_list focus:shadow-primary-outline dark:bg-slate-850 dark:text-white leading-5.6 ease-in block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-success mt-4 inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-red-400 border-0 rounded-lg shadow-md cursor-pointer tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85 btn_remove">X</button></td></tr>');
            $('#dynamic_field').append('<div id="row'+i+'" class="grid gap-6 mb-6 md:grid-cols-5 dynamic-added"> <div><label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label><input type="date" name="date[]" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required></div><div><label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label><input type="time" name="start_time[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required></div><div><label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Time</label><input type="time" name="end_time[]"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required></div><div><label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slots Duration</label><input type="number" name="duration[]"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="in mints" required></div><div><button type="button" name="remove" id="'+i+'" class="btn btn-success mt-6 inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-red-400 border-0 rounded-lg shadow-md cursor-pointer tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85 btn_remove">X</button></div></div></div>');



        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>
@endsection
