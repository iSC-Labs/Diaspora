<div class="post">
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"/>
        <img width="680" height="440" src="<?php echo get_template_directory_uri(); ?>/timthumb/timthumb.php?src=<?php echo $img[0] ?>" class="thumb" />
    </a>
    <div class="else">
        <p><?php the_time('F j, Y'); ?></p>
        <h3><a href="<?php the_permalink(); ?>" /><?php the_title(); ?></a></h3>
        <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100,"..."); ?></p>
        <p><?php echo getPostViews(get_the_ID()); ?><?php tz_printLikes(get_the_ID()); ?><?php echo count_words ($text); ?></p>
    </div>
</div>
