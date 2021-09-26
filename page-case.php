

<?php get_header('case');?>

<main>
    <div class="l-case__block">
        <div>
            <p class="l-case__category-title">Category</p>
            <?php
                $categories = get_categories(array('taxonomy' => 'category'));
                if ( $categories ) {
                    $cat_selct = '<select name="cat-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;" class="l-case__search-category">';
                    $cat_selct .= '<option value="" selected="selected"></option>';
                    foreach ( $categories as $category ) {
                        $cat_selct .= '<option value="'.esc_html( get_category_link( $category->term_id ) ).'">'.esc_html( $category->name ).'</option>';
                    }
                    $cat_selct .= '</select>';
                    echo $cat_selct;
                }
            ?>
        </div>
        <div>
            <div class="l-case__search-title">Research</div>
                <div>
                    <form method="get" id="searchform" action="<?php echo home_url('/');?>">
                        <input id="sbox"  id="s" name="s" type="text" placeholder="キーワードを入力" class="l-case__search-input"/>
                        <input id="sbtn" type="submit" value="検索" class="search"/>
                    </form>
                </div>
            </div>
        </div>
        <ul class="l-case__article-wrap">
            <?php
                global $post;
                $args = array( 'posts_per_page' => 10000 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) {
                setup_postdata($post);
            ?>
            <li class="l-case__article-list">
                <a href="<?php the_permalink();?>">
                    <p class="l-case__article-title"><?php the_title();?></p>
                    <?php the_post_thumbnail('medium');?>
                    <p class="l-case__article-readmore">READ MORE</p>
                </a>
            </li>
            <?php
                }
                wp_reset_postdata();
            ?>
        </ul> 
        <a class="l-case__link" href="<?php echo esc_url(home_url('/'));?>">BACK</a>
    </div>
</main>

<?php get_footer('another');?>


