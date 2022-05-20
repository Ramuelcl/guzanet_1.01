<x-app-layout>
    {{-- alertas --}}
    <x-alerts.alert type="error" class="mx-4">
        <x-slot name="title">Alerta suave</x-slot>
        mon message
    </x-alerts.alert>
    {{-- alertas --}}
    <hr>
    <div class="mx-auto py-12">
        <h1>Página principal</h1>
        <p class="text-green-700">The quick brown fox...</p>
        * <x-button class="bg-green-500">botón</x-button>

        <div xdata={name:'Ludo' }>
            Copyright&#169
            <span x-text="new Date().getFullYear()"></span>
        </div>
    </div>
    <hr>
    <div x-data="{ open: false }">
        <button @click="open = !open">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>
    {{-- x-on:click --}}
    <div x-data="{ show: false }">
        <x-button @click="show = !show" class="bg-blue-400">Toggle</x-button>
        <p x-show="show">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim harum delectus quis, quas natus
            aspernatur ducimus excepturi similique ratione blanditiis deleniti recusandae? Error, eos dolore.</p>
    </div>
    {{--  --}}
    <div xdata={name:'' }>
        <x-input type="text" x-model="name" />
        <span x-text="name.length"></span>
    </div>
    <div class="w-full max-w-screen-xl mx-auto px-2 bg-azul">
        Contenedor centrado

        <div class="container md:flex bg-blue-300">
            <aside class="px-4 md:flex-none md:w-64 max-w-xs">
                <div class="px-4 py-2 mb-2 bg-red-300">Titulo de aside</div>
                <p>Este es el aside</p>
            </aside>
            <main class="px-4 mb-6" flex-grow>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sed quas non
                    voluptates labore commodi eos neque dicta cupiditate, ipsam libero, beatae vel suscipit nihil nemo
                    cumque magnam similique doloremque?</p>
                <p class="mb-4">Nesciunt magnam excepturi tenetur eum magni mollitia amet at neque. Minima
                    placeat
                    maiores laudantium quisquam molestiae corporis et possimus iusto suscipit illum?</p>
            </main>
        </div>
    </div>
    <!-- component -->
    <!-- This is an example component -->
    <div
        class='flex items-center justify-center min-h-screen from-gray-100 via-gray-300 to-slate-200 bg-gradient-to-br'>
        <div class="p-32">
            <button type="button" class="flex items-center rounded-lg bg-indigo-500 px-4 py-2 text-white" disabled>
                <svg class="-ml-1 mr-3 h-5 w-5 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span class="font-medium subpixel-antialiased">Processing...</span>
            </button>
        </div>

    </div>
    {{-- toggle button --}}
    <!-- component -->
    <div class="flex justify-center items-center" x-data="{ toggle: '0' }">
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script> --}}

        <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
            :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']">
            <label for="toggle"
                class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
                :class="[toggle === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
            <input type="checkbox" id="toggle" name="toggle"
                class="appearance-none w-full h-full active:outline-none focus:outline-none"
                @click="toggle === '0' ? toggle = '1' : toggle = '0'" />
        </div>
    </div>
    {{-- calendario --}}
    <!-- component -->
    <div x-data x-init="flatpickr($refs.datetimewidget, { wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K' });" x-ref="datetimewidget"
        class="flatpickr container mx-auto col-span-6 sm:col-span-6 mt-5">
        <label for="datetime" class="flex-grow  block font-medium text-sm text-gray-700 mb-1">Date and Time</label>
        <div class="flex align-middle align-content-center">
            <input x-ref="datetime" type="text" id="datetime" data-input placeholder="Select.."
                class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">

            <a class="h-11 w-10 input-button cursor-pointer rounded-r-md bg-transparent border-gray-300 border-t border-b border-r"
                title="clear" data-clear>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 ml-1" viewBox="0 0 20 20" fill="#c53030">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
    <x-slider />
</x-app-layout>
