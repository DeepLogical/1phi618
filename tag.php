<?php get_header(); ?> 
<div class="container py-12">
	<?php the_archive_title( '<h1 class="text-xl md:text-2xl font-semibold text-center mb-5">Blogs of ', '</h1>' ); ?>
	<div class="flex items-center row">
		<?php
			$tag = get_queried_object();
			$args =array(
                'type'              => 'posts',
                'posts_per_page'    => -1,
				'tag'               => $tag->slug
            );
            $lastblog = new WP_QUERY($args);
            if ($lastblog->have_posts()) {
            while ($lastblog->have_posts()) {
            $lastblog->the_post();
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
			include('includes/singleblogitem.php');
		} } wp_reset_postdata();
		?>
	</div>
</div>
<?php get_footer(); ?>