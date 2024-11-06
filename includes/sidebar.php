<div class="col-span-12 md:col-span-3">
    <style>
        .search input[type="text"] {
            width: 100%;
            margin-bottom: 5px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000;
        }

        .search input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0D2229;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .twt a{
            background: #e7e7e7;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-right: 10px;
        }
    </style>
    <div class="search">
        <?php get_search_form(); ?>
    </div>
    <h3 class="text-xl font-semibold text-center pt-5">Recent Blogs</h3>
    <ul class="pl-3">
        <?php    
            $args =array(
                'type'              => 'posts',
                'posts_per_page'    => 10,
            );
            $lastblog = new WP_QUERY($args);
            if ($lastblog->have_posts()) {
            while ($lastblog->have_posts()) {
                $lastblog->the_post();
                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        ?>
            <li class="list-disc"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
        <?php } }  wp_reset_postdata(); ?>
    </ul>
    <h3 class="text-xl font-semibold text-center pt-5">Category List</h3>
    <ul class="pl-3">
        <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) ); 
            foreach( $categories as $category ) {
                $category_link = sprintf(
                    '<a href="%1$s" alt="%2$s">%3$s</a>',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                    esc_html( $category->name )
                );
                echo '<li class="list-disc">' . sprintf( esc_html__( ' %s', 'textdomain' ), $category_link ) . ' </li> ';
            }
        ?>
    </ul>
    <h3 class="text-xl font-semibold text-center py-5">Tag List</h3>
    <div class="twt">
        <?php wp_tag_cloud( array(
        'smallest' => 12, // size of least used tag
        'largest'  => 30, // size of most used tag
        'unit'     => 'px', // unit for sizing the tags
        'number'   => 45, // displays at most 45 tags
        'orderby'  => 'name', // order tags alphabetically
        'order'    => 'ASC', // order tags by ascending order
        'taxonomy' => 'post_tag' // you can even make tags for custom taxonomies
        ) ); ?>
    </div>
</div>