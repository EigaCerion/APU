<div class="p-4">
    <div class="flex justify-between mb-4">
        <input wire:model="search" type="text" placeholder="Cari nama ibu..." class="border px-2 py-1">
        <a href="{{ route('mothers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah Ibu</a>
    </div>

    <table class="w-full border-collapse border">
        <thead class="bg-gray-200">
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mothers as $mother)
                <tr class="border-t">
                    <td>{{ $mother->name }}</td>
                    <td>{{ $mother->nik }}</td>
                    <td>{{ $mother->phone }}</td>
                    <td>{{ $mother->address }}</td>
                    <td>
                        <a href="{{ route('mothers.edit', $mother->id) }}" class="text-blue-500">Edit</a> |
                        <button wire:click="delete({{ $mother->id }})" class="text-red-500">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
