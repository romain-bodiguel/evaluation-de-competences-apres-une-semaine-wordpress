<nav class="navbar navbar-expand-md navbar-light">
        
        <a class="navbar-brand" href="<?= home_url(); ?>">A la dérive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Cette partie va automatique être masquée en version mobile -->
    <?php
        wp_nav_menu(
            [
                'menu' => 'Menu',
                'menu_class' => 'navbar-nav',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'echo' => true
            ]
        );
    ?>
</nav>