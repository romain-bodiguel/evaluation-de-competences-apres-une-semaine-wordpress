<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
        wp_head(); 
    ?>

    <!-- Déclaration de notre font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

    <!-- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- Ma feuille de style pour mon blog -->
    <link rel="stylesheet" href="../assets/css/blog.css">

    <title>A la dérive, le blog</title>
</head>

<?php
/**
 * Le header
 * 
 * Affiche le header sur tous les templates
 *
 */

?>

<body>

  <!-- HEADER -->
  <header>
        <?php 
            get_template_part('template-parts/header/navbar'); 
        ?>
    <section class="text-center">
        <h1>A la dérive</h1>
        <hr />
        <p>
            Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
        </p>
    </section>
</header>