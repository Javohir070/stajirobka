@extends('layouts.admin')
@section('content')
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
        <form method="POST" action="/photo_change/" enctype="multipart/form-data">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <label for="change_photo">
                        <img alt="profile image" id="profile_image" style="height: 100%; object-fit: cover"
                            class="rounded-full" src=" {{ asset('storage/' . $userinfo->image) }}">
                    </label>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                        {{ $userinfo->firs_name }} {{ $userinfo->last_name }} {{ $userinfo->middle_name }}
                    </div>
                    <div class="text-gray-600">Ilmiy darajasi : {{ $userinfo->academic_degree }}</div>
                    <div class="text-gray-600">Chet tili sertifikati : {{ $userinfo->certificate }}</div>
                    <div class="text-gray-600"></div>
                </div>
            </div>
        </form>
        <div
            class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="truncate sm:whitespace-normal flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home w-4 h-4 mr-2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                JSHSHIR : {{ $userinfo->jshshri }}
            </div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home w-4 h-4 mr-2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Tug‘ilgan sanasi : {{ \Carbon\Carbon::parse($userinfo->birthday)->format('d-m-Y') }}
            </div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-phone w-4 h-4 mr-2">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                    </path>
                </svg>
                Telefon raqami : {{ $userinfo->phone }}
            </div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-mail w-5 h-4 mr-2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                Jinsi : {{ $userinfo->gender }}
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
            <div class="text-center rounded-md w-20 py-3">
                <div class="font-semibold text-theme-1 text-lg">0</div>
                <div class="text-gray-600">Xodimlar</div>
            </div>
            <div class="text-center rounded-md w-40 py-3">
                <div class="font-semibold text-theme-1 text-lg">0</div>
                <div class="text-gray-600">Ilmiy loyihalar</div>
            </div>
            <div class="text-center rounded-md w-40 py-3">
                <div class="font-semibold text-theme-1 text-lg">0</div>
                <div class="text-gray-600">Xo'jalik loyihalar</div>
            </div>
        </div>
    </div>
    <div class="nav-tabs flex flex-col sm:flex-row justify-center lg:justify-start">
        <a data-toggle="tab" data-target="#buyurtmachi_tashkiloti" href="javascript:;"
            class="py-4 sm:mr-8 flex items-center active">
            <i data-feather="file-text"></i> Buyurtmachi tashkiloti
        </a>
        <a data-toggle="tab" data-target="#tanlov_malumot" href="javascript:;" class="py-4 sm:mr-8 flex items-center ">
            <i data-feather="file-text"></i> Tanlov to‘g‘risida ma’lumot
        </a>
        <a data-toggle="tab" data-target="#moliyalashtirish" href="javascript:;"
            class="py-4 sm:mr-8 flex items-center ">
            <i data-feather="file-text"></i> Moliyalashtirish to‘g‘risida ma’lumot
        </a>
        <a data-toggle="tab" data-target="#yakuniy_hisobot" href="javascript:;" class="py-4 sm:mr-8 flex items-center">
            <i data-feather="file-text"></i>
            Yakuniy hisobot
        </a>
    </div>
</div>
@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="tab-content mt-5">
    <div class="tab-content__pane active" id="buyurtmachi_tashkiloti">
        <!-- BEGIN: Change Password -->
        @forelse ($organizationinfos as $organizationinfo)
            
            <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
                <table class="table">
                    <tbody>
                        <div
                            style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                            <div style="font-size:18px;font-weight: 400;">Buyurtmachi tashkiloti xaqida ma’lumot {{$organizationinfo->order_number}}</div>
                            <div style="text-align: end;">
                                <a href="{{ route('organizationinfo.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                    Qo'shish
                                </a>
                                <a href="{{ route('organizationinfo.edit', ['organizationinfo' => $organizationinfo->id])}}"
                                    class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                    Tahrirlash
                                </a>
                                 <form action="{{ route('organizationinfo.destroy',['organizationinfo'=>$organizationinfo->id]) }}" style="display: inline;" method="post" onsubmit="return confirm(' Rostan Ochirishni hohlaysizmi?');">
                                    <button type="submit" class="button w-24 bg-theme-6 text-white" >
                                    @csrf
                                    @method("DELETE")
                                        O'chirish
                                    </button>
                                </form>
                            </div>
                        </div>
                        <tr>
                            <!-- <th class="border border-2" style="width: 40px;">#</th> -->
                            <th class="border border-2"
                                style="width: 100%;text-align: center;font-weight: bold; font-size:16px;" colspan="2">
                                Ma’lumotlar</th>
                            <!-- <th class="border border-2" style="width: 50%;">Ma’lumot</th> -->
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">1</th> -->
                            <th class="border border-2" style="width: 50%;">F.I.Sh</th>
                            <th class="border border-2" style="width: 50%;">Yuqori turuvchi muassasa</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">2</th> -->
                            <td class="border border-2">
                                {{ $organizationinfo->userinfo->firs_name . "  " . $organizationinfo->userinfo->last_name . "  " . $organizationinfo->userinfo->middle_name }}
                            </td>
                            <td class="border border-2">{{ $organizationinfo->higher_organization }} </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">3</th> -->
                            <th class="border border-2">Muassasa turi</th>
                            <th class="border border-2">Muassasa nomi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">4</th> -->
                            <td class="border border-2">{{ $organizationinfo->organization_type }}</td>
                            <td class="border border-2">{{ $organizationinfo->organization_name }}</t>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Lavozimi</th>
                            <th class="border border-2">STIR</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $organizationinfo->position }}</td>
                            <td class="border border-2">{{ $organizationinfo->STIR }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Joylashgan hududi</th>
                            <th class="border border-2">Joylashgan tumani</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $organizationinfo->region }}</td>
                            <td class="border border-2">{{ $organizationinfo->district }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        @empty
        <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
            <div style="display: flex;justify-content: space-between;">
                <div style="font-size:18px;font-weight: 400;">Buyurtmachi tashkiloti xaqida ma’lumot </div>
                <div style="text-align: end;">
                    <a href="{{ route('organizationinfo.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                        Qo'shish
                    </a>
                </div>
            </div>
        </div>    
        @endforelse

        <!-- END: Change Password -->
    </div>
    <div class="tab-content__pane" id="tanlov_malumot">
        <!-- BEGIN: Change Password -->
        @forelse ($internshipinfos as $internshipinfo)
            
            <div class="overflow-x-auto"
                style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
                <table class="table">
                    <tbody>
                        <div
                            style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                            <div style="font-size:18px;font-weight: 400;"> Tanlov to‘g‘risida ma’lumot {{$internshipinfo->order_number}}</div>
                            <div style="text-align: end;">
                                <a href="{{ route('internshipinfo.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                    Qo'shish
                                </a>
                                <a href="{{ route('internshipinfo.edit', ['internshipinfo' => $internshipinfo->id])}}"
                                    class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                    Tahrirlash
                                </a>
                                <form action="{{ route('internshipinfo.destroy',['internshipinfo'=>$internshipinfo->id]) }}" style="display: inline;" method="post" onsubmit="return confirm(' Rostan Ochirishni hohlaysizmi?');">
                                    <button type="submit" class="button w-24 bg-theme-6 text-white" >
                                    @csrf
                                    @method("DELETE")
                                        O'chirish
                                    </button>
                                </form>
                            </div>
                        </div>
                        <tr>
                            <!-- <th class="border border-2" style="width: 40px;">#</th> -->
                            <th class="border border-2"
                                style="width: 100%;text-align: center;font-weight: bold; font-size:16px;" colspan="2">
                                Shaxsiy ma’lumotlar</th>
                            <!-- <th class="border border-2" style="width: 50%;">Ma’lumot</th> -->
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">1</th> -->
                            <th class="border border-2" style="width: 50%;">F.I.Sh</th>
                            <th class="border border-2" style="width: 50%;">Tanlov turi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">2</th> -->
                            <td class="border border-2">
                                {{ $internshipinfo->userinfo->firs_name . "  " . $internshipinfo->userinfo->last_name . "  " . $internshipinfo->userinfo->middle_name }}
                            </td>
                            <td class="border border-2">{{ $internshipinfo->selection_type }} </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">3</th> -->
                            <th class="border border-2">Tanlovda g‘olib bo‘lgan yil</th>
                            <th class="border border-2">Moliyalashtirilgan yili</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">4</th> -->
                            <td class="border border-2">{{ $internshipinfo->selection_year }}</td>
                            <td class="border border-2">{{ $internshipinfo->year_funded }}</t>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Yuborilgan yili</th>
                            <th class="border border-2">Xorijiy mamlakat</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->year_of_dispatch }}</td>
                            <td class="border border-2">{{ $internshipinfo->foreign_country }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Qabul qiluvchi tashkilot</th>
                            <th class="border border-2">Stajirovka yo‘nalishi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->receiving_organization }}</td>
                            <td class="border border-2">{{ $internshipinfo->direction_of_practice }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Stajirovka mavzusi</th>
                            <th class="border border-2">Boshlanish sanasi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->practice_topic }}</td>
                            <td class="border border-2">{{ $internshipinfo->start_date }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Tugash sanasi</th>
                            <th class="border border-2">Stajirovkaga yuborilgan davrdagi Yoshi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->end_date }}</td>
                            <td class="border border-2">{{ $internshipinfo->age }}</td>
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
            </div>

        @empty
            <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
                <div style="display: flex;justify-content: space-between;">
                    <div style="font-size:18px;font-weight: 400;">Tanlov to‘g‘risida ma’lumot </div>
                    <div style="text-align: end;">
                        <a href="{{ route('internshipinfo.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                            Qo'shish
                        </a>
                    </div>
                </div>
            </div> 
        @endforelse

        <!-- END: Change Password -->
    </div>
    <div class="tab-content__pane" id="moliyalashtirish">
        <!-- BEGIN: Change Password -->
       @forelse ($internshipfiles as $internshipfile)

        <div class="overflow-x-auto"
            style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
            <table class="table">
                <tbody>
                    <div
                        style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                        <div style="font-size:18px;font-weight: 400;"> Moliyalashtirish to‘g‘risida ma’lumotlar {{$internshipfile->order_number}}
                        </div>
                        <div style="text-align: end;">
                            <a href="{{ route('internshipfile.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                Qo'shish
                            </a>
                            <a href="{{ route('internshipfile.edit',['internshipfile'=>$internshipfile->id]) }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                                Tahrirlash
                            </a>
                            <form action="{{ route('internshipfile.destroy',['internshipfile'=>$internshipfile->id]) }}" style="display: inline;" method="post" onsubmit="return confirm(' Rostan Ochirishni hohlaysizmi?');">
                                <button type="submit" class="button w-24 bg-theme-6 text-white" >
                                @csrf
                                @method("DELETE")
                                    O'chirish
                                </button>
                            </form>
                        </div>
                    </div>
                    <tr>
                        <!-- <th class="border border-2" style="width: 40px;">#</th> -->
                        <th class="border border-2"
                            style="width: 100%;text-align: center;font-weight: bold; font-size:16px;" colspan="2">
                            Shaxsiy
                            ma’lumotlar
                        </th>
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
                            {{ $userinfo->firs_name . "  " . $userinfo->last_name . "  " . $userinfo->middle_name }}
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
                </tbody>
            </table>
        </div>
        <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                    <div class="absolute left-0 top-0 mt-3 ml-3">
                        <input class="input border border-gray-500" type="checkbox">
                    </div>
                    <a href="{{ asset('storage/'.$internshipfile->proposal_and_program_file) }}" target="_blank" class="w-3/5 file__icon file__icon--file mx-auto">
                        <div class="file__icon__file-name">PDF</div>
                    </a>
                    <a href="" class="block font-medium mt-4 text-center truncate">Buyurtmachi tomonidan Agentlikka yuboriladigan kafolat xati, xarajatlar asosnomasi, taklifnoma va dastur</a>
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
                    <a href="{{ asset('storage/'.$internshipfile->quadripartite_agreement_file) }}" target="_blank" class="w-3/5 file__icon file__icon--file mx-auto">
                        <div class="file__icon__file-name">PDF</div>
                    </a>
                    <a href="" class="block font-medium mt-4 text-center truncate">Ilmiy stajirovka bo‘yicha 4 tomonlama shartnoma</a>
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
           
       @empty
            <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
                <div style="display: flex;justify-content: space-between;">
                    <div style="font-size:18px;font-weight: 400;">Moliyalashtirish to‘g‘risida ma’lumotlar  </div>
                    <div style="text-align: end;">
                        <a href="{{ route('internshipfile.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                            Qo'shish
                        </a>
                    </div>
                </div>
            </div> 
       @endforelse

        <!-- END: Change Password -->
    </div>
    <div class="tab-content__pane " id="yakuniy_hisobot">
        @forelse ($finalreports as $finalreport )
        
            <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
                <div
                    style="display: flex;justify-content: space-between;  ">
                    <div style="font-size:18px;font-weight: 400;"> Yakuniy hisobot filelar {{$finalreport->order_number}}
                    </div>
                    <div style="text-align: end;">
                        <a href="{{ route('finalreport.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                            Qo'shish
                        </a>
                        <a href="{{ route('finalreport.edit',['finalreport'=>$finalreport->id]) }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                            Tahrirlash
                        </a>
                        <form action="{{ route('finalreport.destroy',['finalreport'=>$finalreport->id]) }}" style="display: inline;" method="post" onsubmit="return confirm(' Rostan Ochirishni hohlaysizmi?');">
                            <button type="submit" class="button w-24 bg-theme-6 text-white" >
                            @csrf
                            @method("DELETE")
                                O'chirish
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="{{ asset('storage/'.$finalreport->follow_up_letter) }}" target="_blank" class="w-3/5 file__icon file__icon--file mx-auto">
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
                        <a href="{{ asset('storage/'.$finalreport->council_decision) }}" target="_blank" class="w-3/5 file__icon file__icon--file mx-auto">
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
                        <a href="{{ asset('storage/'.$finalreport->scientific_report) }}" target="_blank" class="w-3/5 file__icon file__icon--file mx-auto">
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
                        <a href="{{ asset('storage/'.$finalreport->financial_reporting) }}" target="_blank" class="w-3/5 file__icon file__icon--file mx-auto">
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
        
        @empty
            <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
                <div style="display: flex;justify-content: space-between;">
                    <div style="font-size:18px;font-weight: 400;">Yakuniy hisobot filelar  </div>
                    <div style="text-align: end;">
                        <a href="{{ route('finalreport.create') }}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
                            Qo'shish
                        </a>
                    </div>
                </div>
            </div> 
        @endforelse

    </div>
</div>
@endsection