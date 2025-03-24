<?php get_header(); ?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .my-container {
    padding-top: 200px;
    background: #222831;
    border-top: 1px solid #eee;
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

</style>
    <div class="my-container">
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

<?php get_footer(); ?>
