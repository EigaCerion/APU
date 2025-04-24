<div class="container mx-auto p-4">
    <!-- Flash Message Success -->
    @if (session()->has('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header dan Tombol Tambah -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Data Ibu</h2>
        <a href="{{ route('mothers.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Tambah Ibu
        </a>
    </div>

    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text"
               wire:model="search"
               placeholder="Cari nama ibu..."
               class="border border-gray-300 rounded px-4 py-2 w-full sm:w-1/3"
        >
    </div>

    <!-- Table Data Ibu -->
    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">NIK</th>
                <th class="px-4 py-2">Tanggal Lahir</th>
                <th class="px-4 py-2">Telepon</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mothers as $mother)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $mother->name }}</td>
                    <td class="px-4 py-2">{{ $mother->nik }}</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($mother->birth_date)->format('d-m-Y') }}</td>
                    <td class="px-4 py-2">{{ $mother->phone }}</td>
                    <td class="px-4 py-2">{{ $mother->address }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('mothers.edit', $mother->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        <button wire:click="delete({{ $mother->id }})" class="text-red-500 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data ibu.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $mothers->links() }} <!-- Pagination -->
    </div>
</div>
