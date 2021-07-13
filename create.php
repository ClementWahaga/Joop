<?php require './partials/header.php'; ?>

<?php 
    if (isset($_POST['title']) && isset($_POST['content'])) {
        $post = new Post([
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'category_id' => 1,
        ]);

        echo $post->title;
        die();
    }
?>

<form method="POST">
    <input type="text" name="title" placeholder="Titre">
    <textarea name="content" placeholder="Ajouter un commentaire"></textarea>
    <input type="submit" value="Créer">
</form>

<?php require './partials/footer.php'; ?>