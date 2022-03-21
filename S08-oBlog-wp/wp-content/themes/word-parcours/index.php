<?php
get_header();
?>

<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
<div class="container">
<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
<div class="row">

    <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
    MAIS au dela d'une certaine taille, il n'en prendra plus que 9
    https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
    <main class="col-lg-9">

    <?php
        if(is_404()) {
            echo "Page introuvable...";
            ?>
            <a href="<?= home_url(); ?>" class="post__link">Back to home</a>
            <?php
        };

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $allCategories = get_the_category();
    ?>

    <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
    <?php
        foreach ($allCategories as $category) :
    ?>
    <article class="card">
        <div class="card-body">
        <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="card-text"><?php the_content(); ?></p>
        <p class="infos">
            Posté par <a href="#" class="card-link"><?php the_author(); ?></a> le <time><?php echo get_the_date(); ?></time> dans <a href="<?php the_permalink(); ?>" class="card-link">#<?= $category->name; ?></a>
        </p>
        </div>
    </article>
    <?php 
        endforeach;
        }
    }; 
    ?>

    <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
    <nav aria-label="Page navigation example" class="avec-bonus">
        <ul class="pagination justify-content-between">
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
        </ul>
    </nav>

    </main>

    <aside class="col-lg-3">
    <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
    <div class="avec-bonus input-group mb-3">
        <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..."
        aria-describedby="basic-addon2">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button">Allez</button>
        </div>
    </div>

    <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
    <div class="card">
        <h3 class="card-header">Catégories</h3>
        <ul class="list-group list-group-flush">
        <?php 
        $allCategories = get_categories();
        foreach($allCategories as $category) : ?>
        <li class="list-group-item"><a href="<?php the_permalink(); ?>"><?= $category->name; ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>

    <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
    <div class="card">
        <h3 class="card-header">Auteurs</h3>
        <ul class="list-group list-group-flush">
        <?php 
            $args = array(
                'echo' => true,
                'style' => 'list',
                'html' => 'true',
                'hide_empty' => false,
                'exclude_admin' => true,
            );
            while (wp_list_authors($args)) {}; 
        ?>
        </ul>
    </div>
    </aside>
</div><!-- /.row -->

<?php
get_footer();
?>