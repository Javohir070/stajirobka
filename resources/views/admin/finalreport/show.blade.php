@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="flex justify-between align-center mt-10">

        <h2 class="intro-y text-lg font-medium">{{ $internshipfile->lest_name }} xodim xaqida ma’lumot</h2>


    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
        <table class="table">
            <tbody>

                <div
                    style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                    <div style="font-size:18px;font-weight: 400;">{{ " xodim " . $internshipfile->fish }} xaqida ma’lumot
                    </div>
                    @can('xodim delete edit')
                        <div style="text-align: end;">
                            <a href="{{ route('xodimlar.edit', ['xodimlar' => $internshipfile->id])}}"
                                class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
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
                    <th class="border border-2"
                        style="width: 100%;text-align: center;font-weight: bold; font-size:16px;" colspan="2">Shaxsiy
                        ma’lumotlar</th>
                    <!-- <th class="border border-2" style="width: 50%;">Ma’lumot</th> -->
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">1</th> -->
                    <th class="border border-2" style="width: 50%;">F.I.Sh</th>
                    <th class="border border-2" style="width: 50%;">Kuzatuv kengashida tasdiqlangan muddati</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">2</th> -->
                    <td class="border border-2">
                        {{ $internshipfile->userinfo->firs_name . "  " . $internshipfile->userinfo->last_name . "  " . $internshipfile->userinfo->middle_name }}
                    </td>
                    <td class="border border-2">{{ $internshipfile->order_period }} </td>
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">3</th> -->
                    <th class="border border-2">Kuzatuv kengashining ilovasi</th>
                    <th class="border border-2">Kuzatuv kengashidagi tartib raqami</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">4</th> -->
                    <td class="border border-2">{{ $internshipfile->tracking_app }}</td>
                    <td class="border border-2">{{ $internshipfile->tracking_number }}</t>
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Jamg‘arma Kuzatuv kengashi qarori soni </th>
                    <th class="border border-2">Jamg‘arma Kuzatuv kengashi qarori sanasi</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->tracking_decision_number }}</td>
                    <td class="border border-2">{{ $internshipfile->tracking_decision_date }}</td>
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Agenlik Maxsus ekspert guruhi qarori soni </th>
                    <th class="border border-2">Agenlik Maxsus ekspert guruhi qarori sanasi</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->special_expert_number }}</td>
                    <td class="border border-2">{{ $internshipfile->special_expert_date }}</td>
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Agentlik buyrug‘i soni </th>
                    <th class="border border-2">Agentlik buyrug‘i sanasi</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->agency_order_number }}</td>
                    <td class="border border-2">{{ $internshipfile->agency_order_date }}</td>
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Shartnoma soni </th>
                    <th class="border border-2">Shartnoma sanasi</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->contract_number }}</td>
                    <td class="border border-2">{{ $internshipfile->contract_date }}</td>
                </tr>

                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Summasi </th>
                    <th class="border border-2">To‘lov topshiriqnomasi raqami</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->amount }}</td>
                    <td class="border border-2">{{ $internshipfile->payment_number }}</td>
                </tr>

                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Sanasi </th>
                    <th class="border border-2">Jami moliyalashtirilgan mablag‘ (so‘mda)</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->date }}</td>
                    <td class="border border-2">{{ $internshipfile->total_funding_amount }}</td>
                </tr>

                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Moliyaviy hisobot xati raqami </th>
                    <th class="border border-2">Ilmiy hisobot xati sanasi</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->financial_letter_number }}</td>
                    <td class="border border-2">{{ $internshipfile->financial_letter_date }}</td>
                </tr>

                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Ilmiy hisobot xati raqami </th>
                    <th class="border border-2">Ilmiy hisobot xati sanasi</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->scientific_letter_number }}</td>
                    <td class="border border-2">{{ $internshipfile->scientific_letter_date }}</td>
                </tr>

                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Iqtisod qilingan mablag‘ </th>
                    <th class="border border-2">Jami o‘zlashtirilgan mablag‘</th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->money_saved }}</td>
                    <td class="border border-2">{{ $internshipfile->total_payment }}</td>
                </tr>
                <tr class="bg-gray-200">
                    <!-- <th class="border border-2">5</th> -->
                    <th class="border border-2">Izoh</th>
                    <th class="border border-2"></th>
                </tr>
                <tr>
                    <!-- <th class="border border-2">6</th> -->
                    <td class="border border-2">{{ $internshipfile->sxplanation }}</td>
                    <td class="border border-2"></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
        <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                <div class="absolute left-0 top-0 mt-3 ml-3">
                    <input class="input border border-gray-500" type="checkbox">
                </div>
                <a href="#" class="w-3/5 file__icon file__icon--file mx-auto">
                    <div class="file__icon__file-name">PDF</div>
                </a>
                <a href="" class="block font-medium mt-4 text-center truncate">Kuzatuv xati</a>
                <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical"
                            class="w-5 h-5 text-gray-500"></i> </a>
                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                        <div class="dropdown-box__content box p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                <div class="absolute left-0 top-0 mt-3 ml-3">
                    <input class="input border border-gray-500" type="checkbox">
                </div>
                <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                    <div class="file__icon__file-name">PDF</div>
                </a>
                <a href="" class="block font-medium mt-4 text-center truncate">Ilmiy kengash qarori</a>
                <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical"
                            class="w-5 h-5 text-gray-500"></i> </a>
                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                        <div class="dropdown-box__content box p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                <div class="absolute left-0 top-0 mt-3 ml-3">
                    <input class="input border border-gray-500" type="checkbox">
                </div>
                <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                    <div class="file__icon__file-name">PDF</div>
                </a>
                <a href="" class="block font-medium mt-4 text-center truncate">Ilmiy hisoboti</a>
                <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical"
                            class="w-5 h-5 text-gray-500"></i> </a>
                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                        <div class="dropdown-box__content box p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                <div class="absolute left-0 top-0 mt-3 ml-3">
                    <input class="input border border-gray-500" type="checkbox">
                </div>
                <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                    <div class="file__icon__file-name">PDF</div>
                </a>
                <a href="" class="block font-medium mt-4 text-center truncate">Moliyaviy hisobot</a>
                <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical"
                            class="w-5 h-5 text-gray-500"></i> </a>
                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                        <div class="dropdown-box__content box p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>






</div>
@endsection