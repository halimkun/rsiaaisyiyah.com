@props(['id'])
<x-expand-wrapper title="Artikel" :id="$id">
    <div class="grid grid-cols-1 md:grid-cols-1 gap-5">
        <div class="flex flex-col gap-5">
            <form method="post" class="articleSectionTitle">
                {{ csrf_field() }}
                <div class="p-5 rounded-lg bg-gray-200/50">
                    <x-title-text title="Section Title Settings" size="xl" class="text-gray-800" />

                    <div class="mt-4">
                        <x-input-label class="capitalize" for="title" :value="__('Section title')" />

                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required
                            autocomplete="off" :value="Setting::get('artikel.title')" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label class="capitalize" for="subtitle" :value="__('Section Sub Title')" />

                        {{--
                        <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" required
                            autocomplete="off" :value="Setting::get('artikel.subtitle')" /> --}}
                        <textarea name="subtitle" id="subtitle" required
                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            rows="5">{{ Setting::get('artikel.subtitle') }}</textarea>
                        <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end w-full">
                        <button type="submit"
                            class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-expand-wrapper>