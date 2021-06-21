<div>
    <div class="mt-1 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="store" method="">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-3 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-4 sm:col-span-2">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Kecamatan
                            </label>
                            <input wire:model="nama_kecamatan" type="text" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama_kecamatan') is-invalid  @enderror">
                            @error('nama_kecamatan')
                            <span class="invalid-feedback text-red-400"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-4 sm:col-span-2">
                            <label for="country" class="block text-sm font-medium text-gray-700">Kabupaten</label>
                            <select wire:model="kabupaten" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('kabupaten') is-invalid  @enderror">
                                <option value="null">Pilih Kabupaten </option>

                                @foreach($carikabupaten as $data)
                                <option value="{{$data->nama_kabupaten}}">{{$data->nama_kabupaten}}</option>
                                @endforeach

                            </select>
                            @error('kabupaten')
                            <span class="invalid-feedback text-red-400"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="mx-1 px-1 py-4 bg-gray-50 text-right sm:px-4">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>

                    </div>
                </div>
        </form>
    </div>
</div>