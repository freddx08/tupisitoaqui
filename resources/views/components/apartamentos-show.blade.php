@props(['piso'])

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