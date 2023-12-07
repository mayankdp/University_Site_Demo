<?php 
get_header(); 
pageBanner(array(
    'title' => 'Our Campus!',
    'subtitle' => 'Locate your campus.'
));
?>

    <div class="container container--narrow page-section">
    
        <ul class="link-list min-list">
            <?php
            while(have_posts()) {
                the_post(); 
                $mapLocation = get_field('map_location')
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>

                <!-- <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php $mapLocation['lng']; ?>">
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <?php echo $mapLocation['address']; ?>
                </div> -->
            <?php } ?>
        </ul>
    </div>
<?php get_footer(); ?>