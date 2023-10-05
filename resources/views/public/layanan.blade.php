<x-public-layout>
    <!-- Poliklini Section -->
    <div class="w-full bg-white py-10">
        <x-section.poli :data="$poli" />
    </div>
    <!-- End poliklinik Blocks -->

    <!-- Fasilitas -->
    <div class="w-full bg-white py-20">
        <x-section.fasilitas :data="$fasil"/>
    </div>
    <!-- End Fasilitas -->
</x-public-layout>