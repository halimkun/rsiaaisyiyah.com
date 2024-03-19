<x-app-layout>
    <div class="flex w-full flex-col items-start gap-3 md:flex-row">
        <x-card title="Site Settings" class="w-[60%] border">
            <p class="-mt-2 text-gray-500">Anda dapat merubah pengaturan situs web di sini.</p>

            <div class="mt-6">
                <form action="{{ route('admin.settings.store') }}" method="post">
                    @csrf
                    <div class="mb-4 flex flex-col gap-3 md:flex-row">
                        <div class="flex w-full flex-col gap-1">
                            <x-input-label class="capitalize" for="site.title" :value="__('Nama Rumah Sakit')" />

                            <x-text-input id="site.title" class="mt-1 block w-full" type="text" name="site.title" autocomplete="off" placeholder="Tuliskan nama rumah sakit" value="{{ $settings['site.title']->value ?? old('site_title') }}" />
                            <x-input-error :messages="$errors->get('site_title')" class="mt-1" />
                        </div>

                        <div class="flex w-full flex-col gap-1">
                            <x-input-label class="capitalize" for="site.slogan" :value="__('Slogan Rumah Sakit')" />

                            <x-text-input id="site.slogan" class="mt-1 block w-full" type="text" name="site.slogan" autocomplete="off" placeholder="Tuliskan slogan rumah sakit" value="{{ $settings['site.slogan']->value ?? old('site_slogan') }}" />
                            <x-input-error :messages="$errors->get('site_slogan')" class="mt-1" />
                        </div>
                    </div>

                    <div class="mb-4 flex w-full flex-col gap-1">
                        <x-input-label class="capitalize" for="site.short_description" :value="__('Deskripsi Singkat')" />

                        <textarea name="site.short_description" id="site.short_description" class="block w-full rounded-lg border border-gray-300 p-2 px-3" placeholder="Deskripsi singkat rumah sakit">{{ $settings['site.short.description']->value ?? old('site_short_description') }}</textarea>
                        <x-input-error :messages="$errors->get('site_short_description')" class="mt-1" />
                    </div>

                    <div class="mb-4 flex w-full flex-col gap-1">
                        <x-input-label class="capitalize" for="site.description" :value="__('Deskripsi Rumah Sakit')" />

                        <textarea name="site.description" id="site.description" class="block w-full rounded-lg border border-gray-300 p-2 px-3" placeholder="Deskripsi rumah sakit">{{ $settings['site.description']->value ?? old('site_description') }}</textarea>
                        <x-input-error :messages="$errors->get('site_description')" class="mt-1" />
                    </div>

                    <x-primary-button class="mt-4" type="submit">Simpan</x-primary-button>
                </form>
            </div>
        </x-card>

        <x-card title="Carousel Images" class="w-[40%] border">
            <p class="-mt-2 text-gray-500">Anda bisa mengganti gambar carousel di sini.</p>

            <div class="mt-6">
                <form action="{{ route('admin.settings.carousel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach ($carousel_images as $item)
                        <div class="mb-4 flex w-full flex-col gap-1">
                            <x-input-label class="capitalize" for="carousel.images" :value="__('Gambar Carousel')" />

                            <input type="file" name="carousel_images[]" id="carousel.images" class="border border-gray-300" value="{{ $item->image }}" />
                            <x-input-error :messages="$errors->get('carousel_images')" class="mt-1" />
                        </div>
                    @endforeach

                    <div id="input-container" class="mb-4"></div>

                    <div class="flex items-center justify-between gap-3">
                        <x-secondary-button type="button" id="tambah-button">Tambah</x-secondary-button>
                        <x-primary-button type="submit">Simpan</x-primary-button>
                    </div>
                </form>
            </div>
        </x-card>
    </div>

    {{-- scripts --}}
    @push('scripts')
        <script>
            const inputContainer = document.getElementById('input-container');
            const input = "<div class='flex w-full flex-col gap-1 relative'><input type='file' name='carousel_images[]' class='border border-gray-300' /><button type='button' class='absolute top-0 right-0 p-1.5 px-4 text-red-500 font-bold text-lg' onclick='this.parentElement.remove()'>x</button></div>";
            const tambahButton = document.getElementById('tambah-button');

            tambahButton.addEventListener('click', () => {
                inputContainer.innerHTML += input;
            });

            // file no choosen not canged yet set the tet using name of image from $carousel_images
            const fileInput = document.querySelectorAll('input[type="file"]');
            const data = @json($carousel_images);
        </script>
    @endpush
</x-app-layout>
