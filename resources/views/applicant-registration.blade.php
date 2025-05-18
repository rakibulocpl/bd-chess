@extends('layouts.public')

<style>

    .select2-container .select2-selection--single {
        height: 34px !important;
        display: flex;
        align-items: center;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 42px !important;
    }
    /* Force select2 container to inherit 100% width */
    .select2-container {
        width: 100% !important;
    }


</style>
@section('content')
    <div class="flex flex-col gap-6 bg-white">
        <x-public-header :title="__('Create an Individual Account')" :description="__('Enter your details below to create your account')" />
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @session('success')
        <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
            </svg>
            <span class="font-medium"> {{ $value }} </span>
        </div>
        @endsession
        @session('error')
        <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
            </svg>
            <span class="font-medium"> {{ $value }} </span>
        </div>
        @endsession
        <form method="POST" action="{{ route('application.applicantStore') }}" id="teamForm" enctype="multipart/form-data">
            <p class="text-red-500"> All red star-marked fields must be filled.</p>
            @csrf

            {{-- District --}}
            <div class="w-full p-1 space-y-2 space-x-2">
                <div class="w-full">
                    <label for="fide_id" class="block text-sm font-semibold text-black mb-1">
                        FIDE ID
                    </label>
                    <input type="text" name="fide_id" id="fide_id" placeholder="FIDE ID" value="{{old('fide_id')}}"
                           class="w-full rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    @error('fide_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="name" class="block text-sm font-semibold text-black mb-1">
                        {{ __('Name') }} <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="name" id="fide_id" placeholder="Full Name" value="{{old('name')}}"
                           class="w-full required rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="district" class="block text-sm font-semibold text-black mb-1">
                        Gender <span class="text-red-600">*</span>
                    </label>
                    <select name="gender" id="gender"
                            class="w-full rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 required">
                        <option value="">Select Gender</option>
                        <option  value="1" {{old('gender') == 1?'selected':''}}>Male</option>
                        <option  value="2" {{old('gender') == 2?'selected':''}}>Female</option>
                        <option  value="3" {{old('gender') == 3?'selected':''}}>Other</option>
                    </select>
                    @error('gender')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                        {{ __('Date of Birth') }} <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="dob" value="{{old('dob')}}" id="dob" readonly
                           class="w-full required rounded-md border border-gray-300 bg-white text-black py-2 px-3
                           shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    @error('dob')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="w-full">
                    <label for="birth_reg_no" class="block text-sm font-semibold text-black mb-1">
                        {{ __('Birth Registration Number') }}
                    </label>
                    <input type="text"  value="{{old('birth_reg_no')}}" name="birth_reg_no" id="birth_reg_no" placeholder="Birth Registration Number"
                           class="w-full rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    @error('birth_reg_no')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="mobile" class="block text-sm font-semibold text-black mb-1">
                        {{ __('Mobile Number') }} <span class="text-red-600">*</span>
                    </label>
                    <input type="text" value="{{old('mobile')}}" name="mobile" id="birth_reg_no" placeholder="Mobile Number"
                           class="w-full required rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    @error('mobile')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="email" class="block text-sm font-semibold text-black mb-1">
                        {{ __('Email') }}
                    </label>
                    <input type="text" value="{{old('email')}}" name="email" id="email" placeholder="Email"
                           class="w-full rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="lichess_user" class="block text-black font-semibold mb-1">
                        {{ __('Lichess User') }}
                    </label>
                    <input
                        name="lichess_user"
                        id="lichess_user"
                        type="text"
                        value="{{old('lichess_user')}}"
                        placeholder="{{ __('Lichess User Name') }}"
                        class="w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    />

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Do you have a lichess.org account?') }}
                        <a href="https://lichess.org" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                            {{ __('If not, create an account here') }}
                        </a>
                    </p>
                    @error('mobile')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- District -->
                <div class="w-full">
                    <label for="district" class="block text-sm font-semibold text-black mb-1">
                        District <span class="text-red-600">*</span>
                    </label>
                    <select name="district" id="district"
                            class="w-full select2 rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 required">
                        <option value="">Select District</option>
                        @foreach ($districtsList as $item)

                            <option {{ old('district') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('district')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Thana -->
                <div class="w-full">
                    <label for="thana" class="block text-sm font-semibold text-black mb-1">
                        Thana/Upazila' <span class="text-red-600">*</span>
                    </label>
                    <select name="thana" id="thana"
                            class="required w-full rounded-md select2 border border-gray-300 bg-white text-black py-2 px-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Select Thana/Upazila'</option>
                    </select>
                    @error('thana')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- School -->
                <div class="w-full">
                    <label for="school" class="block text-sm font-semibold text-black mb-1">
                        School <span class="text-red-600">*</span>
                    </label>
                    <select name="school_id" id="school"
                            class="w-full required rounded-md border select2 border-gray-300 bg-white text-black py-2 px-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Select School</option>
                    </select>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('If your school is missing in this list,  ') }}
                        <a href="{{route('schools.create')}}" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                            {{ __(' click here to create it. ') }}
                        </a>
                    </p>
                    @error('school_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="present_address" class="block text-black font-semibold mb-1">
                        Present Address
                    </label>
                    <textarea
                        id="present_address"
                        name="present_address"
                        placeholder="Present Address"
                        class="w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        rows="4"
                    >
                        {{old('present_address')}}
                    </textarea>
                </div>

                <div >
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ __('Profile Photo') }}
                    </label>

                    <input
                        id="image"
                        type="file"
                        accept="image/*"
                        name="profile_image"
                        class="block w-full text-gray-700 bg-white border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                    @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <div class="flex items-center space-x-2 mb-2">
                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                            class="form-checkbox h-5 w-5 text-blue-600 required" checked
                        />
                        <label for="terms" class="text-black font-semibold">
                            I agree to have a FIDE ID
                        </label>
                    </div>

                    @error('terms')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror

                </div>

            </div>


            <div class="flex items-center justify-start mt-5">
                <button type="submit" class="w-40 bg-black hover:bg-black text-white font-semibold py-2 px-4 rounded">
                    {{ __('Create account') }}
                </button>
            </div>


        </form>

        {{-- jQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            let oldDistrict = '{{ old('district') }}';
            let oldThana = '{{ old('thana') }}';
            let oldSchool = '{{ old('school_id') }}';
            let oldPlayers = {!! json_encode(old('players', [])) !!};
            $(function () {
                $('#district').on('change', function () {
                    let districtId = $(this).val();
                    $('#thana').html('<option value="">Loading...</option>');
                    $('#school').html('<option value="">Select School</option>');

                    if (districtId) {
                        $.get('/get-thanas/' + districtId, function (data) {
                            let options = '<option value="">Select Thana</option>';
                            data.forEach(function (item) {
                                if(oldThana == item.id){
                                    options += `<option value="${item.id}" selected>${item.name}</option>`;
                                }else{
                                    options += `<option value="${item.id}">${item.name}</option>`;
                                }
                            });
                            $('#thana').html(options);
                            $('#thana').trigger('change');
                        });
                    } else {
                        $('#thana').html('<option value="">Select Thana</option>');
                    }
                });

                $('#district').trigger('change');

                $('#thana').on('change', function () {
                    let thanaId = $(this).val();
                    $('#school').html('<option value="">Loading...</option>');

                    if (thanaId) {
                        $.get('/get-schools/' + thanaId, function (data) {
                            let options = '<option value="">Select School</option>';
                            data.forEach(function (item) {
                                console.log(oldSchool)
                                if(oldSchool == item.id){
                                    options += `<option value="${item.id}" selected>${item.name}</option>`;
                                }else{
                                    options += `<option value="${item.id}">${item.name}</option>`;
                                }

                            });
                            $('#school').html(options);
                            $('#school').trigger('change');

                        });
                    } else {
                        $('#school').html('<option value="">Select School</option>');
                    }
                });

                $('#school').on('change', function () {
                    let schoolId = $(this).val();
                    $('#playerList').html('<p class="text-sm text-gray-500">Loading players...</p>');

                    if (schoolId) {
                        $.ajax({
                            url: '/get-players/' + schoolId,
                            type: 'GET',
                            success: function (players) {
                                let html = '';
                                if (players.length > 0) {
                                    players.forEach(function (player) {
                                        html += `
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="players[]" value="${player.id}" class="form-checkbox h-5 w-5 text-indigo-600" />
                                    <span class="text-sm text-gray-700">${player.name}</span>
                                </label>
                            `;
                                    });
                                } else {
                                    html = '<p class="text-sm text-red-500">No players found for this school.</p>';
                                }
                                $('#playerList').html(html);
                            },
                            error: function () {
                                $('#playerList').html('<p class="text-sm text-red-500">Failed to load players.</p>');
                            }
                        });
                    } else {
                        $('#playerList').html('');
                    }
                });
            });
        </script>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Ready to create a team? Go to the ') }}
            <a href="{{ route('home') }}" class="text-blue-600 hover:underline dark:text-blue-400">
                {{ __('Team Registration page') }}
            </a>
        </div>


    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
        $('#teamForm').validate({
            rules: {
                district: { required: true },
                thana: { required: true },
                school_id: { required: true },
                'players[]': {
                    required: true,
                    minlength: 4,
                    maxlength: 5
                }
            },
            messages: {
                district: { required: "Please select a district" },
                thana: { required: "Please select a thana/upazila" },
                school_id: { required: "Please select a school" },
                'players[]': {
                    required: "Select at least 4 players",
                    minlength: "Select at least 4 players",
                    maxlength: "You can select up to 5 players"
                }
            },
            errorPlacement: function (error, element) {

            },
            highlight: function (element) {
                if ($(element).hasClass('select2-hidden-accessible')) {
                    $(element).next('.select2').find('.select2-selection').css('border', '1px solid red');
                } else {
                    $(element).addClass('border border-red-500');
                }
            },
            unhighlight: function (element) {
                if ($(element).hasClass('select2-hidden-accessible')) {
                    $(element).next('.select2').find('.select2-selection').css('border', '');
                } else {
                    $(element).removeClass('border border-red-500');
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $('#dob').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoApply": true,
            "autoUpdateInput": false // Prevent default date from appearing
        }, function(start, end, label) {
            // Set the selected date manually
            $('#dob').val(start.format('MM/DD/YYYY'));
            console.log('New date selected: ' + start.format('YYYY-MM-DD'));
        });

        // Optional: Set placeholder and text color to black
        $('#dob').attr('placeholder', 'Select a date').css('color', 'black');


    </script>

@endsection


