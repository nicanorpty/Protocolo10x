<?php
/**
 * PROTOCOLO 10X
 * Sistema Integral de Entregables + Oferta
 */
?>


<section 
id="oferta"
class="py-24 bg-white overflow-hidden">


<div class="max-w-7xl mx-auto px-6">



<!-- TITULO -->

<div 
data-aos="fade-up"
class="text-center max-w-4xl mx-auto">


<span class="
inline-flex
px-4
py-2
rounded-full
bg-purple-100
text-purple-700
text-sm
font-semibold
">

Sistema Integral de Entregables

</span>



<h2 class="
mt-6
text-4xl
md:text-6xl
font-display
font-bold
text-gray-900
">


Todo lo que recibirás en

<span class="text-purple-600">
PROTOCOLO 10X®
</span>


</h2>



<p class="
mt-6
text-lg
text-gray-600
">

31 recursos digitales diseñados para ayudarte a transformar tus hábitos,
alimentación y energía con un sistema claro y práctico.

</p>


</div>





<!-- VALOR -->

<div
data-aos="zoom-in"
class="
mt-16
bg-gradient-to-br
from-purple-600
to-purple-800

rounded-[3rem]

p-10
md:p-14

text-white

text-center

shadow-2xl
shadow-purple-200
">


<p class="
uppercase
tracking-widest
text-purple-200
text-sm
">

Valor total acumulado

</p>



<h3 class="
mt-4
text-6xl
font-bold
">

$1,411

</h3>


<p class="
mt-2
text-purple-100
">

Valor individual de todos los recursos

</p>




<div class="
mt-10
bg-white
text-gray-900
rounded-3xl
p-8
max-w-md
mx-auto
">


<p class="
text-gray-500
">

Acceso completo hoy por

</p>


<div class="
text-5xl
font-bold
text-purple-600
mt-2
">

$49.95

</div>


<p class="
text-sm
text-gray-500
mt-2
">

Oferta especial de lanzamiento

</p>


<a 
href="#registro"

class="
mt-6
block
bg-purple-600
text-white
py-4
rounded-full
font-bold
hover:bg-purple-700
transition
">


Obtener el Pack Completo


</a>


</div>


</div>






<!-- CATEGORIAS -->

<div class="mt-20">


<h3 class="
text-3xl
font-bold
text-gray-900
text-center
mb-12
">

Tu biblioteca PROTOCOLO 10X®

</h3>




<div class="
grid
md:grid-cols-2
lg:grid-cols-3
gap-8
">



<?php

$recursos = [

[
"icon"=>"video",
"titulo"=>"Video Clases",
"cantidad"=>"10 módulos HD",
"texto"=>"Lecciones prácticas paso a paso diseñadas para aplicar desde el día uno."
],

[
"icon"=>"book-open",
"titulo"=>"Manuales & Agendas",
"cantidad"=>"5 recursos",
"texto"=>"Manuales digitales, planners y agendas para organizar tu transformación."
],

[
"icon"=>"calculator",
"titulo"=>"Calculadoras & Registros",
"cantidad"=>"5 herramientas",
"texto"=>"Controla hidratación, progreso, hábitos y métricas importantes."
],

[
"icon"=>"shopping-cart",
"titulo"=>"Guías de Campo",
"cantidad"=>"10 guías prácticas",
"texto"=>"Compras inteligentes, restaurantes, meal prep y decisiones saludables."
],

[
"icon"=>"chef-hat",
"titulo"=>"Recetarios Funcionales",
"cantidad"=>"6 recetarios",
"texto"=>"Desayunos, almuerzos, cenas, smoothies y opciones saludables."
],

[
"icon"=>"lock",
"titulo"=>"Acceso Exclusivo",
"cantidad"=>"Comunidad + Biblioteca",
"texto"=>"Recursos privados, comunidad y sesiones especiales."
]

];


foreach($recursos as $item):

?>


<div
data-aos="fade-up"

class="
bg-gray-50
rounded-3xl
p-8
border
border-gray-100

hover:-translate-y-2

transition
duration-300
">


<div class="
w-14
h-14
rounded-2xl
bg-purple-100
flex
items-center
justify-center
mb-6
">


<i 
data-lucide="<?= $item['icon']; ?>"
class="text-purple-600">
</i>


</div>



<h4 class="
text-xl
font-bold
text-gray-900
">

<?= $item['titulo']; ?>


</h4>



<p class="
mt-2
font-semibold
text-purple-600
">

<?= $item['cantidad']; ?>

</p>



<p class="
mt-4
text-gray-600
">

<?= $item['texto']; ?>

</p>



</div>


<?php endforeach; ?>


</div>


</div>








<!-- BONOS -->

<div 
data-aos="fade-up"

class="
mt-24
bg-purple-50
rounded-[3rem]
p-10
md:p-14
">


<div class="text-center">


<span class="
text-purple-600
font-bold
">

BONOS DE ACELERACIÓN

</span>



<h3 class="
mt-4
text-4xl
font-display
font-bold
text-gray-900
">

5 regalos exclusivos incluidos GRATIS

</h3>


<p class="
mt-4
text-gray-600
">

Valor adicional de $311 USD por lanzamiento.

</p>


</div>




<div class="
grid
md:grid-cols-2
lg:grid-cols-5
gap-5
mt-10
">


<?php

$bonos=[

"Recetario Gourmet Biohacking",

"Meal Prep 60 minutos",

"Lista inteligente supermercado",

"Planner de hábitos",

"Masterclass alimentación inteligente"

];


foreach($bonos as $bono):

?>


<div class="
bg-white
rounded-2xl
p-5
shadow-sm
">


<div class="
text-purple-600
font-bold
text-sm
mb-3
">

BONO GRATIS

</div>


<p class="
font-semibold
text-gray-800
">

<?= $bono ?>

</p>


</div>


<?php endforeach; ?>


</div>


</div>







<!-- CTA FINAL -->

<div
data-aos="zoom-in"

class="
mt-20
text-center
">


<h3 class="
text-4xl
font-bold
text-gray-900
">

Consigue PROTOCOLO 10X®

</h3>


<p class="
mt-4
text-gray-600
">

Todo incluido. Acceso inmediato. Oferta limitada de lanzamiento.

</p>



<a 
href="#registro"

class="
inline-flex
mt-8
px-10
py-5

rounded-full

bg-purple-600

text-white

font-bold

shadow-xl
shadow-purple-200

hover:scale-105

transition
">


Reclamar mi acceso por $49.95


</a>



</div>



</div>


</section>