@props(['data' => [], 'id'])
<x-expand-wrapper title="Fasilitas" :id="$id">
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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-stretch mt-5">
        <div class="p-5 rounded-lg bg-gray-200/50">
            <form action="{{ route('admin.sections.fasilitas.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <x-title-text title="Section Content Settings" size="xl" class="text-gray-800"/>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="nama_fasilitas" :value="__('Nama')" />

                    <x-text-input id="nama_fasilitas" class="block mt-1 w-full" type="text" name="nama_fasilitas" required autocomplete="off" />
                    <x-input-error :messages="$errors->get('nama_fasilitas')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="shortdesc" :value="__('Deskripsi Singkat')" />

                    <x-text-input id="shortdesc" class="block mt-1 w-full" type="text" name="shortdesc" required autocomplete="off" />
                    <x-input-error :messages="$errors->get('shortdesc')" class="mt-2" />
                </div>

                <div class="mt-4">
                        <div class="flex items-center justify-between gap-2">
                            <x-input-label class="capitalize" for="icon" :value="__('Icon')" />
                            <a href="https://fontawesome.com/search?o=r&m=free" class="text-sm" target="_blank">
                                browse icon <i class="fas fa-external-link-alt ml-1"></i>
                            </a>
                        </div>
    
                        <x-text-input id="icon" class="mt-1 block w-full" type="text" name="icon" autocomplete="off" placeholder="fa-user" x-bind:value="poli.icon" />
                        <x-input-error :messages="$errors->get('icon')" class="mt-1" />
                    </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="gambar" :value="__('Foto')" />

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

                <div class="flex items-center justify-end w-full">
                    <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-gray-200/50">
            <x-title-text title="Daftar Fasilitas" size="xl" class="m-5 text-gray-800" />
            <div class="max-h-[580px] px-5 pt-0 mt-0 pb-5 overflow-y-scroll">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    @foreach ($data as $fasilitas)
                    <!-- Card -->
                    <div class="w-full h-full bg-white shadow-lg hover:shadow-md transition-all duration-200 ease-in-out border-2 rounded-lg py-5 md:py-8 900">
                        <div class="flex flex-col items-center justify-center gap-y-4">
                            <div class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100  ">
                                <div class="fa {{ $fasilitas->icon }} text-blue-600 "></div>
                            </div>
                            <div class="flex-shrink-0 text-center px-5">
                                <h3 class="block text-lg font-semibold text-gray-800 ">{{ $fasilitas->nama_fasilitas }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                    @endforeach
                </div>
            </div>
            {{-- <x-not-ready /> --}}
        </div>
    </div>
</x-expand-wrapper>