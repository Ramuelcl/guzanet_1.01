@php

$images = [['idx' => 1, 'name' => '2021-12-24.jpg', 'address' => '/public/images/slider/2021-12-24.jpg'], ['idx' => 2, 'name' => 'lido.jpg', 'address' => '/public/images/slider/lido.jpg'], ['idx' => 3, 'name' => 'MVI_9999.MP4_snapshot_00.21.172.jpg', 'address' => '/public/images/slider/MVI_9999.MP4_snapshot_00.21.172.jpg']];
// dd(asset('/images/slider/' . $images[0]['name']), $images);
@endphp
<div>
    <section class="container mx-auto" x-data="{ image: '2' }">
        <h1 class="text-xl my-5">Mi slider 1.0</h1>
        @foreach ($images as $img)
            {{-- img src="{!! asset('images/helecho.jpg') !!}"> --}}
            <img src="{!! asset('images/slider/' . $img['name']) !!}" x-show="image=={{ $img['idx'] }}">
        @endforeach

        <div class="flex items-center mt-1 mx-2 max-h-3 max-w-sm">
            @foreach ($images as $img)
                <img src="{!! asset('images/slider/' . $img['name']) !!}" x-on:click="image = {{ $img['idx'] }}"
                    x-bind:class="image === {{ $img['idx'] }} ? 'border-2 border-yelow-500' : ''
                    class ="w-12
                    h-12 cursor-pointer">
            @endforeach

        </div>
    </section>
</div>
