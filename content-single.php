<div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_date(); ?> <a href="#"><?php the_author(); ?></a></p>
                
              <?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
} ?>  
               <p> <?php the_content(); ?></p>



<!-- 
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav> -->

</div><!-- /.blog-post-->