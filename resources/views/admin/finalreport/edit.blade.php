@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Tashkilot tahrirlash</h2>



</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST"
            action="{{ route("finalreport.update", ['finalreport' => $finalreport->id])}}"
            class="validate-form" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-12 gap-2">

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> F.I.Sh
                    </label>
                    <select name="user_info_id" value="{{ old('user_info_id') }}" id="science-sub-category"
                        class="input border w-full mt-2" required="">

                        <option value="">F.I.Sh </option>
                        @foreach ($userinfos as $userinfo)
                            <option value="{{ $userinfo->id }}">{{ $userinfo->firs_name }} {{ $userinfo->last_name }}
                                {{ $userinfo->middle_name }}
                            </option>

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
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Kuzatuv xati
                    </label>
                    <input type="file" name="follow_up_letter" value="{{ old('follow_up_letter') }}"
                        class="input w-full border mt-2" required="">
                    @error('follow_up_letter')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ilmiy kengash qarori
                    </label>
                    <input type="file" name="council_decision" value="{{ old('council_decision') }}"
                        class="input w-full border mt-2" required="">
                    @error('council_decision')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Ilmiy hisoboti
                    </label>
                    <input type="file" name="scientific_report" value="{{ old('scientific_report') }}"
                        class="input w-full border mt-2" required="">
                    @error('scientific_report')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Moliyaviy hisobot
                    </label>
                    <input type="file" name="financial_reporting" value="{{ old('financial_reporting') }}"
                        class="input w-full border mt-2" required="">
                    @error('financial_reporting')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </form>
        <div class="px-5 pb-5 mt-3 text-center">
            <a href="{{ route('finalreport.index') }}" class="button delete-cancel w-32 border text-gray-700 mr-1">
                Bekor qilish
            </a>
            <button type="submit" form="science-paper-create-form"
                class="update-confirm button w-24 bg-theme-1 text-white">
                Qo'shish
            </button>
        </div>
    </div>
</div><br>



@endsection