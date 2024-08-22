@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Turlar uchun ma'lumot qo'shish</h2>

</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST" action="{{ route("internshipinfo.store") }}" class="validate-form"
            enctype="multipart/form-data" novalidate="novalidate">
            @csrf

            <div class="grid grid-cols-12 gap-2">

            <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> F.I.Sh
                    </label>
                    <select name="user_info_id" value="{{ old('user_info_id') }}"  class="input border w-full mt-2" required="">

                        <option value="">F.I.Sh </option>
                      @foreach ($userinfos as $userinfo )
                          
                      <option value="{{ $userinfo->id }}">{{ $userinfo->firs_name }} {{ $userinfo->last_name }} {{ $userinfo->middle_name }}</option>

                      @endforeach

                    </select>   
                   @error('user_info_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ishtirok etgan tanlovlar to‘g‘risida ma’lumot
                    </label>
                    <select name="order_number" value="{{ old('order_number') }}"  class="input border w-full mt-2" required="">

                        <option value="">tanlov turini tanlang</option>

                        <option value="Birinchi tanlov ">Birinchi tanlov </option>

                        <option value="Ikkinchi tanlov">Ikkinchi tanlov</option>

                        <option value="Uchinchi tanlov">Uchinchi tanlov</option>

                    </select> 
                    @error('order_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Tanlov turi
                    </label>
                    <select name="selection_type" value="{{ old('selection_type') }}"  class="input border w-full mt-2" required="">

                        <option value="">tanlov turini tanlang</option>

                        <option value="Davriy ">Davriy </option>

                        <option value="Maqsadli">Maqsadli</option>

                    </select> 
                    @error('selection_type')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Tanlovda g‘olib bo‘lgan yil
                    </label>
                    <!-- <input type="text" name="selection_year" value="{{ old('selection_year') }}" class="input w-full border mt-2" required="">   -->

                    <select name="selection_year" value="{{ old('selection_year') }}" class="science-sub-category input border w-full mt-2 " required="">
                    <option value="">yil tanlang</option>
                    </select>

                   @error('selection_year')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Moliyalashtirilgan yili
                    </label>
                    <!-- <input type="text" name="year_funded" value="{{ old('year_funded') }}" class="input w-full border mt-2" required=""> -->
                    <select name="year_funded" value="{{ old('year_funded') }}" class="science-sub-category input border w-full mt-2 " required="">
                    <option value="">yil tanlang</option>
                    </select>

                    @error('year_funded')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Yuborilgan yili
                    </label>
                    <!-- <input type="text"  name="year_of_dispatch" value="{{ old('year_of_dispatch') }}"   class=" input w-full border mt-2" required=""> -->
                    <select name="year_of_dispatch" value="{{ old('year_of_dispatch') }}" class="science-sub-category input border w-full mt-2 " required="">
                    <option value="">yil tanlang</option>
                    </select>
                    @error('year_of_dispatch')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Xorijiy mamlakat
                    </label>
                    <input type="text" name="foreign_country" value="{{ old('foreign_country') }}" class="input w-full border mt-2" required="">
                    @error('foreign_country')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qabul qiluvchi tashkilot
                    </label>
                    <input type="text" name="receiving_organization" value="{{ old('receiving_organization') }}" class="input w-full border mt-2" required="">
                    @error('receiving_organization')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Stajirovka yo‘nalishi
                    </label>
                    <input type="text" name="direction_of_practice" value="{{ old('direction_of_practice') }}" class="input w-full border mt-2" required="">
                    @error('direction_of_practice')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Stajirovka mavzusi
                    </label>
                    <input type="text" name="practice_topic" value="{{ old('practice_topic') }}" class="input w-full border mt-2" required="">
                    @error('practice_topic')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Boshlanish sanasi
                    </label>
                    <input type="date" name="start_date" value="{{ old('start_date') }}" class="input w-full border mt-2" required="">
                    @error('start_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Tugash sanasi
                    </label>
                    <input type="date" name="end_date" value="{{ old('end_date') }}" class="input w-full border mt-2" required="">
                    @error('end_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Stajirovkaga yuborilgan davrdagi Yoshi
                    </label>
                    <!-- <input type="text" name="age" value="{{ old('age') }}" class="input w-full border mt-2" required=""> -->
                    <select name="age" value="{{ old('age') }}" class="age-sub-categoryage input border w-full mt-2 " required="">
                    <option value="">yosh tanlang</option>
                    </select>
                    @error('age')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

            </div>

        </form>
        <div class="px-5 pb-5 mt-3 text-center">
            <a href="{{ route('internshipinfo.index') }}"  class="button delete-cancel w-32 border text-gray-700 mr-1">
                Bekor qilish
            </a>
            <button type="submit" form="science-paper-create-form"
                class="update-confirm button w-24 bg-theme-1 text-white">
                Qo'shish
            </button>
        </div>
    </div>
</div>

<script>
    // Boshlang'ich va tugash yillari
    var startYear = 2000;
    var endYear = 2024;

    // Barcha class nomi 'science-sub-category' bo'lgan select elementlarini olish
    var selects = document.getElementsByClassName('science-sub-category');

    // Har bir select elementi uchun sikl
    for (var i = 0; i < selects.length; i++) {
        var select = selects[i];

        // Har bir select elementi uchun yillarni qo'shish
        for (var year = endYear; year >= startYear; year--) {
            var option = document.createElement('option');
            option.value = year;
            option.text = year;
            option.className = 'year-option'; // Class qo'shish
            select.appendChild(option);
        }
    }
</script>

<script>
    // Boshlang'ich va tugash yillari
    var startAge = 18;
    var endAge = 50;

    // Barcha class nomi 'science-sub-category' bo'lgan select elementlarini olish
    var selects = document.getElementsByClassName('age-sub-categoryage');

    // Har bir select elementi uchun sikl
    for (var i = 0; i < selects.length; i++) {
        var select = selects[i];

        // Har bir select elementi uchun yillarni qo'shish
        for (var year = endAge; year >= startAge; year--) {
            var option = document.createElement('option');
            option.value = year;
            option.text = year;
            option.className = 'age-option'; // Class qo'shish
            select.appendChild(option);
        }
    }
</script>

@endsection