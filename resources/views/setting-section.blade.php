<x-app-layout>
    @slot('header')
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Section Content Setting') }}
        </h2>
    </div>
    @endslot

    <div class="bg-white p-5 shadow rounded-lgk;">
        <div class="flex w-full">
            <div class="w-full flex bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 ">
                <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:text-gray-700 py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium rounded-md hover:hover:text-blue-600 dark:text-gray-400 dark:hover:text-white active"
                        id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                        Home
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:text-gray-700 py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium rounded-md hover:hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                        id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                        Profil
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:text-gray-700 py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium rounded-md hover:hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                        id="segment-item-3" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                        Layanan & Fasilitas
                    </button>
                </nav>
            </div>
        </div>

        <div class="mt-3">
            <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                <div class="flex flex-col gap-5">
                    <x-section.setting-poliklinik id="poliHome" :data="$poli" />
                    <x-section.setting-dokter id="dokterHome" />
                    <x-section.setting-fasilitas id="fasilitasHome" />
                    <x-section.setting-articles id="articlesHome" />
                </div>
            </div>
            <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                <x-not-ready />
            </div>
            <div id="segment-3" class="hidden" role="tabpanel" aria-labelledby="segment-item-3">
                <div class="flex flex-col gap-5">
                    <x-section.setting-poliklinik id="poliLayanan" :data="$poli" />
                    <x-section.setting-fasilitas id="fasilitasLayanan" />
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('custom/section-settings/js/poliklinik.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/section-settings/js/dokter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/section-settings/js/fasilitas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/section-settings/js/articles.js') }}"></script>
    @endpush
</x-app-layout>