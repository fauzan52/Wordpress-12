<?php get_header();  ?>
<body>
<main>
<!--TYPE BIG CARD-->


<div class="card">
    <div class="card-body text-center">
        <?php the_post_thumbnail(); ?>
        <div class="card-title">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
        <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
    </div>
</div>
<br>
<!--TYPE SMALL CARD-->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
<!--            --><?php //the_post_thumbnail('small_thumbnail'); ?>
            <div class="card-body">

            </div>
            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <div class="col">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<?php echo paginate_links(); ?>
<br>
</main>

<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>

<!--WP Query-->
<!--<div id="custom_post">-->
<!--    <h1>Post Terakhir : </h1>-->
<?php
//    $custom_post = new WP_Query('cat=7');
//
//    if   ($custom_post -> have_posts()):
//        while ($custom_post->have_posts()): $custom_post->the_post(); ?>
<!--        <a href="--><?php //the_permalink(); ?><!--"> --><?php //the_title(); ?><!--</a>-->
<!--    --><?php
//    endwhile;
//    else:
//        echo 'Tidak ada postingan';
//    endif;
//?>
<!--</div>-->

</body>