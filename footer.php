<div class="footer-container">
<footer>
    <div class="footer-nav">
            <?php if( have_rows('footer_nav') ): ?>
                <?php while( have_rows('footer_nav') ): the_row(); 

                    $fn_1 = get_sub_field('fn_1');
                    $fn1_text = get_sub_field('fn1_text');

                    $fn_2 = get_sub_field('fn_2');
                    $fn2_text = get_sub_field('fn2_text');

                    $fn_3 = get_sub_field('fn_3');
                    $fn3_text = get_sub_field('fn3_text');
                        
                    ?>
                            
                <?php endwhile; ?>
            <?php endif; ?>

        <div class="items">
            <img src="<?php echo $fn_1; ?>" alt="" class="img-fluid">  
            <a href="#"><?php echo $fn1_text; ?></a>
        </div>

        <div class="items">
            <img src="<?php echo $fn_2; ?>" alt="" class="img-fluid">  
            <a href="#"><?php echo $fn2_text; ?></a>
        </div>

        <div class="items">
            <img src="<?php echo $fn_3; ?>" alt="" class="img-fluid">  
            <a href="#"><?php echo $fn3_text; ?></a>
        </div>
    </div>
    <div class="social-icons">

            <?php if( have_rows('footer_socials') ): ?>
                <?php while( have_rows('footer_socials') ): the_row(); 

                    $first_icon = get_sub_field('first_icon');
                    $first_icon_url = get_sub_field('first_icon_url');
                    $second_icon = get_sub_field('second_icon');
                    $second_icon_url = get_sub_field('second_icon_url');
                    $third_icon = get_sub_field('third_icon');
                    $third_icon_url = get_sub_field('third_icon_url');
                    $fourth_icon = get_sub_field('fourth_icon');
                    $fourth_icon_url = get_sub_field('fourth_icon_url');
                        
                    ?>
                            
                <?php endwhile; ?>
            <?php endif; ?>

                <a href="<?php echo $first_icon_url; ?>"><img src="<?php echo $first_icon; ?>" alt="" class="img-fluid"></a>
                <a href="<?php echo $second_icon_url; ?>"><img src="<?php echo $second_icon; ?>" alt="" class="img-fluid"></a>
                <a href="<?php echo $third_icon_url; ?>"><img src="<?php echo $third_icon; ?>" alt="" class="img-fluid"></a>
                <a href="<?php echo $fourth_icon_url; ?>"><img src="<?php echo $fourth_icon; ?>" alt="" class="img-fluid"></a>

    </div>
    <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
