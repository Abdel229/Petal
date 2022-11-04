<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

</script>

<template>

    <Head title="Accueil" />
    <AppLayout myclass="dark:bg-gray-800">
        <!-- Header -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="absolute block w-full"
            style="margin: auto; z-index: 2;" height="680" preserveAspectRatio="none" viewBox="0 0 1920 880">
            <g transform="translate(960,440) scale(1,1) translate(-960,-440)">
                <linearGradient id="lg-0.047955344060927496" x1="0" x2="1" y1="0" y2="0">
                    <stop stop-color="hsl(217, 88%, 33.7%)" offset="0"></stop>
                    <stop stop-color="hsl(217, 88%, 75.1%)" offset="1"></stop>
                </linearGradient>
                <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
                    <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite"
                        keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
                        begin="0s"
                        values="M0 0L 0 804.2328934685746Q 320 597.3613372284876  640 571.0708916590191T 1280 512.0661063245175T 1920 301.8788007488083L 1920 0 Z;M0 0L 0 877.6839081951588Q 320 668.0720922803877  640 649.0018928349388T 1280 328.7087077664202T 1920 162.95038242563396L 1920 0 Z;M0 0L 0 724.9886210051687Q 320 661.4364572061575  640 623.2173947479624T 1280 359.20353038907734T 1920 135.51673041732283L 1920 0 Z;M0 0L 0 804.2328934685746Q 320 597.3613372284876  640 571.0708916590191T 1280 512.0661063245175T 1920 301.8788007488083L 1920 0 Z">
                    </animate>
                </path>
                <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
                    <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite"
                        keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
                        begin="-6.666666666666667s"
                        values="M0 0L 0 765.7607191473613Q 320 641.7853945676919  640 624.2534689988059T 1280 365.27264408032966T 1920 190.38947978522663L 1920 0 Z;M0 0L 0 842.1984196370487Q 320 570.6690721707517  640 540.6844954979398T 1280 439.92879442880593T 1920 200.29713960445451L 1920 0 Z;M0 0L 0 796.6802345094818Q 320 721.9216894353016  640 696.8815669355181T 1280 373.6367381440213T 1920 196.63169821789495L 1920 0 Z;M0 0L 0 765.7607191473613Q 320 641.7853945676919  640 624.2534689988059T 1280 365.27264408032966T 1920 190.38947978522663L 1920 0 Z">
                    </animate>
                </path>
                <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
                    <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite"
                        keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
                        begin="-13.333333333333334s"
                        values="M0 0L 0 801.7562714943509Q 320 634.0247183381232  640 605.7090791951217T 1280 503.9393370140325T 1920 224.7551247480177L 1920 0 Z;M0 0L 0 821.0401780336218Q 320 670.8690783540507  640 637.0744123031742T 1280 456.40745286432224T 1920 278.1294357804296L 1920 0 Z;M0 0L 0 744.0534225112256Q 320 637.6425395409125  640 593.2079605185819T 1280 457.03995196824286T 1920 254.87693899994804L 1920 0 Z;M0 0L 0 801.7562714943509Q 320 634.0247183381232  640 605.7090791951217T 1280 503.9393370140325T 1920 224.7551247480177L 1920 0 Z">
                    </animate>
                </path>
                <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
                    <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite"
                        keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
                        begin="-20s"
                        values="M0 0L 0 817.8603658675457Q 320 592.9404308081629  640 559.1126621853513T 1280 428.9912604821798T 1920 209.017381620229L 1920 0 Z;M0 0L 0 802.0504889976935Q 320 561.3963273210122  640 537.6024084387631T 1280 430.41283267566695T 1920 256.1972069733954L 1920 0 Z;M0 0L 0 789.4448177495887Q 320 561.9675446430498  640 531.6192318019404T 1280 414.76018143244175T 1920 265.9163329632971L 1920 0 Z;M0 0L 0 817.8603658675457Q 320 592.9404308081629  640 559.1126621853513T 1280 428.9912604821798T 1920 209.017381620229L 1920 0 Z">
                    </animate>
                </path>
                <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
                    <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite"
                        keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
                        begin="-26.666666666666668s"
                        values="M0 0L 0 844.0541574423102Q 320 623.0697081316591  640 592.8483890737847T 1280 469.85448734523794T 1920 190.81850676853674L 1920 0 Z;M0 0L 0 871.4928294956283Q 320 618.9784567388518  640 593.1183717103518T 1280 376.5051942642811T 1920 141.32293927545027L 1920 0 Z;M0 0L 0 782.0118384610068Q 320 727.3267836497654  640 694.0476176759635T 1280 518.1545471640493T 1920 276.0053882957168L 1920 0 Z;M0 0L 0 844.0541574423102Q 320 623.0697081316591  640 592.8483890737847T 1280 469.85448734523794T 1920 190.81850676853674L 1920 0 Z">
                    </animate>
                </path>
            </g>
        </svg>

        <div class="container mx-auto px-6 md:px-12 xl:px-32 pt-20 relative" style="z-index:5;">
            <div class="text-center text-gray-800">
                <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12"
                    style=" background-color: hsla(0, 0%, 100%, 0.8);backdrop-filter: saturate(200%) blur(25px);">
                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">The best offer on
                        the market <br /><span class="text-blue-600">for your business</span></h1>
                    <a class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Get started</a>
                    <a class="inline-block px-7 py-3 text-white font-mediumleading-snug bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Learn more</a>
                </div>
            </div>
        </div>

        <!-- Icones -->

        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800 text-center">
                <h2 class="text-3xl font-bold mb-20">Why is it so great?</h2>

                <div class="grid lg:gap-x-12 lg:grid-cols-3">
                    <div class="mb-12 lg:mb-0">
                        <div class="rounded-lg shadow-lg h-full block bg-white">
                            <div class="flex justify-center">
                                <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block -mt-8">
                                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-blue-600 mb-4">1000</h3>
                                <h5 class="text-lg font-medium mb-4">Components</h5>
                                <p class="text-gray-500">
                                    Laudantium totam quas cumque pariatur at doloremque hic quos quia eius
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12 lg:mb-0">
                        <div class="rounded-lg shadow-lg h-full block bg-white">
                            <div class="flex justify-center">
                                <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block -mt-8">
                                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 544 512">
                                        <path fill="currentColor"
                                            d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-blue-600 mb-4">70%</h3>
                                <h5 class="text-lg font-medium mb-4">Growth</h5>
                                <p class="text-gray-500">
                                    Eum nostrum fugit numquam, voluptates veniam neque quibusdam ullam
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="rounded-lg shadow-lg h-full block bg-white">
                            <div class="flex justify-center">
                                <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block -mt-8">
                                    <svg class="w-7 h-7 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M512.1 191l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zm-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.7-82.4 14.3-52.8 52.8zM386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1-8.9 24.2-26.4 46.4-42.6 65.8-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6-24.6 4.2-50.4 4.4-75.9 0-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3-16.2-19.4-33.3-41.6-42.2-65.7-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29 8.9-24.2 26-46.4 42.2-65.8 7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5 24.6-4.2 50.5-4.4 76-.1 11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3 16.2 19.4 33.2 41.6 42.1 65.8 4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5zm-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7-59.2 77 28.7 164.9 105.7 105.7zm243.4 182.7l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zM501.6 431c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.6-82.4 14.3-52.8 52.8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-blue-600 mb-4">49</h3>
                                <h5 class="text-lg font-medium mb-4">Projects</h5>
                                <p class="text-gray-500">
                                    Cupiditate enim, minus nulla dolor cumque iure eveniet facere ullam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->



        <!-- Block comportant image -->

        <!-- Block comportant l'image -->

        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800 text-center lg:text-left">


                <!-- Jumbotron -->
                <div class="container mx-auto xl:px-32 text-center lg:text-left">
                    <div class="grid lg:grid-cols-2 lg:space-x-20 items-center">
                        <div class="mb-12 lg:mb-0">
                            <div class="relative block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                                style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1">
                                <h2 class="text-3xl font-bold mb-4 display-5">Why is it so great?</h2>
                                <p class="text-gray-500 mb-12">
                                    Nunc tincidunt vulputate elit. Mauris varius purus malesuada neque iaculis
                                    malesuada. Aenean gravida magna orci, non efficitur est porta id. Donec magna
                                    diam.
                                </p>

                                <div class="grid md:grid-cols-3 gap-x-6">
                                    <div class="mb-12 md:mb-0">
                                        <h2 class="text-3xl font-bold text-dark mb-4">10%</h2>
                                        <h5 class="text-lg font-medium text-gray-500 mb-0">Less sugar</h5>
                                    </div>

                                    <div class="mb-12 md:mb-0">
                                        <h2 class="text-3xl font-bold text-dark mb-4">70%</h2>
                                        <h5 class="text-lg font-medium text-gray-500 mb-0">More flavor</h5>
                                    </div>

                                    <div class="">
                                        <h2 class="text-3xl font-bold text-dark mb-4">0%</h2>
                                        <h5 class="text-lg font-medium text-gray-500 mb-0">Gluten</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <img src="@/src/img/formation-vertor.png" class="w-full" alt="" />
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
            </section>
            <!-- Section: Design Block -->

        </div>


        <!-- Contact -->
        <div class="flex mx-auto w-8/12 items-center">
            <!-- Vector de contact -->
            <div class="lg:rounded-lg">
                <img src="@/src/img/contact-us.png" alt="" srcset="">
            </div>

            <!-- Informations pour la mise en contact -->

            <div class="shadow-lg rounded-md px-8 bg-slate-200 h-72 w-1/2" style="background: hsla(0, 0%, 100%, 0.55)">
                <h2 class="font-extrabold text-2xl mt-8">CONTACTEZ-NOUS</h2>
                <p class="mt-5 text-gray-500">Vous pouvez nous contactez via-whatsapp ou s'implement en nous envoyant un mail</p>
                <!-- number and mail -->
                <ul class="transition flex mt-16 font-serif space-x-3 justify-center text-lg text-primary-700 hover:text-primary-800 cursor-pointer">
                    <li class="border-r-2 pr-3">
                        <font-awesome-icon icon="fa-solid fa-envelope" /><span>petal@gmail.com</span>
                    </li>
                    <li>
                        <font-awesome-icon icon="fa-solid fa-phone" /><span>+229 63775445</span>
                    </li>
                </ul>
            </div>
        </div>



    </AppLayout>
</template>
<style>
@media (min-width: 992px) {
    .rotate-lg-6 {
        transform: rotate(6deg);
    }
}

/* These are the KEY styles - you can add them directly to any object you want in your project */
.fancy-border-radius {
    border-radius: 53% 47% 52% 48% / 36% 41% 59% 64%;
}
</style>
