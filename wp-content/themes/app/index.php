<?php
    get_header();
?>
    <div class="container">
        <main id="content" role="main">
            <article class="post">
                <?php    
                    if (have_posts() ) :
                        while (have_posts() ) :
                            the_post(); ?>
                            <div class="row">
                                <div class="post-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col">
                                    <header>
                                        <?php
                                            if ( 'post' === get_post_type() ) :
                                        ?>
                                        <div class="post-details">
                                            <time><?php the_date(); ?></time>
                                            <?php
                                            if ( is_singular() ) :
                                                the_title( '<h3 class="entry-title">', '</h3>' );
                                            else :
                                                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                            endif;
                                            ?>
                                        </div>
                                        <?php endif; ?>
                                    </header>
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else :?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </article>
        </main>
    </div>
<?php
get_footer(); 
?>