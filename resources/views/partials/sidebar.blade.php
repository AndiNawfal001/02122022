<div class="z-40 fixed lg:static overflow-auto top-0 bottom-0 left-0"> {{-- fixed --}}
<aside class="z-40 flex" aria-label="Sidebar"> {{-- lg:w-64 --}}
        <div class="!min-h-screen w-full pt-20 lg:pt-5 py-4 px-5 bg-base-200  "> {{-- pt-20 --}}
            <ul class="space-y-2">
                <li class="hover:bg-base-100 rounded-lg">
                    <a href="/dashboard" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li class="hover:bg-base-100 rounded-lg">
                    <a href="#" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logging</span>
                    <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                </li>

                <li class="hover:bg-base-100 rounded-lg">
                    <a href="/barang" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Barang Masuk</span>
                    <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="flex items-center p-2 w-full text-base font-normal rounded-lg transition duration-75 hover:bg-base-100 dropdown-btn" >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap " sidebar-toggle-item><a href="#" class="hover:text-primary">Pengajuan</a></span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul class="hidden py-2 space-y-2 dropdown-container">
                        <li>
                            <a href="/pengajuan/BB" class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-base-100">Barang Baru</a>
                        </li>
                        <li>
                            <a href="/pengajuan/PB" class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-base-100">Perbaikan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button" class="flex items-center p-2 w-full text-base font-normal rounded-lg transition duration-75 hover:bg-base-100 dropdown-btn" >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap " sidebar-toggle-item><a href="/User" class="hover:text-primary">Users</a></span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul class="hidden py-2 space-y-2 dropdown-container">
                        <li>
                            <a href="/User/admin" class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-base-100">Admin</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-base-100">Manajemen</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-base-100">Kaprog</a>
                        </li>
                    </ul>
                </li>

                @can('admin')


                {{-- <li class="hover:bg-base-100 rounded-lg">
                    <a href="/User" class="flex items-center p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pengguna</span>
                    </a>
                </li> --}}
                @endcan

                <li class="hover:bg-base-100 rounded-lg">
                    <a href="/supplier" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Supplier</span>
                    </a>
                </li>
                <li class="hover:bg-base-100 rounded-lg">
                    <a href="/ruangan" class="flex items-center p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Ruangan</span>
                    </a>
                </li>

                <li class="hover:bg-base-100 rounded-lg">
                    <a href="#" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Barang</span>
                    </a>
                </li>
                <li class="hover:bg-base-100 rounded-lg">
                    <a href="#" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>

                <li class="hover:bg-base-100 rounded-lg">
                    <a href="#" class="flex items-center p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pemutihan</span>
                    </a>
                </li>
                <li class="hover:bg-base-100 rounded-lg">
                    <a href="#" class="flex items-center p-2">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Perbaikan</span>
                    </a>
                </li>
            </ul>

            {{-- line--}}

            <ul class="pt-4 mt-4 space-y-2 border-t-2 border-gray-200 dark:border-gray-700 place-content-end lg:hidden">
                <li class="select-none text-center">
                    <span >
                        {{Auth::user()->username}}
                        -
                        <span class="font-semibold
                            {{ (Auth::user()->level_user->nama_level === 'admin') ? 'text-red-500' : '' }}
                            {{ (Auth::user()->level_user->nama_level === 'manajemen') ? 'text-green-500' : '' }}
                            {{ (Auth::user()->level_user->nama_level === 'kaprog') ? 'text-sky-500' : '' }}
                        ">
                            {{ Auth::user()->level_user->nama_level }}
                        </span>
                    </span>
                </li>
            </ul>
        </div>
</aside>
</div>
