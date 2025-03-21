<?php get_header(); ?>

<style>
    .my-container {
        background: #222831;
        .row {
            width: 1440px;
            margin: 0 auto;
            display: flex;
            align-items: flex-start;
        }

        .hero-text h2{
            color: #fff;
            font-size: 96px;
        }

        .hero-text h2 span{
            color: #00ADB5;
        }
    }

    
</style>



    <div class="my-container">
    <div class="row">
        <div class="col-lg-6 hero-text">
            <?php if( have_rows('hero') ): ?>
                <?php while( have_rows('hero') ): the_row(); 

                    $hero_title = get_sub_field('hero_title');
                    $hero_text = get_sub_field('hero_text');
                    $button_text = get_sub_field('button_text');
                    $button_url = get_sub_field('button_url');
                    ?>
                    
                <?php endwhile; ?>
            <?php endif; ?>
            <h2><?php echo $hero_title; ?></h2>
            <p><?php echo $hero_text; ?></p>
            <a href="<?php echo $button_url; ?>" class="btn btn-primary"><?php echo $button_text; ?></a>
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
