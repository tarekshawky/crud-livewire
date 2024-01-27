<div class="max-w-7xl mx-auto px-4">
    <div class="max-w-xl mx-auto mt-8">
        <h2>Update Customer </h2>
        <form class="space-y-4 mt-8" wire:submit.prevent="updateCustomer">
            <div>
                @if (session()->has('success'))
                    <div class="">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <input
                class="border-b-2 border-gray-200 w-full px-4 py-2 text-gray-900"
                type="text"
                placeholder="Name"
                wire:model="name"
            />
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <input
                class="border-b-2 border-gray-200 w-full px-4 py-2 text-gray-900"
                type="email"
                placeholder="Email"
                wire:model="email"
            />
            @error('email') <span class="error">{{ $message }}</span> @enderror

            <input
                class="border-b-2 border-gray-200 w-full px-4 py-2 text-gray-900 "
                type="text"
                placeholder="Phone"
                wire:model="phone"
            />
            @error('phone') <span class="error">{{ $message }}</span> @enderror

            <button class="bg-blue-500 text-white px-4 py-2">Update</button>
            <button wire:navigate href="/customers" class="bg-blue-500 text-white px-4 py-2">Back</button>
        </form>

    </div>
</div>

