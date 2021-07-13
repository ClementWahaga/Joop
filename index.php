<?php require './partials/header.php'; ?>

<?php $book = book::all(); foreach($book as $book) : ?> 
    <article>
        <h2><?= $book['titre']; ?></h2>
        <p><?= $book['auteur']; ?></p>
        <p><?= $book['disponible']; ?></p>
        <p><?= $book['id.rayon']; ?></p>
        <ul>
            <?php $rayon = rayon::where('id', '=', $book['id']); ?>
            <?php foreach($rayon as $rayon) : ?>
                <li>genre litteraire :<?php echo $rayon['nom']; ?></li>
                <li>reference :<?php echo $rayon['reference']; ?></li>
            <?php endforeach; ?>
        </ul>
    </article>
    <pre>
    <?=var_export($book)?>
    <?=var_export($rayon)?>
    </pre>

<?php endforeach; ?> 
<?php $rayon = rayon::findById(1); ?>
<h1>Un rayon par son ID : <?php echo $rayon['nom']; ?></h1>
<?php require './partials/footer.php'; ?>

