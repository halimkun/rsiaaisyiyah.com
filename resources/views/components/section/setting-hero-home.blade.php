@props(['id'])
<x-expand-wrapper title="Hero" :id="$id">
    <div class="mb-4">
        <x-not-ready />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="flex flex-col gap-5">
            <form method="post" class="heroGrettings">
                {{ csrf_field() }}
                <div class="p-5 rounded-lg bg-gray-200/50">
                    <x-title-text title="Welcome Message" size="xl" class="text-gray-800"/>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="site_title" :value="__('Site Title')" />
    
                        <x-text-input id="site_title" class="block mt-1 w-full" type="text" name="site_title" required autocomplete="off" :value="Setting::get('dokter.site_title')" />
                        <x-input-error :messages="$errors->get('site_title')" class="mt-2" />
                    </div>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="welcome_msg" :value="__('Welcome Message')" />
    
                        <x-text-input id="welcome_msg" class="block mt-1 w-full" type="text" name="welcome_msg" required autocomplete="off" :value="Setting::get('dokter.welcome_msg')" />
                        <x-input-error :messages="$errors->get('welcome_msg')" class="mt-2" />
                    </div>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="slogan" :value="__('Slogan')" />
    
                        <textarea name="slogan" id="slogan" required
                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            rows="5">{{ Setting::get('dokter.slogan') }}</textarea>
                        <x-input-error :messages="$errors->get('slogan')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-end w-full">
                        <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-full h-full bg-gray-200/50 flex items-center h-center rounded-lg">
            <form method="post" class="heroFindDokter h-full w-full">
                {{ csrf_field() }}
                <div class="p-5 rounded-lg bg-gray-200/50">
                    <x-title-text title="Cari Dokter Card" size="xl" class="text-gray-800"/>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="site_title" :value="__('Site Title')" />
    
                        <x-text-input id="site_title" class="block mt-1 w-full" type="text" name="site_title" required autocomplete="off" :value="Setting::get('dokter.site_title')" />
                        <x-input-error :messages="$errors->get('site_title')" class="mt-2" />
                    </div>
    
                    <div class="mt-4">
                        <x-input-label class="capitalize" for="slogan" :value="__('Slogan')" />
    
                        <textarea name="slogan" id="slogan" required
                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            rows="5">{{ Setting::get('dokter.slogan') }}</textarea>
                        <x-input-error :messages="$errors->get('slogan')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-end w-full">
                        <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-expand-wrapper>