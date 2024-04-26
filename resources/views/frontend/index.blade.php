<x-frontend-app-layout>

<section id="main-section">
    <div id="title" class="bg-[#F6F7FF]">
        <div class="p-5">
            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end space-x-5">
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                           class="button-81"
                                        >
                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="button-81"
                                        >
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="button-81"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
        </div>
        <div class="py-10 md:py-14">
            <h2 class="text-2xl md:text-3xl font-semibold text-center uppercase text-red-500">Home Internet</h2>
        </div>
    </div>
    <div class="bg-white">
        <div class="text-center py-5 px-5">
            <p class="text-red-500 text-[16px] font-medium">Our Packages</p>
            <h2 class="text-3xl  font-[700]">Pick The Best Plan For You</h2>
            <p class="pt-5 text-base text-gray-500">Super Speed Optical Fiber Internet Connectivity with Real IP Right to Your Door Steps</p>
        </div>
        <div class="all-cards grid grid-cols-1 md:grid-cols-3 px-10 md:px-20 py-10 gap-x-10 gap-y-10">

            @foreach ($packages as $package)
            <div class="single-package-card shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] rounded-b-3xl">
                <div class="title bg-[#CE1F20] py-5 md:py-10 rounded-t-3xl text-center">
                    <h2 class="text-white text-2xl font-semibold uppercase">{{ $package->title }}</h2>
                    <div class="flex justify-center pt-5">
                        <div class="bg-white w-[50px] h-[50px] rounded-full flex justify-center items-center">
                            <ion-icon name="wifi-outline" style="font-size: 30px;color:#FC4100"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="description bg-white text-center py-5 md:py-10 rounded-b-3xl">
                    <h2 class="text-[#FC4100] text-[26px] font-[700]">{{ $package->mbps }} Mbps</h2>
                    <div>
                        <ul class="space-y-3 px-10 pt-7 font-medium text-gray-500">

                            @foreach ($package->features as $item)
                                <li>{{ $item->name }}</li><hr/>
                            @endforeach
                        </ul>
                        <div class="flex justify-center items-center">
                            <h2 class="text-[26px] font-[700]">{{ $package->price }}<span class="font-bold text-[30px]">&#x9F3;</span></h2><span class="text-gray-500 text-base font-medium">&nbsp;&nbsp;/MONTH</span>
                        </div>
                        <div class="pt-5">
                            <button class="button-62">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
</x-frontend-app-layout>
