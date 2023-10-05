<div class="mx-auto max-w-7xl gap-5 p-5 md:p-10">
    <!-- Title -->
    <x-section-title align="right" :text="Setting::get('dokter.text')" :title="Setting::get('dokter.title')" :subtitle="Setting::get('dokter.subtitle')" />
    <!-- End Title -->

    <!-- Grid -->

    <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-4 lg:gap-12" id="data-container"></div>
    <!-- End Grid -->

    <section class="mt-10">
        <div id="pagination" class="w-full flex flex-row justify-end items-center gap-2"></div>
    </section>
</div>

@push('scripts')
    <script>
        const url = base_api_url + '/dokter/active/get?paginate=8';
        const imgUrl = "{{ env('IMG_URL') }}";

        function fetchData(url) {
            if (!url.includes('paginate')) {
                url += '&paginate=8';
            }

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#data-container').html(template(response.data.data));
                    $('#pagination').html(numberTemplate(response.data));
                }
            });
        }

        function template(data) {
            let html = '';
            $.each(data, function(index, item) {
                // console.log();
                let dimgUrl = imgUrl + "/" + item.pegawai.photo;
                
                html += `<div class="rounded-xl pb-3 text-center transition-all duration-300 ease-in-out hover:scale-105 hover:bg-white hover:shadow-md">
                    <div class="aspect-h-12 aspect-w-9" class="imgDokter">
                        <img src="${dimgUrl}" 
                            alt="${item.nm_dokter}" 
                            onerror="this.onerror=null; this.src='https://t3.ftcdn.net/jpg/00/64/67/80/360_F_64678017_zUpiZFjj04cnLri7oADnyMH0XBYyQghG.jpg';"
                            class="mx-auto rounded-xl object-cover object-top" 
                         />
                    </div>
                    <div class="mb-2 mt-2 sm:mt-4 px-3">
                        <h3 class="text-sm font-medium text-gray-800 dark:text-gray-200 sm:text-sm">
                            ${item.nm_dokter}
                        </h3>
                        <p class="text-xs text-gray-600 dark:text-gray-400 sm:text-[0.7rem] ">
                            ${item.spesialis.nm_sps.toUpperCase()}
                        </p>
                    </div>
                </div>`;


            });

            return html;
        }

        function numberTemplate(data) {
            let html = '';
            $.each(data.links, function(index, item) {
                html += `<button 
                    class="${item.active ? 'bg-blue-500 text-white' : 'bg-white text-gray-500'} ${item.url == null ? 'hidden' : ''} inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    onclick="fetchData('${item.url}')"
                    data-page="${item.label}">
                    ${item.label}
                </button>`;
            });

            return html;
        }

        
        fetchData(url);
    </script>
@endpush
