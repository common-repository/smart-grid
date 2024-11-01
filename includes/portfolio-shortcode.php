<?php

 //shortcode
  function smart_grid_portfolio_shortcode($atts, $content = null){
    ob_start();
   ?>
      <!--Start latest project area-->
    <section class="latest-project-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="sec-title style-two text-center">
                        <span class="border"></span>
                        <h2 style="color: <?php echo esc_html( smart_grid_option('P_grid', 'h_color')); ?>"><?php echo esc_html( smart_grid_option('P_grid', 'header1')); ?></h2>
                        <p style="color: <?php echo esc_html( smart_grid_option('P_grid', 'h_color')); ?>"><?php echo esc_html( smart_grid_option('P_grid', 'header2') ); ?></p>
                    </div>
                    <ul class="project-filter post-filter text-center">
                        <li class="active" data-filter=".filter-item"> <span><?php esc_html_e( 'All Work','smart-grid' ); ?></span></li>
                        <?php
                            $taxonomy = 'portfolio_category';
                            $terms = get_terms( $taxonomy ); // Get all terms of a taxonomy
                               if( $terms && !is_wp_error( $terms ) ) :
                                    foreach ( $terms as $term ) { ?>
                                  <li data-filter=".<?php echo strtolower(preg_replace('/[^a-zA-Z]+/', '-', $term->name)); ?>"><span><?php echo esc_html( $term->name ); ?></span></li>
                                  <?php } 
                              endif;
                          ?>
                    </ul>
                </div>
            </div>
            <div class="row project-content masonary-layout filter-layout">
              <?php  
                  $smart_grid_post = new WP_Query(array(  
                  'post_type' =>  'portfolio',  
                  'posts_per_page'  => smart_grid_option('P_grid', 'ppr')
                  )  );  
                  if( $smart_grid_post->have_posts() ) :
                  while( $smart_grid_post->have_posts()) : $smart_grid_post->the_post();
                  // Link
                  $preview = get_post_meta( get_the_id(),'smart_grid_prv-url',true ); 
                  $download = get_post_meta( get_the_id(),'smart_grid_dwn-url',true ); 

                  $terms = get_the_terms( get_the_ID(), 'portfolio_category' );
               ?>
                <!--Start single project-->
                <div class="col-md-4 col-sm-6 col-xs-12 filter-item <?php foreach ($terms as $term) { echo strtolower(preg_replace('/[^a-zA-Z]+/', '-', $term->name)). ' '; } ?>">
                    <div class="item">
                        <?php
                            the_post_thumbnail( 'smart-grid-post', array(
                             'alt' => the_title_attribute( array(
                               'echo' => false,
                               ) ),
                               ) );
                        ?>
                        <div class="grid-overlay">
                            <a class="preview" href="<?php echo esc_url( $preview ); ?>"><i class="fa fa-link"></i></a>
                            <a class="download" href="<?php echo esc_url( $download ); ?>"><i class="fa fa-download"></i></a>
                            <a href="<?php the_permalink( ); ?>" class="title-overly"><h5 style="color: <?php echo esc_html( smart_grid_option('P_grid', 't_color')); ?>;background: <?php echo esc_html( smart_grid_option('P_grid', 'tb_color')); ?>"><?php the_title(); ?></h5></a>
                        </div>                    
                    </div>
                </div>
                <!--End single project-->
                <?php endwhile; wp_reset_postdata();endif; ?>
            </div> 
        </div>
    </section>
    <!--End latest project area-->  
  <?php return ob_get_clean();
   }
add_shortcode( 'smart_grid_portfolio', 'smart_grid_portfolio_shortcode');
