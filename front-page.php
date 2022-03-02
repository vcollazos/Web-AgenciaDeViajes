<?php
/*
    Template Name: Index
*/

get_header(); ?>

</div>

<section class="slider">
    <?php get_template_part('partes/index','slider'); ?>   
</section>


<div class="wrapper">   
    <?php get_template_part('searchform'); ?>     

    <section class="tours clear">
        <?php get_template_part('partes/index','tours'); ?>
    </section>

    <!-- SECCIÓN CONSEJOS Y TESTIMONIALES -->
    <section class="consejos-testimoniales clear">
        <?php get_template_part('partes/index','consejos'); ?>

        <?php get_template_part('partes/index','testimoniales'); ?>       

    </section>

</div>


<?php get_footer(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oxygen&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">