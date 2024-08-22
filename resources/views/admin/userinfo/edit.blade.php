@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Yosh olim  tahrirlash</h2>



</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST" action="{{ route("userinfo.update",['userinfo'=>$userinfo->id])}}"
         class="validate-form" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-12 gap-2">
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Familya
                    </label>
                    <input type="text" name="firs_name" value="{{$userinfo->firs_name }}" class="input w-full border mt-2" required="">
                    @error('firs_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ismi
                    </label>
                    <input type="text" name="last_name" value="{{$userinfo->last_name }}" class="input w-full border mt-2" required="">
                    @error('last_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Otasini ismi
                    </label>
                    <input type="text" name="middle_name" value="{{$userinfo->middle_name }}" class="input w-full border mt-2" required="">
                    @error('middle_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Tug‘ilgan yili
                    </label>
                    <input type="date"  name="birthday" value="{{$userinfo->birthday }}"   class=" input w-full border mt-2" required="">
                    @error('birthday')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jshshir
                    </label>
                    <input type="text" name="jshshri" value="{{$userinfo->jshshri }}" class="input w-full border mt-2" required="">
                    @error('jshshri')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jinsi
                    </label>
                    <select name="gender" value="{{$userinfo->gender }}" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="">Jinsni tanlang</option>

                        <option value="Erkak" {{ $userinfo->gender == "Erkak" ? "selected" : ""}}>Erkak</option>

                        <option value="Ayol" {{ $userinfo->gender == "Ayol" ? "selected" : ""}}>Ayol</option>

                    </select>
                    @error('gender')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ilimy darajasi
                    </label>
                    <select name="academic_degree" value="{{$userinfo->academic_degree }}" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="">ilmiy darajasini tanlang</option>

                        <option value="DSc" {{ $userinfo->academic_degree == "DSc" ? "selected" : ""}}>DSc</option>
                        
                        <option value="PhD" {{ $userinfo->academic_degree == "PhD" ? "selected" : ""}}>PhD</option>

                        <option value="yo'q" {{ $userinfo->academic_degree == "yo'q" ? "selected" : ""}}>yo'q</option>

                    </select>
                    @error('academic_degree')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Chet tili bilish darajasi
                    </label>
                    <select name="certificate" value="{{$userinfo->certificate }}" id="science-sub-category" class="input border w-full mt-2" >

                        <option value="">Chet tili bilish darajasini tanlang</option>

                        <option value="B1"  {{ $userinfo->certificate == "B1" ? "selected" : ""}}>B1</option>

                        <option value="B2"  {{ $userinfo->certificate == "B2" ? "selected" : ""}}>B2</option>

                        <option value="C1"  {{ $userinfo->certificate == "C1" ? "selected" : ""}}>C1</option>

                        <option value="C2"  {{ $userinfo->certificate == "C2" ? "selected" : ""}}>C2</option>

                        <option value="IELTS"  {{ $userinfo->certificate == "IELTS" ? "selected" : ""}}>IELTS</option>

                        <option value="TOEFL"  {{ $userinfo->certificate == "TOEFL" ? "selected" : ""}}>TOEFL</option>

                        <option value="Milliy sertipikat"  {{ $userinfo->certificate == "Milliy sertipikat" ? "selected" : ""}}>Milliy sertipikat</option>

                    </select>
                    @error('certificate')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Telefon raqami
                    </label>
                    <input type="tel" name="phone" placeholder="+998 90 123 45 67" value="{{$userinfo->phone }}" class="input w-full border mt-2" required="">
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row">  Rasm
                    </label>
                    <input type="file" name="image"  class="input w-full border mt-2">
                    @error('image')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </form>
        <div class="px-5 pb-5 mt-3 text-center">
            <a href="{{ route('userinfo.index') }}"  class="button delete-cancel w-32 border text-gray-700 mr-1">
                Bekor qilish
            </a>
            <button type="submit" form="science-paper-create-form" class="update-confirm button w-24 bg-theme-1 text-white">
                Qo'shish
            </button>
        </div>
    </div>
</div><br>



@endsection