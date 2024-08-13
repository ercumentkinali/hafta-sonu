<div class="swiper-slide w-[320px] h-[640px] bg-white relative p-6">
    <div class="flex flex-col items-center text-center w-full">
        <div class="mb-4">
            <img src="{{ $image ?? '' }}" alt="haberjpg" class="object-cover w-full h-48">
        </div>
        <div class="border-b-2 font-poppins border-black w-1/2 mb-2">
            <span class="uppercase">{{ $category ?? '' }}</span>
        </div>
        <div class="mb-4">
            <p class="font-bold text-lg font-playfair text-black mb-2 line-clamp-2">
                {{ $title ?? '' }}
            </p>
            <p class="text-black font-poppins text-sm mb-4 line-clamp-4">
                {{ $description ?? '' }}
            </p>
            <span class="text-xs font-poppins text-black">
                {{ $date ?? '' }}
            </span>
        </div>
        <div>
            <p class="p-2 text-xs font-poppins rounded-full border-black border-2">
                GÖRÜNTÜLE
            </p>
        </div>
        <div class="absolute -bottom-9 left-0 right-0 text-black z-10 mb-4">
            <span class=" text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold">
                {{ $order ?? '' }}
            </span>
         </div>
    </div>
</div>



