@props(['id'])
<x-expand-wrapper title="Fasilitas" :id="$id">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="flex flex-col gap-5">
            <form method="post" class="fasilitasTitle">
                {{ csrf_field() }}
                <div class="p-5 rounded-lg bg-gray-200/50">
                    <x-title-text title="Section Title Settings" size="xl" class="text-gray-800"/>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="text" :value="__('Section Tiny Text')" />
    
                        <x-text-input id="text" class="block mt-1 w-full" type="text" name="text" required autocomplete="off" :value="Setting::get('fasilitas.text')" />
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="title" :value="__('Section title')" />
    
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required autocomplete="off" :value="Setting::get('fasilitas.title')" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="subtitle" :value="__('Section Sub Title')" />
    
                        {{-- <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" required autocomplete="off" :value="Setting::get('fasilitas.subtitle')" /> --}}
                        <textarea name="subtitle" id="subtitle" required
                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            rows="5">{{ Setting::get('fasilitas.subtitle') }}</textarea>
                        <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-end w-full">
                        <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <div class="p-5 rounded-lg bg-gray-200/50">
                <x-title-text title="Section Content Settings" size="xl" class="text-gray-800"/>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="nama_poli" :value="__('Nama Nama')" />

                    <x-text-input id="nama_poli" class="block mt-1 w-full" type="text" name="nama_poli" required autocomplete="off" />
                    <x-input-error :messages="$errors->get('nama_poli')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="shortdesc" :value="__('Deskripsi Singkat')" />

                    <x-text-input id="shortdesc" class="block mt-1 w-full" type="text" name="shortdesc" required autocomplete="off" />
                    <x-input-error :messages="$errors->get('shortdesc')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="gambar" :value="__('Foto Poli')" />

                    <x-text-input id="gambar" class="block mt-1 w-full" type="file" name="gambar" required autocomplete="off" />
                    <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="desc" :value="__('Deskripsi')" />

                    <textarea name="desc" id="desc" required
                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        rows="5"></textarea>
                    <x-input-error :messages="$errors->get('desc')" class="mt-2" />
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <x-not-ready />
    </div>
</x-expand-wrapper>