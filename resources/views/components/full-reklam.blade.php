<div class="swiper-slide w-80 h-132 relative px-4 py-10">
    <div class="relative z-10 w-full h-full">
        <img src="{{ $image ?? '' }}" alt="haberjpg" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="absolute bottom-0 left-0 w-full p-4">
            <div class="flex flex-col items-center text-center">
                <div class="z-40">
                    <p class=" text-xs font-poppins border-white border-2 text-black bg-white">
                       SHOP NOW
                       <i class="fa-solid fa-play ml-1"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute z-0 bottom-0 left-0 right-0 m-auto text-black text-center pb-3">
        <span class="text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold ">
            {{ $order ?? '' }}
        </span>
    </div>
    <div class="z-20 w-5 h-px bg-line absolute right-0 top-0 bottom-0 m-auto"></div>
    <div class="z-20 w-5 h-px bg-line absolute left-0 top-0 bottom-0 m-auto"></div>
</div>
