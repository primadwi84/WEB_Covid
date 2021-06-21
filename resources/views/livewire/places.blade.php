<div>
<h1 class="text-3xl text-black pb-6">{{$title}}</h1>
<div class="py-12">
    <div class=" max-w-7xl mx-auto ...">
        <div class='bg-white overflow-hidden shadow-xl sm::rounded-lg px-4 py-4'>
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message')}} </p>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="create" class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-2 rounded my-2"> Tambah Data</button>
            @if ($isModal)
                @include("livewire.create")
            @endif
           
            <table class='table-fixed w-full' style="border: 2px solid;">
                <thead>
                    <tr class="bg-blue-100">
                        <th class="px-4 py-2" style="border: 1px solid;">Desa</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Kecamatan</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Kabupaten</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Provinsi</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Zona</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($places as $row)
                    <tr>
                        <td class="boder px-4 py-2" style="border: 1px solid;text-align:center;">{{ $row -> Desa }}</td>
                        <td class="boder px-4 py-2" style="border: 1px solid;text-align:center;">{{ $row -> Kecamatan }}</td>
                        <td class="boder px-4 py-2" style="border: 1px solid;text-align:center;">{{ $row -> Kabupaten }}</td>
                        <td class="boder px-4 py-2" style="border: 1px solid;text-align:center;">{{ $row -> Provinsi }}</td>
                        <td class="boder px-4 py-2" style="border: 1px solid;text-align:center;">{{ $row -> Zona }}</td>
                        <td class="boder px-4 py-2" style="border: 1px solid;text-align:center;">
                            <button wire:click="edit({{ $row->id}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Edit</button>
                            <button wire:click="delete({{ $row->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded">Hapus</button>
                        </td>
                        
                    </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5"> Tidak ada Data </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>








