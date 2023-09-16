@props(['data' => []])

<div class="mx-auto max-w-7xl gap-5 p-5 md:p-10" x-data="{ poli: [] }">
    <x-section-title :text="Setting::get('poli.text')" :title="Setting::get('poli.title')" :subtitle="Setting::get('poli.subtitle')" />

    <div class="grid items-center gap-3 sm:grid-cols-2 lg:grid-cols-3 xl:gap-6">
        @foreach ($data as $poli)
            <!-- Card -->
            <button class="group flex h-full w-full gap-y-6 rounded-lg bg-gray-100 p-5 text-left shadow transition-all hover:shadow-md" x-data="" x-on:click.prevent="$dispatch('open-modal', 'poli-modal')" x-on:click="poli = {
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
            <!-- End Card -->
        @endforeach
    </div>

    <x-modal name="poli-modal" :show="$errors->userDeletion->isNotEmpty()" maxWidth="xl">
        <div class="p-5">
            <img x-bind:src="base_url + '/public/images/' + poli.gambar" class="max-h-[400px] w-full rounded-lg object-cover shadow-lg" alt="">
            <h3 class="mt-4 text-2xl font-bold text-blue-600" x-text="poli.nama_poli"></h3>
            <p class="mt-2 text-gray-600" x-text="poli.desc"></p>

            <div class="mt-5 flex justify-end">
                <button type="button" x-on:click.prevent="$dispatch('close', 'poli-modal')" class="inline-flex items-center gap-x-2 px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </button>
            </div>
        </div>
    </x-modal>
</div>
