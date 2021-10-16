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

        <header class="bg-white shadow bg-gray-900">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-xl font-semibold leading-tight text-white dark:text-gray-200">Detalle de la orden <br> <small class="text-sm"><small style="color: #FE5401;">#</small>{{$order['uuid']}} </small> </h2>
                <small class="text-sm font-semibold" style="color: #FE5401;">Cliente: &#128526; <small class="text-white text-sm">{{$order['customer_name']}}</small> </small>
                <br> <small class="text-sm font-semibold" style="color: #FE5401;">Correo: &#9993; <small class="text-white text-sm">{{$order['customer_email']}}</small> </small>
                <br> <small class="text-sm font-semibold" style="color: #FE5401;">Teléfono: &#128242; <small class="text-white text-sm">{{$order['customer_mobile']}}</small> </small>
                <br> <small class="text-sm font-semibold" style="color: #FE5401;">Producto: &#128085; <small class="text-white text-sm">{{$name_product}}</small> </small>
                <br> <small class="text-sm font-semibold" style="color: #FE5401;">Precio: &#128178;<small class="text-white text-sm">{{$value_product}}</small> </small>
        </header>
        <main class="w-full min-h-screen bg-gray-900">
            <section
                class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-gray-400 h-96 w-80 rounded-2xl rotate-3 top-1/2 left-1/2">
            </section>

            <section
                class="absolute p-6 space-y-6 duration-300 transform -translate-x-1/2 -translate-y-1/2 bg-gray-100 h-96 w-80 rounded-2xl rotate-3 hover:rotate-0 top-1/2 left-1/2">
                <div class="flex justify-end">
                    <div class="w-4 h-4 rounded-full" style="background-color:#FF7308;"></div>
                </div>

                <header class="text-xl font-extrabold text-center text-gray-600">{{$order['created_at']}}</header>

                <div>
                    <p class="text-5xl font-extrabold text-center text-gray-900">Orden de pago<br>(<small style="color: #FE5401;">Ticket</small>)</p>
                </div>

                <footer class="flex justify-center">
                    <form action="{{ route('orders.pay') }}" method="POST">
                    <input type="hidden" value="{{$order['product_id']}}" name="product_id">
                    <input type="hidden" value="{{$order['customer_name']}}" name="customer_name">
                    <input type="hidden" value="{{$order['customer_email']}}" name="customer_email">
                    <input type="hidden" value="{{$order['customer_mobile']}}" name="customer_mobile">
                    <button style="background-color: #FF7308;" type="submit"
                        class="flex items-center px-4 py-3 text-xl font-bold text-white rounded-xl">
                        Pagar
                        <svg class="w-9 h-9" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button> <br>
                    </form>
                </footer>
                <small class="text-gray-900 text-sm ml-16 p-4 mr-1"><a href="/products">Pagar más tarde...</a><small>
            </section>
        </main>
    </div>
</div>
<div class="">
    <footer class="text-gray-600 body-font" style="background-color: #FE5401;">
      <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white p-2 bg-gray-700 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
            <span class="ml-3 text-xl text-white">EVERTEC</span>
          </a>
          <p class="mt-2 text-sm text-white">Air plant banjo lyft occupy retro adaptogen indego</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-600" href="#">First Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Second Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Third Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-600" href="#">First Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Second Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Third Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-600" href="#">First Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Second Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Third Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-600" href="#">First Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Second Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Third Link</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-600" href="#">Fourth Link</a>
              </li>
            </nav>
          </div>
        </div>
      </div>
      <div class="bg-gray-700">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
          <p class="text-white text-sm text-center sm:text-left">© 2021 Dev —
            <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-400 ml-1" target="_blank">@Developer Leonardo Andrés</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
            <a class="text-gray-200">
                <svg viewBox="0 0 384 512" width="30" >
                    <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                </svg>
            </a>
            <a class="ml-3 text-gray-200">
                <svg viewBox="0 0 384 512" width="30" >
                    <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                </svg>
            </a>
            <a class="ml-3 text-gray-200">
                <svg viewBox="0 0 384 512" width="30" >
                    <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>
  </div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
