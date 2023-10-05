@props(['id', 'data' => []])
<x-expand-wrapper title="Poliklinik" :id="$id">
    <form method="post" class="poliTitle">
        {{ csrf_field() }}
        <div class="rounded-lg bg-gray-200/50 p-5">
            <x-title-text title="Section Title Settings" size="xl" class="text-gray-800" />

            <div class="mt-4">
                <x-input-label class="capitalize" for="text" :value="__('Section Tiny Text')" />

                <x-text-input id="text" class="mt-1 block w-full" type="text" name="text" required autocomplete="off" :value="old('text') ? old('text') : Setting::get('poli.text')" />
                <x-input-error :messages="$errors->get('text')" class="mt-1" />
            </div>

            <div class="mt-4">
                <x-input-label class="capitalize" for="title" :value="__('Section title')" />

                <x-text-input id="title" class="mt-1 block w-full" type="text" name="title" required autocomplete="off" :value="old('title') ? old('title') : Setting::get('poli.title')" />
                <x-input-error :messages="$errors->get('title')" class="mt-1" />
            </div>

            <div class="mt-4">
                <x-input-label class="capitalize" for="subtitle" :value="__('Section Sub Title')" />
                <textarea name="subtitle" id="subtitle" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" rows="5">{{ old('subtitle') ? old('subtitle') : Setting::get('poli.subtitle') }}</textarea>
                <x-input-error :messages="$errors->get('subtitle')" class="mt-1" />
            </div>

            <div class="flex w-full items-center justify-end">
                <button type="submit" class="mt-5 rounded bg-blue-500 px-5 py-2 font-bold text-white hover:bg-blue-700">
                    Save
                </button>
            </div>
        </div>
    </form>
    <div class="mt-5 inline-grid grid-cols-1 gap-5 md:grid-cols-2">
        <div class="rounded-lg bg-gray-200/50 p-5">
            <x-title-text title="Section Content Settings" size="xl" class="text-gray-800" />

            <form action="{{ route('admin.sections.poli.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mt-4">
                    <x-input-label class="capitalize" for="nama_poli" :value="__('Nama Poli')" />

                    <x-text-input id="nama_poli" class="mt-1 block w-full" type="text" name="nama_poli" :value="old('nama_poli')" autocomplete="off" placeholder="Nama Poli" />
                    <x-input-error :messages="$errors->get('nama_poli')" class="mt-1" />
                </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="shortdesc" :value="__('Deskripsi Singkat')" />

                    <x-text-input id="shortdesc" class="mt-1 block w-full" type="text" name="shortdesc" :value="old('shortdesc')" autocomplete="off" placeholder="Deskripsi Singkat" />
                    <x-input-error :messages="$errors->get('shortdesc')" class="mt-1" />
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
                    <x-input-label class="capitalize" for="gambar" :value="__('Foto Poli')" />

                    <x-text-input id="gambar" class="mt-1 block w-full border bg-white" type="file" name="gambar" :value="old('gambar')" autocomplete="off" placeholder="Foto Poli" />
                    <x-input-error :messages="$errors->get('gambar')" class="mt-1" />
                </div>

                <div class="mt-4">
                    <x-input-label class="capitalize" for="desc" :value="__('Deskripsi')" />

                    <textarea name="desc" id="desc" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Deskripsi Poliklinik" rows="5">{{ old('desc') }}</textarea>
                    <x-input-error :messages="$errors->get('desc')" class="mt-1" />
                </div>

                <div class="flex w-full items-center justify-end">
                    <button type="submit" class="mt-5 rounded bg-blue-500 px-5 py-2 font-bold text-white hover:bg-blue-700">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="rounded-lg bg-gray-300/30" x-data="{ poli: [] }">
            <x-title-text title="List Poli" size="xl" class="text-gray-800 m-5" />
            <div class="max-h-[580px] w-full px-5 pb-5 pt-0 overflow-y-scroll scroll-ml-6">
                @foreach ($data as $poli)
                <div class="w-full mb-4">
                    <button class="group flex h-full w-full gap-y-6 rounded-lg bg-gray-100 p-5 text-left shadow transition-all hover:shadow-md" 
                    x-data="" 
                    x-on:click.prevent="$dispatch('open-modal', 'poli-modal')" 
                    x-on:click="poli = {
                        id: '{{ $poli->id }}',
                        nama_poli: '{{ $poli->nama_poli }}',
                        shortdesc: '{{ $poli->deskripsi_singkat }}',
                        icon: '{{ $poli->icon }}',
                        gambar: '{{ $poli->gambar }}',
                        desc: `{{ $poli->deskripsi }}`
                    }">
                        <i class="fa fa-solid {{ $poli->icon }} mr-6 mt-0.5 h-8 w-8 flex-shrink-0 text-2xl text-blue-600"></i>
                        <div>
                            <div>
                                <h3 class="block text-lg font-bold text-blue-600">{{ $poli->nama_poli }}</h3>
                                <p class="mt-2 text-gray-600">{{ $poli->deskripsi_singkat }}</p>
                            </div>
    
                            <p class="mt-2 inline-flex items-center gap-x-2 text-sm font-semibold text-blue-600">
                                Learn more
                                <i class="fa-solid fa-arrow-right transition ease-in-out group-hover:translate-x-1"></i>
                            </p>
                        </div>
                    </button>
                </div>
                @endforeach
            </div>

            <x-modal name="poli-modal" :show="$errors->userDeletion->isNotEmpty()" maxWidth="5xl">
                <div class="p-5">
                    <x-title-text title="Edit Poli" size="xl" class="mb-3 text-gray-800" />
                    <form method="post" enctype="multipart/form-data" class="poliUpdate">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <input type="hidden" name="id" x-bind:value="poli.id">
                                <div class="mt-4">
                                    <x-input-label class="capitalize" for="nama_poli" :value="__('Nama Poli')" />

                                    <x-text-input id="nama_poli" class="mt-1 block w-full" type="text" name="nama_poli" autocomplete="off" placeholder="Nama Poli" x-bind:value="poli.nama_poli" />
                                    <x-input-error :messages="$errors->get('nama_poli')" class="mt-1" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label class="capitalize" for="shortdesc" :value="__('Deskripsi Singkat')" />

                                    <x-text-input id="shortdesc" class="mt-1 block w-full" type="text" name="shortdesc" autocomplete="off" placeholder="Deskripsi Singkat" x-bind:value="poli.shortdesc" />
                                    <x-input-error :messages="$errors->get('shortdesc')" class="mt-1" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label class="capitalize" for="gambar" :value="__('Foto Poli')" />

                                    <x-text-input id="gambar" class="mt-1 block w-full border bg-white" type="file" name="gambar" :value="old('gambar')" autocomplete="off" placeholder="Foto Poli" />
                                    <x-input-error :messages="$errors->get('gambar')" class="mt-1" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label class="capitalize" for="desc" :value="__('Deskripsi')" />

                                    <textarea name="desc" id="desc" rows="5"class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Deskripsi Poliklinik" x-text="poli.desc"></textarea>
                                    <x-input-error :messages="$errors->get('desc')" class="mt-1" />
                                </div>
                            </div>
                            <div>
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

                                <img x-bind:src="base_url + '/public/images/' + poli.gambar" class="mt-4 w-full rounded-lg shadow-lg max-h-[320px] object-cover" alt="">
                            </div>
                        </div>

                        <div class="flex w-full items-center justify-between gap-5">
                            <div class="flex flex-row gap-3">
                                <button type="button" class="mt-5 rounded bg-red-500 px-5 py-2 font-bold text-white hover:bg-red-700" 
                                    x-on:click.prevent="$dispatch('open-modal', 'delete-poli-modal')"
                                    x-data=""
                                    x-on:click="poli = {
                                        id: '{{ $poli->id }}',
                                        nama_poli: '{{ $poli->nama_poli }}',
                                        shortdesc: '{{ $poli->deskripsi_singkat }}',
                                        icon: '{{ $poli->icon }}',
                                        gambar: '{{ $poli->gambar }}',
                                        desc: `{{ $poli->deskripsi }}`
                                    }"
                                    >Delete</button>
                                <button type="submit" class="mt-5 rounded bg-blue-500 px-5 py-2 font-bold text-white hover:bg-blue-700">Save</button>
                            </div>
                            <button type="button" class="mt-5 rounded bg-gray-500 px-5 py-2 font-bold text-white hover:bg-red-700" x-on:click.prevent="$dispatch('close', 'poli-modal')">Close</button>
                        </div>
                    </form>
                </div>
            </x-modal>

            <x-modal name="delete-poli-modal" :show="$errors->userDeletion->isNotEmpty()" maxWidth="xl">
                <div class="p-5">
                    <x-title-text title="Delete Poliklinik" size="xl" class="mb-3 text-gray-800" />
                    <form method="post" class="poliDelete">
                        @csrf
                        <input type="text" name="id" x-bind:value="poli.id">
                        <p class="text-gray-600">Are you sure want to delete this poliklinik?</p>
                        <div class="flex w-full items-center justify-between gap-5">
                            <button type="submit" class="mt-5 rounded bg-red-500 px-5 py-2 font-bold text-white hover:bg-red-700">Delete</button>
                            <button type="button" class="mt-5 rounded bg-gray-500 px-5 py-2 font-bold text-white hover:bg-red-700" x-on:click.prevent="$dispatch('close', 'delete-poli-modal')">Close</button>
                        </div>
                    </form>
                </div>
            </x-modal>
        </div>

    </div>
</x-expand-wrapper>
