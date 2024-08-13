<div class="swiper-slide w-[380px] h-[640px] relative px-4 py-10 before:content-['*'] before:absolute before:right-0 before:top-0 before:bottom-0 before:m-auto before:z-20 before:w-8 before:h-px before:bg-red-600">
    <div class="relative z-10 w-full h-full flex items-center justify-center text-center bg-white p-8">
        <div class="flex flex-col justify-center items-center">
            <div class="border-b-2 border-black w-1/2 mb-2">
                <span class="uppercase font-poppins">{{ $category ?? '' }}</span>
            </div>
            <div class="mb-4">
                <p class="font-bold text-lg text-black mb-2 line-clamp-2">
                    {{ $title ?? '' }}
                </p>
                <p class="text-black font-poppins text-sm mb-4 line-clamp-4">
                    {{ $description ?? '' }}
                </p>
                <span class="text-xs text-black">
                    {{ $date ?? '' }}
                </span>
            </div>
            <div>
                <p class="p-2 text-xs font-poppins rounded-full border-black border-2">
                    GÖRÜNTÜLE
                </p>
            </div>
        </div>
    </div>
    <div class="absolute z-0 bottom-0 left-0 right-0 m-auto text-black text-center pb-3">
        <span class="text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold ">
            {{ $order ?? '' }}
        </span>
    </div>
    <div class="z-20 w-8 h-px bg-black absolute right-0 top-0 bottom-0 m-auto"></div>
    <div class="z-20 w-8 h-px bg-black absolute left-0 top-0 bottom-0 m-auto"></div>
</div>


