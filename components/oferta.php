<?php
/**
 * PROTOCOLO 10X
 * Sistema Integral de Entregables
 * Oferta Premium
 */
?>


<section 
id="oferta"
class="
py-24
bg-white
overflow-hidden
">


<div class="
max-w-7xl
mx-auto
px-6
">



<!-- HERO OFERTA -->

<div
data-aos="fade-up"
class="
text-center
max-w-5xl
mx-auto
">


<div class="
inline-flex
items-center
gap-2
bg-purple-100
text-purple-700
px-5
py-2
rounded-full
font-semibold
text-sm
">


<i data-lucide="sparkles"></i>

SISTEMA INTEGRAL DE ENTREGABLES


</div>




<h2 class="
mt-8
text-4xl
md:text-6xl
font-display
font-bold
text-gray-900
leading-tight
">


Todo lo que recibirás en

<br>


<span class="text-purple-600">

PROTOCOLO 10X®

</span>


</h2>




<p class="
mt-6
text-lg
text-gray-600
max-w-3xl
mx-auto
">


Cada recurso ha sido diseñado como una herramienta independiente de alta calidad.

Sin relleno.
Sin información innecesaria.

Solo herramientas prácticas listas para aplicar.


</p>


</div>







<!-- PRECIO -->

<div
data-aos="zoom-in"

class="
mt-16
relative
bg-gradient-to-br
from-purple-700
to-purple-900

rounded-[3rem]

p-8
md:p-14

text-white

overflow-hidden
">


<div class="
absolute
top-0
right-0
w-72
h-72
bg-white
opacity-10
rounded-full
blur-3xl
">
</div>




<div class="
relative
z-10
text-center
">


<p class="
uppercase
tracking-[0.3em]
text-purple-200
text-sm
font-semibold
">

Valor total acumulado del protocolo

</p>




<div class="
mt-4
text-6xl
md:text-8xl
font-bold
">

$1,411

</div>



<p class="
mt-3
text-purple-100
text-lg
">

Valor individual de todos los productos incluidos

</p>





<div class="
mt-10
bg-white
text-gray-900
rounded-[2rem]
p-8
max-w-lg
mx-auto
shadow-2xl
">


<p class="
text-gray-500
font-medium
">

Acceso completo hoy por una tarifa única de lanzamiento

</p>



<div class="
text-purple-700
font-bold
text-6xl
mt-4
">

$49.95

<span class="text-2xl">
USD
</span>


</div>




<p class="
mt-3
text-sm
text-gray-500
">

Todos los productos + bonos incluidos

</p>




<a
href="#registro"

class="
block
mt-8

bg-purple-600
hover:bg-purple-700

text-white

py-5

rounded-full

font-bold

transition

shadow-lg
">


Obtener el Pack Completo por $49.95


</a>



</div>



</div>



</div>









<!-- BIBLIOTECA -->

<div
data-aos="fade-up"

class="
mt-24
">


<div class="
text-center
mb-12
">


<h3 class="
text-4xl
font-display
font-bold
text-gray-900
">

Biblioteca PROTOCOLO 10X®

</h3>



<p class="
mt-4
text-gray-600
">

Más de 31 recursos organizados por áreas de transformación.

</p>



</div>






<div class="
grid
md:grid-cols-2
lg:grid-cols-3
gap-6
">





<?php

$categorias = [

[

"icon"=>"play-circle",

"titulo"=>"Video Módulos",

"valor"=>"Valor: $197.00",

"cantidad"=>"10 clases en Video HD",

"desc"=>"Lecciones ejecutivas diseñadas para aplicar paso a paso durante el proceso 10X."

],



[

"icon"=>"book-open",

"titulo"=>"Manuales & Agendas",

"valor"=>"Valor: $47.00+",

"cantidad"=>"Planificadores digitales",

"desc"=>"Manuales de inicio, agendas interactivas y herramientas de organización."

],



[

"icon"=>"calculator",

"titulo"=>"Calculadoras & Registros",

"valor"=>"Herramientas Interactivas",

"cantidad"=>"Control y seguimiento",

"desc"=>"Registros biométricos, hidratación, proteína y progreso personal."

],



[

"icon"=>"shopping-cart",

"titulo"=>"Guías de Campo",

"valor"=>"Valor Premium",

"cantidad"=>"Compras y decisiones inteligentes",

"desc"=>"Guías prácticas para supermercado, restaurantes y vida real."

],



[

"icon"=>"chef-hat",

"titulo"=>"Recetarios Funcionales",

"valor"=>"Colección 10X",

"cantidad"=>"Desayunos, comidas y bebidas",

"desc"=>"Recetas diseñadas para energía, saciedad y practicidad."

],



[

"icon"=>"lock",

"titulo"=>"Acceso Exclusivo",

"valor"=>"Comunidad Privada",

"cantidad"=>"Biblioteca + acompañamiento",

"desc"=>"Acceso a recursos exclusivos y comunidad PROTOCOLO 10X."

]


];



foreach($categorias as $cat):

?>




<div

class="
bg-gray-50
border
border-gray-100

rounded-3xl

p-8

hover:-translate-y-2

transition

duration-300

shadow-sm
"


data-aos="fade-up"

>



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
data-lucide="<?= $cat['icon']; ?>"
class="text-purple-600 w-7 h-7">
</i>


</div>




<h4 class="
text-xl
font-bold
text-gray-900
">

<?= $cat['titulo']; ?>

</h4>



<p class="
mt-2
text-purple-600
font-semibold
">

<?= $cat['valor']; ?>

</p>



<p class="
mt-3
font-medium
text-gray-800
">

<?= $cat['cantidad']; ?>

</p>



<p class="
mt-3
text-gray-600
leading-relaxed
">

<?= $cat['desc']; ?>

</p>



<button
class="
mt-6
text-purple-600
font-semibold
">


Ver recursos incluidos →

</button>



</div>



<?php endforeach; ?>



</div>


</div>

<!-- =====================================
     DETALLE DE RECURSOS INCLUIDOS
===================================== -->


<div
data-aos="fade-up"
class="
mt-24
"
>



<div class="
text-center
max-w-3xl
mx-auto
mb-12
">


<span class="
text-purple-600
font-bold
uppercase
tracking-widest
text-sm
">

Todos los productos incluidos

</span>



<h3 class="
mt-4
text-4xl
font-display
font-bold
text-gray-900
">

Tu sistema completo de transformación

</h3>


<p class="
mt-5
text-gray-600
">

Cada herramienta fue creada para acompañarte durante los 10 días y ayudarte a mantener los resultados.

</p>


</div>







<!-- RECURSOS -->


<div class="
space-y-6
">





<!-- VIDEO -->

<div
class="
bg-white
border
border-gray-100
rounded-3xl
p-8
shadow-sm
">


<div class="
flex
items-start
gap-5
">


<div class="
w-12
h-12
rounded-2xl
bg-purple-100
flex
items-center
justify-center
flex-shrink-0
">


<i data-lucide="video"
class="text-purple-600">
</i>


</div>



<div>

<h4 class="
text-xl
font-bold
text-gray-900
">

Video Módulos PROTOCOLO 10X®

</h4>


<p class="
mt-2
text-gray-600
">

10 clases en Video de Alta Definición

</p>


<p class="
mt-3
text-gray-600
">

Lecciones ejecutivas de 10-15 minutos diseñadas para la vida real.

Sin rodeos.
Con pasos accionables día por día.

</p>


<div class="
mt-4
inline-flex
bg-purple-50
text-purple-700
px-4
py-2
rounded-full
text-sm
font-semibold
">

Valor: $197.00 USD

</div>


</div>


</div>

</div>







<!-- MANUALES -->

<div
class="
bg-white
border
border-gray-100
rounded-3xl
p-8
shadow-sm
">


<div class="
flex
items-start
gap-5
">


<div class="
w-12
h-12
rounded-2xl
bg-purple-100
flex
items-center
justify-center
flex-shrink-0
">


<i data-lucide="book-open"
class="text-purple-600">
</i>


</div>




<div>

<h4 class="
text-xl
font-bold
">

Manuales & Agendas Digitales

</h4>



<ul class="
mt-4
space-y-3
text-gray-600
">


<li>
✓ Manual Digital de Inicio Rápido 10X®
</li>


<li>
✓ Agenda Digital Interactiva de Hábitos
</li>


<li>
✓ Planificador Semanal de Comidas
</li>


<li>
✓ Planificador Mensual de Mantenimiento
</li>


<li>
✓ Calendario de Hábitos y Ritmos Circadianos
</li>


</ul>


</div>


</div>

</div>








<!-- CALCULADORAS -->

<div
class="
bg-white
border
border-gray-100
rounded-3xl
p-8
shadow-sm
">


<div class="
flex
items-start
gap-5
">


<div class="
w-12
h-12
rounded-2xl
bg-purple-100
flex
items-center
justify-center
">


<i data-lucide="calculator"
class="text-purple-600">
</i>


</div>



<div>


<h4 class="
text-xl
font-bold
">

Calculadoras & Registros Inteligentes

</h4>



<ul class="
mt-4
space-y-3
text-gray-600
">


<li>
✓ Calculadora de Hidratación y Electrolitos
</li>


<li>
✓ Calculadora de Proteína Funcional y Saciedad
</li>


<li>
✓ Registro de Progreso Biométrico
</li>


<li>
✓ Sistema de Control de Peso y Medidas
</li>


<li>
✓ Registro Fotográfico Privado
</li>


</ul>



</div>


</div>


</div>









<!-- GUIAS -->

<div
class="
bg-white
border
border-gray-100
rounded-3xl
p-8
shadow-sm
">


<div class="
flex
items-start
gap-5
">


<div class="
w-12
h-12
rounded-2xl
bg-purple-100
flex
items-center
justify-center
">


<i data-lucide="map"
class="text-purple-600">
</i>


</div>




<div>


<h4 class="
text-xl
font-bold
">

Guías de Campo 10X®

</h4>


<ul class="
mt-4
space-y-3
text-gray-600
">


<li>
✓ Lista Inteligente del Supermercado Biohacking
</li>


<li>
✓ Guía para Leer Etiquetas Nutricionales
</li>


<li>
✓ Guía de Supervivencia para Comer en Restaurantes
</li>


<li>
✓ Guía Meal Prep Inteligente 60 minutos
</li>


<li>
✓ Organización y Limpieza de Cocina
</li>


<li>
✓ Control de Antojos y Deseos Dulces
</li>


<li>
✓ Hambre Emocional vs Hambre Biológica
</li>


<li>
✓ Matriz de Sustituciones Saludables
</li>


<li>
✓ Snacks Funcionales
</li>


<li>
✓ Bebidas Funcionales y Cafés Biohacking
</li>


</ul>



</div>


</div>


</div>









<!-- RECETARIOS -->


<div
class="
bg-white
border
border-gray-100
rounded-3xl
p-8
shadow-sm
">


<div class="
flex
items-start
gap-5
">


<div class="
w-12
h-12
rounded-2xl
bg-purple-100
flex
items-center
justify-center
">


<i data-lucide="utensils"
class="text-purple-600">
</i>


</div>



<div>


<h4 class="
text-xl
font-bold
">

Recetarios Funcionales 10X®

</h4>


<ul class="
mt-4
space-y-3
text-gray-600
">


<li>
✓ Desayunos de Alto Rendimiento
</li>


<li>
✓ Almuerzos Energéticos
</li>


<li>
✓ Cenas Reparadoras
</li>


<li>
✓ Postres Saludables sin Azúcar
</li>


<li>
✓ Smoothies Proteicos y Verdes
</li>


<li>
✓ Bebidas Hidratantes y Elixires Digestivos
</li>


</ul>


</div>


</div>


</div>







<!-- ACCESO -->

<div
class="
bg-white
border
border-gray-100
rounded-3xl
p-8
shadow-sm
">


<div class="
flex
items-start
gap-5
">


<div class="
w-12
h-12
rounded-2xl
bg-purple-100
flex
items-center
justify-center
">


<i data-lucide="shield-check"
class="text-purple-600">
</i>


</div>



<div>


<h4 class="
text-xl
font-bold
">

Acceso Exclusivo PROTOCOLO 10X®

</h4>



<ul class="
mt-4
space-y-3
text-gray-600
">


<li>
✓ Biblioteca Digital Centralizada
</li>


<li>
✓ Comunidad Privada de Alumnos
</li>


<li>
✓ Sesiones Grupales en Vivo
</li>


<li>
✓ Certificado Digital de Finalización
</li>


</ul>


</div>


</div>


</div>



</div>


</div>