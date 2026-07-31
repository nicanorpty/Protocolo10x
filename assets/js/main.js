/**
 * PROTOCOLO 10X
 * Main Javascript
 */


document.addEventListener("DOMContentLoaded", () => {


    // Inicializar iconos Lucide

    if (window.lucide) {
        lucide.createIcons();
    }



    // Animaciones AOS

    if (window.AOS) {
        AOS.init({
            duration:800,
            once:true,
            offset:80
        });
    }


});