<div id="application-sidebar"
    class="hs-overlay scrollbar-y fixed bottom-0 left-0 top-0 z-[60] hidden w-64 -translate-x-full transform overflow-y-auto border-r border-gray-200 bg-white pb-10 pt-7 transition-all duration-300 hs-overlay-open:translate-x-0   lg:bottom-0 lg:right-auto lg:block lg:translate-x-0">
    <div class="px-6">
        <x-title-text class="text-blue-600" weight="bold" title="RSIA Aisyiyah" />
    </div>

    <nav class="hs-accordion-group flex w-full flex-col flex-wrap p-6" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li>
                <a class="flex items-center gap-x-3.5 rounded-md px-2.5 py-2 text-sm {{ request()->routeIs('admin.home') ? 'bg-blue-500 text-white hover:bg-blue-700' : 'text-slate-700 hover:bg-gray-100' }}"
                    href="{{ route('admin.home') }}">
                    <i class="fa-solid fa-chart-simple h-3.5 w-3.5 flex-shrink-0 transition duration-75"></i>
                    Dashboard
                </a>
            </li>

            <li class="hs-accordion" id="bu-posts-accordion">
                <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-gray-100"
                    href="javascript:;">
                    <i class="fa-regular fa-newspaper h-3.5 w-3.5 flex-shrink-0 transition duration-75"></i>
                    Posts

                    <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 "
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                    </svg>

                    <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-gray-600 group-hover:text-gray-500 "
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                </a>

                <div id="bu-posts-accordion"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 pl-2">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100   "
                                href="javascript:;">
                                Informasi Rumah Sakit
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100   "
                                href="javascript:;">
                                Artikel
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100   "
                                href="{{ route('admin.karir') }}">
                                karir
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a class="flex items-center gap-x-3.5 rounded-md px-2.5 py-2 text-sm text-slate-700 hover:bg-gray-100"
                    href="javascript:;">
                    <i class="fa-regular fa-images h-3.5 w-3.5 flex-shrink-0 transition duration-75"></i>
                    Gallery
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 rounded-md px-2.5 py-2 text-sm {{ request()->routeIs('admin.sections') ? 'bg-blue-500 text-white hover:bg-blue-700' : 'text-slate-700 hover:bg-gray-100' }}"
                    href="{{ route('admin.sections') }}">
                    <i class="fa-solid fa-puzzle-piece h-3.5 w-3.5 flex-shrink-0 transition duration-75"></i>
                    Section Settings
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 rounded-md px-2.5 py-2 text-sm text-slate-700 hover:bg-gray-100"
                    href="javascript:;">
                    <i class="fa-solid fa-gear h-3.5 w-3.5 flex-shrink-0 transition duration-75"></i>
                    Settings
                </a>
            </li>
        </ul>
    </nav>
</div>