<?php get_header() ?>

<?php while(have_posts()): the_post() ?>
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content text-center flex-col lg:flex-row">
    <img src="<?php the_post_thumbnail_url() ?>" class="max-w-sm rounded-lg shadow-2xl">
    <div class="max-w-md mx-12">
      <h1 class="text-5xl font-bold"><?php the_title(); ?></h1>
      <p class="py-4"><?php the_content(); ?></p>
      <a href="<?php the_permalink(16); ?>" class="btn btn-primary mt-8">Accéder aux articles</a>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer() ?>