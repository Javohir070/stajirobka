@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Xodim  tahrirlash</h2>



</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST" action="{{ route("xodimlar.update",['xodimlar'=>$xodimlar->id])}}"
         class="validate-form" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-12 gap-2">
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> F.I.Sh
                    </label>
                    <input type="text" name="fish" value="{{ $xodimlar->fish }}" class="input w-full border mt-2" required="">
                    @error('fish')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Tug‘ilgan yili
                    </label>
                    <input type="date"  name="yil" class=" input w-full border mt-2" value="{{ $xodimlar->yil }}" required="">
                    @error('yil')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Jinsi
                    </label>
                    <select name="jinsi" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Jinsni tanlang</option>

                        <option value="Erkak" {{ $xodimlar->jinsi == "Erkak" ? "selected" : ""}}>Erkak</option>

                        <option value="Ayol" {{ $xodimlar->jinsi == "Ayol" ? "selected" : ""}}>Ayol</option>

                    </select><br>
                    @error('jinsi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ish tartibi
                    </label>
                    <select name="ish_tartibi" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Ish tartibini tanlang</option>

                        <option value="Asosiy" {{ $xodimlar->ish_tartibi == "Asosiy" ? "selected" : ""}} >Asosiy</option>

                        <option value="O‘rindoshlik" {{ $xodimlar->ish_tartibi == "O‘rindoshlik" ? "selected" : ""}} >O‘rindoshlik</option>

                        <option value="Soatbay" {{ $xodimlar->ish_tartibi == "Soatbay" ? "selected" : ""}} >Soatbay</option>

                    </select>
                    @error('ish_tartibi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Shtat birligi
                    </label>
                    <select name="shtat_birligi" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Shtat birligini tanlang</option>

                        <option value="0.25" {{ $xodimlar->shtat_birligi == "0.25" ? "selected" : ""}}>0.25</option>

                        <option value="0.5" {{ $xodimlar->shtat_birligi == "0.5" ? "selected" : ""}}>0.5</option>

                        <option value="0.75" {{ $xodimlar->shtat_birligi == "0.75" ? "selected" : ""}}>0.75</option>

                        <option value="1" {{ $xodimlar->shtat_birligi == "1" ? "selected" : ""}}>1</option>

                        <option value="1.25" {{ $xodimlar->shtat_birligi == "1.25" ? "selected" : ""}}>1.25</option>

                        <option value="1.5" {{ $xodimlar->shtat_birligi == "1.5" ? "selected" : ""}}>1.5</option>

                    </select>
                    @error('shtat_birligi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> O‘rindoshlik asosida ishlaydigan xodimning asosiy ish joyi
                        bo‘lgan tashkilot
                    </label>
                    <input type="text" name="urindoshlik_asasida" value="{{ $xodimlar->urindoshlik_asasida }}" class="input w-full border mt-2" >
                    @error('urindoshlik_asasida')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Pedagogik faoliyat bilan
                        shug‘ullanishi
                    </label>
                    <select name="pedagoglik" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Pedagogik faoliyat bilan shug‘ullanishi tanlang</option>

                        <option value="ha" {{ $xodimlar->pedagoglik == "ha" ? "selected" : ""}}>ha</option>

                        <option value="yoq" {{ $xodimlar->pedagoglik == "yoq" ? "selected" : ""}}>yoq</option>

                    </select>
                    @error('pedagoglik')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Lavozimi
                    </label>
                    <input type="text" name="lavozimi" value="{{ $xodimlar->lavozimi }}" class="input w-full border mt-2" >
                    @error('lavozimi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ma’lumoti
                    </label>
                    <input type="text" name="malumoti" value="{{ $xodimlar->malumoti }}" class="input w-full border mt-2" required="">
                    @error('malumoti')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> O‘zbekiston Fanlar akademiyasi
                        haqiqiy a’zosi Ilmiy darajasi
                    </label>
                    <select name="uzbek_panlar_azosi" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Ma’lumoti tanlang</option>

                        <option value="ha" {{ $xodimlar->uzbek_panlar_azosi == "ha" ? "selected" : ""}}>ha</option>

                        <option value="yoq" {{ $xodimlar->uzbek_panlar_azosi == "yoq" ? "selected" : ""}}>yoq</option>

                    </select>
                    @error('uzbek_panlar_azosi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ilmiy darajasi</label>
                    <select name="ilmiy_daraja" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Ilmiy darajasni tanlang</option>

                        <option value="Fan nomzodi" {{ $xodimlar->ilmiy_daraja == "Fan nomzodi" ? "selected" : ""}} >Fan nomzodi</option>

                        <option value="Falsafa doktori (PhD)" {{ $xodimlar->ilmiy_daraja == "Falsafa doktori (PhD)" ? "selected" : ""}} >Falsafa doktori (PhD)</option>

                        <option value="Fan doktori (DSc)" {{ $xodimlar->ilmiy_daraja == "Fan doktori (DSc)" ? "selected" : ""}} >Fan doktori (DSc)</option>

                        <option value="Fan doktori" {{ $xodimlar->ilmiy_daraja == "Fan doktori" ? "selected" : ""}} >Fan doktori</option>

                        <option value="Akademik" {{ $xodimlar->ilmiy_daraja == "Akademik" ? "selected" : ""}} >Akademik</option>
                        <option value="yoq" {{ $xodimlar->ilmiy_daraja == "yoq" ? "selected" : ""}}>yoq</option>

                    </select>
                    @error('ilmiy_daraja')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> Ilmiy daraja olingan yili
                    </label>
                    <input type="text" name="ilmiy_daraja_yil" value="{{ $xodimlar->ilmiy_daraja_yil }}" class="input w-full border mt-2" >
                    @error('ilmiy_daraja_yil')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ilmiy unvoni
                    </label>
                    <select name="ilmiy_unvoni" id="science-sub-category" class="input border w-full mt-2" required="">

                        <option value="" >Ilmiy unvonini tanlang</option>

                        <option value="Professor" {{ $xodimlar->ilmiy_unvoni == "Professor" ? "selected" : ""}} >Professor</option>

                        <option value="Dotsent" {{ $xodimlar->ilmiy_unvoni == "Dotsent" ? "selected" : ""}} >Dotsent</option>

                        <option value="Katta ilmiy xodim" {{ $xodimlar->ilmiy_unvoni == "Katta ilmiy xodim" ? "selected" : ""}} >Katta ilmiy xodim</option>

                        <option value="Kichik ilmiy xodim" {{ $xodimlar->ilmiy_unvoni == "Kichik ilmiy xodim" ? "selected" : ""}} >Kichik ilmiy xodim</option>

                        <option value="Akademik" {{ $xodimlar->ilmiy_unvoni == "Akademik" ? "selected" : ""}} >Akademik</option>
                        
                        <option value="yoq" {{ $xodimlar->ilmiy_unvoni == "yoq" ? "selected" : ""}}>yoq</option>
                    </select>
                    @error('ilmiy_unvoni')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row">  Ilmiy unvoni ilmiy unvon olingan
                        yili
                    </label>
                    <input type="text" name="ilmiy_unvoni_y" value="{{ $xodimlar->ilmiy_unvoni_y }}" class="input w-full border mt-2">
                    @error('ilmiy_unvoni_y')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ixtisosligi
                    </label>
                    <input type="text" name="ixtisosligi" value="{{ $xodimlar->ixtisosligi }}" class="input w-full border mt-2" required="">
                    @error('ixtisosligi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Telefon
                    </label>
                    <input type="tel" name="phone" value="{{ $xodimlar->phone }}" class="input w-full border mt-2" required="">
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Email
                    </label>
                    <input type="email" name="email" value="{{ $xodimlar->email }}" class="input w-full border mt-2" required="">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </form><br>
        <div class="px-5 pb-5 text-center">
            <a href="{{ route('xodimlar.index') }}"  class="button delete-cancel w-32 border text-gray-700 mr-1">
                Bekor qilish
            </a>
            <button type="submit" form="science-paper-create-form" class="update-confirm button w-24 bg-theme-1 text-white">
                Qo'shish
            </button>
        </div>
    </div>
</div><br>



@endsection