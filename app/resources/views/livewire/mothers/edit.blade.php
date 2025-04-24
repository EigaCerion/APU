<div class="p-6 max-w-2xl mx-auto">
    <h2 class="text-xl font-bold text-gray-800 mb-4">✏️ Edit Data Ibu</h2>

    <form wire:submit.prevent="update" class="space-y-4 bg-white p-6 rounded-xl shadow">
        <div>
            <label class="block font-medium">Nama Ibu</label>
            <input type="text" wire:model="name" class="w-full mt-1 rounded border-gray-300 focus:ring-blue-500" />
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">NIK</label>
            <input type="text" wire:model="nik" class="w-full mt-1 rounded border-gray-300 focus:ring-blue-500" />
            @error('nik') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Tanggal Lahir</label>
            <input type="date" wire:model="birth_date" class="w-full mt-1 rounded border-gray-300 focus:ring-blue-500" />
            @error('birth_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Alamat</label>
            <textarea wire:model="address" class="w-full mt-1 rounded border-gray-300 focus:ring-blue-500"></textarea>
            @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Nomor Telepon</label>
            <input type="text" wire:model="phone" class="w-full mt-1 rounded border-gray-300 focus:ring-blue-500" />
            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end space-x-3 mt-4">
            <a href="{{ route('mothers.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
