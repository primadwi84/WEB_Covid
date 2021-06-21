<div class="flex flex-col">
<h1 class="text-3xl text-black pb-6">Data Kabupaten di Provinsi Bali</h1>
    @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3">
        <div class="flex">
            <div>
                <p class="text-sm">{{ session('message')}} </p>
            </div>
        </div>
    </div>
    @endif
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

            <div>
                @if($statusEdit)
                <livewire:kabupaten.kabupaten-update>
                </livewire:kabupaten.kabupaten-update>

                @else
                <livewire:kabupaten.kabupaten-create>
                </livewire:kabupaten.kabupaten-create>
                @endif
            </div>

            <div class="bg-white mx-auto py-2 sm:px-6 lg:px-8 ">
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
                                                placeholder="Search" aria-label="Search"
                                                aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                </div>

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Kabupaten
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach($kabupaten as $value)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$value->nama_kabupaten}}
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                <button wire:click="EditData({{$value->id}})"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Button
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
</div>