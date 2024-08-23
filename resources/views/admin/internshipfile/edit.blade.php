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
            action="{{ route("internshipfile.update", ['internshipfile' => $internshipfile->id])}}"
            class="validate-form" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-12 gap-2">

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> F.I.Sh
                    </label>
                    <select name="user_info_id" value="{{ $internshipfile->user_info_id }}" id="science-sub-category"
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
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Kuzatuv kengashida tasdiqlangan
                        muddati
                    </label>
                    <input type="text" name="order_period" value="{{ $internshipfile->order_period }}"
                        class="input w-full border mt-2" required="">
                    @error('order_period')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Kuzatuv kengashining ilovasi
                    </label>
                    <input type="text" name="tracking_app" value="{{ $internshipfile->tracking_app }}"
                        class="input w-full border mt-2" required="">
                    @error('tracking_app')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Kuzatuv kengashidagi tartib raqami
                    </label>
                    <input type="text" name="tracking_number" value="{{ $internshipfile->tracking_number }}"
                        class="input w-full border mt-2" required="">
                    @error('tracking_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jamg‘arma Kuzatuv kengashi qarori
                        soni
                    </label>
                    <input type="text" name="tracking_decision_number" value="{{ $internshipfile->tracking_decision_number }}"
                        class="input w-full border mt-2" required="">
                    @error('tracking_decision_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jamg‘arma Kuzatuv kengashi qarori
                        sanasi
                    </label>
                    <input type="text" name="tracking_decision_date" value="{{ $internshipfile->tracking_decision_date }}"
                        class="input w-full border mt-2" required="">
                    @error('tracking_decision_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Agenlik Maxsus ekspert guruhi qarori
                        soni
                    </label>
                    <input type="text" name="special_expert_number" value="{{ $internshipfile->special_expert_number }}"
                        class="input w-full border mt-2" required="">
                    @error('special_expert_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Agenlik Maxsus ekspert guruhi qarori
                        sanasi
                    </label>
                    <input type="date" name="special_expert_date" value="{{ $internshipfile->special_expert_date }}"
                        class="input w-full border mt-2" required="">
                    @error('special_expert_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Agentlik buyrug‘i soni
                    </label>
                    <input type="text" name="agency_order_number" value="{{ $internshipfile->agency_order_number }}"
                        class="input w-full border mt-2" required="">
                    @error('agency_order_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Agentlik buyrug‘i sanasi
                    </label>
                    <input type="text" name="agency_order_date" value="{{ $internshipfile->agency_order_date }}"
                        class="input w-full border mt-2" required="">
                    @error('agency_order_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Shartnoma soni
                    </label>
                    <input type="text" name="contract_number" value="{{ $internshipfile->contract_number }}"
                        class="input w-full border mt-2" required="">
                    @error('contract_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Shartnoma sanasi
                    </label>
                    <input type="text" name="contract_date" value="{{ $internshipfile->contract_date }}"
                        class="input w-full border mt-2" required="">
                    @error('contract_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Summasi
                    </label>
                    <input type="text" name="amount" value="{{ $internshipfile->amount }}" class="input w-full border mt-2"
                        required="">
                    @error('amount')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> To‘lov topshiriqnomasi raqami
                    </label>
                    <input type="text" name="payment_number" value="{{ $internshipfile->payment_number }}"
                        class=" input w-full border mt-2" required="">
                    @error('payment_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Sanasi
                    </label>
                    <input type="text" name="date" value="{{ $internshipfile->date }}" class="input w-full border mt-2"
                        required="">
                    @error('date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jami moliyalashtirilgan mablag‘
                        (so‘mda)
                    </label>
                    <input type="text" name="total_funding_amount" value="{{ $internshipfile->total_funding_amount }}"
                        class="input w-full border mt-2" required="">
                    @error('total_funding_amount')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Moliyaviy hisobot xati raqami
                    </label>
                    <input type="text" name="financial_letter_number" value="{{ $internshipfile->financial_letter_number }}"
                        class="input w-full border mt-2" required="">
                    @error('financial_letter_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Moliyaviy hisobot xati sanasi
                    </label>
                    <input type="text" name="financial_letter_date" value="{{ $internshipfile->financial_letter_date }}"
                        class="input w-full border mt-2" required="">
                    @error('financial_letter_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ilmiy hisobot xati raqami
                    </label>
                    <input type="text" name="scientific_letter_number" value="{{ $internshipfile->scientific_letter_number }}"
                        class="input w-full border mt-2" required="">
                    @error('scientific_letter_number')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Ilmiy hisobot xati sanasi
                    </label>
                    <input type="text" name="scientific_letter_date" value="{{ $internshipfile->scientific_letter_date }}"
                        class="input w-full border mt-2" required="">
                    @error('scientific_letter_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Iqtisod qilingan mablag‘
                    </label>
                    <input type="text" name="money_saved" value="{{ $internshipfile->money_saved }}"
                        class="input w-full border mt-2" required="">
                    @error('money_saved')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Jami o‘zlashtirilgan mablag‘
                    </label>
                    <input type="text" name="total_payment" value="{{ $internshipfile->total_payment }}"
                        class="input w-full border mt-2" required="">
                    @error('total_payment')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Buyurtmachi tomonidan Agentlikka yuboriladigan kafolat xati, xarajatlar asosnomasi, taklifnoma va dastur
                    </label>
                    <input type="file" name="proposal_and_program_file" value="{{ old('proposal_and_program_file') }}"
                        class="input w-full border mt-2" required="">
                    @error('proposal_and_program_file')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>  Ilmiy stajirovka bo‘yicha 4 tomonlama shartnoma
                    </label>
                    <input type="file" name="quadripartite_agreement_file" value="{{ old('quadripartite_agreement_file') }}"
                        class="input w-full border mt-2" required="">
                    @error('quadripartite_agreement_file')
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