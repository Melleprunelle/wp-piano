<?php get_header(); ?>
    <div class="container">
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>
        
        <!-- PRESENTATION -->
        <section class="home">
            <?php query_posts('category_name=home'); ?>
                <?php if(have_posts()) : ?>
                    <?php $counter = 0; ?>
                        <?php while(have_posts() && $counter < 1) : the_post();?>
                            <?php //$counter++ ?>
                                <!-- affichage des articles -->
                                <div class="article-event">
                                    <!-- image -->
                                    <div class="event-img">
                                        <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div id="post-<?php the_ID(); ?>" class="post event_content">
                                        <!-- article text -->
                                        <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                    </div>
                                </div>
                    <?php endwhile; ?>
                <?php endif; ?>     
        </section>
    </div>
    <?php get_footer(); ?>

    </body>

</html>