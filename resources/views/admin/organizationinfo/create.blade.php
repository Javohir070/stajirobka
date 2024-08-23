@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Tashkilotlar uchun ma'lumot qo'shish</h2>

</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST" action="{{ route("organizationinfo.store") }}" class="validate-form"
            enctype="multipart/form-data" novalidate="novalidate">
            @csrf

            <div class="grid grid-cols-12 gap-2">

            <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> F.I.Sh
                    </label>
                    <select name="user_info_id" value="{{ old('user_info_id') }}" id="science-sub-category" class="input border w-full mt-2" required="">

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

                        <option value="Birinchi tanlov">Birinchi tanlov </option>

                        <option value="Ikkinchi tanlov">Ikkinchi tanlov</option>

                        <option value="Uchinchi tanlov">Uchinchi tanlov</option>

                    </select> 
                    @error('order_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Yuqori turuvchi muassasa
                    </label>
                    <input type="text" name="higher_organization" value="{{ old('higher_organization') }}" class="input w-full border mt-2" required="">
                    @error('higher_organization')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Muassasa turi
                    </label>
                    <select name="organization_type" value="{{ old('organization_type') }}" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="">muassasa turini tanlang</option>

                        <option value="Oliy ta’lim">Oliy ta’lim</option>

                        <option value="Ilmiy tadqiqot muassasi">Ilmiy tadqiqot muassasi</option>

                    </select>   
                   @error('organization_type')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Muassasa nomi
                    </label>
                    <input type="text" name="organization_name" value="{{ old('organization_name') }}" class="input w-full border mt-2" required="">
                    @error('organization_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Lavozimi
                    </label>
                    <input type="text"  name="position" value="{{ old('position') }}"   class=" input w-full border mt-2" required="">
                    @error('position')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> STIR
                    </label>
                    <input type="text" name="STIR" value="{{ old('STIR') }}" class="input w-full border mt-2" required="">
                    @error('STIR')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Joylashgan viloyati
                    </label>
                    <select id="viloyat" name="region"  value="{{ old('region') }}" id="science-sub-category" class="input border w-full mt-2" required="">

                    <option value="">Viloyatni tanlang</option>
                    @foreach($viloyatlar as $viloyat)
                        <option value="{{ $viloyat->viloyat_id }}">{{ $viloyat->viloyat_nomi }}</option>
                    @endforeach

                    </select>
                    @error('region')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Joylashgan tumani
                    </label>
                    <select id="tuman" name="district" class="input border w-full mt-2">
                        <option value="">Avval viloyatni tanlang</option>
                    </select>
                    @error('district')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

            </div>

        </form>
        <div class="px-5 pb-5 mt-3 text-center">
            <a href="{{ route('userinfo.index') }}"  class="button delete-cancel w-32 border text-gray-700 mr-1">
                Bekor qilish
            </a>
            <button type="submit" form="science-paper-create-form"
                class="update-confirm button w-24 bg-theme-1 text-white">
                Qo'shish
            </button>
        </div>
    </div>
</div>



@endsection