<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evertec</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
</head>

<div x-data="{ darkMode: true, mobileMenu: false }" :class="{ 'dark': darkMode }" class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <nav class="bg-white border-b border-gray-100 dark:border-gray-700 dark:bg-gray-800">
            <!-- Primary Navigation Menu -->
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex items-center flex-shrink-0"><a href="#"><svg viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="block w-auto h-9">
                                    <path
                                        d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                                        fill="#6875F5"></path>
                                    <path
                                        d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                                        fill="#6875F5"></path>
                                </svg></a></div><!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><a
                                class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out border-b-2 border-indigo-400 dark:border-indigo-300 dark:text-gray-200 focus:outline-none focus:border-indigo-700"
                                href="#"> Dashboard </a></div>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <button @click="darkMode = !darkMode"
                            class="p-2 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-200 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-700 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd"></path>
                            </svg>

                        </button>

                        <div x-data="{ isOpen: false }" class="relative ml-3">
                            <div>
                                <span class="inline-flex rounded-md">
                                    <button @click="isOpen = !isOpen" type="button"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-200 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-700 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50">Autumn's
                                        Team <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </span>
                            </div>

                            <div class="fixed inset-0 z-40" style="display: none;"></div>

                            <div @click.away="isOpen = false" x-show="isOpen"
                                class="absolute right-0 z-50 mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="py-1 bg-white rounded-md dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400"> Manage Team
                                        </div><!-- Team Settings -->
                                        <div><a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100"
                                                href="#"> Team Settings
                                            </a></div>
                                        <div><a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100"
                                                href="#"> Create New
                                                Team </a></div>
                                        <div class="border-t border-gray-100 dark:border-gray-600"></div>
                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400"> Switch Teams
                                        </div>
                                        <form>
                                            <div><button type="submit"
                                                    class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 transition duration-150 ease-in-out dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100">
                                                    <div class="flex items-center"><svg
                                                            class="w-5 h-5 mr-2 text-green-400" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                        <div>Autumn's Team</div>
                                                    </div>
                                                </button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div x-data="{ isOpen: false }" class="relative ml-3">
                            <div><span class="inline-flex rounded-md"><button @click="isOpen = !isOpen" type="button"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-200 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-700 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50">Autumn
                                        Ruiz <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg></button></span></div><!-- Full Screen Dropdown Overlay -->

                            <div class="fixed inset-0 z-40" style="display: none;"></div>

                            <div @click.away="isOpen = false" x-show="isOpen"
                                class="absolute right-0 z-50 w-48 mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="py-1 bg-white rounded-md dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400"> Manage Account
                                    </div>
                                    <div>
                                        <a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100"
                                            href="#"> Profile </a>
                                    </div>
                                    <!--v-if-->
                                    <div class="border-t border-gray-100 dark:border-gray-600"></div>
                                    <!-- Authentication -->

                                    <button
                                        class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 transition duration-150 ease-in-out dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100">
                                        Log Out
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center -mr-2 sm:hidden">
                        <button @click="darkMode = !darkMode"
                            class="p-2 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-200 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-700 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd"></path>
                            </svg>

                        </button>

                        <button @click="mobileMenu = !mobileMenu"
                            class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-200 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-700 focus:text-gray-500"><svg
                                class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                <path class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="mobileMenu" class="sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <div><a class="block py-2 pl-3 pr-4 text-base font-medium text-indigo-700 transition duration-150 ease-in-out border-l-4 border-indigo-400 dark:border-indigo-300 dark:text-indigo-200 bg-indigo-50 dark:bg-indigo-800 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700"
                            href="#"> Dashboard </a></div>
                </div>
                <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                    <div class="flex items-center px-4">
                        <div>
                            <div class="text-base font-medium text-gray-800 dark:text-gray-200">Autumn Ruiz
                            </div>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                hizevy@mailinator.com</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <div>
                            <a class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 transition duration-150 ease-in-out border-l-4 border-transparent dark:text-gray-200 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300"
                                href="#"> Profile </a>
                        </div>

                        <button
                            class="block w-full py-2 pl-3 pr-4 text-base font-medium text-left text-gray-600 transition duration-150 ease-in-out border-l-4 border-transparent dark:text-gray-200 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                            Log Out
                        </button>

                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400"> Manage Team </div>
                        <!-- Team Settings -->
                        <div><a class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 transition duration-150 ease-in-out border-l-4 border-transparent dark:text-gray-200 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300"
                                href="#"> Team Settings </a></div>
                        <div><a class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 transition duration-150 ease-in-out border-l-4 border-transparent dark:text-gray-200 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300"
                                href="#"> Create New Team </a></div>
                        <div class="border-t border-gray-200 dark:border-gray-600"></div><!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400"> Switch Teams </div>
                        <button
                            class="block w-full py-2 pl-3 pr-4 text-base font-medium text-left text-gray-600 transition duration-150 ease-in-out border-l-4 border-transparent dark:text-gray-200 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                            <div class="flex items-center"><svg class="w-5 h-5 mr-2 text-green-400" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>Autumn's Team</div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow dark:bg-gray-800">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Dashboard</h2>
            </div>
        </header>

        <main>
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="py-1">
                    <h1 class="text-center font-bold text-3xl py-2"> Ingresa tus datos para realizar la compra </h1>
                    <div class="bg-white flex justify-center items-center">
                        <div class="space-y-16 mt-4">
                            <div
                                class="w-96 h-56 m-auto bg-red-100 rounded-xl relative text-white shadow-2xl transition-transform transform hover:scale-110">

                                <img class="relative object-cover w-full h-full rounded-xl"
                                    src="https://i.imgur.com/Zi6v09P.png">

                                <div class="w-full px-8 absolute top-5">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <p class="font-semibold">
                                                Nombre
                                            </p>
                                            <x-jet-input type="text" name="customer_name" class="font-medium text-gray-700 tracking-widest">
                                            </x-jet-input>
                                        </div>
                                        <img class="w-14 h-14" src="https://i.imgur.com/bbPHJVe.png" />
                                    </div>
                                    <div class="">
                                        <p class="font-semibold">
                                            Correo
                                        </p>
                                        <x-jet-input type="email" name="customer_email" class="font-medium text-gray-700 tracking-widest">
                                        </x-jet-input>
                                    </div>
                                    <p class="font-semibold">
                                        Celular
                                    </p>
                                    <x-jet-input name="customer_mobile" type="text" class="font-medium text-gray-700 tracking-widest">
                                    </x-jet-input>
                                    <div class="pt-3 pr-1">
                                        <div class="flex justify-between">
                                            <div class="">
                                                <p class="font-light text-xs">
                                                    Producto
                                                    </h1>
                                                <p class="font-medium tracking-wider text-sm">
                                                    {{ $name_product }}
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="font-light text-xs text-xs">
                                                    Precio
                                                    </h1>
                                                <p class="font-medium tracking-wider text-sm">
                                                    ${{ $value_product }}
                                                </p>
                                            </div>
                                            <input type="hidden" value="{{ $product_id }}" name="product_id">
                                            <div class="">
                                                <p class="font-bold tracking-more-wider text-sm">
                                                    <button type="submit"
                                                        class="bg-gray-300 hover:bg-white text-yellow-600 font-bold py-2 px-4 rounded inline-flex items-center">
                                                        <span class="fas fa-heart"> Ordenar</span>
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
