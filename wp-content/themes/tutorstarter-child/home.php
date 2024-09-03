<?php

/**
 * Template Name: Blog Template
 * 
 * @package TutorStarter Child
 */

get_header();

?>

<div class="shape-container">
    <h1>BLOG</h1>
    <div id="first-circle"></div>
    <div id="second-circle"></div>
    <div class="shape-img-container">
        <img id="img-one" src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/butterfly_one.svg" alt="butterfly">
        <img id="img-two" src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/butterfly_one.svg" alt="butterfly">
    </div>
</div>

<div class="content">
    <main id="main">
        <!-- Mobile search container -->
        <section class="search-container search-container-mobile">
            <div>
                <h2>Search here</h2>
                <div class="dash-lines">
                    <div class="dash-lines-1"></div>
                    <div class="dash-lines-2"></div>
                    <div class="dash-lines-3"></div>
                </div>
                <div class="input-container">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article>
                    <figure>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                        <?php endif; ?>
                    </figure>

                    <section class="article-category-section">
                        <p class="article-category"><?php echo get_the_category_list(', '); ?></p>
                    </section>

                    <header class="article-header">
                        <h1><?php the_title(); ?></h1>
                        <div class="dash-lines">
                            <div class="dash-lines-1"></div>
                            <div class="dash-lines-2"></div>
                            <div class="dash-lines-3"></div>
                        </div>
                    </header>

                    <section class="article-author-section">
                        <p class="article-author">By <?php the_author(); ?> On <?php the_date(); ?></p>
                    </section>

                    <section class="article-content">
                        <?php the_excerpt(); ?>
                    </section>

                    <section class="article-footer">
                        <button onclick="location.href='<?php the_permalink(); ?>'">Read More</button>
                    </section>
                </article>
        <?php
            endwhile;

            // Pagination
            echo '<div class="pagination-container">';
            echo '<div class="pagination">';
            echo paginate_links(array(
                'prev_text' => '<img src="' . get_stylesheet_directory_uri() . '/asset/images/blog/previous_icon.svg" alt="previous">',
                'next_text' => '<img src="' . get_stylesheet_directory_uri() . '/asset/images/blog/next_icon.svg" alt="next">',
            ));
            echo '</div>';
            echo '</div>';

        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </main>

    <aside id="aside">
        <section class="search-container">
            <div>
                <h2>Search here</h2>
                <div class="dash-lines">
                    <div class="dash-lines-1"></div>
                    <div class="dash-lines-2"></div>
                    <div class="dash-lines-3"></div>
                </div>
                <div class="input-container">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>

        <section class="categories-section">
            <h2>Categories</h2>
            <div class="dash-lines">
                <div class="dash-lines-1"></div>
                <div class="dash-lines-2"></div>
                <div class="dash-lines-3"></div>
            </div>
            <div class="categories-container">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) :
                ?>
                    <div class="single-category">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/file_icon.svg" alt="file icon">
                            <p><?php echo $category->name; ?></p>
                        </div>
                        <span>(<?php echo $category->count; ?>)</span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="recent-posts-section">
            <h2>Recent Post</h2>
            <div class="dash-lines">
                <div class="dash-lines-1"></div>
                <div class="dash-lines-2"></div>
                <div class="dash-lines-3"></div>
            </div>
            <div class="post-container">
                <?php
                $recent_posts = wp_get_recent_posts(array('numberposts' => 4));
                foreach ($recent_posts as $post) :
                ?>
                    <div class="single-post">
                        <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
                        <span>
                            <p class="recent-posts-date"><?php echo get_the_date('j F Y', $post['ID']); ?></p>
                            <?php echo get_the_title($post['ID']); ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="photo-gallery">
            <h2>Photo Gallery</h2>
            <div class="dash-lines">
                <div class="dash-lines-1"></div>
                <div class="dash-lines-2"></div>
                <div class="dash-lines-3"></div>
            </div>
            <div class="gallery-container">
                <?php echo do_shortcode('[gallery size="thumbnail" columns="3" link="file"]'); ?>
            </div>
        </section>

        <section class="get-in-touch">
            <h2>Get in touch</h2>
            <div class="dash-lines">
                <div class="dash-lines-1"></div>
                <div class="dash-lines-2"></div>
                <div class="dash-lines-3"></div>
            </div>
            <div class="form-container">
                <?php echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact form"]'); ?>
            </div>
        </section>

        <section class="follow-us-section">
            <h2>Follow Us</h2>
            <div class="dash-lines">
                <div class="dash-lines-1"></div>
                <div class="dash-lines-2"></div>
                <div class="dash-lines-3"></div>
            </div>
            <div class="follow-icons-container">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/linkedin_icon.svg" alt="linkedin"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/twitter_icon.svg" alt="twitter"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/fb_icon.svg" alt="facebook"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/blog/insta_icon.svg" alt="instagram"></a>
            </div>
        </section>
    </aside>
</div>

<section>
    <?php get_template_part('template-parts/newsletter'); ?>
</section>

<!-- <?php get_footer(); ?> -->