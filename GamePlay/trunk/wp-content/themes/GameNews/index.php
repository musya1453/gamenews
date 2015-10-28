<?php get_header(); ?>

<div class="content-wrapper">
    <div class="site-container">
        <div class="ad"></div>
        <div class="block-1">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/images/tmp/slide-1.jpg" align=""/>

                        <div class="desc">
                            <h2><a href="#">ЗАГОЛОВОК РЫБА ТЕКСТ</a></h2>

                            <p>
                                Сайт рыбатекст поможет дизайнеру, верстальщику,
                                вебмастеру сгенерировать несколько абзацев более
                                менее осмысленного текста рыбы на русском языке
                                Сайт рыбатекст поможет дизайнеру, верстальщику,
                                вебмастеру сгенерировать несколько абзацев более
                                менее осмысленного текста рыбы на русском языке
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/images/tmp/slide-1.jpg" align=""/>
                    </li>
                    <li>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/images/tmp/slide-1.jpg" align=""/>
                    </li>
                    <li>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/images/tmp/slide-1.jpg" align=""/>
                    </li>
                </ul>
            </div>
        </div>
        <div class="block-news">

            <?php $posts = query_posts($query_string . '&posts_per_page=6'); if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

                <div class="news">
                    <div class="left-part">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ( function_exists( 'add_theme_support' ) )
                                the_post_thumbnail( array(250,9999), array('class' => 'img-polaroid') );
                            ?></a>
                    </div>
                    <div class="right-part">
                        <div class="news-top">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <div class="date"><?php echo get_the_date(); ?></div>
                        </div>
                        <p>


                            <?php the_excerpt(); ?>
                        </p>

                        <div class="btn read-more">
                            <a href="<?php the_permalink(); ?>">Читать далее</a>
                        </div>

                    </div>
                </div>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
        <div class="block-pager"><?php wp_pagenavi(); ?></div>
    </div>
</div>

<?php get_footer(); ?>