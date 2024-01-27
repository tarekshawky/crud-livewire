<div class="max-w-7xl mx-auto px-4">
    <div class="max-w-xl mx-auto mt-8">
        <h2>Customer Page</h2>
        <form class="space-y-4 mt-8" wire:submit.prevent="save">
            <input
                class="border-b-2 border-gray-200 w-full px-4 py-2 text-gray-900"
                type="text"
                placeholder="Name"
                wire:model="name"
            />
            <input
                class="border-b-2 border-gray-200 w-full px-4 py-2 text-gray-900"
                type="email"
                placeholder="Email"
                wire:model="email"
            />
            <input
                class="border-b-2 border-gray-200 w-full px-4 py-2 text-gray-900 "
                type="text"
                placeholder="Phone"
                wire:model="phone"
            />
            <button class="bg-blue-500 text-white px-4 py-2">Submit</button>
            <button wire:navigate href="/customers" class="bg-blue-500 text-white px-4 py-2">Back</button>
        </form>

    </div>
</div>

