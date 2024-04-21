<x-app-layout>
    {{-- apline js data poli from $poli --}}
    <div class="flex w-full flex-col gap-4 md:flex-row" x-data='{ poli_kliniks: @json($data), poli: [] }'>
        <div class="w-[70%]">
            <x-card title="Daftar Poliklinik">
                <div class="py-2">
                    <template x-for="item in poli_kliniks" :key="item.id">
                        <div class="mb-4 w-full rounded-lg bg-slate-100 p-4 transition duration-300 hover:bg-slate-200 hover:shadow-lg">
                            <div class="flex gap-4">
                                <img x-bind:src="`/public/images/${item.gambar}`" alt="poli" class="w-[15rem] rounded-lg object-cover" />
                                <div class="mt-1 flex flex-col gap-1">
                                    <div class="flex items-center gap-3">
                                        <div class="flex min-h-[40px] min-w-[40px] items-center justify-center rounded-full bg-blue-500">
                                            <i x-bind:class="item.icon" class="fa-solid text-xl text-white"></i>
                                        </div>
                                        <h1 x-text="item.nama_poli" class="text-2xl font-bold"></h1>
                                    </div>
                                    <p x-text="item.deskripsi_singkat" class="text-sm text-slate-500"></p>

                                    <div class="mt-2">
                                        <p x-text="item.deskripsi" class="text-normal"></p>
                                    </div>
                                </div>
                            </div>

                            {{-- action button --}}
                            <div class="mt-4 flex items-center justify-end">
                                {{-- button set poli data and --}}
                                <button class="rounded bg-blue-500 px-3 py-1 font-bold text-white hover:bg-blue-700" x-on:click="poli = item">
                                    Edit
                                </button>
                                <form :action="`/admin/poli/${item.id}`" method="post" class="ml-2">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="rounded bg-red-500 px-3 py-1 font-bold text-white hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </template>
                </div>
            </x-card>
        </div>
        <div class="w-[30%]">
            <x-card title="Tambah Poliklinik" x-bind:class="{ 'bg-yellow-400': poli.length > 0 }">
                <x-form.poliklinik action="{{ route('admin.poli.store') }}" />
            </x-card>
        </div>
    </div>
</x-app-layout>
