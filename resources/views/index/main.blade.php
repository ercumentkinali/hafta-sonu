<div id="mainScreen" class="w-full h-3/5">
    <div class="spiral-background absolute inset-0 overflow-hidden bg-[url('/images/background.jpg')] bg-cover bg-center">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 250 2000 1500'><rect fill='#FFF8EA' width='2500' height='2500'/><defs><path fill='none' stroke-width='2.5' stroke-opacity='1' id='a' d='M0.74-509.63l485.39 352.65l-185.4 570.61h-599.97l-185.4-570.61L0.74-509.63 M0.74-510.87l-486.56 353.51l185.85 571.99h601.42L487.3-157.36L0.74-510.87L0.74-510.87z'/></defs><g  transform='scale(0.379)' style='transform-origin:center'><g  transform='' style='transform-origin:center'><g  transform='rotate(-160 0 0)' style='transform-origin:center'><g transform='translate(1000 750)'><use  stroke='#FFF8EA' href='#a' transform='rotate(10 0 0) scale(1.1)'/><use  stroke='#fef5e5' href='#a' transform='rotate(20 0 0) scale(1.2)'/><use  stroke='#fcf3e0' href='#a' transform='rotate(30 0 0) scale(1.3)'/><use  stroke='#fbf0db' href='#a' transform='rotate(40 0 0) scale(1.4)'/><use  stroke='#faeed5' href='#a' transform='rotate(50 0 0) scale(1.5)'/><use  stroke='#f8ebd0' href='#a' transform='rotate(60 0 0) scale(1.6)'/><use  stroke='#f7e9cb' href='#a' transform='rotate(70 0 0) scale(1.7)'/><use  stroke='#f5e6c6' href='#a' transform='rotate(80 0 0) scale(1.8)'/><use  stroke='#f4e4c1' href='#a' transform='rotate(90 0 0) scale(1.9)'/><use  stroke='#f2e1bc' href='#a' transform='rotate(100 0 0) scale(2)'/><use  stroke='#f1dfb7' href='#a' transform='rotate(110 0 0) scale(2.1)'/><use  stroke='#efdcb2' href='#a' transform='rotate(120 0 0) scale(2.2)'/><use  stroke='#eedaad' href='#a' transform='rotate(130 0 0) scale(2.3)'/><use  stroke='#ecd7a8' href='#a' transform='rotate(140 0 0) scale(2.4)'/><use  stroke='#ebd4a3' href='#a' transform='rotate(150 0 0) scale(2.5)'/><use  stroke='#E9D29E' href='#a' transform='rotate(160 0 0) scale(2.6)'/></g></g></g></g></svg>

    </div>
    <div class="main-icon relative flex w-full h-screen items-center justify-center flex-col ">
        <img src="{{ asset('images/hafta-sonu-Photoroom.png') }}" alt="" class="items-center justify-center w-1/2 mb-6 text-7xl">
        <div class="direction-icons flex items-center space-x-1 w-auto">
            <a href="{{ route('news') }}" id="showNewsScreen">
            <div class="font-bold font-playfair text-xs border-black border-2 p-1">görüntüle</div>
            </a>
            <div class="border-2 border-black pb-1.5 pt-1.5 pr-2 pl-2  grid place-items-center text-xs ">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
        <div class="relative w-64 h-32 -right-96 -top-28">
            <div class=" fixed w-20 h-20 -right-12 bg-arkaplan border-black border-2 transform rotate-[-45deg]">
                <div class="absolute text-sm transform rotate-[45deg] ml-3 mt-2 ">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
