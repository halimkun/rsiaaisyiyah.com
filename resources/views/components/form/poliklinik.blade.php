@props(['action', 'buttonText' => 'Save'])

<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ $slot }}
    <div class="mt-4">
        <x-input-label class="capitalize" for="nama_poli" :value="__('Nama Poli')" />

        <x-text-input id="nama_poli" class="mt-1 block w-full" type="text" name="nama_poli" :value="old('nama_poli')" x-bind:value="poli.nama_poli" autocomplete="off" placeholder="Nama Poli" />
        <x-input-error :messages="$errors->get('nama_poli')" class="mt-1" />
    </div>

    <div class="mt-4">
        <x-input-label class="capitalize" for="shortdesc" :value="__('Deskripsi Singkat')" />

        <x-text-input id="shortdesc" class="mt-1 block w-full" type="text" name="shortdesc" :value="old('shortdesc')" x-bind:value="poli.deskripsi_singkat" autocomplete="off" placeholder="Deskripsi Singkat" />
        <x-input-error :messages="$errors->get('shortdesc')" class="mt-1" />
    </div>

    <div class="mt-4">
        <div class="flex items-center justify-between gap-2">
            <x-input-label class="capitalize" for="icon" :value="__('Icon')" />
            <a href="https://fontawesome.com/search?o=r&m=free" class="text-sm" target="_blank">
                browse icon <i class="fas fa-external-link-alt ml-1"></i>
            </a>
        </div>

        <x-text-input id="icon" class="mt-1 block w-full" type="text" name="icon" autocomplete="off" placeholder="fa-user" :value="old('icon')" x-bind:value="poli.icon" />
        <x-input-error :messages="$errors->get('icon')" class="mt-1" />
    </div>

    <div class="mt-4">
        <x-input-label class="capitalize" for="gambar" :value="__('Foto Poli')" />

        <x-text-input id="gambar" class="mt-1 block w-full border bg-white" type="file" name="gambar" :value="old('gambar')" autocomplete="off" placeholder="Foto Poli" />
        <x-input-error :messages="$errors->get('gambar')" class="mt-1" />
    </div>

    <div class="mt-4">
        <x-input-label class="capitalize" for="desc" :value="__('Deskripsi')" />

        <textarea name="desc" id="desc" class="w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Deskripsi Poliklinik" rows="5" x-bind:value="poli.deskripsi">{{ old('desc') }}</textarea>
        <x-input-error :messages="$errors->get('desc')" class="mt-1" />
    </div>

    <div class="flex w-full items-center justify-between">
        <button type="button" class="mt-5 rounded bg-gray-400 px-5 py-2 font-bold text-white hover:bg-gray-500" x-on:click="poli = []">
            Clear
        </button>
        <button type="submit" class="mt-5 rounded bg-blue-500 px-5 py-2 font-bold text-white hover:bg-blue-700">
            {{ $buttonText }}
        </button>
    </div>
</form>
