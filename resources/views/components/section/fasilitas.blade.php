@props(['data' => []])
<div class="mx-auto max-w-7xl gap-5 p-5 md:p-10" x-data="{ fasilitas: [] }">
    <x-section-title :text="Setting::get('fasilitas.text')" :title="Setting::get('fasilitas.title')" :subtitle="Setting::get('fasilitas.subtitle')" />
    {{-- <x-section-title text="Fasilitas" title="Fasilitas RSIA Aisyiyah Pekajangan" subtitle="Fasilitas yang tersedia di RSIA Aisyiyah Pekajangan" /> --}}
    <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-4 lg:gap-10 items-center justify-center">
        @foreach ($data as $fasilitas)
            <!-- Card -->
            <button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'fasilitas-detail')"
            x-on:click="fasilitas = {
                nama_fasilitas: '{{ $fasilitas->nama_fasilitas }}',
                icon: '{{ $fasilitas->icon }}',
                gambar: '{{ $fasilitas->gambar }}',
                desc: `{{ $fasilitas->deskripsi }}`
            }"
            >
                <div class="h-full w-full rounded-lg border-2 bg-white py-5 shadow-lg transition-all duration-200 ease-in-out hover:shadow-md dark:bg-slate-900 md:py-8">
                    <div class="flex flex-col items-center justify-center gap-y-4">
                        <div class="inline-flex h-[62px] w-[62px] items-center justify-center rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <div class="fa {{ $fasilitas->icon }} text-blue-600 dark:text-blue-400"></div>
                        </div>
                        <div class="flex-shrink-0 px-5 text-center">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{ $fasilitas->nama_fasilitas }}</h3>
                        </div>
                    </div>
                </div>
            </button>
            <!-- End Card -->
        @endforeach
    </div>

    <x-modal name="fasilitas-detail" maxWidth="xl">
        <div class="p-5">
            <img x-bind:src="base_url + '/public/images/' + fasilitas.gambar" class="max-h-[400px] w-full rounded-lg object-cover shadow-lg" alt="">
            <h3 class="mt-4 text-2xl font-bold text-blue-600" x-text="fasilitas.nama_fasilitas"></h3>
            <p class="mt-2 text-gray-600" x-text="fasilitas.desc"></p>

            <div class="mt-5 flex justify-end">
                <button type="button" x-on:click.prevent="$dispatch('close', 'fasilitas-detail')" class="inline-flex items-center gap-x-2 px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </button>
            </div>
        </div>
    </x-modal>
</div>
