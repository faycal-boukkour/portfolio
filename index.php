<?php
if (isset($_GET['success']) && $_GET['success'] === '1') {
    echo "<p style='color: green; text-align: center;'>Message envoyé avec succès !</p>";
}
?>
    
<!DOCTYPE html>
<html class="scroll-smooth" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <!-- SEO Meta -->
        <title>Fayçal BOUKKOUR | Développeur Web & Web Mobile</title>
        <meta name="description" content="Découvrez le portfolio de Fayçal BOUKKOUR, développeur d'applications web et mobile. Parcourez mes projets, mes compétences en développement Front-End et Back-End.">
        <meta name="keywords" content="Fayçal BOUKKOUR, développeur web, web mobile, portfolio, HTML, CSS, JavaScript, PHP, projets web, Front-End, Back-End, développement, Github, Codepen, Linkedin">
        <meta name="author" content="Fayçal BOUKKOUR">

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/Fusyon.webp">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    </head>

<body class="leading-relaxed text-slate-400 antialiased selection:bg-[#EBBC86] selection:text-teal-900">   
    <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 md:px-12 md:py-16 lg:py-0"> 
        <div class="lg:flex lg:justify-between lg:gap-4">
            <header class="lg:sticky lg:top-0 lg:flex lg:max-h-screen lg:w-[48%] lg:flex-col lg:justify-between lg:py-24">
                <h1 class="text-xl font-bold text-slate-200 sm:text-5xl">Fayçal BOUKKOUR</h1>
                <h2 class="mt-6 text-lg font-bold tracking-tight text-slate-200 sm:text-3xl frame-text">Développeur <span></span>
                </h2>
                <div class="mt-6 flex items-center gap-8">
                    <p class="text-sm max-w-xs">    
                          <em>
                            " Passionné, curieux et déterminé, animé par la résolution de problèmes et le désir de me dépasser et d’innover. "
                          </em>   
                        </p>
                        <img src="./assets/img/fusyon_logo.webp" alt="Logo" class="w-24 h-24 hidden lg:block shadow-lg object-cover " />
                      </div>
                    
                    
                    <nav aria-label="menu de navigation" class="nav hidden lg:block mt-10">
                        <ul class="w-max">
                            <li>
                                <a class="group flex items-center py-3 active" href="#about">
                                    <span
                                        class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-[#B22447] group-focus-visible:w-16 group-focus-visible:bg-[#B22447] motion-reduce:transition-none">
                                    </span>
                                    <span
                                        class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-[#EBBC86] group-focus-visible:text-slate-200">
                                        A Propos
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex items-center py-3" href="#formations">
                                    <span
                                        class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-[#B22447] group-focus-visible:w-16 group-focus-visible:bg-[#B22447] motion-reduce:transition-none">
                                    </span>
                                    <span
                                        class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-[#EBBC86] group-focus-visible:text-slate-200">
                                        Formations
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex items-center py-3" href="#projets">
                                    <span
                                        class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-[#B22447] group-focus-visible:w-16 group-focus-visible:bg-[#B22447] motion-reduce:transition-none">
                                    </span>
                                    <span
                                        class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-[#EBBC86] group-focus-visible:text-slate-200">
                                        Projets
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex items-center py-3" href="#contact">
                                    <span
                                        class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-[#B22447] group-focus-visible:w-16 group-focus-visible:bg-[#B22447] motion-reduce:transition-none">
                                    </span>
                                    <span
                                        class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-[#EBBC86] group-focus-visible:text-slate-200">
                                        Contact
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                
                <ul aria-label="Social media" class="ml-1 mt-10 flex items-center">
                    <li class="mr-5 shrink-0 text-xs">
                        <a aria-label="GitHub" class="block hover:text-slate-200"
                            href="https://github.com/faycal-boukkour" rel="noreferrer noopener" target="_blank" title="GitHub">
                            <span class="sr-only">GitHub</span>
                            <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 shrink-0 text-xs">
                        <a aria-label="CodePen (opens in a new tab)" class="block hover:text-slate-200" 
                            href="https://codepen.io/fusyon" rel="noreferrer noopener" target="_blank" title="CodePen">
                            <span class="sr-only">CodePen</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" aria-hidden="true">
                                <path d="M3.06 41.732L32 60.932l28.94-19.2V22.268L32 3.068l-28.94 19.2zm57.878 0L32 22.268 3.06 41.732m0-19.463L32 41.47l28.94-19.2M32 3.068v19.2m0 19.463v19.2" stroke-width="5">     
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 shrink-0 text-xs">
                        <a aria-label="LinkedIn" class="block hover:text-slate-200"
                            href="https://www.linkedin.com/in/fayce-boukkour/" rel="noreferrer noopener" target="_blank" title="LinkedIn">
                            <span class="sr-only">LinkedIn</span>
                            <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 shrink-0 text-xs">
                        <a aria-label="X-Twitter (opens in a new tab)" class="block hover:text-slate-200" 
                            href="https://x.com/fboukkour" rel="noreferrer noopener" target="_blank" title="X-Twitter">
                            <span class="sr-only">X</span>

                            <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.39 3H17.6L12.92 9.15 8.68 3H2.5L9.42 12.52 2.5 21h2.79l5.02-6.64L15.32 21h6.18l-7.33-9.87L20.39 3z"/>
                            </svg>
                        </a>
                    </li>
                    <!-- <li class="mr-5 shrink-0 text-xs">
                        <a aria-label="Instagram (opens in a new tab)" class="block hover:text-slate-200"
                            href="#" rel="noreferrer noopener" target="_blank" title="Instagram">
                            <span class="sr-only">Instagram</span>
                            <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                <path d="M295.42,6c-53.2,2.51-89.53,11-121.29,23.48-32.87,12.81-60.73,30-88.45,57.82S40.89,143,28.17,175.92c-12.31,31.83-20.65,68.19-23,121.42S2.3,367.68,2.56,503.46,3.42,656.26,6,709.6c2.54,53.19,11,89.51,23.48,121.28,12.83,32.87,30,60.72,57.83,88.45S143,964.09,176,976.83c31.8,12.29,68.17,20.67,121.39,23s70.35,2.87,206.09,2.61,152.83-.86,206.16-3.39S799.1,988,830.88,975.58c32.87-12.86,60.74-30,88.45-57.84S964.1,862,976.81,829.06c12.32-31.8,20.69-68.17,23-121.35,2.33-53.37,2.88-70.41,2.62-206.17s-.87-152.78-3.4-206.1-11-89.53-23.47-121.32c-12.85-32.87-30-60.7-57.82-88.45S862,40.87,829.07,28.19c-31.82-12.31-68.17-20.7-121.39-23S637.33,2.3,501.54,2.56,348.75,3.4,295.42,6m5.84,903.88c-48.75-2.12-75.22-10.22-92.86-17-23.36-9-40-19.88-57.58-37.29s-28.38-34.11-37.5-57.42c-6.85-17.64-15.1-44.08-17.38-92.83-2.48-52.69-3-68.51-3.29-202s.22-149.29,2.53-202c2.08-48.71,10.23-75.21,17-92.84,9-23.39,19.84-40,37.29-57.57s34.1-28.39,57.43-37.51c17.62-6.88,44.06-15.06,92.79-17.38,52.73-2.5,68.53-3,202-3.29s149.31.21,202.06,2.53c48.71,2.12,75.22,10.19,92.83,17,23.37,9,40,19.81,57.57,37.29s28.4,34.07,37.52,57.45c6.89,17.57,15.07,44,17.37,92.76,2.51,52.73,3.08,68.54,3.32,202s-.23,149.31-2.54,202c-2.13,48.75-10.21,75.23-17,92.89-9,23.35-19.85,40-37.31,57.56s-34.09,28.38-57.43,37.5c-17.6,6.87-44.07,15.07-92.76,17.39-52.73,2.48-68.53,3-202.05,3.29s-149.27-.25-202-2.53m407.6-674.61a60,60,0,1,0,59.88-60.1,60,60,0,0,0-59.88,60.1M245.77,503c.28,141.8,115.44,256.49,257.21,256.22S759.52,643.8,759.25,502,643.79,245.48,502,245.76,245.5,361.22,245.77,503m90.06-.18a166.67,166.67,0,1,1,167,166.34,166.65,166.65,0,0,1-167-166.34">
                                </path>
                            </svg>
                        </a>
                    </li> -->
                </ul>
            </header>
            <main class="pt-24 lg:w-[52%] lg:py-24">
                <section aria-label="A propos de moi" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24"
                    id="about">
                    <div
                        class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                        <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">
                            A Propos
                        </h2>
                    </div>
                    <div>
                        <p class="mb-4 text-justify">
                            Hello,
                            <span class="typewriter">
                            </span>
                        </p>
                        <p class="mb-4 text-justify">
                            Je suis développeur Web basé à Avignon, diplômé du
                            <!-- -->
                            <a aria-label="Tp"
                                class="font-medium text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86]"
                                href="https://www.francecompetences.fr/recherche/rncp/37674/"
                                rel="noreferrer noopener" target="_blank">
                                Titre Professionnel Développeur Web et Web Mobile
                            </a> 
                            chez 
                            <!-- -->
                            <a aria-label="Simplon"
                                class="font-medium text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86]"
                                href="https://www.simplon.co/" rel="noreferrer noopener" target="_blank">
                                Simplon
                            </a>
                            -
                            <a aria-label="Avenir"
                                class="font-medium text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86]"
                                href="https://avenir-84.org/" rel="noreferrer noopener" target="_blank">
                                Avenir 84.
                            </a>
                        </p>
                        <p class="mb-4 text-justify">
                            Au cours de mon parcours professionnel, j’ai occupé plusieurs postes dans des secteurs variés, notamment en tant que technicien en maintenance et chef d’équipe dans le domaine de la logistique. Ces expériences m’ont permis de développer des compétences en gestion d’équipe et en pilotage de projet, tout en renforçant ma capacité d’analyse et mon engagement à atteindre des objectifs concrets.
                        </p>
                        <p class="mb-4 text-justify">
                            Formé aux fondamentaux du développement Front-end et Back-end, je continue à approfondir mes compétences en autodidacte, avec une attention particulière portée à la performance, à l’expérience utilisateur et aux bonnes pratiques de développement.
                        </p>
                        <p class="mb-4 text-justify">
                            Passionné, curieux et autonome, je suis prêt à mettre mes compétences au service de projets ambitieux, au sein d’une équipe dynamique et innovante.
                        </p>
                        <div class="flex justify-end">
                            
                            <a href="fboukkour_cv.pdf" class="relative inline-flex items-center justify-start py-4 pl-4 pr-12 overflow-hidden font-bold text-slate-200 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 group" aria-label="Voir mon CV" rel="noreferrer noopener" target="_blank"> 
                                <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out group-hover:h-full"></span> 
                                <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12"> 
                                    <svg class="w-5 h-5 text-[#EBBC86]" fill="none" stroke="currentColor" viewBox="2 2 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg> 
                                </span> 
                                <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200"> 
                                    <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg> 
                                </span> 
                                <span class="relative w-full text-left transition-couleurs durée-200 accélération-entrée-sortie groupe-hover:texte-blanc">Voir mon CV</span> 
                            </a>
                        </div>
                    </div>  
                    
                </section>
                <section id="formations" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="liste des formations">
                    <div class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                        <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">Formations</h2>
                    </div>
                    <div>
                        <ol class="group/list">
                            <li class="mb-12">
                                <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2024">2024
                                    </header>
                                    <div class="z-10 sm:col-span-6">
                                        <h3 class="font-medium leading-snug text-slate-200">
                                            <div>
                                                <p class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86] group/link text-base"
                                                    aria-label="Formation en développement web & web mobile">
                                                    <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                                    </span>
                                                    <span>TP en développement web & web mobile .
                                                        <span class="inline-block">Avenir 84 </span>
                                                    </span>
                                                </p>
                                            </div>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">Formation axée sur le développement front-end et back-end</p>
                                        <p class="mt-2 text-sm leading-normal">Gestion du projet en méthode agile</p>
                                        <p class="mt-2 text-sm leading-normal">Maquettage des interfaces utilisateur</p>
                                        <p class="mt-2 text-sm leading-normal">Conception d’interfaces web responsives</p>
                                        <p class="mt-2 text-sm leading-normal">Modélisation de données avec MERISE</p>
                                        <p class="mt-2 text-sm leading-normal">Installation et gestion d’une base de données relationnelle</p>
                                        <p class="mt-2 text-sm leading-normal">Développement de composants avec accès SQL/NoSQL</p>
                                        <p class="mt-2 text-sm leading-normal">Documentation et déploiement des applications web dynamiques</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2009">2009
                                    </header>
                                    <div class="z-10 sm:col-span-6">
                                        <h3 class="font-medium leading-snug text-slate-200">
                                            <div>
                                                <p class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86]  group/link text-base"
                                                        aria-label="Diplôme de Technicien en Prothèse dentaire">
                                                    <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                                    </span>
                                                    <span>Diplôme de Technicien en Prothèse Dentaire .
                                                        <span class="inline-block">ISPDM</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">Formation spécialisée dans la conception de prothèses dentaires</p>
                                        <p class="mt-2 text-sm leading-normal">Connaissances de base en anatomie dentaire et occlusion</p>
                                        <p class="mt-2 text-sm leading-normal">Respect des règles d’hygiène, de sécurité et des normes en laboratoire</p>
                                        <p class="mt-2 text-sm leading-normal">fabrication de prothèses fixes (couronnes, bridges) et mobiles (stellites, résines)</p>
                                        <p class="mt-2 text-sm leading-normal">Réalisation des étapes techniques : modelage, sculpture, coulée, polymérisation, sablage, polissage</p>
                                        <p class="mt-2 text-sm leading-normal">Maîtrise des matériaux : céramique, métal, résine, cire</p>
                                        <p class="mt-2 text-sm leading-normal">Lecture et interprétation des prescriptions</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2006">2006
                                    </header>
                                    <div class="z-10 sm:col-span-6">
                                        <h3 class="font-medium leading-snug text-slate-200">
                                            <div>
                                                <p class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86]  group/link text-base"
                                                        aria-label="Diplôme de Technicien en maintenance appliquée">
                                                    <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                                    </span>
                                                    <span>Diplôme de Technicien en maintenance appliquée .
                                                        <span class="inline-block">IIAR</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">Formation spécialisée dans la maintenance en informatique</p>
                                        <p class="mt-2 text-sm leading-normal">Installation, configuration de postes de travail, périphériques et logiciels</p>
                                        <p class="mt-2 text-sm leading-normal">Diagnostic et résolution de pannes matérielles et logicielles</p>
                                        <p class="mt-2 text-sm leading-normal">Gestion d’un parc informatique : mises à jour, sauvegardes, sécurité des données</p>
                                        <p class="mt-2 text-sm leading-normal">Configuration des systèmes d’exploitation (Windows, Linux) et des outils bureautiques</p>
                                        <p class="mt-2 text-sm leading-normal">Application des bonnes pratiques en sécurité informatique (antivirus, droits d’accès, pare-feu)</p>
                                        <p class="mt-2 text-sm leading-normal">Assistance technique aux utilisateurs (support de niveau 1 et 2)</p>
                                    </div>
                                </div>
                            </li>
                        </ol>    
                    </div>
                </section>
                 <section id="projets" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="liste des projets">
                    <div class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                        <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">Projets</h2>
                    </div>
                    <div>
                        <ol class="group/list">
                            <li class="mb-12">
                                <div
                                    class="group relative flex flex-col gap-4 pb-1 transition-all lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div
                                        class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <div class="z-10">
                                        <p
                                            class="inline-flex items-baseline font-medium leading-tight group/animation text-lg lg:text-slate-200">
                                            <span
                                                class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                            </span>
                                            <span class="group/animation inline-flex lg:cursor-pointer">
                                                <span class="sr-only">
                                                    Bucal
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-red-400 transition duration-75 group-hover/animation:-translate-y-px delay-[50ms]">
                                                    B
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-orange-400 transition duration-75 group-hover/animation:-translate-y-px delay-[75ms]">
                                                    u
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[100ms]">
                                                    c
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[125ms]">
                                                    a
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[150ms]">
                                                    l
                                                </span>
                                                <span aria-hidden="true inline-block"
                                                    class="group-hover/animation:text-sky-400 transition duration-75 group-hover/animation:-translate-y-px delay-[175ms]">
                                                    <svg aria-hidden="true"
                                                        class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                            d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                                            fill-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="mt-2 text-sm leading-normal text-justify">
                                            Application dédiée aux professionnels dentaires, 
                                            facilitant la collaboration entre dentistes et prothésistes dentaires 
                                            grâce à une interface intuitive. Elle permet la gestion des commandes, 
                                            la communication en temps réel, et le suivi des prothèses.
                                        </p>
                                    </div>
                                    <ul aria-label="Languages :" class="mt-2 flex flex-wrap">
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                HTML
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                CSS
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                JavaScript
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                PHP
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                MySQL
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Galerie  -->
                                    <div class="flex flex-col sm:flex-row items-center sm:items-start justify-center mt-2 gap-4 max-w-full px-4">
                                        <img alt="home bucal"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/home_bucal.webp" loading="lazy"/>
                                        <img alt="services bucal"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/services_bucal.webp" loading="lazy"/>
                                        <img alt="connexion bucal"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/desktop_bucal.webp" loading="lazy"/>
                                    </div>                                  
                                </div>
                            </li>
                            <li class="mb-12">
                                <div
                                    class="group relative flex flex-col gap-4 pb-1 transition-all lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div
                                        class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <div class="z-10">
                                        <p
                                            class="inline-flex items-baseline font-medium leading-tight group/animation text-lg lg:text-slate-200">
                                            <span
                                                class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                            </span>
                                            <span class="group/animation inline-flex lg:cursor-pointer">
                                                <span class="sr-only">
                                                    YM Terrassement
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-red-400 transition duration-75 group-hover/animation:-translate-y-px delay-[25ms]">
                                                    Y
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-orange-400 transition duration-75 group-hover/animation:-translate-y-px delay-[50ms]">
                                                    M
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-teal-400 transition duration-75 group-hover/animation:-translate-y-px delay-[75ms]">
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[100ms]">
                                                    T
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[125ms]">
                                                    e
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[150ms]">
                                                    r
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[175ms]">
                                                    r
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[200ms]">
                                                    a
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[225ms]">
                                                    s
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-cyan-400 transition duration-75 group-hover/animation:-translate-y-px delay-[225ms]">
                                                    s
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-cyan-400 transition duration-75 group-hover/animation:-translate-y-px delay-[250ms]">
                                                    e
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-sky-400 transition duration-75 group-hover/animation:-translate-y-px delay-[275ms]">
                                                    m
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-sky-400 transition duration-75 group-hover/animation:-translate-y-px delay-[300ms]">
                                                    e
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-blue-400 transition duration-75 group-hover/animation:-translate-y-px delay-[325ms]">
                                                    n
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-indigo-400 transition duration-75 group-hover/animation:-translate-y-px delay-[350ms]">
                                                    t
                                                </span>
                                                <span aria-hidden="true inline-block"
                                                    class="group-hover/animation:text-violet-400 transition duration-75 group-hover/animation:-translate-y-px delay-[375ms]">
                                                    <svg aria-hidden="true"
                                                        class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                            d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                                            fill-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="mt-2 text-sm leading-normal text-justify">
                                            Application web présente les services de terrassement de l’entreprise, 
                                            propose un formulaire de contact pour les demandes de devis, 
                                            et intègre un tableau de bord d’administration permettant de gérer les clients, devis, factures et chantiers.
                                        </p>
                                    </div>
                                    <ul aria-label="Languages :" class="mt-2 flex flex-wrap">
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                HTML
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                Bootstrap CSS
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                JavaScript
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                PHP
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                MySQL
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Galerie  -->
                                    <div class="flex flex-col sm:flex-row items-center sm:items-start justify-center mt-2 gap-4 max-w-full px-4">
                                        <img alt="home ymt"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/home_ymt.webp" loading="lazy"/>
                                        <img alt="connection ymt"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/conn_ymt.webp" loading="lazy"/>
                                        <img alt="desktop ymt"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/desktop_ymt.webp" loading="lazy"/>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div
                                    class="group relative flex flex-col gap-4 pb-1 transition-all lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div
                                        class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <div class="z-10">
                                        <p
                                            class="inline-flex items-baseline font-medium leading-tight group/animation text-lg lg:text-slate-200">
                                            <span
                                                class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                            </span>
                                            <span class="group/animation inline-flex lg:cursor-pointer">
                                                <span class="sr-only">
                                                    La Note Facile
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-red-400 transition duration-75 group-hover/animation:-translate-y-px delay-[25ms]">
                                                    L
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-orange-400 transition duration-75 group-hover/animation:-translate-y-px delay-[50ms]">
                                                    a
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-teal-400 transition duration-75 group-hover/animation:-translate-y-px delay-[75ms]">
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[100ms]">
                                                    N
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[125ms]">
                                                    o
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[150ms]">
                                                    t
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[175ms]">
                                                    e
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-teal-400 transition duration-75 group-hover/animation:-translate-y-px delay-[200ms]">
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[225ms]">
                                                    F
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[250ms]">
                                                    a
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-cyan-400 transition duration-75 group-hover/animation:-translate-y-px delay-[275ms]">
                                                    c
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-cyan-400 transition duration-75 group-hover/animation:-translate-y-px delay-[300ms]">
                                                    i
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-sky-400 transition duration-75 group-hover/animation:-translate-y-px delay-[325ms]">
                                                    l
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-indigo-400 transition duration-75 group-hover/animation:-translate-y-px delay-[350ms]">
                                                    e
                                                </span>
                                                <span aria-hidden="true inline-block"
                                                    class="group-hover/animation:text-violet-400 transition duration-75 group-hover/animation:-translate-y-px delay-[375ms]">
                                                    <svg aria-hidden="true"
                                                        class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                            d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                                            fill-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="mt-2 text-sm leading-normal text-justify">
                                            Plateforme de formation musicale en ligne, dédiée aux passionnés et aux professeurs de musique. 
                                            L'application offre un large choix de cours adaptés à tous.
                                        </p>
                                    </div>
                                    <ul aria-label="Languages :" class="mt-2 flex flex-wrap">
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                HTML
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                CSS
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                JavaScript
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                PHP
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                MySQL
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Galerie  -->
                                    <div class="flex flex-col sm:flex-row items-center sm:items-start justify-center mt-2 gap-4 max-w-full px-4">
                                        <img alt="home lnf"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/home_lnf.webp" loading="lazy"/>
                                        <img alt="contact lnf"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/contact_lnf.webp" loading="lazy"/>
                                        <img alt="profil lnf"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/profil_lnf.webp" loading="lazy"/>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div
                                    class="group relative flex flex-col gap-4 pb-1 transition-all lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div
                                        class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <div class="z-10">
                                        <p
                                            class="inline-flex items-baseline font-medium leading-tight group/animation text-lg lg:text-slate-200">
                                            <span
                                                class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                            </span>
                                            <span class="group/animation inline-flex lg:cursor-pointer">
                                                <span class="sr-only">
                                                    KapaCoif
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-red-400 transition duration-75 group-hover/animation:-translate-y-px delay-[25ms]">
                                                    K
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-orange-400 transition duration-75 group-hover/animation:-translate-y-px delay-[50ms]">
                                                    a
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[75ms]">
                                                    p
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[100ms]">
                                                    a
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[125ms]">
                                                    C
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-cyan-400 transition duration-75 group-hover/animation:-translate-y-px delay-[150ms]">
                                                    o
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-sky-400 transition duration-75 group-hover/animation:-translate-y-px delay-[175ms]">
                                                    i
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-indigo-400 transition duration-75 group-hover/animation:-translate-y-px delay-[200ms]">
                                                    f
                                                </span>
                                                <span aria-hidden="true inline-block"
                                                    class="group-hover/animation:text-violet-400 transition duration-75 group-hover/animation:-translate-y-px delay-[375ms]">
                                                    <svg aria-hidden="true"
                                                        class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                            d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                                            fill-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="mt-2 text-sm leading-normal text-justify">
                                            Développement d’un site web élégant pour le salon de coiffure KAPACOIF, mettant en avant ses horaires, son emplacement, 
                                            son équipe de coiffeurs, ainsi que la qualité de ses services. 
                                            L’objectif : valoriser l’image haut de gamme du salon et faciliter la prise de contact et la découverte des prestations.
                                        </p>
                                    </div>
                                    <ul aria-label="Languages :" class="mt-2 flex flex-wrap">
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                HTML
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                CSS
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                JavaScript
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                PHP
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                MySQL
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Galerie  -->
                                    <div class="flex flex-col sm:flex-row items-center sm:items-start justify-center mt-2 gap-4 max-w-full px-4">
                                        <img alt="home ck"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/home_ck.webp" loading="lazy"/>
                                        <img alt="services ck"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/service_ck.webp" loading="lazy"/>
                                        <img alt="gallery ck"
                                            class="w-11/12 sm:w-[200px] max-w-full h-auto aspect-video object-cover rounded-md border-2 border-slate-200/10 transition-transform duration-300 hover:scale-105 sm:translate-y-1"
                                            src="assets/img/gallery_ck.webp" loading="lazy"/>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div
                                    class="group relative flex flex-col gap-4 pb-1 transition-all lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div
                                        class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                    </div>
                                    <div class="z-10">
                                        <p
                                            class="inline-flex items-baseline font-medium leading-tight group/animation text-lg lg:text-slate-200">
                                            <span
                                                class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block">
                                            </span>
                                            <span class="group/animation inline-flex lg:cursor-pointer">
                                                <span class="sr-only">
                                                    Portfolio
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-red-400 transition duration-75 group-hover/animation:-translate-y-px delay-[25ms]">
                                                    P
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-orange-400 transition duration-75 group-hover/animation:-translate-y-px delay-[50ms]">
                                                    o
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-yellow-400 transition duration-75 group-hover/animation:-translate-y-px delay-[75ms]">
                                                    r
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-lime-400 transition duration-75 group-hover/animation:-translate-y-px delay-[100ms]">
                                                    t
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-green-400 transition duration-75 group-hover/animation:-translate-y-px delay-[125ms]">
                                                    f
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-cyan-400 transition duration-75 group-hover/animation:-translate-y-px delay-[150ms]">
                                                    o
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-sky-400 transition duration-75 group-hover/animation:-translate-y-px delay-[175ms]">
                                                    l
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-indigo-400 transition duration-75 group-hover/animation:-translate-y-px delay-[200ms]">
                                                    i
                                                </span>
                                                <span aria-hidden="true"
                                                    class="group-hover/animation:text-indigo-400 transition duration-75 group-hover/animation:-translate-y-px delay-[200ms]">
                                                    o
                                                </span>
                                                <span aria-hidden="true inline-block"
                                                    class="group-hover/animation:text-violet-400 transition duration-75 group-hover/animation:-translate-y-px delay-[375ms]">
                                                    <svg aria-hidden="true"
                                                        class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                            d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                                            fill-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </p>
                                        <p class="mt-2 text-sm leading-normal text-justify">
                                            Site web vitrine présentant le portfolio de Fayçal BOUKKOUR. 
                                            Retrouvez mon CV, mes compétences en développement web et mobile, ainsi qu'une sélection de projets réalisés.                                       </p>
                                    </div>
                                    <ul aria-label="Languages :" class="mt-2 flex flex-wrap">
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                HTML
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                Tailwind CSS
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                JavaScript
                                            </div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div
                                                class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 sm:translate-y-1">
                                                PHP
                                            </div>
                                        </li>
                                    </ul>   
                                </div>
                            </li>
                        </ol>
                    </div>
                </section>
                <section aria-label="Contactez-nous" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" id="contact">
                    <div class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                      <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">Contact</h2>
                    </div>
                  
                    <div class="max-w-screen-md mx-auto px-5">
                      <div class="text-center mb-12">
                        <h2 class=" sm:text-base font-extrabold tracking-tight text-slate-400">
                          Prendre <p class=" sm:text-4xl text-[#EBBC86]">Contact</p>
                        </h2>
                      </div>

                       <!-- message d'alerte  --> 
                      <?php if (isset($_GET['success']) && $_GET['success'] === '1') : ?>
                      <div class="mb-6 text-center rounded bg-green-600/20 px-6 py-4 text-green-300 border border-green-500">
                        ✅ Votre message a été envoyé avec succès !
                      </div>

                      <?php elseif (isset($_GET['error']) && $_GET['error'] === '1') : ?>
                      <div class="mb-6 text-center rounded bg-red-600/20 px-6 py-4 text-red-300 border border-red-500">
                        ❌ Une erreur est survenue lors de l’envoi du message. Veuillez réessayer.
                      </div>
                      <?php endif; ?>

                      <!-- Formulaire  -->
                      <form class="w-full space-y-6" method="POST" action="send.php" onsubmit="return confirmSend();">
                        <div>
                          <label for="email" class="block text-sm font-medium text-slate-400">Adresse e-mail</label>
                          <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="exemple@domaine.com"
                            class="mt-1 w-full rounded border-0 border-b border-white/40 bg-transparent p-4 text-white placeholder-white/60 caret-white focus:border-transparent focus:outline-none focus:ring-[#B22447] transition-all duration-300"
                            required/>
                        </div>
                      
                        <div>
                          <label for="message" class="block text-sm font-medium text-slate-400">Votre message</label>
                          <textarea
                            id="message"
                            name="message"
                            rows="8"
                            placeholder="Écrivez votre message ici..."
                            class="mt-1 w-full rounded border-0 border-b border-white/40 bg-transparent p-4 text-white placeholder-white/60 caret-white focus:border-transparent focus:outline-none focus:ring-[#B22447] transition-all duration-300"
                            required
                          ></textarea>
                        </div>
                      
                        <div class="flex justify-center">
                          <button
                            type="submit"
                            class="inline-flex items-center justify-center rounded-md bg-[#B22447] px-6 py-3 text-sm font-medium text-white shadow-md transition hover:bg-[#921b37] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#B22447]"
                          >
                            Envoyer
                          </button>
                        </div>
                      </form>
                      
                    </div>
                  </section>
                  
                <footer class="max-w-md pb-16 text-sm text-slate-400 sm:pb-0 text-right">
                    <p>
                        Designed by  
                        <span
                            class="font-medium text-slate-200 hover:text-[#EBBC86] focus-visible:text-[#EBBC86]">
                            Fayçal BOUKKOUR
                    </span>
                        © 2025.
                    </p>
                    <p>
                         Tous droits réservés.
                    </p>   
                </footer>
            </main>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="absolute bottom-5 right-7 text-[#EBBC86] text-2xl font-bold hidden hover:text-[#B22447] focus:outline-none">
    <!-- Icône Flèche vers le haut -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7-7-7 7"></path>
    </svg>
      <img src="./assets/img/Fusyon.webp" alt="Tourne" class="w-10 h-10 animate-spin-slow" />

  </button>


    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="assets/js/app.js"></script>  
</body>

</html>
