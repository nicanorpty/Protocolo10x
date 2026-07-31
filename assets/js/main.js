/**
 * PROTOCOLO 10X
 * Main Javascript
 */


document.addEventListener("DOMContentLoaded", () => {



    // ICONOS LUCIDE

    if (window.lucide) {

        lucide.createIcons();

    }




    // ANIMACIONES AOS

    if (window.AOS) {

        AOS.init({

            duration:800,

            once:true,

            offset:80

        });

    }





    // SWIPER RESULTADOS

    if (document.querySelector(".resultadosSwiper")) {


        const swiper = new Swiper(".resultadosSwiper", {


            loop:true,


            slidesPerView:1,


            spaceBetween:30,


            autoplay:{

                delay:4000,

                disableOnInteraction:false

            },


            pagination:{


                el:".swiper-pagination",

                clickable:true


            }



        });


    }



});