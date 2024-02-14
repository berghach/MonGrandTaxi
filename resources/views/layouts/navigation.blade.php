<header class=" bg-transparent p-5 sticky top-0">
    <nav class="bg-secondary flex p-5 rounded-full items-center justify-between">
        <div class="flex items-center gap-1">
            <a class="flex items-center gap-1" href="">
                <img class="w-12 h-12 ml-4 rounded-full" src="{{asset('IMG\taxi.svg')}}" alt="monGrandtaxi">
                <h1 class="text-primary text-lg font-semibold max-md:hidden">monGrandtaxi</h1>
            </a>
        </div>
        <div id="nav-desktop" class="flex items-center gap-3 max-md:hidden">
            <!-- for user -->
            <div id="user-block">
                <div class="flex items-center gap-1">
                    <img class="w-12 h-12" src="{{asset('IMG\user_av.png')}}" alt="">
                    <h1>User name</h1>
                    <ion-icon id="roll-down" class="text-2xl cursor-pointer transition delay-100 duration-200 " name="chevron-down-outline"></ion-icon>
                </div>
                <ul id="user-menu" class="absolute z-10 flex flex-col bg-white mt-5 p-4 drop-shadow-lg gap-2 hidden">
                    <li>
                        <a class="inline-flex" href="">
                            <ion-icon class="text-2xl me-2" name="person-outline"></ion-icon>My profile</a>
                    </li>
                    <hr>
                    <li>
                        <a class="inline-flex" href="">
                            <ion-icon class="text-2xl me-2" name="log-out-outline"></ion-icon>Log out</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-3 mr-4 text-lg text-white font-semibold">
                <a class="inline-flex" href=""><ion-icon class="text-2xl" name="time-outline"></ion-icon></a>
                <a class="inline-flex" href=""><ion-icon class="text-2xl" name="ticket-outline"></ion-icon></a>
            </div>
            <!-- /for user -->
            <div class="flex items-center gap-3 mr-4 text-lg text-white font-semibold">
                <a class="inline-flex" href=""><ion-icon class="text-2xl" name="log-in-outline"></ion-icon></a>
                <a class="inline-flex" href="">Sign up</a> 
            </div>
        </div>

        <ion-icon id="burger-icon" class="cursor-pointer mr-4 text-2xl text-white font-semibold md:hidden" name="menu-outline"></ion-icon>
        
        <div id="nav-mobile" class="absolute right-0 top-10 bg-white drop-shadow-lg p-5 w-2/3 hidden">
            <div class="flex flex-col gap-2">
                <!-- for user -->
                <div class="flex items-center gap-3">
                    <img class="w-12 h-12" src="{{asset('IMG\user_av.png')}}" alt="">
                    <h1>User name</h1>
                </div>
                <ul class="flex flex-col gap-1 mt-2">
                    <li>
                        <a class="inline-flex" href="">
                            <ion-icon class="text-2xl me-2" name="person-outline"></ion-icon>My profile</a>
                    </li>
                    <hr>
                    <il>
                        <a class="inline-flex" href="">
                            <ion-icon class="text-2xl me-2" name="ticket-outline"></ion-icon>My bookings</a>
                        </il>
                    <hr>
                    <il>
                        <a class="inline-flex" href="">
                            <ion-icon class="text-2xl me-2" name="time-outline"></ion-icon>My travels</a>
                    </il>
                    <hr>
                    <li>
                        <a class="inline-flex" href="">
                            <ion-icon class="text-2xl me-2" name="log-out-outline"></ion-icon>Log out</a>
                    </li>
                </ul>
                <!-- /for user -->
                <ul class="flex flex-col-reverse gap-1 mt-2">
                    <il>
                        <a class="inline-flex" href=""><ion-icon class="text-2xl me-2" name="person-add-outline"></ion-icon>Sign up</a> 
                    </il>
                    <hr>
                    <il>
                        <a class="inline-flex" href=""><ion-icon class="text-2xl me-2" name="log-in-outline"></ion-icon>Log in</a>
                    </il>
                </ul>
            </div>
        </div>
    </nav>
</header>