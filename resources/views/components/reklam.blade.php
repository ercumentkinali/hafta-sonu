<div class="swiper-slide w-[320px] h-[640px] bg-white relative p-6">
    <div class="flex flex-col items-center text-center w-full">
        <div class=" opacity-30 text-black">
            <span class="text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold">
                {{ $order ?? '' }}
            </span>
        </div>
        <div class="mb-4">
            <img src="{{ $image ?? '' }}" alt="haberjpg" class="object-cover w-full h-48">
        </div>
        <div>
            <p class="font-bold text-black text-2xl">REKLAM</p>
        </div>
        <div class="mt-4">
            <img src="{{ $image ?? '' }}" alt="haberjpg" class="object-cover w-full h-48">
        </div>
    </div>
</div>
