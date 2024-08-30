@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="flex justify-between align-center mt-10">

        <h2 class="intro-y text-lg font-medium">{{ $additionalfunding->lest_name }} xodim xaqida ma’lumot</h2>

        
    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
            <table class="table">
                <tbody>

                    <div style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                        <div style="font-size:18px;font-weight: 400;">{{ " xodim ". $additionalfunding->fish }}  xaqida ma’lumot</div>
                        @can('xodim delete edit')
                            <div style="text-align: end;">
                                <a href="{{ route('xodimlar.edit',['xodimlar'=>$additionalfunding->id])}}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                Tahrirlash
                                </a>
                                <a href="" class="button w-24 bg-theme-6 text-white">
                                    O'chirish
                                </a>
                            </div>     
                        @endcan
                    </div>

                        <tr>
                            <!-- <th class="border border-2" style="width: 40px;">#</th> -->
                            <th class="border border-2" style="width: 100%;text-align: center;font-weight: bold; font-size:16px;" colspan="2">Shaxsiy ma’lumotlar</th>
                            <!-- <th class="border border-2" style="width: 50%;">Ma’lumot</th> -->
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">1</th> -->
                            <th class="border border-2" style="width: 50%;">F.I.Sh</th>
                            <th class="border border-2" style="width: 50%;">Qo‘shimcha moliyalashtirilgan mablag‘ Summasi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">2</th> -->
                            <td class="border border-2"> {{ $additionalfunding->userinfo->firs_name ."  ". $additionalfunding->userinfo->last_name . "  " . $additionalfunding->userinfo->middle_name }}</td>
                            <td class="border border-2">{{ $additionalfunding->additional_amount }} </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">3</th> -->
                            <th class="border border-2" > Qo‘shimcha moliyalashtirilgan To‘lov topshiriqnomasi raqami</th>
                            <th class="border border-2">Qo‘shimcha moliyalashtirilgan mablag‘ sanasi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">4</th> -->
                            <td class="border border-2" >{{ $additionalfunding->additional_charge_number }}</td>
                            <td class="border border-2">{{ $additionalfunding->additional_date }}</t>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Qo‘shimcha moliyalashtirilgan Jami moliyalashtirilgan mablag‘ so‘mda</th>
                            <th class="border border-2">Hisobot xati raqami</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->total_funding }}</td>
                            <td class="border border-2">{{ $additionalfunding->report_letter_number }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Hisobot xati sanasi</th>
                            <th class="border border-2"> Iqtisod qilingan mablag‘ so'm</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->report_letter_date }}</td>
                            <td class="border border-2">{{ $additionalfunding->money_saved_sum }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Iqtisod qilingan mablag‘ boshqa</th>
                            <th class="border border-2"> Qaytarilgan mablag‘ summasi</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->money_saved_boshqa }}</td>
                            <td class="border border-2">{{ $additionalfunding->refund_amount }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Qaytarilgan mablag‘ summasi</th>
                            <th class="border border-2"> Qaytarilgan mablag‘ sanasi</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->returned_currency }}</td>
                            <td class="border border-2">{{ $additionalfunding->return_date }}</td>
                        </tr>

                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2"> Qo‘shimcha qaytarilgan mablag‘ summasi</th>
                            <th class="border border-2">  Qo‘shimcha qaytarilgan mablag‘ valyutasi</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->additional_refund_amount }}</td>
                            <td class="border border-2">{{ $additionalfunding->additional_returned_currency }}</td>
                        </tr>

                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Qo‘shimcha qaytarilgan mablag‘ sanasi</th>
                            <th class="border border-2"> Qo‘shimcha qaytarilgan mablag‘ Jami iqtisod qilingan mablag‘ so‘mda</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->additional_refund_date }}</td>
                            <td class="border border-2">{{ $additionalfunding->additional_refund_total }}</td>
                        </tr>

                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Jami o‘zlashtirilgan mablag‘ so‘mda</th>
                            <th class="border border-2"> </th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $additionalfunding->total_payment }}</td>
                            <td class="border border-2"></td>
                        </tr>
                        
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection