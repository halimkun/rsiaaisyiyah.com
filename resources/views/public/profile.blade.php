<x-public-layout>
    @slot('carousel')
    <!-- Hero -->
    <div class="max-w-7xl mx-auto py-7 px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
            <div class="lg:col-span-3">
                <p class="ml-1 text-2xl font-bold text-blue-700 dark:text-gray-400">
                    Profil
                </p>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl lg:text-6xl dark:text-white">
                    RSIA Aisyiyah Pekajangan
                </h1>

                <!-- Brands -->
                <div class="mt-6 lg:mt-12">
                    <span class="text-xs font-medium text-gray-800 uppercase dark:text-gray-200">Dipercaya :</span>

                    <div class="mt-4 flex gap-x-8">
                        <!-- Stats -->
                        <div>
                            <p class="text-3xl font-semibold text-blue-500">9.995</p>
                            <p class="mt-1 text-gray-500">Pasien (bulanan)</p>
                        </div>
                        <!-- Stats -->
                        <div>
                            <p class="text-3xl font-semibold text-blue-500">2,000+</p>
                            <p class="mt-1 text-gray-500">partner with Preline</p>
                        </div>
                        <!-- End Stats -->

                        <!-- Stats -->
                        <div>
                            <p class="text-3xl font-semibold text-blue-500">85%</p>
                            <p class="mt-1 text-gray-500">this year alone</p>
                        </div>
                        <!-- End Stats -->
                    </div>
                </div>
                <!-- End Brands -->
            </div>
            <!-- End Col -->

            <div class="lg:col-span-4 mt-10 lg:mt-0">
                <img class="w-full rounded-xl"
                    src="https://images.unsplash.com/photo-1665686376173-ada7a0031a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=700&q=80"
                    alt="Image Description">
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hero -->
    @endslot

    <!-- Features -->
    <div class="w-full">
        <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-20 mx-auto">
            <div class="text-center mb-8 md:mb-14 lg:mb-16">
                <div class="text-purple-600 font-bold mb-4">Visi dan Misi</div>
                <div class="text-gray-900 text-2xl md:text-4xl font-bold">RSIA Aisyiyah Pekajangan</div>
                <div class="text-gray-600 md:text-lg">Kami menyediakan berbagai layanan kesehatan terbaik untuk Anda
                </div>
            </div>

            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="lg:col-span-7">
                    <!-- Grid -->
                    <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                        <div class="col-span-4">
                            <img class="rounded-xl"
                                src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80"
                                alt="Image Description">
                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <img class="rounded-xl"
                                src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80"
                                alt="Image Description">
                        </div>
                        <!-- End Col -->

                        <div class="col-span-5">
                            <img class="rounded-xl"
                                src="https://images.unsplash.com/photo-1600194992440-50b26e0a0309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80"
                                alt="Image Description">
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Col -->

                <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-5">
                    <div class="space-y-6 sm:space-y-8">
                        {{-- bloquote as for misi --}}
                        <div class="relative py-2 w-full">
                            <div
                                class="space-y-2 md:space-y-4 after:absolute after:bottom-0 after:mt-[1px] after:w-full after:h-1 after:bg-gray-300 after:rounded">
                                <h2
                                    class="font-bold text-xl lg:text-2xl text-gray-800 dark:text-gray-200 after:block after:mt-[1px] after:w-[13%] after:h-1 after:bg-blue-600 after:rounded after:absolute after:bottom-0 after:z-30">
                                    Visi
                                </h2>
                            </div>
                        </div>
                        <blockquote class="relative">
                            <div
                                class="text-4xl font-bold text-blue-600 dark:text-blue-500 absolute top-0 left-0 -mt-3 -ml-3">
                                “</div>
                            {{-- <div
                                class="text-4xl font-bold text-blue-600 dark:text-blue-500 absolute bottom-0 right-0 -mb-3 -mr-3">
                                ”</div> --}}
                            <div class="relative">
                                <p class="text-gray-500">
                                    Menjadi Rumah Sakit Khusus Ibu dan Anak dengan standar mutu pelayanan islam
                                    memuaskan dan aman bagi pelanggan
                                </p>
                            </div>
                        </blockquote>

                        <!-- List -->
                        <div class="relative py-2 w-full">
                            <div
                                class="space-y-2 md:space-y-4 after:absolute after:bottom-0 after:mt-[1px] after:w-full after:h-1 after:bg-gray-300 after:rounded">
                                <h2
                                    class="font-bold text-xl lg:text-2xl text-gray-800 dark:text-gray-200 after:block after:mt-[1px] after:w-[13%] after:h-1 after:bg-blue-600 after:rounded after:absolute after:bottom-0 after:z-30">
                                    Misi
                                </h2>
                            </div>
                        </div>

                        <ul role="list" class="space-y-2 sm:space-y-4">
                            <li class="flex space-x-3">
                                <!-- Solid Check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600 dark:text-blue-500" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                        fill="currentColor" fill-opacity="0.1" />
                                    <path
                                        d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                        fill="currentColor" />
                                </svg>
                                <!-- End Solid Check -->

                                <span class="text-sm sm:text-base text-gray-500">
                                    <span class="font-bold">Less routine</span> – more creativity
                                </span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Solid Check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600 dark:text-blue-500" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                        fill="currentColor" fill-opacity="0.1" />
                                    <path
                                        d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                        fill="currentColor" />
                                </svg>
                                <!-- End Solid Check -->

                                <span class="text-sm sm:text-base text-gray-500">
                                    Hundreds of thousands saved
                                </span>
                            </li>

                            <li class="flex space-x-3">
                                <!-- Solid Check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600 dark:text-blue-500" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                        fill="currentColor" fill-opacity="0.1" />
                                    <path
                                        d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                        fill="currentColor" />
                                </svg>
                                <!-- End Solid Check -->

                                <span class="text-sm sm:text-base text-gray-500">
                                    Scale budgets <span class="font-bold">efficiently</span>
                                </span>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Features -->
</x-public-layout>