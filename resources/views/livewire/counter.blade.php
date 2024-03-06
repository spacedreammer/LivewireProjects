<div class="flex justify-center gap-6 pt-20">
    {{-- Because she competes with no one, no one can compete with her. --}}

    <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
    <span class="text-lg font-bold">{{$count}}</span>
    <button wire:click='decrement' class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
</div>