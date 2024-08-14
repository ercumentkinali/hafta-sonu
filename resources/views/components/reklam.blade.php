<div class="swiper-slide w-80 h-132 relative px-4 py-10">
    <div class="relative z-10 w-full h-full flex items-center justify-center text-center bg-white p-8">
        <div class="flex flex-col justify-end items-center">
            <div class="relative w-56 h-36 mb-5">
                <img src="{{ $image ?? '' }}" alt="haberjpg" class="absolute w-full h-full object-cover">
            </div>
            <div>
                <p class="font-bold text-black text-2xl">REKLAM</p>
            </div>
            <div class="relative w-56 h-36 mt-5">
                <img src="{{ $image ?? '' }}" alt="haberjpg" class="absolute w-full h-full object-cover">
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




