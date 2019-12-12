<?php get_header() ?>

    <div class="main">

        <!-- <?php
            while (have_posts()) :
                the_post();
                get_template_part('partials/content','default');
            endwhile;
        ?> -->

        <!-- Extra content here -->

        <div class="container-work">


            <!-- <div class="intro">
                    <h2>Hello my name is Ishah</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quod nemo suscipit voluptates quidem in et, sit enim adipisci sapiente delectus tempore illo aliquid vitae provident impedit molestiae maxime. Amet.
                    </p>
                </div>
            -->

        
            <div class="work">


                <?php
                    // The Query
                    $args = array('post_type'=>'project', 'posts_per_page' => -1);
                    $the_query = new WP_Query( $args );
                    
                    // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();

                        get_template_part('partials/content','work');
                    }
                    
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>

            </div>

        </div>


    </div>

<?php get_footer() ?>