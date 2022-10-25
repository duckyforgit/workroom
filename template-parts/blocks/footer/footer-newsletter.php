<?php 

$className = 'footernewsletter';

if (!empty( $block[ 'className' ] )) {

  $className .= ' ' .$block[ 'className' ];

}

if (!empty( $block[ 'align' ] )) {

  $className .= ' align' .$block[ 'align' ];

}

?>
<div class="<?php echo esc_attr($className); ?>">
  <?php
    $newletter_heading = get_field( 'newsletter_heading');
    $newletter_coding  = get_field( 'newsletter_coding');
  ?>  

  <?php if ( ! empty( $newletter_heading ) ) : ?>
    <h5 class="widget-title"><?php echo esc_html($newletter_heading) ?> 
  </h5>
  <?php endif; ?>

  <div class="textwidget custom-html-widget">

      <?php if ( ! empty( $newletter_coding ) ) : ?> 
        <?php echo $newletter_coding ?>                 
      <?php endif; ?>
  </div>
</div>