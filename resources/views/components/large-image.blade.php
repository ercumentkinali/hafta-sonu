<div class="swiper-slide w-37rem h-132 relative px-4 py-10 before:content-[''] before:absolute before:right-0 before:top-0 before:bottom-0 before:m-auto before:z-20 before:w-8 before:h-px before:bg-line">
    <div class="relative z-10 w-full h-full">
        <img src="{{ $image ?? '' }}" alt="haberjpg" class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-b from-transparent to-black opacity-90 p-8">
            <div class="flex flex-col items-center text-center">
                <div class="border-b-2 border-white w-1/2 mb-2 z-40">
                    <span class="uppercase font-poppins text-white">{{ $category ?? '' }}</span>
                </div>
                <div class="mb-4 z-40">
                    <p class="font-bold text-lg text-white mb-2 line-clamp-2">
                        {{ $title ?? '' }}
                    </p>
                </div>
                <div class="z-40 text-white">
                    <p class="p-2 text-xs font-poppins rounded-full border-white border-2">
                        GÖRÜNTÜLE
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




