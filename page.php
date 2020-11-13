<?php get_header(); ?>

<section>

	<h1><?php bloginfo('name');?></h1>

	<h1> Mais nous voilà sur une sorte de page article ! bonne lecture eh </h1>

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
		Désolé, pas d'article après ça ! Ou du moins, plus de contenu
	</p>
<?php endif;?>

</section>


<?php get_footer(); ?>
