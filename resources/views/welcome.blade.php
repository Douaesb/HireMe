    @extends('layouts.master')
    @section('home')     
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Plateforme   <br>de services locaux</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">plateforme permettant aux utilisateurs de proposer leurs services à la personne ou des services à domicile. tels que plomberie, peinture, jardinage, etc. Les autres utilisateurs peuvent consulter ces services et entrer en contact avec les prestataires</p>
                <div>
                    <a href="{{route('service.index')}}">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="block text-white bg-purple-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Ajouter vos service a notre plateforme
                    </button>
                </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="../../img/hero.png" alt="hero image">
            </div>                
        </div>
    </section>
    @endsection
