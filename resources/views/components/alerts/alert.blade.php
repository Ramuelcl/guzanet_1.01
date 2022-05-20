<div class="alert alert-{{ $type }} bg-{{ $color }}">
    {{ $slot }}
</div>

<div role="alert">
    <div class="px-2" {{ $attributes->merge(['class' => 'alert alert-' . $type]) }}>
        <div class="bg-blue-900 text-white font-bold rounded-t px-4">
            @if (isset($title))
                {{ $title }}
            @else
                Alerta...
            @endif
        </div>
        <div
            class="border border-t-0 border-{{ $color }}-400 rounded-b bg-{{ $color }}-500 px-4 py-3 text-white-700">
            <p>{{ $slot }}</p>
        </div>
    </div>
</div>
