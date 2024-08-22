@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="flex justify-between align-center mt-10">

        <h2 class="intro-y text-lg font-medium">{{ $organizationinfo->lest_name }} xodim xaqida ma’lumot</h2>

        
    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="overflow-x-auto" style="background-color: white;margin-top:30px;border-radius:8px;padding:30px 20px;">
            <table class="table">
                <tbody>

                    <div style="display: flex;justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px;">
                        <div style="font-size:18px;font-weight: 400;">{{ " xodim ". $organizationinfo->fish }}  xaqida ma’lumot</div>
                        @can('xodim delete edit')
                            <div style="text-align: end;">
                                <a href="{{ route('xodimlar.edit',['xodimlar'=>$organizationinfo->id])}}" class="button w-24 bg-theme-1 text-white" style="margin-right:20px;">
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
                            <th class="border border-2" style="width: 50%;">Yuqori turuvchi muassasa</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">2</th> -->
                            <td class="border border-2"> {{ $organizationinfo->userinfo->firs_name ."  ". $organizationinfo->userinfo->last_name . "  " . $organizationinfo->userinfo->middle_name }}</td>
                            <td class="border border-2">{{ $organizationinfo->higher_organization }} </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">3</th> -->
                            <th class="border border-2" >Muassasa turi</th>
                            <th class="border border-2">Muassasa nomi</th>
                        </tr>
                        <tr>
                            <!-- <th class="border border-2">4</th> -->
                            <td class="border border-2" >{{ $organizationinfo->organization_type }}</td>
                            <td class="border border-2">{{ $organizationinfo->organization_name }}</t>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Lavozimi</th>
                            <th class="border border-2">STIR</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $organizationinfo->position }}</td>
                            <td class="border border-2">{{ $organizationinfo->STIR }}</td>
                        </tr>
                        <tr class="bg-gray-200">
                            <!-- <th class="border border-2">5</th> -->
                            <th class="border border-2">Joylashgan hududi</th>
                            <th class="border border-2">Joylashgan tumani</th>
                        </tr>
                        <tr >
                            <!-- <th class="border border-2">6</th> -->
                            <td class="border border-2">{{ $organizationinfo->region }}</td>
                            <td class="border border-2">{{ $organizationinfo->district }}</td>
                        </tr>
                        
                </tbody>
            </table>
        </div>



        

    </div>





   
</div>
@endsection