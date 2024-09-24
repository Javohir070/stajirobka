@extends('layouts.admin')

@section('content')


<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Bayon qo'shish</h2>

</div><br>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2" style="background: white;
    padding: 20px 20px;
    border-radius: 20px">
    <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form id="science-paper-create-form" method="POST" action="{{ route("statement.store") }}" class="validate-form"
            enctype="multipart/form-data" novalidate="novalidate">
            @csrf

            <div class="grid grid-cols-12 gap-2">
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Bayon turini tanlang
                    </label>
                    <select name="type" class="input w-full border mt-2">
                        <option value="">bayon turini tanlang</option>
                        <option value="1">Maxsus ekspert guruhi yig'lishi bayonlari</option>
                        <option value="2">Ko'zatuv kengashi yig'ilish bayonlari</option>
                    </select>
                    @error('type')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span>Bayon nomi
                    </label>
                    <input type="text" name="text" value="{{ old('text') }}" class="input w-full border mt-2" required="">
                    @error('text')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div><br>
            <div class="grid grid-cols-12 gap-2">
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> File 1
                    </label>
                    <input type="file" name="file" value="{{ old('file') }}" class="input w-full border mt-2" required="">
                    @error('file')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full col-span-6 ">
                    <label class="flex flex-col sm:flex-row"> <span
                            class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> File 2
                    </label>
                    <input type="file" name="file1" value="{{ old('file1') }}" class="input w-full border mt-2" required="">
                    @error('file1')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </form>
        <div class="px-5 pb-5 mt-3 text-center">
            <a href="{{ route('statement.index') }}"  class="button delete-cancel w-32 border text-gray-700 mr-1">
                Bekor qilish
            </a>
            <button type="submit" form="science-paper-create-form"
                class="update-confirm button w-24 bg-theme-1 text-white">
                Qo'shish
            </button>
        </div>
    </div>
</div>



@endsection