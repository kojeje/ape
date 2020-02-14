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
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-representants-elus/actualite/">
            <div class="square-link">ACTUALITÉ</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-representants-elus/trombinoscope/">
            <div class="square-link">TROMBINOSCOPE</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-representants-elus/notre-role/">
            <div class="square-link">NOTRE RÔLE</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-representants-elus/le-conseil-decole/">
            <div class="square-link">LE CONSEIL D'ÉCOLE</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
        <div class="offset-md-1 d-none d-md-block"></div>
        <a class="col-12 col-md-4" href="http://kojeje.fr/ape/les-representants-elus/faq/">
            <div class="square-link">FAQs</div>
        </a>
        <div class="offset-md-1 d-none d-md-block"></div>
    </div>
</div><!-- #primary -->




<?php accelerate_sidebar_select(); ?>

<?php do_action('accelerate_after_body_content'); ?>

<?php get_footer(); ?>