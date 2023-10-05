<x-public-layout header="Home">
    <x-slot name="carousel">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-[300px] overflow-hidden md:h-[500px] lg:h-[calc(100vh-200px)]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex h-full items-start bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] bg-cover bg-center">
                        <div class="mx-auto flex max-w-7xl px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex h-full items-start bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] bg-cover bg-center">
                        <div class="mx-auto flex max-w-7xl px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex h-full items-start bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] bg-cover bg-center">
                        <div class="mx-auto flex max-w-7xl px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex h-full items-start bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] bg-cover bg-center">
                        <div class="mx-auto flex max-w-7xl px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex h-full items-start bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] bg-cover bg-center">
                        <div class="mx-auto flex max-w-7xl px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-carousel-prev>
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                    <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-carousel-next>
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                    <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </x-slot>

    <x-slot name="welcomeflex">
        <div class="md:mt-[-100px] lg:mt-[-170px]" x-data="{ spesialis: [] }" x-init="() => {
            fetch(base_api_url + '/dokter/spesialis/get')
                .then(res => res.json())
                .then(res => { spesialis = res.data; })
        }">
            <div class="mx-auto flex max-w-7xl flex-col gap-5 p-5 lg:flex-row lg:p-10">
                <div class="group flex flex-col rounded-xl border bg-white shadow-sm transition hover:shadow-md">
                    <div class="p-8 md:p-10">
                        <h1 class="text-2xl">Selamat Datang,</h1>
                        <h1 class="text-4xl font-bold">RSIA Aisyiyah Pekajangan</h1>
                        <p class="mt-4 text-xl">Sehat dan bahagia bersama kami</p>
                    </div>
                </div>
                <div class="group flex flex-col rounded-xl bg-blue-600 shadow-sm transition hover:shadow-md">
                    <div class="p-8 md:p-10">
                        <h1 class="text-xl font-bold text-white">Temukan Dokter yang Tepat</h1>
                        <p class="text-white">Cari dan temukan dokter yang tepat untuk kebutuhan medis Anda, dan buat janji dengan langkah mudah</p>
                        <form action="{{ route('jadwal') }}">
                            <div class="mt-4 flex flex-col items-end gap-6 md:flex-row">
                                <div class="flex w-full flex-col gap-2">
                                    <x-input-label for="nama" label="nama" class="text-white" :value="__('Nama Dokter')" />
                                    <x-text-input name="nama" id="nama" class="border border-gray-300 rounded-lg p-2" />
                                </div>
                                <div class="flex w-full flex-col gap-2">
                                    <x-input-label for="spesialis" label="spesialis" class="text-white" :value="__('Spesialis')" />
                                    {{-- select --}}
                                    <select name="spesialis" id="spesialis" class="border border-gray-300 rounded-lg p-2">
                                        <option value="">Pilih Spesialis</option>
                                        <template x-for="item in spesialis" key="item.kd_sps">
                                            <option class="uppercase" x-text="item.nm_sps" :value="item.kd_sps"></option>
                                        </template>
                                    </select>
                                </div>
                                <div><button class="rounded-lg bg-slate-800 p-2 px-6 text-white">Cari</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script></script>
        @endpush
    </x-slot>

    <!-- Poliklini Section -->
    <div class="w-full bg-white py-10">
        <x-section.poli :data="$poli" />
    </div>
    <!-- End poliklinik Blocks -->

    <!-- Dokter -->
    <div class="w-full bg-gray-100 py-10">
        <x-section.dokter />
    </div>
    <!-- End Dokter -->

    <!-- Fasilitas -->
    <div class="w-full bg-white py-20">
        <x-section.fasilitas :data="$fasil" />
    </div>
    <!-- End Fasilitas -->

    <!-- Card Blog -->
    <div class="w-full bg-white py-20">
        <x-section.some-articles />
    </div>
    <!-- End Card Blog -->
</x-public-layout>
