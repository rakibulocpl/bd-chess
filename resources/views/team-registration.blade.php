@extends('layouts.public')
@section('content')
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
<div class="flex flex-col gap-6 bg-white">
    <x-public-header :title="__('Create a Team')" :description="__('Enter your team details below to create your team')" />

    <p class="text-center text-blue-500">*** Multiple teams from the same school can register. ***</p>

    @session('success')
    <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
        </svg>
        <span class="font-medium"> {{ $value }} </span>
    </div>
    @endsession
    <form method="POST" action="{{ route('teams.store') }}" id="teamForm">
        <p class="text-red-400"> All red star-marked fields must be filled.</p>
        @csrf


        <div class="w-full p-1 grid grid-cols-1 xl:grid-cols-2 gap-x-4 gap-y-4">

            <!-- District -->
            <div class="w-full">
                <label for="district" class="block text-md font-semibold text-black mb-1">
                    District <span class="text-red-600">*</span>
                </label>
                <select name="district" id="district"
                        class="w-full select2 rounded-md border border-gray-300 bg-white text-black py-2 px-3 shadow-sm required">
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
                <label for="thana" class="block text-md font-semibold text-black mb-1">
                    Thana/Upazila' <span class="text-red-600">*</span>
                </label>
                <select name="thana" id="thana"
                        class="required w-full rounded-md select2 border border-gray-300 bg-white text-black py-2 px-3 shadow-sm">
                    <option value="">Select Thana/Upazila'</option>
                </select>
                @error('thana')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- School -->
            <div class="w-full">
                <label for="school" class="block text-md font-semibold text-black mb-1">
                    School <span class="text-red-600">*</span>
                </label>
                <select name="school_id" id="school"
                        class="w-full required rounded-md border select2 border-gray-300 bg-white text-black py-2 px-3 shadow-sm">
                    <option value="">Select School</option>
                </select>
                @error('school_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Mentor Name -->
            <div class="w-full">
                <label for="mentor_name" class="block text-md font-semibold text-black mb-1">
                    Mentor's Name
                </label>
                <input type="text" name="mentor_name" id="mentor_name" placeholder="Enter Mentor's Name"
                       class="w-full rounded-md border border-gray-300 bg-white text-black py-1 px-3 shadow-sm placeholder-gray-500" />
                <p class="text-sm text-blue-700 font-semibold mb-2 italic">
                    Please recommend this mentor as a teacher from your school.
                </p>

                @error('mentor_name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Players -->
            <div class="w-full mt-4">
                <label class="block text-md font-semibold text-black ">
                    Players <span class="text-red-600">*</span>
                </label>
                <p class="text-sm text-blue-700 font-semibold mb-2 italic">
                    Each team must have 4 players of which one player must be below 12 years of age on 1st January 2025. You may also add 1 extra (substitute) player.
                </p>
                <div id="playerList" class="space-y-2">
                    <!-- Player checkboxes will be dynamically appended here -->

                </div>
                @error('players')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


        </div>


       <div class="flex items-center justify-center">
         <button type="submit" style="cursor: pointer"
                class="w-32 mt-5 bg-black hover:bg-black text-white  py-2 px-4 rounded-lg shadow-md transition duration-300">
            Submit
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
                                    const isChecked = oldPlayers.includes(player.id) ? 'checked' : '';
                                    const isCaptain = '{{ old('captain_id') }}' == player.id ? 'checked' : '';
                                    html += `
                                        <div class="flex items-center gap-4">
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox" name="players[]" value="${player.id}" class="form-checkbox h-5 w-5 text-indigo-600" ${isChecked}/>
                                                <span class="text-sm text-gray-700">${player.name}</span>
                                            </label>
                                            <label class="flex items-center space-x-1">
                                                <input type="radio" name="captain_id" value="${player.id}" class="form-radio text-blue-600 required" ${isCaptain} />
                                                <span class="text-xs text-gray-600 italic">Captain</span>
                                            </label>
                                        </div>
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
        {{ __('You need to register as an individual before creating a team.') }}
        <a href="{{ route('application.applicantRegister') }}" class="text-blue-600 hover:underline">
            {{ __('Register here.') }}
        </a>
    </div>

</div>

@endsection

@section('scripts')
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
                    if (element.hasClass('select2-hidden-accessible')) {
                        error.insertAfter(element.next('.select2')); // place after Select2 container
                    } else {
                        error.insertAfter(element);
                    }
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

        </script>

@endsection


