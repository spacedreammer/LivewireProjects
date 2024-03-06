<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex flex-col justify-center item-center">
        <div class="flex p-16 mx-auto justify-center item-center gap-4">
            <input type="number" wire:model='number1' placeholder="Numner 1">
            <select class="w-24" wire:model='action'>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model='number2' placeholder="Number 2">
            <button
                class="py-2 px-4 bg-indigo-500 disabled:cursor-not-allowed disabled:bg-opacity-90 hover:bg-indigo-600 rounded text-white"
                wire:click='calculate' {{$disabled ? 'disabled' : '' }}>=</button>

        </div>
        <div class="flex justify-center">
            <p class="text-3xl">{{$result}}</p>

        </div>

    </div>
</div>