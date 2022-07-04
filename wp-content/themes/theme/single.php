<!-- inject:partials/header.html -->
<!DOCTYPE html>
<html lang="en">

<?php get_header();?>
<!-- Intro -->
<div class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php the_title('<h1 class="blog-entry__header__title, brand-heading">', '</h1>'); ?>

				<h2 class="blog_item_date">	
                    22/08/2021
                </h2>

				<a href="#pageid" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Section -->
<section id="pageid">
<div class="container content-section">
	<div class="row">
		<div class="col-md-8">
            <?php the_title('<h1 class="blog-entry__header__title, brand-heading">', '</h1>'); ?>
            
            <?php if (has_post_thumbnail() ) {
                    the_post_thumbnail( 'post-thumbnail-home, img-card-top' );
                } else {
                    ?><img class="img-card-top" src="https://images.unsplash.com/photo-1430263431647-7bed9f792e72?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2f8e40576370da12b7f4c8c97f4a5044&auto=format&fit=crop&w=750&q=80" alt="">
                    <?php
                }
                ?>

            <div><?php the_excerpt(); ?></div>

            <div class="disqus">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
            var disqus_shortname = 'demowebsite'; 
            var disqus_developer = 0;
            (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = window.location.protocol + '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
            </div>
           
		</div>
        <div class="col-md-4">
            <div class="sidebar">
                
                <div class="widget">
                    <h6>Categorie</h6>
                    <ul class="list-unstyled text-small">
                    <?php
                        wp_nav_menu( array(
                            'container'       => 'li',
                            'container_class' => 'site-header__nav',
                            'theme_location'  => 'category-menu',
                        ) ); ?>
                    </ul>
                </div>
                
                
                
                
            </div>
        </div>
	</div>
</div>
</section>

<!-- inject:partials/footer.html -->
<footer>
<div class="container text-center">
    <p class="credits">
        Copyright &copy; Your Website 2018<br/>
        <a class="highlightlink" target="_blank" href="https://www.wowthemes.net">"Aries" Template by WowThemes.net</a>
    </p>
</div>
</footer>

<!-- build:js -->
<script src="assets/js/main.js"></script>
<!-- endbuild -->

<script src="assets/js/theme.js"></script>

</body>

</html>
<!-- endinject -->