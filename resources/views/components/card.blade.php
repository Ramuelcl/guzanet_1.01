<!-- component -->
<div {{ $attributes->merge(['class' => 'bg-white shadow-xl rounded pt-4 pb-2']) }}>
    <!-- card header -->
    <div class="font-bold mt-2 text-gray-800 text-lg capitalize hover:uppercase border-b px-8">
        {{ $title }}
    </div>
    <!-- card body -->
    <div class="text-gray-600 text-base mt-2 px-8">
        <!-- content goes here -->
        {{ $slot }}
    </div>

    <!-- card footer -->
    <div class="py-4 border-t px-8">
        @if ($hasTags)
            <!-- tags link -->
            @foreach ($tags as $tag)
                <x-nav-link href="{{ route($tag['route']) }}">{{ $tag['text'] }}</x-nav-link>
                {{-- <a href="{{ $tag['route'] }}">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-3 md:px-8">#{{ $tag['text'] }}</span>
                </a> --}}
            @endforeach
        @endif
        @if ($hasButtons)
            <!-- button link -->
            @foreach ($buttons as $button)
                <x-button href="{{ route($button['route']) }}">{{ $button['text'] }}</x-button>
                {{-- <a href="{{ $button['route'] }}">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-3 md:px-8">{{ $button['text'] }}</span>
                </a> --}}
            @endforeach
        @endif
    </div>
</div>
