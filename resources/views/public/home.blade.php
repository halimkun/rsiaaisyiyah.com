<x-public-layout header="Home">
    <x-slot name="carousel">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative overflow-hidden h-[300px] md:h-[500px] lg:h-[calc(100vh-200px)]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div
                        class="bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] h-full bg-cover bg-center flex items-start">
                        <div class="max-w-7xl mx-auto flex px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div
                        class="bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] h-full bg-cover bg-center flex items-start">
                        <div class="max-w-7xl mx-auto flex px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div
                        class="bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] h-full bg-cover bg-center flex items-start">
                        <div class="max-w-7xl mx-auto flex px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div
                        class="bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] h-full bg-cover bg-center flex items-start">
                        <div class="max-w-7xl mx-auto flex px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div
                        class="bg-[url('https://cdn.pnghd.pics/data/16/bangunan-rumah-sakit-22.jpg')] h-full bg-cover bg-center flex items-start">
                        <div class="max-w-7xl mx-auto flex px-10 pt-20">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores ab nulla
                            dignissimos accusantium consequuntur doloremque iste odit? Est et hic delectus laborum
                            porro, nulla temporibus tempora vero iure quos.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </x-slot>

    <x-slot name="welcomeflex">
        <div class="md:mt-[-100px] lg:mt-[-170px]">
            <div class="max-w-7xl mx-auto p-5 lg:p-10 flex flex-col lg:flex-row gap-5">
                <div class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition">
                    <div class="p-8 md:p-10">
                        <h1 class="text-2xl">Selamat Datang,</h1>
                        <h1 class="text-4xl font-bold">RSIA Aisyiyah Pekajangan</h1>
                        <p class="text-xl mt-4">Sehat dan bahagia bersama kami</p>
                    </div>
                </div>
                <div class="group flex flex-col bg-blue-600 shadow-sm rounded-xl hover:shadow-md transition">
                    <div class="p-8 md:p-10">
                        <h1 class="text-white text-xl font-bold">Temukan Dokter yang Tepat</h1>
                        <p class="text-white">Cari dan temukan dokter yang tepat untuk kebutuhan medis Anda, dan buat
                            janji dengan langkah mudah</p>
                        <div class="flex flex-col md:flex-row gap-6 items-end mt-4">
                            <div class="flex flex-col gap-2 w-full">
                                <label for="nama" class="text-sm text-white">Nama Dokter</label>
                                <input type="text" name="nama" id="nama" class="border border-gray-300 rounded-lg p-2">
                            </div>
                            <div class="flex flex-col gap-2 w-full">
                                <label for="spesialis" class="text-sm text-white">Spesialis</label>
                                <input type="text" name="spesialis" id="spesialis"
                                    class="border border-gray-300 rounded-lg p-2">
                            </div>
                            <div><button class="bg-slate-800 text-white rounded-lg p-2 px-6">Cari</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <x-section.fasilitas /> 
    </div>
    <!-- End Fasilitas -->

    <!-- Card Blog -->
    <div class="w-full bg-white py-20">
        <x-section.some-articles />
    </div>
    <!-- End Card Blog -->
</x-public-layout>