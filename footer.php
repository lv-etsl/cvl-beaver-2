      <footer class="jumbotron jumbotron-fluid" role="footer">
        <div class="row">
          <?php if ( is_active_sidebar( 'footer' ) ) : ?>
            <?php dynamic_sidebar( 'footer' ); ?>
          <?php endif; ?>
        </div>
      </footer>

  <?php wp_footer(); ?>
  </body>
</html>
