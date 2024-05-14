<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medecin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased">


    <main>
        <section class="bg-white dark:bg-gray-900">
            <nav x-data="{ isOpen: false }" class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl"
                            href="#">FAGC</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out dark:bg-gray-900 lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none lg:dark:bg-transparent">
                    <div class="lg:-px-8 flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
                        <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                            href="/">Home</a>
                        <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                            href="#">About</a>
                        <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                            href="#">Contact</a>
                        {{-- <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                            href="#">Login</a> --}}
                    </div>

                    <a class="mt-4 block rounded-lg bg-blue-600 px-6 py-2.5 text-center font-medium capitalize leading-5 text-white hover:bg-blue-500 lg:mt-0 lg:w-auto"
                        href="#"> Login </a>
                </div>
            </nav>

            <div class="container mx-auto px-6 py-16 text-center">
                <div class="mx-auto max-w-lg">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white lg:text-4xl">La FAGC représente plus de
                        440 médecins généralistes
                        de la région de Charleroi</h1>
                    <p class="mt-6 text-gray-500 dark:text-gray-300"> Touvez un medeci ou que vous soyez </p>
                    <button
                        class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto">Commencer
                        maintenant
                    </button>

                </div>

                <div class="mt-10 flex justify-center">


                    <div id="carousel-example" class="relative w-full">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                            <!-- Item 1 -->
                            <div id="carousel-item-1" class="hidden duration-700 ease-in-out">
                                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80"
                                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="..." />
                            </div>
                            <!-- Item 2 -->
                            <div id="carousel-item-2" class="hidden duration-700 ease-in-out">
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="..." />
                            </div>
                            <!-- Item 3 -->
                            <div id="carousel-item-3" class="hidden duration-700 ease-in-out">
                                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80"
                                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="..." />
                            </div>
                            <!-- Item 4 -->
                            <div id="carousel-item-4" class="hidden duration-700 ease-in-out">
                                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="..." />
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                            <button id="carousel-indicator-1" type="button" class="h-3 w-3 rounded-full"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button id="carousel-indicator-2" type="button" class="h-3 w-3 rounded-full"
                                aria-current="false" aria-label="Slide 2"></button>
                            <button id="carousel-indicator-3" type="button" class="h-3 w-3 rounded-full"
                                aria-current="false" aria-label="Slide 3"></button>
                            <button id="carousel-indicator-4" type="button" class="h-3 w-3 rounded-full"
                                aria-current="false" aria-label="Slide 4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button id="data-carousel-prev" type="button"
                            class="group hidden absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
                            <span
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                                <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button id="data-carousel-next" type="button"
                            class="group hidden absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
                            <span
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                                <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Définir l'index initial de la diapositive
                            let slideIndex = 0;

                            // Fonction pour afficher la diapositive suivante
                            function showNextSlide() {
                                // Masquer toutes les diapositives
                                let slides = document.querySelectorAll(".duration-700");
                                for (let i = 0; i < slides.length; i++) {
                                    slides[i].classList.add("hidden");
                                }

                                // Mettre à jour l'index de la diapositive
                                slideIndex++;
                                if (slideIndex >= slides.length) {
                                    slideIndex = 0;
                                }

                                // Afficher la diapositive suivante
                                slides[slideIndex].classList.remove("hidden");

                                // Mettre à jour les indicateurs de diapositive
                                updateSlideIndicators();
                            }

                            // Fonction pour mettre à jour les indicateurs de diapositive
                            function updateSlideIndicators() {
                                // Masquer tous les indicateurs de diapositive
                                let indicators = document.querySelectorAll(".carousel-indicators button");
                                for (let i = 0; i < indicators.length; i++) {
                                    indicators[i].setAttribute("aria-current", "false");
                                }

                                // Mettre à jour l'indicateur de diapositive actuel
                                indicators[slideIndex].setAttribute("aria-current", "true");
                            }

                            // Appel de la fonction showNextSlide toutes les 5 secondes (3000 millisecondes)
                            setInterval(showNextSlide, 4000);
                        });
                    </script>

                    {{-- <img class="h-96 w-full rounded-xl object-cover lg:w-4/5"
                        src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" /> --}}
                </div>
            </div>
        </section>

        <section class="bg-white dark:bg-gray-900">
            <div class="container mx-auto px-6 py-10">
                <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">
                    Postes de garde</h1>

                <p class="mt-4 m-w-md mx-auto text-center text-gray-500 dark:text-gray-300">Les postes de Garde de
                    Médecine Générale de Charleroi, Courcelles, Farciennes et Montigny-le-Tilleul reçoivent les patients
                    dont l’état de santé nécessite une consultation pendant les heures de garde pour une pathologie qui
                    ressort de la médecine générale.</p>

                <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-12 xl:grid-cols-3 xl:gap-12">
                    <div>
                        <img class="h-96 w-full rounded-lg object-cover"
                            src="https://www.fagc.be/wp-content/uploads/2024/02/RueSpinois-400x400.jpg"
                            alt="" />
                        <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Charleroi</h2>
                        {{-- <p class="mt-2 text-lg uppercase tracking-wider text-blue-500 dark:text-blue-400">Website</p> --}}
                    </div>

                    <div>
                        <img class="h-96 w-full rounded-lg object-cover"
                            src="https://www.fagc.be/wp-content/uploads/2024/02/Courcelles-400x400.jpg"
                            alt="" />
                        <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Courcelles
                        </h2>

                    </div>

                    <div>
                        <img class="h-96 w-full rounded-lg object-cover"
                            src="https://www.fagc.be/wp-content/uploads/2024/04/download.png" alt="" />
                        <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">
                            Montigny-le-Tilleul

                        </h2>

                    </div>
                </div>
            </div>
        </section>
        {{-- @php
            
            $data = Session::get('filtered_data');
        $localites = Session::get('filtered_localites');
        @endphp --}}



        <section class="bg-white dark:bg-gray-900">
            <div class="container mx-auto px-6 py-10">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Trouver un
                        médecin généraliste
                    </h1>

                </div>

                <div class="">
                    <form action="/submit" method="post" class="mt-8 mb-6 grid grid-cols-1 gap-4 md:grid-cols-5">
                        @csrf
                        <!-- Ajoutez cette ligne si vous utilisez Laravel pour protéger votre formulaire contre les attaques CSRF -->

                        <div class="mt-4">

                            <input type="text" id="input1" name="nom"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nom du medecin">
                        </div>

                        <div class="mt-4">

                            <input type="text" id="input2" name="codepostal"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Code Postal">
                        </div>


                        <div class="mt-4">

                            <select id="select" name="localite"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Sélectionnez une localité</option>
                                @foreach ($localites as $localite)
                                    <option value="{{ $localite }}">{{ $localite }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Soumettre</button>
                        </div>
                    </form>

                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div
                        class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                        <div class="relative">
                            <select id="Selectbon"
                                class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 12a1 1 0 0 1 .707.293l3 3a1 1 0 1 1-1.414 1.414l-2.293-2.293v7a1 1 0 0 1-2 0v-7l-2.293 2.293a1 1 0 1 1-1.414-1.414l3-3A1 1 0 0 1 10 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>



                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                    <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Nom
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Prenom
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Rue
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Code Postal
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Commune
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Telephone
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        En savoir plus
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @if (session('filtered_data') || session('filtered_localites'))
                                <!-- Afficher les données filtrées -->
                                @foreach (session('filtered_data') as $items)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $items->nom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->prenom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->rue }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->codepostal }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->localite }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->telephone }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($data as $items)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $items->nom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->prenom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->rue }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->codepostal }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->localite }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $items->telephone }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            {{-- @foreach ($data as $items)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $items->nom }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $items->prenom }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $items->rue }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $items->codepostal }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $items->localite }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $items->telephone }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach --}}


                        </tbody>
                    </table>


                    <div class="flex justify-center my-8">

                        @if (session('filtered_data') || session('filtered_localites'))

                            {{-- <nav class="inline-flex">


                                @if (session('filtered_data')->previousPageUrl())
                                    <a href="{{ session('filtered_data')->previousPageUrl() }}"
                                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Previous
                                    </a>
                                @endif



                                @php
                                    // Nombre total de pages
                                    $totalPages = session('filtered_data')->lastPage();
                                    // Nombre de pages à afficher autour de la page actuelle
                                    $numLinks = 2;
                                    $numLins = 1;
                                    // Page actuelle
                                    $currentPage = session('filtered_data')->currentPage();
                                    // Calcul de la plage de pages à afficher
                                    $start = max($currentPage - $numLinks, 1);
                                    $end = min($currentPage + $numLinks, $totalPages);
                                    $st = min($numLins, $totalPages);
                                @endphp

                                <!-- Afficher les liens de pagination -->
                                @for ($i = 1; $i <= $totalPages; $i++)
                                    @if ($i == $start - 1 && $start > $numLinks + 1)
                                        <a href="{{ session('filtered_data')->url($st) }}"
                                            class="{{ $i == $currentPage ? 'bg-blue-500 text-white' : 'border-t border-b border-gray-300 bg-white text-gray-500' }} px-4 py-2 font-medium text-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $st }}
                                        </a>
                                    @endif
                                    @if ($i == $start - 1 && $start > $numLinks + 1)
                                        <span class="px-4 py-2">...</span>
                                    @endif
                                    @if ($i >= $start && $i <= $end)
                                        <a href="{{ session('filtered_data')->url($i) }}"
                                            class="{{ $i == $currentPage ? 'bg-blue-500 text-white' : 'border-t border-b border-gray-300 bg-white text-gray-500' }} px-4 py-2 font-medium text-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    @endif
                                    @if ($i == $end + 1 && $end < $totalPages - $numLinks)
                                        <span class="px-4 py-2">...</span>
                                    @endif
                                    @if ($i == $end + 1 && $end < $totalPages - $numLinks)
                                        <a href="{{ session('filtered_data')->url($totalPages) }}"
                                            class="{{ $i == $currentPage ? 'bg-blue-500 text-white' : 'border-t border-b border-gray-300 bg-white text-gray-500' }} px-4 py-2 font-medium text-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $totalPages }}
                                        </a>
                                    @endif
                                @endfor

                                @if (session('filtered_data')->nextPageUrl())
                                    <a href="{{ session('filtered_data')->nextPageUrl() }}"
                                        class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Next
                                    </a>
                                @endif
                            </nav> --}}
                           
                        @else
                            <nav class="inline-flex">
                                <a href="{{ $data->previousPageUrl() }}"
                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Previous
                                </a>

                                @php
                                    // Nombre total de pages
                                    $totalPages = $data->lastPage();
                                    // Nombre de pages à afficher autour de la page actuelle
                                    $numLinks = 2;
                                    $numLins = 1;
                                    // Page actuelle
                                    $currentPage = $data->currentPage();
                                    // Calcul de la plage de pages à afficher
                                    $start = max($currentPage - $numLinks, 1);
                                    $end = min($currentPage + $numLinks, $totalPages);
                                    $st = min($numLins, $totalPages);
                                @endphp

                                <!-- Afficher les liens de pagination -->
                                @for ($i = 1; $i <= $totalPages; $i++)
                                    @if ($i == $start - 1 && $start > $numLinks + 1)
                                        <a href="{{ $data->url($st) }}"
                                            class="{{ $i == $currentPage ? 'bg-blue-500 text-white' : 'border-t border-b border-gray-300 bg-white text-gray-500' }} px-4 py-2 font-medium text-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $st }}
                                        </a>
                                    @endif
                                    @if ($i == $start - 1 && $start > $numLinks + 1)
                                        <span class="px-4 py-2">...</span>
                                    @endif
                                    @if ($i >= $start && $i <= $end)
                                        <a href="{{ $data->url($i) }}"
                                            class="{{ $i == $currentPage ? 'bg-blue-500 text-white' : 'border-t border-b border-gray-300 bg-white text-gray-500' }} px-4 py-2 font-medium text-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    @endif
                                    @if ($i == $end + 1 && $end < $totalPages - $numLinks)
                                        <span class="px-4 py-2">...</span>
                                    @endif
                                    @if ($i == $end + 1 && $end < $totalPages - $numLinks)
                                        <a href="{{ $data->url($totalPages) }}"
                                            class="{{ $i == $currentPage ? 'bg-blue-500 text-white' : 'border-t border-b border-gray-300 bg-white text-gray-500' }} px-4 py-2 font-medium text-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $totalPages }}
                                        </a>
                                    @endif
                                @endfor

                                <a href="{{ $data->nextPageUrl() }}"
                                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Next
                                </a>
                            </nav>
                        @endif
                    </div>


                </div>




            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchInput = document.getElementById("table-search");
                    const tableRows = document.querySelectorAll("table tbody tr");
                    const titrePElements = document.querySelectorAll("#titre_p");


                    searchInput.addEventListener("input", function() {
                        const searchText = searchInput.value.toLowerCase();

                        tableRows.forEach(function(row) {
                            let rowContent = row.textContent.toLowerCase();

                            // Parco 
                            const cellDivs = row.querySelectorAll("td div");
                            cellDivs.forEach(function(cellDiv) {
                                rowContent += cellDiv.textContent.toLowerCase();
                            });

                            if (rowContent.includes(searchText)) {
                                row.style.display = "";
                            } else {
                                row.style.display = "none";
                            }
                        });

                        titrePElements.forEach(function(titrePElement) {
                            const titrePContent = titrePElement.textContent.toLowerCase();

                            // Vérifier si le contenu de l'élément "titre_p" inclut le texte de recherche
                            if (titrePContent.includes(searchText)) {
                                titrePElement.closest(".container").style.display = "";
                            } else {
                                titrePElement.closest(".container").style.display = "none";
                            }
                        });
                    });


                });
            </script>
        </section>


        <footer class="bg-white dark:bg-gray-900">
            <div class="container mx-auto px-6 py-12">
                <div class="md:-mx-3 md:flex md:items-center md:justify-between">
                    <h1
                        class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white md:mx-3 xl:text-4xl">
                        Subscribe our newsletter to get update.</h1>

                    <div class="mt-6 shrink-0 md:mx-3 md:mt-0 md:w-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-gray-800 px-4 py-2 text-sm text-white duration-300 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                            <span class="mx-2">Sign Up Now</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="mx-2 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 ">
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                        <div class="mt-5 flex flex-col items-start space-y-2">
                            <a href="#"
                                class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Home</a>

                        </div>
                    </div>



                    <div>
                        <p class="font-semibold text-gray-800 dark:text-white">Services</p>

                        <div class="mt-5 flex flex-col items-start space-y-2">

                            <a href="#"
                                class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Proofreading
                                Service</a>

                        </div>
                    </div>

                    <div>
                        <p class="font-semibold text-gray-800 dark:text-white">Contact Us</p>

                        <div class="mt-5 flex flex-col items-start space-y-2">
                            <a href="#"
                                class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">+880
                                768 473 4978</a>

                        </div>
                    </div>
                </div>

                <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

                <div class="flex flex-col items-center justify-between sm:flex-row">
                    <a href="#"
                        class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Brand</a>

                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© Copyright 2024. All Rights
                        Reserved.</p>
                </div>
            </div>
        </footer>
    </main>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
