<div class="relative w-full">
    <div class=" w-full bg-arkaplan flex-col">
        <div class="news-swiper swiper w-full h-auto mt-5">
         <div class="swiper-wrapper">
            @foreach ($news as $key => $new)
                @if ($new->data_type === 'full_content')
                    <x-full-content>
                        <x-slot name="image">/{{ $new->image_url }}</x-slot>
                        <x-slot name="category">{{ $new->category->name }}</x-slot>
                        <x-slot name="title">{{ $new->title }}</x-slot>
                        <x-slot name="description">{{ $new->description }}</x-slot>
                        <x-slot name="date">{{ $new->created_at }}</x-slot>
                        <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                    </x-full-content>
                @elseif ($new->data_type === 'full_image')
                    <x-full-image>
                        <x-slot name="image">/{{ $new->image_url }}</x-slot>
                        <x-slot name="category">{{ $new->category->name }}</x-slot>
                        <x-slot name="title">{{ $new->title }}</x-slot>
                        <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                    </x-full-image>
                @elseif ($new->data_type === 'no_image')
                    <x-no-image>
                        <x-slot name="category">{{ $new->category->name }}</x-slot>
                        <x-slot name="title">{{ $new->title }}</x-slot>
                        <x-slot name="description">{{ $new->description }}</x-slot>
                        <x-slot name="date">{{ $new->created_at }}</x-slot>
                        <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                    </x-no-image>
                @elseif ($new->data_type === 'reklam')
                    <x-reklam>
                        <x-slot name="image">/{{ $new->image_url }}</x-slot>
                        <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                    </x-reklam>
                @endif
            @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
