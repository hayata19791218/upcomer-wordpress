<?php get_header('another2');?>
<?php if(have_posts()): while(have_posts()): the_post();?>
    <div class="l-single-eyecatch">
        <?php the_post_thumbnail('large');?>
    </div>
    <div class="l-single">
        <?php the_content();?>
    </div>
    <div class="l-single__wrap">
        <a class="l-single__link" href="<?php echo esc_url(home_url('case'));?>">BACK</a>
        <a class="l-single__link" href="<?php echo esc_url(home_url('/'));?>">TOP</a>
    </div>
<?php endwhile; endif;?>
<?php get_footer('another2');?>