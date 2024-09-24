@extends("layouts.admin")
@section("content")
<!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Xorijiy stajirovkalar bo'yicha  ma'lumotlar bazasi
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                    Ma'lumotlarni qayta yuklash </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $stajirovka }}</div>
                                    <div class="text-base text-gray-600 mt-1">Stajirovkaga yuborilgan yosh olimlar</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-3"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $fanyonalish }}</div>
                                    <div class="text-base text-gray-600 mt-1">Fan yo'nalishlari kesimida</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-3"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $chet_davlat }}</div>
                                    <div class="text-base text-gray-600 mt-1"> Xorijiy davlatlar kesimida </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-3"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $tashkilotlar }}</div>
                                    <div class="text-base text-gray-600 mt-1"> Tashkilotlar kesimida </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-3"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">{{ $higherorganization }}</div>
                                    <div class="text-base text-gray-600 mt-1"> Yuqori turuvchi tashkilotlar kesimida </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-3"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">21</div>
                                    <div class="text-base text-gray-600 mt-1"> Xorijiy tashkilotlar  kesimida</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-theme-3"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">501</div>
                                    <div class="text-base text-gray-600 mt-1"> Loyiha bilan taminlanganmi </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="{{ url('users') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="users" class="report-box__icon text-theme-9"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">501</div>
                                    <div class="text-base text-gray-600 mt-1">Adminlar</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="users" class="report-box__icon text-theme-6"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">501</div>
                                    <div class="text-base text-gray-600 mt-1">Xodimlar</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="bar-chart-2" class="report-box__icon text-theme-9"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">501</div>
                                    <div class="text-base text-gray-600 mt-1">Tashkilotlar kiritgan xodimlar soni</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <a href="#">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="bar-chart" class="report-box__icon text-theme-9"></i>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">501</div>
                                    <div class="text-base text-gray-600 mt-1">Tashkilotlar kiritgan adminlar soni</div>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection