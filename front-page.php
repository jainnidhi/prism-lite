<?php
/**
 * 
 * Description: Displays a full-width front page. The front page template provides an optional
 * featured section that allows for highlighting a key message. It can contain up to 2 widget areas,
 * in one or two columns. These widget areas are dynamic so if only one widget is used, it will be
 * displayed in one column. If two are used, then they will be displayed over 2 columns.
 * There are also four front page only widgets displayed just beneath the two featrued widgets. Like the
 * featured widgets, they will be displayed in anywhere from one to four columns, depending on
 * how many widgets are active.
 * 
 * The front page template also displays EDD featured products and featured posts 
 * depending on the settings from Theme Customizer 
 *
 * @package Prism
 * @since Prism 1.0
 */
get_header();
?>


<div class="slider-wrapper">
    <div class="flexslider"  id="main-slider">
        <ul class="slides">
            <?php 
            // check if the slider is blank.
            // if there are no slides by user then load default slides. 
            
            if ( get_theme_mod('slider_one') =='' ) {  ?>
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" alt=""/>
                <div class="flex-caption">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Showcase Your Restaurant Services', 'prism') ?></a></h2>
                          <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'prism') ?> </p>
                 </div>
                </li>
                
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" alt=""/>
                <div class="flex-caption">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Showcase Your Restaurant Services', 'prism') ?></a></h2>
                          <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'prism') ?> </p>
                 </div>
                </li>
               
            <?php } ?>
                
          <?php 
          // if user adds a cusotm slide then display the slides 
          // load first slide
          if ( get_theme_mod('slider_one') !='' ) {  ?>
                    <li id="slider1" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_one_url') !='' ) { echo esc_url(get_theme_mod('slider_one_url')); } ?>" src="<?php echo get_theme_mod('slider_one'); ?>" alt=""/>
                        <div class="flex-caption">
                             <?php if ( get_theme_mod('slider_title_one') !='' ) {  ?>

                            <h2 class="slider-title"><a href="<?php if ( get_theme_mod('slider_one_url') !='' ) { echo esc_url(get_theme_mod('slider_one_url')); } ?>"><?php echo esc_html(get_theme_mod('slider_title_one')); ?></a></h2>
                                  <?php } ?>
                                    <?php if ( get_theme_mod('slider_one_description') !='' ) {  ?>
                                     <p><?php echo esc_html(get_theme_mod('slider_one_description')); ?></p>
                                   <?php } ?>
                         </div>
                    </li>
                    
                     <?php 
                     // load second slide
                     if ( get_theme_mod('slider_two') !='' ) {  ?>
                    <li id="slider2" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_two_url') !='' ) { echo esc_url(get_theme_mod('slider_two_url')); } ?>" src="<?php echo get_theme_mod('slider_two'); ?>" alt=""/>
                        <?php } ?>
                        <div class="flex-caption">
                             <?php if ( get_theme_mod('slider_title_two') !='' ) {  ?>

                            <h2 class="slider-title"><a href="<?php if ( get_theme_mod('slider_two_url') !='' ) { echo esc_url(get_theme_mod('slider_two_url')); } ?>"><?php echo esc_html(get_theme_mod('slider_title_two')); ?></a></h2>
                              <?php } ?>

                                <?php if ( get_theme_mod('slider_two_description') !='' ) {  ?>
                                <p><?php echo esc_html(get_theme_mod('slider_two_description')); ?></p>
                             
                         </div>
                    </li>
                     <?php } ?>
               
           <?php } ?>
        </ul>
    </div>
</div>

     <!-- Start business-tagline area -->
        <div class="business-tagline-area">
            <div class="business-tagline">
                <?php if ( get_theme_mod('tagline_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('tagline_title')); ?></h3>

                  <?php } else {  ?> <h3><?php esc_html_e('Build Restaurant Website With Prism Multipurpose Theme', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('tagline_description') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('tagline_description')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Creating your Restaurant & Food based website with Prism is completely easy.
                              You just need to perform few tweaks in the theme option panel and your website will be ready to use.
                              Showcase all important features of your website on homepage.', 'prism') ?> </p>
                                           <?php } ?>
            </div>
        </div><!-- end business tagline area -->
        <!-- Start home featured area -->
        
        <div class="home-featured-title-area" id="featured-title">
            <div class="home-featured-title">
                 <?php if ( get_theme_mod('home_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Theme Features', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
        <div class="home-featured-area">
            <div class="home-featured">
                <div class="home-featured-one grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_one') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_one'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_one') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_one')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Products', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_one') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_one')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Showcase your best quality products on home page to grab visitor&rsquo;s attention.', 'prism') ?> </p>
                                           <?php } ?>
                          
                      <a class="read-more" href="<?php if ( get_theme_mod('home_one_link_url') !='' ) { echo esc_url(get_theme_mod('home_one_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_one_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_one_link_text')); ?>

                  <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>

                <div class="home-featured-two grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_two') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_two'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_two') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_two')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Services', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_two') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_two')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Show your multiple services that will explore your website among the audience.', 'prism') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_two_link_url') !='' ) { echo esc_url(get_theme_mod('home_two_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_two_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_two_link_text')); ?>

                  <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>


                <div class="home-featured-three grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_three') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_three'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_three') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_three')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Clients', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_three') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_three')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Show testimonials of your clients that will build the trust among the audience.', 'prism') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_three_link_url') !='' ) { echo esc_url(get_theme_mod('home_three_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_three_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_three_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>
                
                <div class="home-featured-four grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_four') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_four'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_four') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_four')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Services', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_four') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_four')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Show testimonials of your clients that will build the trust among the audience.', 'prism') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_four_link_url') !='' ) { echo esc_url(get_theme_mod('home_four_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_four_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_four_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>
            </div>
        </div><!-- end home featured area -->
        
        <?php  // Display featured posts on front page
            get_template_part('content', 'frontposts'); ?>
       
        
        <div class="home-cta-area">
                <div class="home-cta">
                    <div class="cta-wrapper">
                    <div class="home-cta-one grid_8_of_12 col">
                        <?php if ( get_theme_mod('cta_text') !='' ) {  ?>
                        <p><?php echo esc_html(get_theme_mod('cta_text')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('We have really amazing products that you would be amazed to see.', 'prism') ?> </p>
                                           <?php } ?>
                    </div>
                    <div class="home-cta-two grid_4_of_12 col">
                        <a class="cta-button" href="<?php if ( get_theme_mod('home_cta_link_url') !='' ) { echo esc_url(get_theme_mod('home_cta_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_cta_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_cta_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                    </div>
                  </div>
                </div>
            </div>
        
        <div class="client-feedback-area" id="feedback-title">
            <div class="client-feedback-title">
                 <?php if ( get_theme_mod('feedback_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('feedback_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Clients Feedback', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
        <!-- Home testimonial slider starts here --> 
        <div class="testimonial-slider">
            <div class="flexslider" id="reviewslider">
                <ul class="slides">
                    <li id="tslider1">  <?php if ( get_theme_mod('tslider_one') !='' ) {  ?>
                        <img  src="<?php echo get_theme_mod('tslider_one'); ?>" alt=""/>
                        <?php }  else {  ?>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" alt=""/>
                        <?php } ?>
        
                        <div class="flex-caption">
                             <?php if ( get_theme_mod('tslider_one_description') !='' ) {  ?>
                                <?php echo esc_html(get_theme_mod('tslider_one_description')); ?>
                                <?php } else { ?>
                               <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'prism') ?> </p>
                                 <?php } ?>
                         </div>
                    </li>
                    
                    <li id="tslider2">  <?php if ( get_theme_mod('tslider_two') !='' ) {  ?>
                        <img  src="<?php echo get_theme_mod('tslider_two'); ?>" alt=""/>
                        <?php }  else {  ?>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" alt=""/>
                        <?php } ?>
        
                        <div class="flex-caption">
                             <?php if ( get_theme_mod('tslider_two_description') !='' ) {  ?>
                                <?php echo esc_html(get_theme_mod('tslider_two_description')); ?>
                                <?php } else { ?>
                               <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'prism') ?> </p>
                                 <?php } ?>
                         </div>
                    </li>
                    
               </ul>
            </div>
        </div>

       
        <div class="home-contact-area" id="contact-title">
            <div class="home-contact-title">
                 <?php if ( get_theme_mod('home_contact_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_contact_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Contact', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
        
        <!-- Start home Video area -->
        <div class="contact-detail-area">
            <div class="contact-detail-wrap">
                <div class="home-contact-form grid_6_of_12 col">
                     <?php if ( get_theme_mod('contact_form_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('contact_form_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Contact', 'prism') ?></h3>
                           <?php } ?>
                   <?php if ( get_theme_mod('prism_contact_form') !='' ) {  ?> 
                    <?php echo do_shortcode(get_theme_mod('prism_contact_form')); ?>
                   <?php } else { ?>
                   <?php 
                   echo esc_html_e('You can add a contact form here using your favorite plugin. Simply add the shortcode for the form from Theme Customizer and it will be displayed here.', 'prism'); ?> 
                     <?php } ?>
                </div>
                  

                <div class="home-video-two grid_6_of_12 col">
                    <div class="contact-details">
                         <?php if ( get_theme_mod('contact_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('contact_title')); ?></h3>

                            <?php } else {  ?> <h3><?php esc_html_e('Contact', 'prism') ?></h3>
                                     <?php } ?>

                            <?php if ( get_theme_mod('address_detail') !='' ) {  ?>
                            <p id="address"><i class="fa fa-location-arrow"></i><?php echo esc_html(get_theme_mod('address_detail')); ?></p>
                                     <?php } else { ?>
                                    <p id="address"><i class="fa fa-location-arrow"></i><?php esc_html_e('205, Gitanjali Mansion,
                                                          Above ICICI Bank, Sector 11
                                                          Udaipur, Rajasthan, India.', 'prism') ?> </p>
                                            <?php } ?>

                               <?php if ( get_theme_mod('contact_email') !='' ) {  ?><p id="email"><i class="fa fa-envelope"></i><?php echo esc_html(get_theme_mod('contact_email')); ?>

                            <?php } else {  ?> <p id="email"><i class="fa fa-envelope"></i> <?php esc_html_e('hello@ideaboxcreations.com', 'prism') ?></p>
                                     <?php } ?>

                            <?php if ( get_theme_mod('contact_phone') !='' ) {  ?><p id="phone"><i class="fa fa-phone"></i><?php echo esc_html(get_theme_mod('contact_phone')); ?>

                            <?php } else {  ?> <p id="phone"><i class="fa fa-phone"></i> <?php esc_html_e('0294-678456', 'prism') ?></p>
                                     <?php } ?>
                          
                    </div>
                    
                    <div class="contact-map">
                        
                        <?php if ( get_theme_mod('contact_map') !='' ) {  ?> 
                            <?php echo esc_html(get_theme_mod('contact_map')); ?>
                               <?php } else { ?>
                                <?php echo '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=golf+club+near+West+Valley+Freeway,+San+Jose,+CA,+United+States&amp;aq=1&amp;oq=goSilicon+Valley+Boulevard,+San+Jose,+CA,+United+States&amp;sll=37.293271,-121.833927&amp;sspn=0.184362,0.41851&amp;ie=UTF8&amp;hq=golf+club&amp;hnear=W+Valley+Fwy,+San+Jose,+Santa+Clara,+California,+United+States&amp;t=m&amp;fll=37.254551,-121.968627&amp;fspn=0.025995,0.059953&amp;st=103241701817924407489&amp;rq=1&amp;ev=zo&amp;split=1&amp;ll=37.293174,-121.833916&amp;spn=0.023057,0.052314&amp;output=embed"></iframe>' ?>
                                 <?php } ?>
                       
                    </div>
                </div>
            </div>
         </div><!-- end home video area -->
    
         <span class="top"><a class="back-to-top"><i class="fa fa-arrow-up"></i></a></span>
            
  
<?php
get_footer();
?>