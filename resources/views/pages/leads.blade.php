<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            
            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Leads</h1>
            </div>
            
            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                
                <!-- Filter button -->
                <!-- <x-dropdown-filter align="right" /> -->
                
                <!-- Datepicker built with flatpickr -->
                <!-- <x-datepicker /> -->
                
                <!-- Add view button -->
                <!-- <button class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="max-xs:sr-only">Create Lead</span>
                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if(in_array(Request::segment(1), ['settings'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                        </svg>
                    </div>
                </button> -->
                <div x-data="{ open: false }" class="relative inline-block text-left">
                    <!-- Button -->
                    <button @click="open = !open" class="bg-blue-500 text-white hover:bg-blue-600 rounded-t-md flex items-center w-full px-4 py-2">
                        <!-- Text -->
                        <span class="flex-1">Add Leads</span>
                        <!-- Icon -->
                        <svg class="fill-current w-4 h-4 ml-2" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-1 w-full rounded-b-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10" style="display: none;">
                        <div class="py-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <!-- Create Lead -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Create Leads</a>
                            <!-- Import Leads -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Import Leads</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- table -->
            <div>
                <x-dashboard.dashboard-card-10 />
             </div>
    </div>
    </x-app-layout>
    <script src="//unpkg.com/alpinejs" defer></script>
