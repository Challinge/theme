<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>

</head>

<body>

<nav id="menu">

    <?php wp_nav_menu(
        array(
            'theme_location' => 'main',
            'container' => ''
        )
    ); ?>

</nav>

    <div id="content">

        <div id="loading">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/loading.gif">
        </div>

        <div id="contenu">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>

                <h2><?php the_title(); ?></h2>

                <p><?php the_content(); ?></p>

            <?php endwhile; endif; ?>
        </div>

    </div>

<footer>
    @Challinge
</footer>

<?php wp_footer(); ?>

</body>
</html>