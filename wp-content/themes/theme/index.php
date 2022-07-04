<?php
$args = array(
	'posts_per_page' => 5, // how many posts.
);

$featured_post = new WP_Query( $args );
if ( $featured_post->have_posts() ) { 
  while ( $featured_post->have_posts() ) {
		$featured_post->the_post();
		// Save Post ID.
		$featured_id = $post->ID;
		// Codice HTML per mostrare il Post.
		?>
        <article class="blog-entry content-block">
            <header class="blog-entry__header">
            <div class="blog-entry__header__category">
                    <a href=""><?php the_category(); ?></a>
                </div>
                <a class="blog-entry__header__link" href="<?php the_permalink(); ?>">
					<?php the_title( '<h1 class="blog-entry__header__title">', '</h1>' ); ?>
                </a>
                </header>
        </article>    
<?php
				
            } // End loop.
        } // End if.
?>

		

<ul class="post-list">
	<?php
	// Start loop.
	while ( have_posts() ) :
		the_post();
		if ( $post->ID !== $featured_id ) : ?>
               <li>
                  <div class="post-thumb">
				<?php the_post_thumbnail(); ?>
                   </div>

                   <div class="post-entry">
                   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php
					/**
					 * Will only output the date if the current post’s date is different from the previous one output.
					 * @see https://developer.wordpress.org/reference/functions/the_date/
					 */
					the_date( 'F, j, Y', '<time>', '</time>' );
					?>
                     </div>
                  </li>
                  <?php endwhile; ?>
</ul>