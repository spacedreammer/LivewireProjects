<div class="p-6 flex justify-center flex-col">
    <form wire:submit.prevent='save' class="flex flex-col w-[400px] mx-auto py-16">
        @if ($image)
        Preview:
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ($image as $imag)

            <img src="{{$imag->temporaryUrl()}}" class="w-[110x] h-[90px] object-cover">


            @endforeach
        </div>
        @endif
        <input type="file" wire:model='image' class="mb-4" multiple>
        @error('image')
        <span class="error">
            {{$message}}
        </span>
        @enderror
        <div>
            <button class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white" type="submit">Save
                Photo</button>

        </div>
    </form>

    <div class="flex flex-wrap gap-7">
        @foreach ($images as $im)
        <img src="{{$im}}" class="w-[128x] h-[120px] object-cover">
        @endforeach
    </div>
</div>