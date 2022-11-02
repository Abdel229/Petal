<script setup>
import { Link } from "@inertiajs/inertia-vue3"
</script>
<template>
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="" id="nav">

            <nav
                class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
                <div class="px-6 w-full flex flex-wrap items-center justify-between">
                    <div class="flex items-center ">
                        <button
                            class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentY"
                            aria-controls="navbarSupportedContentY" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                                </path>
                            </svg>
                        </button>
                        <Link :href="route('Accueil')" class="text-blue-600 text-3xl font-black font-sans">PETAL</Link>
                    </div>
                    <div class="navbar-collapse collapse grow items-center">
                        <ul class="navbar-nav mx-auto w-2/5 lg:flex lg:flex-row lg:justify-center space-x-12">
                            <li class="nav-item">
                                <Link
                                    class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                                    :href="route('Acceuil')" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                Accueil</Link>
                            </li>
                            <li class="nav-item">
                                <Link
                                    class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                                    :href="route('formation')" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                Formations</Link>
                            </li>
                            <li class="nav-item mb-2 lg:mb-0">
                                <Link
                                    class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                                    :href="route('formation')" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                Formations</Link>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center lg:ml-auto">
                        <Link :href="route('login')" type="button"
                            class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="light">Login</Link>
                        <Link :href="route('register')" type="button"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="light">Sign up for free</Link>
                    </div>
                </div>
            </nav>


        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
</template>
<style>
#nav {
    margin-bottom: 0px;
}
</style>
