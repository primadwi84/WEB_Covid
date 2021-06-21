<div class="md:grid md:grid-cols-3 md:gap-6">

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="store" action="#" method="POST">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="sehat" class="block text-sm font-medium text-gray-700">Sehat</label>
                            <input wire:model="sehat" type="text" name="sehat" id="sehat"
                                autocomplete="sehat-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="sakit" class="block text-sm font-medium text-gray-700">Sakit</label>
                            <input wire:model="sakit" type="text" name="sakit" id="sakit"
                                autocomplete="sakit-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="meninggal" class="block text-sm font-medium text-gray-700">Meninggal</label>
                            <input wire:model="meninggal" type="text" name="meninggal" id="meninggal"
                                autocomplete="meninggal-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <!-- <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select wire:model="jenis_kelamin" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div> -->

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">kabupaten</label>
                            <select wire:model="kabupaten" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option selected>pilih kabupaten</option>
                                @foreach($carikabupaten as $data)
                                <option value="{{$data->nama_kabupaten}}">{{$data->nama_kabupaten}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">kecamatan</label>
                            <select wire:model="kecamatan" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Pilih kecamatan</option>
                                @foreach($carikecamatan as $data)
                                <option value="{{$data->nama_kecamatan}}">{{$data->nama_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">desa</label>
                            <select wire:model="desa" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>United States</option>
                                @foreach($caridesa as $data)
                                <option value="{{$data->nama_desa}}">{{$data->nama_desa}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">status</label>
                            <select wire:model="status" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>status </option>
                                <option value="Hijau">Hijau</option>
                                <option value="Merah">Merah</option>
                            </select>
                        </div>


                    </div>
                </div>
                <div class="px-4 py-3 bg-white-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>