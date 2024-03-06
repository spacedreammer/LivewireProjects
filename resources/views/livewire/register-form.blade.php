<div>
    <form wire:submit.prevent='submit' class="w-[400px] mx-auto py-16">
        @if (session()->has('message'))
        <div class="bg-emerald-500 text-white py-3 px-4 mb-4">
            {{session('message')}}
        </div>
        @endif

        <div class="flex gap-4 mb-4">
            <label>
                <input type="radio" value="customer" name="role" wire:model='role'>
                customer
            </label>
            <label>
                <input type="radio" value="vendor" name="role" wire:model='role'>
                vendor
            </label>
        </div>
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms='first_name' placeholder="First Name" class="w-full border @error('first_name') border-red-500 @enderror
            ">
            @error('first_name')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms='last_name' placeholder="Last Name" class="w-full border @error('last_name') border-red-500 @enderror
            ">
            @error('last_name')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-4">
            <input type="email" wire:model.debounce.500ms='email' placeholder="Email" class="w-full border @error('email') border-red-500 @enderror
            ">
            @error('email')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-4">
            <input type="password" wire:model.debounce.500ms='password' placeholder="Password" class="w-full border @error('password') border-red-500 @enderror
            ">
            @error('password')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>

        @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms='company_name' placeholder="company name" class="w-full border @error('company_name') border-red-500 @enderror
            ">
            @error('company_name')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        @endif

        @if ($role == 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms='vat_number' placeholder="VAT Number" class="w-full border @error('vat_number') border-red-500 @enderror
            ">
            @error('vat_number')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        @endif

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Register</button>
    </form>
</div>