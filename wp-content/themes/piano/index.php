<?php get_header(); ?>

    <!-- SECTION DES COURS DE DANCE -->
    <section class="dance-classes">
        <div class="content">
        <?php query_posts('category_name=coursDance'); ?>
            <?php if(have_posts()) : ?>
                <?php $counter =0; ?>
                    <?php while(have_posts() && $counter<3) : the_post();?>
                        <?php $counter++ ?>
                        <div class="row-article">
                            <!-- ligne violette à gauche des articles -->
                            <div class="ligne-design"><div></div></div>
                            
                            <!-- affichage des articles -->
                            <div class="article-dance">
                                <!-- image -->
                                <div class="article-img">
                                    <?php the_post_thumbnail(array(250,250));?>
                                </div>
                                <div id="post-<?php the_ID(); ?>" class="post post_content">
                                    <!-- title -->
                                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                    <!-- separator -->
                                    <div class="separator-purple"></div>
                                    <!-- article text -->
                                    <p class="postmetadata">
                                        <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>                   
        </div>
                                
        <div class="ligne-design-button"><div></div></div>
        <a href="#"><button type="submit">En SAVOIR plus</button></a>
                                
    </section>
    
    <!-- SLIDER -->
    <div class="slider">
        <?php wd_slider(1); ?>
        <span class="more-on-fb">Encore plus d'images sur facebook. <i class="fa fa-facebook-official"></i></span>
    </div>
    
    <!-- SECTION DES EVENEMENTS -->
    <section class="event-section">
       <h2>Nos événements</h2>
        <div class="event-content">
        <?php query_posts('category_name=evenement'); ?>
            <?php if(have_posts()) : ?>
                <?php $counter =0; ?>
                    <?php while(have_posts() && $counter<9) : the_post();?>
                        <?php $counter++ ?>
                            <!-- affichage des articles -->
                            <div class="article-event">
                                <!-- image -->
                                <div class="event-img">
                                    <?php the_post_thumbnail(array(250,250));?>
                                </div>
                                
                                <!-- partie invisible pour le hover -->
                                <div class="event-hover">
                                    <div id="post-<?php the_ID(); ?>" class="post event_content">
                                        <!-- title -->
                                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                        <!-- separator -->
                                        <div class="separator-white"></div>
                                        <!-- article text -->
                                        
                                            <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                                        
                                    </div>
                                </div>
                            </div>
                <?php endwhile; ?>
            <?php endif; ?>                   
        </div>
                                
    </section>

    <?php get_footer(); ?>

    </body>

</html>