<x-app-layout>
    <div class="flex justify-center h-screen bg-gray-300">
        <div class="w-full max-w-xs">
            <x-card class="mb-8" :tags="[
                'tag1' => ['route' => 'gato', 'text' => 'uno'],
                'tag2' => ['route' => 'gato', 'text' => 'dos'],
            ]">
                <x-slot name=title>Título de la tarjeta 1</x-slot>
                qs<strong>juhvb jhbfjbe rjhber</strong> dffde kfjbfzkefb zejhfb ze
            </x-card>

            <x-card :buttons="[
                'buttons1' => ['route' => 'gato', 'text' => 'tres'],
            ]">
                <x-slot name=title>Título de la tarjeta 2</x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam non atque nulla vel cupiditate nam.
                Sapiente
            </x-card>
        </div>
    </div>
</x-app-layout>
