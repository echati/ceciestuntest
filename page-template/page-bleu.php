<?php

/**
 * Template Name: Bleue
 * Description : Page bleue
 */


      get_header(); ?>

<section style="background-color:yellow;" >

	<h1><?php bloginfo('name');?></h1>

	<h1>Bonjour l'index principal </h1>

	<!-- The Loop -->
	<?php  if(have_posts()) :
		while(have_posts()) :
			   the_post() ;?>

	<article>
		<h2>
			<?php the_title();?>
		</h2>
		<div>
			<?php the_content();?>
		</div>
	</article>

<?php endwhile; else :?>
	<p>
		Désolé, pas d'article !
	</p>
<?php endif;?>

</section>


<?php get_footer(); ?>
