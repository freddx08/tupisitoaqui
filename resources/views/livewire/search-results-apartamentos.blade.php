<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

        <div>
            <button
                class="flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <a href="{{ url()->previous() }}">Volver</a>
            </button>
        </div>
        
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($apartamentos as $piso)
                <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="data:image/jpg;base64, {{ chunk_split(base64_encode($piso->img)) }}" alt="Foto Apartamento"
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="{{ route('apartamentos.mostrar', $piso->id) }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $piso->address }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Hab: {{ $piso->bedrooms }} <br>
                                Baños: {{ $piso->bathrooms }} <br>
                                ㎡: {{ $piso->square_meters }} <br>
                            </p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">€<?php echo number_format($piso->price) ?></p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
