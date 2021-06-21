<div>
    <div class="mt-1 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="update" method="">
            <input type="hidden" name="" id="" wire:model="KabupatenID">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-3 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-4 sm:col-span-2">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Kabupaten
                            </label>
                            <input wire:model="nama_kabupaten" type="text" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama_kabupaten') is-invalid  @enderror">
                            @error('nama_kabupaten')
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