
<div class="swiper-slide w-[320px] h-[640px] bg-white relative">
    <div class="relative flex flex-col items-center text-center w-full h-full justify-end">
        <img src="{{ $image ?? '' }}" alt="haberjpg" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="relative z-10 p-6 flex flex-col items-center w-full mb-8">
            <div class="border-b-2 font-poppins text-white border-white w-1/2 mb-2">
                <span class="uppercase">{{ $category ?? '' }}</span>
            </div>
            <div class="mb-4">
                <p class="font-bold text-lg font-playfair text-white mb-2 line-clamp-2">
                    {{ $title ?? '' }}
                </p>
            </div>
            <div>
                <p class="p-2 text-xs font-poppins rounded-full text-white border-white border-2">
                    GÖRÜNTÜLE
                </p>
            </div>
        </div>
        <div class="absolute -bottom-9 left-0 right-0 text-white z-10 mb-4">
            <span class="text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold">
                {{ $order ?? '' }}
            </span>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-b from-transparent to-black opacity-90">
        </div>
    </div>
</div>
