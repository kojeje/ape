<?php

/**
 * Template name : actu
 */
get_header(); ?>

<?php do_action('accelerate_before_body_content'); ?>
<div id="primary">
    <h1>Les représentants des parents au conseil d'école</h1>
    <!-- <h3>Les questions fréquemment posées au conseil décole, ainsi que les réponses...</h2> -->
    <div class="row">
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-ecoles/lecole-maternelle/">
            <div class="square-link">Maternelle</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-ecoles/lecole-elementaire/">
            <div class="square-link">Elementaire</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-ecoles/lecole-elementaire/lulis/">
            <div class="square-link">ULIS</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-ecoles/la-cantine-scolaire/">
            <div class="square-link">La cantine</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-ecoles/laccueil-periscolaire/">
            <div class="square-link">Le périscolaire</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
    </div>
</div><!-- #primary -->




<?php accelerate_sidebar_select(); ?>

<?php do_action('accelerate_after_body_content'); ?>

<?php get_footer(); ?>