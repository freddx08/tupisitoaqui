<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

        <div>
            <button
                class="flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a
                    href="{{ url()->previous() }}">Volver</a></button>
        </div>
        <br><br>
        <div class="text-xl">
            <strong>
                <h1> {{ $apartamento->address }} </h1>
            </strong>
        </div>
        <div class="mt-4 flex">
            <div class=" w-3/4 h-3/4 overflow-hidden rounded-md bg-gray-200 lg:aspect-none">
                <img src="data:image/jpg;base64, {{ chunk_split(base64_encode($apartamento->img)) }}"
                    alt="Foto Apartamento" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="ml-4">
                <h3><strong>Informacion del apartamento: </strong></h3>
                <ul class="mt-2">
                    <li>Habitaciones: {{ $apartamento->bedrooms }}</li>
                    <li>Baños: {{ $apartamento->bathrooms }}</li>
                    <li>㎡: {{ $apartamento->square_meters}}</li>
                    <li>Año de construcción: {{ $apartamento->construction_year }}</li>
                </ul>
                <br><br><br>
                <h3><strong>Datos de contacto: </strong></h3>
                <ul class="mt-2">
                    <li>{{ $apartamento->owner_name }}</li>
                    <li>+34 {{ $apartamento->phone_contact }}</li>
                    <li>{{ $apartamento->email }}</li>
                </ul>
            </div>
        </div>
        <div class="text-lg mt-4">
            <strong>
                €<?php echo number_format($apartamento->price); ?>
            </strong>
        </div>


    </div>
</x-app-layout>
