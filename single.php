 <?php get_header(); ?>
 <div class="row">

        <div class="col-sm-12 blog-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('content-single', get_post_format()) ; ?>

<?php endwhile; endif; ?>
        </div><!-- /.blog-main -->
</div><!-- /.row -->

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
