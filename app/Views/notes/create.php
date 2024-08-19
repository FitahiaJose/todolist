<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= url_to('notes.store') ?>" method="post">
    <?= csrf_field() ?>
        <label for="title">Titre</label>
        <input type="text" name="title" id="">
        <br>
        <label for="content">Contenu</label>
        <input type="text" name="content" id="">
        <br>
        <button type="submit">Creér</button>
    </form>
</body>
</html>