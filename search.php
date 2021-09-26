<?php get_header('another2');?>
    <div class="l-search">
        <main>
            <div class="l-search__title"><span class="l-search__span">「<?php echo get_search_query();?>」</span>の検索結果</div>
            <ul class="l-case__article-wrap">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post();?>
                    <li class="l-case__article-list">
                        <a href="<?php the_permalink();?>">
                            <p class="l-case__article-title"><?php the_title();?></p>
                            <?php the_post_thumbnail('medium');?>
                            <p class="l-case__article-readmore">READ MORE</p>
                        </a>
                    </li>
                <?php endwhile;?>
                <?php else:?>
                <p class="l-search__content">検索されたキーワードにマッチする記事はありませんでした。</p>
                <?php endif;?>
            </ul>
            <a class="l-search__link" href="<?php echo esc_url(home_url('case'));?>">CASE STUDYのページに戻る</a>
        </main>
    </div>
<?php get_footer('another');?>