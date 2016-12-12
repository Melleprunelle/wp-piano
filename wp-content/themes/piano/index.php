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
                                <div class="description">
                                    <!-- image -->
                                    <div class="the-artist">
                                        <?php the_post_thumbnail(array());?>
                                    </div>
                                    <div class="description-content">
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