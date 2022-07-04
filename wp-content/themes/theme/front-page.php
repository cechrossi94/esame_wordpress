
  <?php get_header();?>
  
  <!-- Intro -->
  <div class="intro">
  <div class="intro-body">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <h1 class="brand-heading">THIS IS ARIES</h1>
                  <p class="intro-text">
                      Free Template by WowThemes.net
                  </p>
                  <a href="#pageid" class="btn btn-circle page-scroll">
                  <i class="fa fa-angle-double-down animated"></i>
                  </a>
              </div>
          </div>
      </div>
  </div>
  </div>
        
  <!-- About -->
  <section id="pageid">
  <div class="container content-section text-center">
      <div class="row justify-content-center">		
          <div class="col-md-8">
              <h2 class="d-block">LIL' ABOUT ME</h2>
              <p>
                  Praesent ac dignissim diam. Aliquam lobortis elit et sapien eleifend, at sollicitudin metus elementum. Morbi imperdiet id ipsum at tristique. Nam suscipit tristique sem, <a href="#">quis</a> laoreet leo. Maecenas eget ante ipsum.
              </p>
              <p>
                  <a href="#" class="btnghost"><i class="fa fa-download"></i> Curriculum Vitae</a>
              </p>
          </div>
      </div>
  </div>
  </section>
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
        <div class="row gap-y">
		<div class="col-md col-lg">
			<div class="card">
                <?php if (has_post_thumbnail() ) {
                    the_post_thumbnail( 'post-thumbnail-home, img-card-top' );
                } else {
                    ?><img class="img-card-top" src="https://images.unsplash.com/photo-1430263431647-7bed9f792e72?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2f8e40576370da12b7f4c8c97f4a5044&auto=format&fit=crop&w=750&q=80" alt="">
                    <?php
                }
                ?>
                <header class="blog-entry__header">
                <div class="blog-entry__header__category, text-dark">
                        <a href=""><?php the_category(); ?></a>
                </div>
            </div>
                <a class="blog-entry__header__link, text-dark" href=" <?php the_permalink(); ?>">
					<?php the_title('<h5 class="blog-entry__header__title, card-title, text-dark">', '</h5>'); ?>
                </a>
    
                </header>
        </article>    
<?php
				
            } // End loop.
        } // End if.
?>        
    


  <!-- Contact -->
  <section id="contact">
  <div class="container content-section text-center">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <h2>Author's Message</h2>
              <p>
                   If you like "Aries" template, we'd love to hear from you, whether it be feedback, thanks, new template ideas or even just to say hello, we welcome it all!
              </p>
              <p>
                  <i><a href="mailto:wowthemesnet@gmail.com" class="highlightlink">wowthemesnet@gmail.com</a></i>
              </p>
              <ul class="list-inline banner-social-buttons">
                  
                  <li class="d-inline">
                  <a href="https://twitter.com/wowthemesnet" class="btn btnghost btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                  </li>
                  
                  <li class="d-inline">
                  <a href="https://www.facebook.com/pages/wowthemesnet/562560840468823" class="btn btnghost btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                  </li>
                  
                  <li class="d-inline">
                  <a href="https://github.com/wowthemesnet/template-aries-bootstrap-html" class="btn btnghost btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                  </li>
                  
              </ul>
          </div>
      </div>
  </div>
  </section>

  <?php get_footer();?>