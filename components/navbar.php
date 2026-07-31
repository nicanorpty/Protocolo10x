<?php
/**
 * PROTOCOLO 10X
 * Navbar Premium
 */
?>


<nav 
id="navbar"
class="fixed top-0 left-0 w-full z-50 transition-all duration-500">

    <div class="max-w-7xl mx-auto px-6 py-5">

        <div class="flex items-center justify-between">


            <!-- LOGO -->

            <a href="#" 
            class="flex items-center gap-2">

                <div 
                class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-gold to-yellow-700 flex items-center justify-center shadow-lg">

                    <span class="text-black font-bold text-xl">
                        10X
                    </span>

                </div>


                <div>

                    <h1 class="font-display text-xl text-white tracking-wide">
                        PROTOCOLO
                        <span class="text-brand-gold">
                            10X
                        </span>
                    </h1>


                    <p class="text-xs text-gray-300 tracking-widest">
                        TRANSFORMACIÓN
                    </p>

                </div>


            </a>




            <!-- MENU DESKTOP -->

            <div class="hidden md:flex items-center gap-8">


                <a href="#inicio"
                class="text-white/90 hover:text-white transition">
                    Inicio
                </a>


                <a href="#como-funciona"
                class="text-white/90 hover:text-white transition">
                    Cómo funciona
                </a>


                <a href="#resultados"
                class="text-white/90 hover:text-white transition">
                    Resultados
                </a>


                <a href="#faq"
                class="text-white/90 hover:text-white transition">
                    FAQ
                </a>


            </div>





            <!-- CTA -->

            <a 
            href="#registro"
            class="hidden md:flex items-center gap-2 px-6 py-3 rounded-full 
            bg-brand-gold text-black font-semibold
            hover:scale-105 transition duration-300 shadow-lg">

                Iniciar ahora

                <i data-lucide="arrow-right" class="w-4 h-4"></i>

            </a>





            <!-- MOBILE BUTTON -->

            <button 
            class="md:hidden text-white"
            id="menu-btn">

                <i data-lucide="menu"></i>

            </button>



        </div>

    </div>


</nav>