<?php 
/* Social Share Buttons template for Wordpress
 * By Daan van den Bergh 
 */ 

$postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>

<section class="sharing-box content-margin content-background clearfix">
    <h5 class="sharing-box-name">SHARE</h5>
    <div class="share-button-wrapper">
        <a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fa-brands fa-twitter"></i></a>
        <a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fa-brands fa-facebook"></i></a>
        <!--<a target="_blank" class="share-button share-googleplus" href="https://plus.google.com/share?url=<?php echo $postUrl; ?>" title="Share on Google+">Google+</a>-->
        <a target="_blank" class="share-button share-whatsapp" href="whatsapp://send?url=<?php echo $postUrl; ?>" title="Share on Google+"  data-action="share/whatsapp/share"><i class="fa-brands fa-whatsapp"></i></a>
        <a target="_blank" class="share-button share-linkedin" href="http://www.linkedin.com/shareArticle?url=<?php echo $postUrl; ?>" title="Share on linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>
</section>