<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img width="40px" alt="Midone Tailwind HTML Admin Template" class="w-10" src="/admin/dist/images/logo.png">
        <span class="hidden xl:block text-white text-lg ml-3" style="font-size: 12px; "> Xorijiy stajerovkalar bo'yicha  ma'lumotlar bazasi</span>
    </a>
    <div class="side-nav__devider my-6"></div>

    @role(['admin', 'Xodimlar_uchun_masul', 'Tashkilot_pasporti_uchun_masul', 'Ilmiy_faoliyat_uchun_masul'])
    <a href="/" class=" items-center ">
        <img width="" style="text-align: center;margin: 10px auto;width: 70%;" alt=""
            src="{{ asset('storage/' . auth()->user()->tashkilot->logo)  }}">
        <span class="hidden xl:block text-white text-lg ml-3" style="font-size: 18px; text-align: center;">
            {{ auth()->user()->tashkilot->name }}</span>
    </a><br>
    @endrole
    <ul>
        <li>
            <a href="{{ route("home.index") }}" class="side-menu side-menu{{ request()->is('/*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Bosh sahifa</div>
            </a>
        </li>
        <!-- start superadmin -->


        @role('super-admin')
        <li>
            <a href="{{ route('userinfo.index') }}"
                class="side-menu side-menu{{ request()->is('userinfo*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Yosh olim to‘g‘risida ma’lumot </div>
            </a>
        </li>

        <!-- <li>
            <a href="{{ route('organizationinfo.index') }}" class="side-menu side-menu{{ request()->is('organizationinfo*') ? '--active':'' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Ishtirok etgan tanlovlar to‘g‘risida ma’lumot </div>
            </a>
        </li> -->
        <!-- <li>
            <a href="{{ route('internshipinfo.index') }}" class="side-menu side-menu{{ request()->is('internshipinfo*') ? '--active':'' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Tanlov to‘g‘risida ma’lumot </div>
            </a>
        </li> -->
        <!-- <li>
            <a href="{{ route('internshipfile.index') }}" class="side-menu side-menu{{ request()->is('internshipfile*') ? '--active':'' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Moliyalashtirish to‘g‘risida ma’lumot </div>
            </a>
        </li> -->

        <!-- <li>
            <a href="{{ route('finalreport.index') }}" class="side-menu side-menu{{ request()->is('finalreport*') ? '--active':'' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Yakuniy hisoboti </div>
            </a>
        </li> -->

        <!-- <li>
            <a href="{{ route('additionalfunding.index') }}" class="side-menu side-menu{{ request()->is('finalreport*') ? '--active':'' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Qo‘shimcha moliyalashtirilgan </div>
            </a>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                <div class="side-menu__title"> Tashkilotlar <i data-feather="chevron-down"
                        class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">



                <li>
                    <a href="#" class="side-menu ">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> OTM </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="side-menu ">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ITM </div>
                    </a>
                </li>


            </ul>
        </li> -->

        <li>
            <a href="{{ route('tashkilotlar') }}" class="side-menu side-menu{{ request()->is('tashkilotlar*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Tashkilotlar </div>
            </a>
        </li>

        <!-- <li>
            <a href="{{ route('viloyat.index') }}" class="side-menu side-menu{{ request()->is('viloyat*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Viloyatlar </div>
            </a>
        </li> -->

        <li>
            <a href="{{ route('higherorganization.index') }}" class="side-menu side-menu{{ request()->is('higherorganization*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Yuqori turuvchi muassasalar </div>
            </a>
        </li>

        <li>
            <a href="{{ route('organization.index') }}" class="side-menu side-menu{{ request()->is('organization*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Muassasa nomi </div>
            </a>
        </li>

        <li>
            <a href="{{ route('state.index') }}" class="side-menu side-menu{{ request()->is('state*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Xorijiy tashkilotlar </div>
            </a>
        </li>

        <li>
            <a href="{{ route('science.index') }}" class="side-menu side-menu{{ request()->is('science*') ? '--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Stajirovka yo‘nalishi </div>
            </a>
        </li>

        @endrole




        @role('super-admin')

            <li>
                <a href="javascript:;"
                    class="side-menu side-menu{{ request()->is('users*') ? '--active' : '' }}{{ request()->is('permissions*') ? '--active' : '' }}{{ request()->is('roles*') ? '--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                    <div class="side-menu__title"> Sozlamalar <i data-feather="chevron-down"
                            class="side-menu__sub-icon"></i> </div>
                </a>
                <ul
                    class="{{ request()->is('users*') ? 'side-menu__sub-open' : '' }}{{ request()->is('permissions*') ? 'side-menu__sub-open' : '' }}{{ request()->is('roles*') ? 'side-menu__sub-open' : '' }}">



                    <li>
                        <a href="{{ route('users.index') }}"
                            class="side-menu side-menu{{ request()->is('users*') ? '--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Userlar </div>
                        </a>
                    </li>


                    <li>
                        <a href="{{ route("roles.index") }}"
                            class="side-menu side-menu{{ request()->is('roles*') ? '--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Rolelar </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('permissions.index') }}"
                            class="side-menu side-menu{{ request()->is('permissions*') ? '--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Permissions </div>
                        </a>
                    </li>
                </ul>
            </li>

        @endrole



        <div class="side-nav__devider my-6"></div>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link style="color: white;padding: 8px;margin-left: 16px;"
                    class="side-menu flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"
                    :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                    <div class="side-menu__icon"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> </div>
                    Chiqish
                </x-dropdown-link>
            </form>
        </li>
    </ul>
</nav>