<div>
    {{-- Do your work, then step back. --}}
    <div class="flex justify-center py-16 gap-6">
        <div>
            <select wire:model='selectedContinent' wire:change='changeContinent'>
                <option value="-1">Please select a Continent</option>

                @foreach ($continents as $continent)
                <option value="{{$continent->id}}">{{$continent->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="">
            <p wire:loading class="absolute left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 px-3">
                Loading...
            </p>
            <select wire:model='selectedCountries' class="flex-1">
                <option value="-1">Please select a country</option>
                @foreach ($countries as $country)

                <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>


    </div>

</div>