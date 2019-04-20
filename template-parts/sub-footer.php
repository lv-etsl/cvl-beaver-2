<div class="sub-footer" style="background-image: url('<?php header_image(); ?>'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
  <?php if ( is_active_sidebar( 'sub-footer' ) ) : ?>
    <?php dynamic_sidebar( 'sub-footer' ); ?>
  <?php endif; ?>
</div>
