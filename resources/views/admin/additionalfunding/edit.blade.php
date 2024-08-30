@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Qo‘shimcha moliyalashtirilgan tahrirlash</h2>



</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST"
            action="{{ route("additionalfunding.update", ['additionalfunding' => $additionalfunding->id])}}" class="validate-form"
            enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PUT')
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
                    <select name="order_number" value="{{ old('order_number') }}"  class="input border w-full mt-2" required=""order_number>

                        <option value="">tanlov turini tanlang</option>

                        <option value="1">Birinchi tanlov </option>

                        <option value="2">Ikkinchi tanlov</option>

                        <option value="3">Uchinchi tanlov</option>

                    </select> 
                    @error('order_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha moliyalashtirilgan mablag‘ Summasi
                    </label>
                    <input type="text" name="additional_amount" value="{{ $additionalfunding->additional_amount }}" class="input w-full border mt-2" required="">
                    @error('additional_amount')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha moliyalashtirilgan To‘lov topshiriqnomasi raqami
                    </label>
                    <input type="text" name="additional_charge_number" value="{{ $additionalfunding->additional_charge_number }}" class="input w-full border mt-2" required="">
                    @error('additional_charge_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha moliyalashtirilgan mablag‘ sanasi
                    </label>
                    <input type="date" name="additional_date" value="{{ $additionalfunding->additional_date }}" class="input w-full border mt-2" required="">
                    @error('additional_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha moliyalashtirilgan Jami moliyalashtirilgan mablag‘ so‘mda
                    </label>
                    <input type="text" name="total_funding" value="{{ $additionalfunding->total_funding }}" class="input w-full border mt-2" required="">
                    @error('total_funding')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Hisobot xati raqami
                    </label>
                    <input type="text" name="report_letter_number" value="{{ $additionalfunding->report_letter_number }}" class="input w-full border mt-2" required="">
                    @error('report_letter_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Hisobot xati sanasi
                    </label>
                    <input type="date" name="report_letter_date" value="{{ $additionalfunding->report_letter_date }}" class="input w-full border mt-2" required="">
                    @error('report_letter_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Iqtisod qilingan mablag‘ so'm
                    </label>
                    <input type="text" name="money_saved_sum" value="{{ $additionalfunding->money_saved_sum }}" class="input w-full border mt-2" required="">
                    @error('money_saved_sum')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Iqtisod qilingan mablag‘ boshqa
                    </label>
                    <input type="text" name="money_saved_boshqa" value="{{ $additionalfunding->money_saved_boshqa }}" class="input w-full border mt-2" required="">
                    @error('money_saved_boshqa')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qaytarilgan mablag‘ summasi
                    </label>
                    <input type="text" name="refund_amount" value="{{ $additionalfunding->refund_amount }}" class="input w-full border mt-2" required="">
                    @error('refund_amount')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qaytarilgan mablag‘ valyutasi
                    </label>
                    <input type="text" name="returned_currency" value="{{ $additionalfunding->returned_currency }}" class="input w-full border mt-2" required="">
                    @error('returned_currency')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qaytarilgan mablag‘ sanasi
                    </label>
                    <input type="date" name="return_date" value="{{ $additionalfunding->return_date }}" class="input w-full border mt-2" required="">
                    @error('return_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha qaytarilgan mablag‘ summasi
                    </label>
                    <input type="text" name="additional_refund_amount" value="{{ $additionalfunding->additional_refund_amount }}" class="input w-full border mt-2" required="">
                    @error('additional_refund_amount')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha qaytarilgan mablag‘ valyutasi
                    </label>
                    <input type="text" name="additional_returned_currency" value="{{ $additionalfunding->additional_returned_currency }}" class="input w-full border mt-2" required="">
                    @error('additional_returned_currency')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha qaytarilgan mablag‘ sanasi
                    </label>
                    <input type="date" name="additional_refund_date" value="{{ $additionalfunding->additional_refund_date }}" class="input w-full border mt-2" required="">
                    @error('additional_refund_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Qo‘shimcha qaytarilgan mablag‘ Jami iqtisod qilingan mablag‘ so‘mda
                    </label>
                    <input type="date" name="additional_refund_total" value="{{ $additionalfunding->additional_refund_total }}" class="input w-full border mt-2" required="">
                    @error('additional_refund_total')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jami o‘zlashtirilgan mablag‘ so‘mda
                    </label>
                    <input type="dste" name="total_payment" value="{{ $additionalfunding->total_payment }}" class="input w-full border mt-2" required="">
                    @error('total_payment')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </form>
        <div class="px-5 pb-5 mt-3 text-center">
            <a href="{{ route('userinfo.index') }}" class="button delete-cancel w-32 border text-gray-700 mr-1">
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