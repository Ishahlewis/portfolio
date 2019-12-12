<?php get_header() ?>

    <div class="main">

        <?php
            while (have_posts()) :
                the_post();
                get_template_part('partials/content','default');
            endwhile;
        ?>

        <!-- Extra content here -->


    </div>

<?php get_footer() ?>