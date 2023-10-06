<x-public-layout>
    <!-- Features -->
    <div class="max-w-7xl mx-auto py-7 px-4 sm:px-6 lg:px-8">
        <div class="relative p-6 md:p-16">
            <!-- Grid -->
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-gray-200">
                        Dokter Kami siap melayani anda, <br>
                        <span class="text-blue-600">Jadwal Praktek</span>
                    </h2>

                    <!-- Tab Navs -->
                    <nav class="grid gap-3 mt-5 md:mt-10" aria-label="Tabs" role="tablist" id="dokter-list"></nav>
                    <!-- End Tab Navs -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-6">
                    <div class="relative">
                        <!-- Tab Content -->
                        <div id="dokter-jadwal-list"></div>
                        <!-- End Tab Content -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-0 right-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                    stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <!-- Background Color -->
            <div class="absolute inset-0 grid grid-cols-12 w-full h-full">
                <div
                    class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-white/[.075]">
                </div>
            </div>
            <!-- End Background Color -->
        </div>
    </div>
    <!-- End Features -->

    @push('scripts')
    <script>
        const url = base_api_url + '/dokter/jadwal/get';
        const imgUrl = "{{ env('IMG_URL') }}";
    
        $('#dokter-list').html('');
        $('#dokter-jadwal-list').html('');

        function fetchData(url) {
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        var jadwal = response.data;
                        buildListDokter(jadwal);
                        buildListJadwal(jadwal);
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        }

        function buildListDokter(data) {
            var i = 0;
            $.each(data, function(index, item) {
                var html = `
                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700 ${i == 0 ? 'active' : ''}"
                        id="tabs-with-card-item-${i+1}" data-hs-tab="#tabs-with-card-${i+1}" aria-controls="tabs-with-card-${i+1}"
                        role="tab">
                        <span class="flex">
                            <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                            <span class="grow ml-6">
                                <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">
                                    ${item[0].nm_dokter}
                                </span>
                                <span class="block text-sm mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">
                                    ${item[0].spesialis.nm_sps.toUpperCase()}
                                </span>
                            </span>
                        </span>
                    </button>
                `;
                i++;
                $('#dokter-list').append(html);
            });
        }

        function buildListJadwal(data) {
            var i = 0;
            $.each(data, function (index, item) {
                let html = `
                    <div id="tabs-with-card-${i+1}" role="tabpanel" aria-labelledby="tabs-with-card-item-${i+1}" ${i != 0 ? 'class="hidden"' : ''}>
                        <div class="shadow-xl bg-white shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"><div class="aspect-w-9 aspect-h-9">
                                <img class="w-full object-cover object-top rounded-t-xl"
                                    src="${imgUrl + "/" + item[0].pegawai.photo}"
                                    onerror="this.onerror=null; this.src='https://t3.ftcdn.net/jpg/00/64/67/80/360_F_64678017_zUpiZFjj04cnLri7oADnyMH0XBYyQghG.jpg';"
                                    alt="Image Description">
                            </div>
                            <div class="px-3 py-6">
                                <!-- Features -->
                                <div class="w-full px-4" id="jadwalDokterjam">${buildJadwalDokter(item[0].jadwal)}</div>
                                <!-- End Features -->
                            </div>
                        </div>
                    </div>
                `;
                i++;

                $('#dokter-jadwal-list').append(html);
            });
        }

        function buildJadwalDokter(jadwal) {
            var jadwalByHari = [];
            let hariJadwal = ''
            
            $.each(jadwal, function (index, item) {
                if (jadwalByHari[item.hari_kerja] == undefined) {
                    jadwalByHari[item.hari_kerja] = [];
                    hariJadwal = item.hari_kerja;
                }
                jadwalByHari[item.hari_kerja].push(item);
            });

            let h = `<div class="grid gap-6 grid-cols-2 md:grid-cols-4 lg:grid-cols-3 sm:gap-5 justify-between items-start w-full">`;
            for (var hari in jadwalByHari) {
                h += `<div>`;
                        h += `<p class="text-xl font-semibold text-blue-500">${hari}</p>`;
                    $.each(jadwalByHari[hari], function (index, item) {
                        if (item.kuota > 0) {
                            h += `<p class="mt-1 text-base text-gray-500">${item.jam_mulai.slice(0, 5)} - ${item.jam_selesai.slice(0, 5)}</p>`;
                        } else {
                            h += `<p class="inline-flex mt-1 text-xs bg-orange-100 border-2 border-orange-400 text-orange-500 font-bold px-4 rounded-full">LIBUR</p>`;
                        }
                    });
                h += `</div>`;
            }
            h += `</div>`;
            
            return h;
        }   

        $(document).ready(function() {
            fetchData(url);
        });
    </script>
    @endpush
</x-public-layout>