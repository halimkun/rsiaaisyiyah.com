<x-app-layout>
    <div class="flex gap-5 w-full">
        <div class="w-full p-5 rounded-lg bg-green-100 shadow">
            <x-title-text class="text-green-600" weight="semibold" title="Lowongan Aktif" />
            <div class="mt-4 font-bold text-xl">
                {{ $metrics['active'] }}
            </div>
        </div>
        <div class="w-full p-5 rounded-lg bg-orange-100 shadow">
            <x-title-text class="text-red-600" weight="semibold" title="Lowongan Tidak Aktif" />
            <div class="mt-4 font-bold text-xl">
                {{ $metrics['inactive'] }}
            </div>
        </div>
        <div class="w-full p-5 rounded-lg bg-white shadow">
            <x-title-text class="text-gray-800" weight="semibold" title="Semua Lowongan" />
            <div class="mt-4 font-bold text-xl">
                {{ $metrics['total'] }}
            </div>
        </div>
    </div>

    <div class="mt-5" x-data="{ karir: [] }">
        <div class="w-full p-5 rounded-lg bg-white shadow-md">
            <div class="flex justify-between items-center mb-5">
                <x-title-text class="text-gray-800" weight="semibold" title="Daftar Lowongan" />
                <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'modal-karir')"
                    class="flex items-center gap-2 bg-green-100 hover:bg-green-200 text-green-600 hover:text-green-700 px-3 py-1 rounded-md focus:outline-none">
                    <i class="fa-reguler fa-plus"></i>
                </button>
            </div>
            <table id="tbl_karir" class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="pl-6 py-3 text-sm text-left">No</th>
                        <th scope="col" class="pl-6 py-3 text-sm text-left">Posisi</th>
                        <th scope="col" class="pl-6 py-3 text-sm text-left">Requirements</th>
                        <th scope="col" class="pl-6 py-3 text-sm text-left">Status</th>
                        <th scope="col" class="pl-6 py-3 text-sm text-left">Deadline</th>
                        <th scope="col" class="pl-6 py-3 text-sm text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php $no = 1 ?>
                    @foreach ($karir as $k)
                        <tr>
                            <td class="h-px w-px pl-6 py-3 whitespace-nowrap">{{ $no++ }}</td>
                            <td class="h-px w-px pl-6 py-3">
                                <div class="font-semibold text-gray-800 flex gap-3 items-center justify-start">
                                    {{ $k->name }}
                                    <a href="{{ $k->apply_url }}" target="_blank"
                                        class="bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-700 px-2 py-1 rounded-full text-xs">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                            </td>
                            <td class="h-px w-px pl-6 py-3 whitespace-nowrap">
                                <div class="flex gap-1 flex-wrap">
                                    @if ($k->education != '-')
                                    <div class="flex items-center gap-3 font-medium text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-xs">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        {{ $k->education }}
                                    </div>
                                    @endif
                                    @if ($k->major != '-')
                                    <div class="flex items-center gap-3 font-medium text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-xs">
                                        <i class="fa-solid fa-tag"></i>
                                        {{ $k->major }}
                                    </div>
                                    @endif
                                    @if ($k->type != '-')
                                    <div class="flex items-center gap-3 font-medium text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-xs">
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $k->type }}
                                    </div>
                                    @endif
                                    @if ($k->salary_min || $k->salary_min != 0)
                                    <div class="flex items-center gap-3 font-medium text-blue-500 px-3 py-0.5 bg-blue-100 rounded-full text-xs">
                                        <i class="fa-solid fa-hand-holding-dollar"></i>
                                        Rp. {{ number_format($k->salary_min, 0, ',', '.') }}
                                    </div>
                                    @endif
                                </div>
                            </td>
                            <td class="h-px w-px pl-6 py-3 whitespace-nowrap">
                                @if ($k->active)
                                    <span class="px-2 py-1 bg-green-100 text-green-600 text-xs rounded-full font-bold"><i class="fa-solid mr-1 fa-check"></i> Aktif</span>
                                @else
                                    <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded-full font-bold"><i class="fa-solid mr-1 fa-times"></i> Tidak</span>
                                @endif
                            </td>
                            <td class="h-px w-px pl-6 py-3 whitespace-nowrap">{{ $k->deadline->format('d M Y') }}</td>
                            <td class="h-px w-px pl-6 py-3 whitespace-nowrap">
                                <button 
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'modal-edit-karir')"
                                    x-on:click="karir = {
                                        id: `{{ $k->id }}`,
                                        name: `{{ $k->name }}`,
                                        description: `{!! html_entity_decode($k->description) !!}`,
                                        type: `{{ $k->type }}`,
                                        education: `{{ $k->education }}`,
                                        major: `{{ $k->major }}`,
                                        salary_min: `{{ $k->salary_min }}`,
                                        deadline: `{{ $k->deadline->format('Y-m-d') }}`,
                                        apply_url: `{{ $k->apply_url }}`,
                                    }; setDataEditor('edit', karir.description)"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Edit" 
                                    class="px-2 py-1 bg-amber-100 text-amber-600 text-sm rounded-md edit">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button 
                                    onclick="deleteIt(`{{ $k->id }}`)"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Hapus" 
                                    class="px-2 py-1 bg-red-100 text-red-600 text-sm rounded-md delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <x-modal name="modal-karir" maxWidth="3xl" :show="$errors->any()">
            <form method="post" id="formLoker">
                {{ csrf_field() }}
                <div class="p-5">
                    <x-title-text class="text-gray-800" weight="semibold" title="Tambah Lowongan" />

                    {{-- Posisi yang dibutuhkan --}}
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="posisi" :value="__('Posisi')" />

                        <x-text-input id="posisi" class="mt-1 block w-full" type="text" name="posisi" autocomplete="off"
                            placeholder="Posisi yang dibutuhkan" value="{{ old('posisi') }}" />
                        <x-input-error :messages="$errors->get('posisi')" class="mt-1" />
                    </div>

                    {{-- type pekerjaan --}}
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="type" :value="__('Type Pekerjaan')" />

                        <select name="type" id="type" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 p-2 px-3">
                            <option value="-">Pilih Tipe Pekerjaan</option>
                            <option {{ old('type')=='fulltime' ? 'selected' : '' }} value="fulltime">Fulltime</option>
                            <option {{ old('type')=='parttime' ? 'selected' : '' }} value="parttime">Parttime</option>
                            <option {{ old('type')=='freelance' ? 'selected' : '' }} value="freelance">Freelance
                            </option>
                            <option {{ old('type')=='internship' ? 'selected' : '' }} value="internship">Internship
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('type')" class="mt-1" />
                    </div>

                    {{-- deskripsi pekerjaan / posisi yang dibutuhkan --}}
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="description" :value="__('Deskripsi')" />

                        <div id="desc"></div>
                        <textarea name="description" id="description" rows="5" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 p-3 hidden" placeholder="Bisa berisi jobdesk dan deskripsi lainnya">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-1" />
                    </div>

                    <div class="flex gap-3 mt-4 w-full">
                        {{-- Pendidikan --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="education" :value="__('Pendidikan')" />

                            <select name="education" id="education"
                                class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 p-2 px-3">
                                <option value="-">Pilih Pendidikan</option>
                                <option {{ old('education')=='SMA/SMK' ? 'selected' : '' }} value="SMA/SMK">SMA/SMK
                                </option>
                                <option {{ old('education')=='D3' ? 'selected' : '' }} value="D3">D3</option>
                                <option {{ old('education')=='S1' ? 'selected' : '' }} value="S1">S1</option>
                                <option {{ old('education')=='S2' ? 'selected' : '' }} value="S2">S2</option>
                                <option {{ old('education')=='profesi' ? 'selected' : '' }} value="profesi">profesi
                                </option>
                                <option {{ old('education')=='professional' ? 'selected' : '' }} value="professional">
                                    professional</option>
                            </select>
                            <x-input-error :messages="$errors->get('education')" class="mt-1" />
                        </div>

                        {{-- major --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="major" :value="__('Jurusan')" />

                            <x-text-input id="major" class="mt-1 block w-full" type="text" name="major" autocomplete="off" placeholder="Jurusan sesuai posisi" value="{{ old('major') }}" />
                            <x-input-error :messages="$errors->get('major')" class="mt-1" />
                        </div>
                    </div>

                    <div class="flex gap-3 w-full mt-4">
                        {{-- min salary --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="salary_min" :value="__('Gaji Minimum')" />

                            <x-text-input id="salary_min" class="mt-1 block w-full" type="number" min="0" value="0" name="salary_min" autocomplete="off" placeholder="Gaji Minimum" value="{{ old('salary_min') }}" />
                            <div class="text-xs text-gray-500 mt-1">
                                <i class="fa-solid fa-info-circle mr-1"></i> jika tidak ingin di-set, maka isikan 0
                            </div>
                            <x-input-error :messages="$errors->get('salary_min')" class="mt-1" />
                        </div>

                        {{-- deadline --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="deadline" :value="__('Deadline')" />

                            <x-text-input id="deadline" class="mt-1 block w-full" type="date" name="deadline"
                                autocomplete="off" placeholder="Deadline" value="{{ old('deadline') }}" />
                            <x-input-error :messages="$errors->get('deadline')" class="mt-1" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label class="capitalize" for="apply_url" :value="__('URL Aplikasi Lamaran')" />

                        <x-text-input id="apply_url" class="mt-1 block w-full" type="url" name="apply_url"
                            autocomplete="off" placeholder="bisa menggunakan google form"
                            value="{{ old('apply_url') }}" />
                        <x-input-error :messages="$errors->get('apply_url')" class="mt-1" />
                    </div>

                    <div class="mt-10 flex justify-end gap-2 items-center">
                        {{-- button cancle --}}
                        <button type="submit"
                            class="bg-green-100 hover:bg-green-200 text-green-600 hover:text-green-700 px-3 py-1 rounded-md focus:outline-none">
                            <i class="fa-solid fa-save mr-1"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </x-modal>
        
        
        <x-modal name="modal-edit-karir" maxWidth="3xl" :show="$errors->any()">
            <form method="post" id="editFormLoker">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" x-bind:value="karir.id">
                <div class="p-5">
                    <x-title-text class="text-gray-800" weight="semibold" title="Edit Lowongan" />

                    {{-- Posisi yang dibutuhkan --}}
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="posisi" :value="__('Posisi')" />

                        <x-text-input id="posisi" class="mt-1 block w-full" type="text" name="posisi" autocomplete="off" placeholder="Posisi yang dibutuhkan" x-bind:value="karir.name" value="{{ old('posisi') }}" />
                        <x-input-error :messages="$errors->get('posisi')" class="mt-1" />
                    </div>

                    {{-- type pekerjaan --}}
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="type" :value="__('Type Pekerjaan')" />

                        <select name="type" id="type" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 p-2 px-3" x-bind:value="karir.type">
                            <option value="-">Pilih Tipe Pekerjaan</option>
                            <option {{ old('type')=='fulltime' ? 'selected' : '' }} value="fulltime">Fulltime</option>
                            <option {{ old('type')=='parttime' ? 'selected' : '' }} value="parttime">Parttime</option>
                            <option {{ old('type')=='freelance' ? 'selected' : '' }} value="freelance">Freelance
                            </option>
                            <option {{ old('type')=='internship' ? 'selected' : '' }} value="internship">Internship
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('type')" class="mt-1" />
                    </div>

                    {{-- deskripsi pekerjaan / posisi yang dibutuhkan --}}
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="description" :value="__('Deskripsi')" />

                        <div id="desc-edit"></div>
                        <textarea name="description" id="description-edit" rows="5" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 p-3 hidden" placeholder="Bisa berisi jobdesk dan deskripsi lainnya" x-text="karir.description">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-1" />
                    </div>

                    <div class="flex gap-3 mt-4 w-full">
                        {{-- Pendidikan --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="education" :value="__('Pendidikan')" />

                            <select name="education" id="education" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 p-2 px-3" x-bind:value="karir.education">
                                <option value="-">Pilih Pendidikan</option>
                                <option {{ old('education')=='SMA/SMK' ? 'selected' : '' }} value="SMA/SMK">SMA/SMK</option>
                                <option {{ old('education')=='D3' ? 'selected' : '' }} value="D3">D3</option>
                                <option {{ old('education')=='S1' ? 'selected' : '' }} value="S1">S1</option>
                                <option {{ old('education')=='S2' ? 'selected' : '' }} value="S2">S2</option>
                                <option {{ old('education')=='profesi' ? 'selected' : '' }} value="profesi">profesi</option>
                                <option {{ old('education')=='professional' ? 'selected' : '' }} value="professional">professional</option>
                            </select>
                            <x-input-error :messages="$errors->get('education')" class="mt-1" />
                        </div>

                        {{-- major --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="major" :value="__('Jurusan')" />

                            <x-text-input id="major" class="mt-1 block w-full" type="text" name="major" autocomplete="off" placeholder="Jurusan sesuai posisi" x-bind:value="karir.major" value="{{ old('major') ?? '-' }}" />
                            <x-input-error :messages="$errors->get('major')" class="mt-1" />
                        </div>
                    </div>

                    <div class="flex gap-3 w-full mt-4">
                        {{-- min salary --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="salary_min" :value="__('Gaji Minimum')" />

                            <x-text-input id="salary_min" class="mt-1 block w-full" type="number" min="0" value="0" name="salary_min" autocomplete="off" placeholder="Gaji Minimum" value="{{ old('salary_min') ?? 0 }}" x-bind:value="karir.salary_min" />
                            <div class="text-xs text-gray-500 mt-1">
                                <i class="fa-solid fa-info-circle mr-1"></i> jika tidak ingin di-set, maka isikan 0
                            </div>
                            <x-input-error :messages="$errors->get('salary_min')" class="mt-1" />
                        </div>

                        {{-- deadline --}}
                        <div class="w-full">
                            <x-input-label class="capitalize" for="deadline" :value="__('Deadline')" />

                            <x-text-input id="deadline" class="mt-1 block w-full" type="date" name="deadline" autocomplete="off" placeholder="Deadline" value="{{ old('deadline') }}" x-bind:value="karir.deadline" />
                            <x-input-error :messages="$errors->get('deadline')" class="mt-1" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label class="capitalize" for="apply_url" :value="__('URL Aplikasi Lamaran')" />

                        <x-text-input id="apply_url" class="mt-1 block w-full" type="url" name="apply_url" autocomplete="off" placeholder="bisa menggunakan google form" value="{{ old('apply_url') }}" x-bind:value="karir.apply_url" />
                        <x-input-error :messages="$errors->get('apply_url')" class="mt-1" />
                    </div>

                    <div class="mt-10 flex justify-end gap-2 items-center">
                        {{-- button cancle --}}
                        <button type="submit"
                            class="bg-green-100 hover:bg-green-200 text-green-600 hover:text-green-700 px-3 py-1 rounded-md focus:outline-none">
                            <i class="fa-solid fa-save mr-1"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </x-modal>
    </div>

    @push('modal')
    @endpush

    @push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">

    <script>
        let editor, editEditor;

        function setDataEditor(id, data) 
        {
            if (id == 'edit') {
                editEditor.setData(data);
            } else {
                editor.setData(data);
            }
        }       
    </script>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <script type="text/javascript">
        function deleteIt(id_loker) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.karir.delete') }}",
                        method: "POST",
                        data: {
                            id: id_loker,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (data) {
                            if (data.status == 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: data.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: data.message,
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log(xhr);
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Ada yang salah!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    });
                }description
            });
        }
        
        $(document).ready(function () {
            ClassicEditor
                .create(document.querySelector('#desc'))
                .then(newEditor => {
                    editor = newEditor;
                    editor.setData('');
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#desc-edit'))
                .then(newEditor => {
                    editEditor = newEditor;
                    editEditor.setData('');
                })
                .catch(error => {
                    console.error(error);
                });

            $('#formLoker').on('submit', function (e) {
                $('#description').text(editor.getData());
                
                e.preventDefault();

                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('admin.karir.store') }}",
                    method: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        Swal.fire({
                            title: 'Loading',
                            html: 'Please wait...',
                            timerProgressBar: true,
                            didOpen: () => {
                            Swal.showLoading()
                            },
                        });
                    },
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                            }).then(() => {
                            location.reload();
                            });
                        } else {
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ada yang salah!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });


            $('#editFormLoker').on('submit', function (e) {
                $('#description-edit').text(editEditor.getData());

                e.preventDefault();

                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('admin.karir.update') }}",
                    method: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        Swal.fire({
                            title: 'Loading',
                            html: 'Please wait...',
                            timerProgressBar: true,
                            didOpen: () => {
                            Swal.showLoading()
                            },
                        });
                    },
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: data.message,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Ada yang salah!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });
        });
    </script>
    @endpush
</x-app-layout>