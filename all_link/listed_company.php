<?php
    $page_post_type = 'website_link'; //changeable
?>
   
<?php
    $bengali_newspapers = new WP_Query(array(
        'post_type'         => $page_post_type,
        'posts_per_page'    => -1,
        'orderby'			=> 'title',
				'order'				=> 'ASC',
      		'tax_query' => array(
            array(
            'taxonomy' => 'institutionLink',
            'field' => 'term_id',
            'terms' => 2424
             )
          )
      		
    ));
?>
   
   
<div class="fix lead_news">
   
    <div class="fix category">
        <h2> 
            <a href="<?php echo site_url();?>/bengali-newspapers" target="_blank">  <!-- changeable -->
                বাংলাদেশের সকল লিস্টেট কোম্পানীর ওয়েবসাইট লিংক 
            </a> 
        </h2>      
    </div>
   
    <div class="fix lead_news_top_n">
       
        <div class="logo_box"> 
            <div class="minus_logo_box"> 
            <?php while($bengali_newspapers->have_posts()):$bengali_newspapers->the_post();?>  

                <?php get_template_part('all_link/media_icon_link');?>

            <?php endwhile; ?>    
            </div>
        </div>
        
    </div>
    
    <div class="fix media_icon_details">
        <div class="media_icon_right">
            <p> 
                <a href="<?php echo site_url();?>/bengali-newspapers" target="_blank"> <!-- changeable -->
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        See More
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>    
            </p>
        </div>
    </div>
</div>