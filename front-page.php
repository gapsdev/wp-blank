<?php get_header(); ?>

    <div class="header-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 hero-text">
                <div class="thumb-text">
                    <img src="http://localhost/wp-training/wp-content/uploads/2025/03/curly-arrow.png" alt="" class="arrow-down">
                        <?php if( have_rows('hero') ): ?>
                        <?php while( have_rows('hero') ): the_row(); 

                        $hero_title = get_sub_field('hero_title');
                        $hero_text = get_sub_field('hero_text');
                        $button_text = get_sub_field('button_text');
                        $button_url = get_sub_field('button_url');

                        $button_download_url = get_sub_field('button_download_url');
                        $button_text_download = get_sub_field('button_text_download');
                        $download_icon = get_sub_field('download_icon');
                        ?>
                        
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="text-btn">
                    <h2><?php echo $hero_title; ?></h2>
                            <div class="btn-header">
                                <a href="<?php echo $button_url; ?>" class="btn btn-primary btn-hire"><?php echo $button_text; ?></a>

                                <a href="<?php echo $button_download_url; ?>" class="btn btn-primary btn-download"><?php echo $button_text_download; ?> <img src="<?php echo $download_icon; ?>" alt=""></a>
                            </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6 col-md-6">
                <?php if( have_rows('hero') ): ?>
                        <?php while( have_rows('hero') ): the_row(); 

                            $image_url = get_sub_field('image_url');


                            ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                <img src="<?php echo $image_url; ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="aboutme-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 aboutme-text">
                <?php if( have_rows('about_me') ): ?>
                    <?php while( have_rows('about_me') ): the_row(); 

                        $aboutme_title = get_sub_field('aboutme_title');
                        $aboutme_text = get_sub_field('aboutme_text');
                        $aboutme_img_url = get_sub_field('aboutme_img_url');

                        $url_link = get_sub_field('url_link');

                        $url_title = get_sub_field('url_title');
                        ?>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <img src="http://localhost/wp-training/wp-content/uploads/2025/03/music-note.png" alt="" class="music-note">
                <div class="text-icon">
                    <h3><?php echo $aboutme_title; ?> </h3>
                    <img src="http://localhost/wp-training/wp-content/uploads/2025/03/lightbulb.png" alt="" class="img-fluid">
                </div>
                <p><?php echo $aboutme_text; ?> <a href="<?php echo $url_link; ?>"><?php echo $url_title; ?></a></p>
                <img src="http://localhost/wp-training/wp-content/uploads/2025/03/arrow-up.png" alt="" class="arrow-up">
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="<?php echo $aboutme_img_url; ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    
    <div class="works-container">
        <div class="works-bg">
            <div class="row">
                <div class="col-lg-12 works-title">
                    <?php if( have_rows('works') ): ?>
                        <?php while( have_rows('works') ): the_row(); 

                            $works_title = get_sub_field('works_title');
                            ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <h3><?php echo $works_title; ?></h3>
                </div>

                <div class="col-lg-12 ">
                <div class="portfolio-container">
                    <?php if( have_rows('portfolio_group') ): ?>
                    <?php while( have_rows('portfolio_group') ): the_row(); 
                    // Get sub field values.
                        // mixit start 
                    ?>

                        <!-- mixitstart  -->
                        <div class="controls">
                            <button class="filter active" data-filter="all">All</button>

                            <?php 
                            // Check rows exists.
                            if( have_rows('portfolio_repeater') ):

                                // Loop through rows.
                                while( have_rows('portfolio_repeater') ) : the_row();

                                    // Load sub field value.
                                    $filter = get_sub_field('filter');
                                    // Do something, but make sure you escape the value if outputting directly...
                                    
                                    ?>
                                    <button class="filter" data-filter=".<?php echo $filter;?>"><?php echo $filter;?></button>
                                    <?php 
                                // End loop.
                                endwhile;

                            // No value.
                            else :
                                // Do something...
                            endif;
                            ?>
                        </div>

                        <div class="pager-list">
                            <!-- Pagination buttons will be generated here -->
                        </div>



                        <div id="Container" class="portfolio-items">
                            <?php 
                                // Check rows exists.
                                if( have_rows('portfolio_repeater') ):

                                    // Loop through rows.
                                    while( have_rows('portfolio_repeater') ) : the_row();

                                        // Load sub field value.
                                        $filter = get_sub_field('filter');
                                        $image = get_sub_field('image');
                                        // Do something, but make sure you escape the value if outputting directly...
                                        
                            ?>
                                        
                                <div class="mix col-lg-4  col-md-4 col-sm-2 <?php echo $filter;?>" ><img src="<?php echo $image;?>" alt="" class="img-fluid">
                                </div>
                            <?php 
                                // End loop.
                                endwhile;
                                // No value.
                                else :
                                // Do something...
                                endif;
                            ?>
                            <div class="gap"></div>
                            <div class="gap"></div>
                        </div>

                        <!-- mitit end  -->
        
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contactus-container">
        <div class="row">
            <div class="col-lg-12">
                <img src="http://localhost/wp-training/wp-content/uploads/2025/03/keyboard.png" alt="" class="img-fluid keyboard">

            </div>
            <div class="col-lg-6 contact-title">
                    <?php if( have_rows('contact_us') ): ?>
                        <?php while( have_rows('contact_us') ): the_row(); 

                            $contact_title = get_sub_field('contact_title');
                            $contact_img = get_sub_field('contact_img');
                        
                            ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <h3><?php echo $contact_title; ?></h3>
                    <img src="<?php echo $contact_img; ?>" alt="" class="img-fluid  ">
            </div>
            <div class="col-lg-6">
              
                <div class="contact-form">
                    <?php echo do_shortcode('[fluentform id="3"]');?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
