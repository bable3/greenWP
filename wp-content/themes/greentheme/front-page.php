
<?php 
// On récupère toutes les infos du "context"
$context = Timber::get_context();
// On récupère les infos du post, ici la page home
$post = new TimberPost();
// On l'ajoute au tableau du context
$context['post'] = $post;

// On fait un rendu de la template, 
// à qui on passe les datas via le second paramètre
Timber::render( array( 'homepage.twig' ), $context );

?>