@props('title')


<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
    <p class="font-bold">Enhorabuena!!!</p>
    {{ $slot }}
</div>