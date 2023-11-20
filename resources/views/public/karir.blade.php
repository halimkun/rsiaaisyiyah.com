<x-public-layout>
    <!-- Features -->
    <div class="max-w-7xl mx-auto py-7 px-4 sm:px-6 lg:px-8" x-data="{ karir: [] }">
        <div class="relative">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="w-full lg:w-1/4">
                    <div class="bg-gray-100/75 shadow-md rounded p-5 sticky top-5">
                        <x-title-text title="Filter Lowongan" size="2xl" />
                        <div class="border-b-2 border-gray-300 my-5"></div>
                        <div class="mb-5 flex flex-col w-full gap-1">
                            <x-input-label for="kategori" label="kategori" class="text-gray-800" :value="__('Kategori')" />
                            <select name="kategori" id="kategori" class="border border-gray-300 rounded-lg p-2">
                                <option value="">==== Pilih kategori ====</option>
                                <option>Business Development</option>
                                <option>Management Building</option>
                                <option>Pembangunan</option>
                                <option>HRD</option>
                                <option>Keuangan</option>
                                <option>Keperawatan</option>
                                <option>Manajemen RS</option>
                                <option>Penunjang Umum</option>
                                <option>JKN</option>
                                <option>Penunjang Medis</option>
                                <option>Pelayanan Medis</option>
                                <option>Dokter Spesialis</option>
                                <option>Investor Relation</option>
                                <option>Dokter Sub  Spesialis</option>
                                <option>IT</option>
                                <option>Mutu dan Akreditasi</option>
                                <option>Marketing</option>
                                <option>Sekretariat</option>
                            </select>
                        </div>

                        <div class="mb-5 flex flex-col w-full gap-1">
                            <x-input-label for="jenjang-pendidikan" label="jenjang-pendidikan" class="text-gray-800" :value="__('Jenjang Pendidikan')" />
                            {{-- check box on left and label of checkbox on right --}}
                            <div class="flex items-center gap-2 border boder-gray-200 rounded pl-4 mb-1">
                                <input type="checkbox" name="SMA" id="SMA" class="border border-gray-300 rounded-lg p-2">
                                <label class="w-full py-[10px] ml-2" for="SMA">SMA/SMK</label>
                            </div>
                            <div class="flex items-center gap-2 border boder-gray-200 rounded pl-4 mb-1">
                                <input type="checkbox" name="D1" id="D1" class="border border-gray-300 rounded-lg p-2">
                                <label class="w-full py-[10px] ml-2" for="D1">D1</label>
                            </div>
                            <div class="flex items-center gap-2 border boder-gray-200 rounded pl-4 mb-1">
                                <input type="checkbox" name="D3" id="D3" class="border border-gray-300 rounded-lg p-2">
                                <label class="w-full py-[10px] ml-2" for="D3">D3</label>
                            </div>
                            <div class="flex items-center gap-2 border boder-gray-200 rounded pl-4 mb-1">
                                <input type="checkbox" name="S1" id="S1" class="border border-gray-300 rounded-lg p-2">
                                <label class="w-full py-[10px] ml-2" for="S1">S1</label>
                            </div>
                            <div class="flex items-center gap-2 border boder-gray-200 rounded pl-4 mb-1">
                                <input type="checkbox" name="S2" id="S2" class="border border-gray-300 rounded-lg p-2">
                                <label class="w-full py-[10px] ml-2" for="S2">S2</label>
                            </div>
                            <div class="flex items-center gap-2 border boder-gray-200 rounded pl-4 mb-1">
                                <input type="checkbox" name="Profesi" id="Profesi" class="border border-gray-300 rounded-lg p-2">
                                <label class="w-full py-[10px] ml-2" for="Profesi">Profesi</label>
                            </div>
                        </div>

                        {{-- radio button active and inactive --}}
                        <div class="mb-5 flex flex-col gap-2">
                            <x-input-label for="jenjang-pendidikan" label="jenjang-pendidikan" class="text-gray-800" :value="__('Tipe')" />
                            <div class="flex items-center pl-4 border border-gray-200 rounded">
                                <input checked id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2  ">
                                <label for="bordered-radio-1" class="w-full py-[10px] ml-2 text-sm font-medium text-gray-900 ">Active</label>
                            </div>
                            <div class="flex items-center pl-4 border border-gray-200 rounded">
                                <input id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2  ">
                                <label for="bordered-radio-2" class="w-full py-[10px] ml-2 text-sm font-medium text-gray-900 ">InActive</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-3/4">
                    <div class="flex flex-col gap-4">
                        @foreach ($karir as $k)
                        <div class="bg-gray-100/75  px-6 py-5 rounded shadow-md">
                            <x-title-text title="{{ $k->name }}" size="2xl" />
                            <div class="flex flex-col gap-2 mt-3">
                                <p class="text text-gray-700 ">{{ Str::limit($k->description, 150) }}</p>
                                <div class="flex gap-2">
                                    @if ($k->education != '-')
                                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        {{ $k->education }}
                                    </div>
                                    @endif
                                    @if ($k->major != '-')
                                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm">
                                        <i class="fa-solid fa-tag"></i>
                                        {{ $k->major }}
                                    </div>
                                    @endif
                                    @if ($k->type != '-')
                                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm">
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $k->type }}
                                    </div>
                                    @endif
                                    @if ($k->salary_min || $k->salary_min != 0)
                                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm">
                                        <i class="fa-solid fa-hand-holding-dollar"></i>
                                        Rp. {{ number_format($k->salary_min, 0, ',', '.') }}
                                    </div>
                                    @endif
                                </div>
                                
                                {{-- button applynow --}}
                                <div class="flex justify-between items-center gap-3 mt-5">
                                    <p class="text-sm text-gray-600">Deadline : <strong>{{ date('d F Y', strtotime($k->deadline)) }}</strong></p>
                                    <div class="flex gap-5">
                                        @if ($k->active)
                                            <a href="{{ $k->apply_url == "-" ? '#' : $k->apply_url }}" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Apply Now</a>
                                        @endif
                                        <button x-data="" 
                                        x-on:click.prevent="$dispatch('open-modal', 'karir-modal')"
                                        x-on:click="karir = {
                                            id: `{{ $k->id }}`,
                                            name: `{{ $k->name }}`,
                                            description: `{{ $k->description }}`,
                                            education: `{{ $k->education }}`,
                                            major: `{{ $k->major }}`,
                                            type: `{{ $k->type }}`,
                                            salary_min: `{{ $k->salary_min }}`,
                                            active: `{{ $k->active }}`,
                                            deadline: `{{ $k->deadline }}`,
                                            diff_deadline: `{{ $k->deadline->diffForHumans() }}`,
                                            created_at: `{{ $k->created_at }}`,
                                            updated_at: `{{ $k->updated_at }}`,
                                        }"
                                        class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <x-modal name="karir-modal" maxWidth="3xl">
            <div class="p-5">
                <h3 class="mt-4 text-2xl font-bold text-blue-600" x-text="karir.name"></h3>
                <div class="mt-3">
                    <p class="text-sm text-gray-600">Deadline : <strong x-text="karir.diff_deadline"></strong></p>
                </div>
                <div class="flex gap-2 my-3">
                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm" x-show="karir.education != '-'">
                        <i class="fa-solid fa-graduation-cap"></i>
                        {{ $k->education }}
                    </div>
                   
                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm" x-show="karir.major != '-'">
                        <i class="fa-solid fa-tag"></i>
                        {{ $k->major }}
                    </div>
                   
                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm" x-show="karir.type != '-'">
                        <i class="fa-regular fa-clock"></i>
                        {{ $k->type }}
                    </div>
                    
                    {{-- hidden if $k->salary_min != 0 || != '' using alpine js --}}
                    <div class="flex items-center gap-3 font-bold text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-sm" x-show="karir.salary_min != 0">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        Rp. {{ number_format($k->salary_min, 0, ',', '.') }}
                    </div>
                </div>

                <p class="mt-2 text-gray-600" x-text="karir.description"></p>
    
                <div class="mt-5 flex justify-end">
                    <button type="button" x-on:click.prevent="$dispatch('close', 'karir-modal')" class="inline-flex items-center gap-x-2 px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out">
                        <i class="fa-solid fa-arrow-left"></i>
                        Kembali
                    </button>
                </div>
            </div>
        </x-modal>
    </div>
    <!-- End Features -->

</x-public-layout>