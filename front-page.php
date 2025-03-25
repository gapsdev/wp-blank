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

                <div class="col-lg-12 controls">
                    <label>Filter:</label>
                    
                    <button class="filter" data-filter="all">All</button>
                    <button class="filter" data-filter=".category-1">Category 1</button>
                    <button class="filter" data-filter=".category-2">Category 2</button>
                    </div>

                    <div class="pager-list">
                        <!-- Pagination buttons will be generated here -->
                    </div>



                    <div id="Container" class="container">
                    <div class="mix category-1" data-myorder="1"></div>
                    <div class="mix category-1" data-myorder="2"></div>
                    <div class="mix category-1" data-myorder="3"></div>
                    <div class="mix category-2" data-myorder="4"></div>
                    <div class="mix category-1" data-myorder="5"></div>
                    <div class="mix category-1" data-myorder="6"></div>
                    <div class="mix category-2" data-myorder="7"></div>
                    <div class="mix category-2" data-myorder="8"></div>
                    
                    <div class="gap"></div>
                    <div class="gap"></div>
                    </div>
            </div>
        </div>
    </div>


    <div class="contactus-container">
        <div class="row">
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
                <img src="http://localhost/wp-training/wp-content/uploads/2025/03/keyboard.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

<?php get_footer(); ?>
