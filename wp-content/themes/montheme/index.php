<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="articles-section w-full flex flex-wrap">
        <?php while (have_posts()) : the_post(); ?>
            <div class="w-2/5 lg:w-1/4 mx-auto">
                <div class="card  mx-auto my-8 bg-base-100 shadow-xl border">
                    <figure><?php the_post_thumbnail() ?></figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php the_title() ?>
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <p><?php the_content() ?></p>
                        <span class="text-sm italic">De : <?php the_author() ?></span>
                        <div class="card-actions justify-end">
                            <div class="badge badge-outline"><?php the_category() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer() ?>