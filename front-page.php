<?php get_header(); ?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    /* nav css */
    .nav-container {
        background: #222931;
            nav {
            width: 1440px;
            background: #222931 !important;
            margin: 0 auto;
        }
    }
   

    /* header css */

    .header-container {
    padding-top: 200px;
    background: #222831;
    border-top: 1px solid rgba(238, 238, 238, 0.1);
    
        .row {
            width: 1440px;
            margin: 0 auto;
            display: flex;
            align-items: flex-start;
        }

        .hero-text h2 {
            color: #fff;
            font-size: 96px;
            font-weight: 700;
            margin-bottom: 48px;
            line-height: 96px;
        }

        .hero-text h2 span{
            color: #00ADB5;
            
        }

        .btn-header {
            display: flex;
            gap: 24px;
        }
        .btn-header a.btn-hire {
            background: #00ADB5;
            border: none;
            padding: 10px 32px;
            border-radius: 24px;
            font-size: 18px;
            font-weight: 600;
            color: #eee;
        }

        .btn-header a.btn-download {
            background: #393E46;
            border: none;
            padding: 10px 32px;
            border-radius: 24px;
            font-size: 18px;
            font-weight: 600;
            color: #eee;
        }

        .arrow-down {
            position: absolute;
            left: 120px;
            top: 340px;
        }
    }

    /* about me css */

    .aboutme-container {
        background: #222831;
        padding:140px 0 70px 0;
        border-bottom: 1px solid rgba(238, 238, 238, 0.1);

        .aboutme-text h3 {
            font-size:64px;
            font-weight:700;
            color: #eee;
        }

        .aboutme-text h3 span {
            color: #00ADB5;
        }

        .aboutme-text p{
            color: #eee;
            font-size:18px;
            font-weight: 100;
            width: 390px;
        }
        img.music-note {
            margin-bottom: 60px;
        }

        .img-bulb {
            position: absolute;
            left: 570px;
            top: 1174px;
        }

        .aboutme-text p a {
            color: #eee;
            font-weight: 600;
            text-decoration: none;
        }
        .arrow-up {
            margin:65px 0px 0px 170px;
        }

    }

    .works-container  {
        background: #222831;
        padding:140px 0 60px 0;

        .works-bg {
            background-image: url("http://localhost/wp-training/wp-content/uploads/2025/03/works-pattern-bg.png" );
            background-size: cover;
            height:1024px;
        }

        .works-title {
            padding-top:280px;
        }
        .works-title h3 {
            font-size: 64px;
            color: #eee;
            font-weight: 700;
            
        }
        .works-title h3 span{
            color: #00ADB5;
        }
    }



</style>
    <div class="header-container">
        <div class="row">
            <div class="col-lg-6 hero-text">
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
                <h2><?php echo $hero_title; ?></h2>

                <div class="btn-header">
                    <a href="<?php echo $button_url; ?>" class="btn btn-primary btn-hire"><?php echo $button_text; ?></a>

                    <a href="<?php echo $button_download_url; ?>" class="btn btn-primary btn-download"><?php echo $button_text_download; ?> <img src="<?php echo $download_icon; ?>" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
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
            <div class="col-lg-6 aboutme-text">
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
                <h3><?php echo $aboutme_title; ?></h3>
                <div class="img-bulb">
                    <img src="http://localhost/wp-training/wp-content/uploads/2025/03/lightbulb.png" alt="" class="light-bulb">
                </div>
                <p><?php echo $aboutme_text; ?> <a href="<?php echo $url_link; ?>"><?php echo $url_title; ?></a></p>
                <img src="http://localhost/wp-training/wp-content/uploads/2025/03/arrow-up.png" alt="" class="arrow-up">
            </div>
            <div class="col-lg-6">
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
                            $aboutme_text = get_sub_field('aboutme_text');
                            

                            $url_link = get_sub_field('works_title');

                            $url_title = get_sub_field('url_title');
                            ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <h3><?php echo $works_title; ?></h3>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
