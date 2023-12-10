<?php
/*
    Template Name: ফটোগ্যালারি
*/

get_header();?>

    <!--start wrap-->
    <div class="wrap">
       
   <?php get_template_part('include/breadcrumb');?>
       
       
        <!--start template_photogellary-->
       <div class="template_photogellary">
           
            <!--start template_photogellary_box-->
           <div class="template_photogellary_box">
           
               

            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'         => 'photogellary', 
                    'posts_per_page'    =>  '20',        
                    'order'             => 'DESC',
                    'paged'             => $paged
                );

                query_posts($args); 
            ?>
            
           

            <?php 
                    $i=0;
                    while(have_posts()):the_post();?>      
                    <!--start per_photo-->
                    <div class="per_photo">
                       <!--start template_photogellary_image-->
                       <div class="template_photogellary_image">
                          
                          <?php $category_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');?>
                          
                          <a href="<?php echo $category_image[0]?>" 
                               data-lightbox="roadtrip" 
                               data-title="<?php the_title();?> ">
                               <?php the_post_thumbnail('photo_template_image_size');?>
                        </a>
                       </div><!--//close template_photogellary_image-->
                      
                      <!--start template_photogellary_title-->
                       <div class="template_photogellary_title">
                           <h2>
                               <a href=""> <?php the_title();?> </a>
                           </h2>
                       </div><!--//close template_photogellary_title-->     
    
                    </div><!--//close per_photo-->
                    
            <?php 
                $i++;
                if($i % 4 == 0)
                {
                 echo "</div>";  
                echo '<div class="template_photogellary_box">';
                }
                endwhile; 
               ?>    
            
            </div><!--//colse template_photogellary_box-->
           
        <?php get_template_part('include/pagination');?>
           
       </div><!--//close template_photogellary-->
    </div>
    <!--.end wrap-->
<?php get_footer();?>