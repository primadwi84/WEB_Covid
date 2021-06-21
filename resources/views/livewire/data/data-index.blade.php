<div class="flex flex-col">
<h1 class="text-3xl text-black pb-6">Data Covid-19 Provinsi Bali Indonesia</h1>
    @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3">
        <div class="flex">
            <div>
                <p class="text-sm">{{ session('message')}} </p>
            </div>
        </div>
    </div>
    @endif

    <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">

        @if($statusAdd)
        <livewire:data.data-create>
        </livewire:data.data-create>
        @elseif($statusEdit)
        <livewire:data.data-update>
        </livewire:data.data-update>
        @else
    </div>

   

    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                <div class="mx-2 my-2">
                    <button wire:click="addData"
                        class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Data

                    </button>
                </div>

                <!-- <div class="bg-white mx-auto py-2 sm:px-6 lg:px-8 "> -->
                                <div class="grid grid-cols-1 lg:grid-cols-4">
                                    <div class="col-span-2">
                                    </div>
                                    <div>
                                        <!-- <div class="float-right mx-80 "> -->
                                        <div class="col-span-4 sm:col-span-2">
                                            <select wire:model="paginate" class="form-control rounded"
                                                aria-label=".form-select-sm example">
                                                <option selected>Pagination Option</option>
                                                <option value="5">Paginate 5 Data</option>
                                                <option value="10">Paginate 10 Data</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-group rounded">
                                            <input wire:model="search" type="search" class="form-control rounded"
                                                placeholder="Nama Desa" aria-label="Search"
                                                aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                <!-- </div> -->
                <br>
                
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Sehat
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Sakit
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Meninggal
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                desa
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                kecamatan
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                kabupaten
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                status
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($data as $value)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->sehat}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->sakit}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->meninggal}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->desa}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->kecamatan}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->kabupaten}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->status}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button wire:click="EditData({{$value->id}})"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Edit
                                </button>
                                <button wire:click="destroy({{$value->id}})"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</div>