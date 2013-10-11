<?php get_template_parts( array('parts/shared/header') ); ?>

    <div class="container">
        <div class="row">
            <div class="span8">
                <?php get_template_parts(array('parts/shared/uplift-logo')); ?><?php if ( have_posts() ): ?>

                <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>
                <hr>

                <ol>
                    <?php while ( have_posts() ) : the_post(); ?>

                    <li>
                        <article>
                            <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to &lt;?php the_title(); ?&gt;" rel="bookmark"><?php the_title(); ?></a></h1>

                            <p class="byline">by <?php the_author_posts_link(); ?> &#183; <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

                            <div class="row">
                                <?php if (has_post_thumbnail()): ?>

                                <div class="span2 hidden-phone thumbnail-container">
                                    <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to &lt;?php the_title(); ?&gt;" rel="bookmark"><?php the_post_thumbnail('thumbnail'); ?></a>
                                </div>

                                <div class="span5">
                                    <?php the_excerpt(); ?>

                                    <div>
                                        <a href="<?php esc_url( the_permalink() ); ?>" class="pull-right btn btn-primary">Read more</a>
                                    </div>
                                </div><?php else: ?>

                                <div class="span7">
                                    <?php the_excerpt(); ?>

                                    <div>
                                        <a href="<?php esc_url( the_permalink() ); ?>" class="pull-right btn btn-primary">Read more</a>
                                    </div>
                                </div><?php endif ?>
                            </div>
                        </article>
                        <hr>
                    </li><?php endwhile; ?>
                </ol><?php else: ?>

                <h2>No results found for '<?php echo get_search_query(); ?>'</h2><?php endif; ?>
            </div>

          <div class="span4">
                <?php get_sidebar(); ?>
            
            
                 <div class="rssButton">
                    <a href="<?php bloginfo('rss2_url'); ?>">Uplift RSS Feed<img src="<?php bloginfo('template_directory'); ?>/img/rss-feed-icon.png" alt="Uplift RSS Feed Icon"></a>
                 </div>
            </div><!-- div .span4 -->

        </div><!-- div.row -->
    </div>

    <div class="home" id="happy-little-trees"></div><?php get_template_parts(array('parts/shared/footer') ); ?>
