<?php get_header(); ?>

  <div class="container-fluid">
    <div class="row">

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">

      <!-- boucle simple -->
      <?php if(have_posts()); ?>
        <?php while (have_posts()) : the_post(); ?>

          <article <?php post_class(); ?>>
            <header>
              <h1>
                <a href="<?php the_permalink(); ?>" >
                  <?php the_title(); ?>
                </a>
              </h1>
            </header>

            <div>
              <?php the_content(); ?>
            </div>

            <footer>

              <span>
                Date de publication:  <?php the_date(); ?>
              </span>

              <span>
                Catégories: <?php the_category( ', ' ); ?>
              </span>

              <span>
                <?php the_tags(); ?>
              </span>

            </footer>

          </article>

        <?php endwhile; ?>

        <div class="">
          <div class="">
            <div class="nav-previous"><?php previous_posts_link( 'Older posts' ); ?></div>
          </div>
          <div class="pure-u-md-1-6">
            <div class="nav-next"><?php next_posts_link( 'Newer posts' ); ?></div>
          </div>
        </div>

      </main>

        <?php get_sidebar(); ?>

    </div>
</div><!-- container-fluid -->

<?php include_once 'template-parts/sub-footer.php'; ?> 

<?php get_footer(); ?>
