<?php
get_header();

if (have_posts()) {
    the_post();
    $allCategories = get_the_category();
?>

<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-12">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <p class="infos">
              Posté par <a href="#" class="card-link"><?php the_author(); ?></a> le <time><?php echo get_the_date(); ?></time> dans <a href="category.html" class="card-link">#<?= get_cat_name($allCategories['cat_ID']); ?></a>
            </p>
            <p class="card-text"><?php the_content(); ?></p>
            <a href="<?= home_url(); ?>" class="post__link" style="text-decoration : underline; color: blue;">Back to home</a>
          </div>
        </article>
        
      </main>
    </div>

<?php
};

get_footer();
?>