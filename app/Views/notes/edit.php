<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= url_to('notes.update', $note['id']) ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="POST">
        <label for="title">Titre</label>
        <input type="text" name="title" placeholder="Entrez votre nom" value="<?= $note['title'] ?>">
        <br>
        <label for="content">Contenu</label>
        <input type="text" name="content" placeholder="Entrez le contenu" value="<?= $note['content'] ?>">
        <br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>