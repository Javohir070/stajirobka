@extends("layouts.admin")
@section("content")
<!-- END: Top Bar -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Tashkilot haqida qisqacha ma'lumotlar 
                </h2>
                <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                    Yangilang </a>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="{{ route('otm.index') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $otm }}</div>
                                    <div class="text-base text-gray-600 mt-1">Oliy ta’lim muassasalari</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="{{ route('itm.index') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $itm }}</div>
                                    <div class="text-base text-gray-600 mt-1">Ilmiy tadqiqot muassasalari</div>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>

            
        </div>
    </div>
</div>
@endsection