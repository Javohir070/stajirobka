@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="flex justify-between align-center mt-10">

        <h2 class="intro-y text-lg font-medium">{{ $internshipinfo->lest_name }} xodim xaqida ma’lumot</h2>

        
    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
            <table class="table">
                <tbody>

                    <div style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                        <div style="font-size:18px;font-weight: 400;">{{ " xodim ". $internshipinfo->fish }}  xaqida ma’lumot</div>
                        @can('xodim delete edit')
                            <div style="text-align: end;">
                                <a href="{{ route('xodimlar.edit',['xodimlar'=>$internshipinfo->id])}}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
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
                            <th class="border border-2" style="width: 50%;">Tanlov turi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">2</th> -->
                            <td class="border border-2"> {{ $internshipinfo->userinfo->firs_name ."  ". $internshipinfo->userinfo->last_name . "  " . $internshipinfo->userinfo->middle_name }}</td>
                            <td class="border border-2">{{ $internshipinfo->selection_type }} </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">3</th> -->
                            <th class="border border-2" >Tanlovda g‘olib bo‘lgan yil</th>
                            <th class="border border-2">Moliyalashtirilgan yili</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">4</th> -->
                            <td class="border border-2" >{{ $internshipinfo->selection_year }}</td>
                            <td class="border border-2">{{ $internshipinfo->year_funded }}</t>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Yuborilgan yili</th>
                            <th class="border border-2">Xorijiy mamlakat</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->year_of_dispatch }}</td>
                            <td class="border border-2">{{ $internshipinfo->foreign_country }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Qabul qiluvchi tashkilot</th>
                            <th class="border border-2">Stajirovka yo‘nalishi</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->receiving_organization }}</td>
                            <td class="border border-2">{{ $internshipinfo->direction_of_practice }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Stajirovka mavzusi</th>
                            <th class="border border-2">Boshlanish sanasi</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->practice_topic }}</td>
                            <td class="border border-2">{{ $internshipinfo->start_date }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Tugash sanasi</th>
                            <th class="border border-2">Stajirovkaga yuborilgan davrdagi Yoshi</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $internshipinfo->end_date }}</td>
                            <td class="border border-2">{{ $internshipinfo->age }}</td>
                        </tr>
                        
                </tbody>
            </table>
        </div>



        

    </div>





   
</div>
@endsection