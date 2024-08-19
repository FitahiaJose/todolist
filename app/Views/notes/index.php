<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?= url_to('notes.create') ?>">Creér une  nouvelle note</a>
    <ul>
        <?php if (! empty($notes)): ?>
            <?php foreach($notes as $note): ?>
                <li>
                    <h1 ><?= esc($note['title']) ?></h1>
                    <p><?= esc($note['content']) ?></p>
                    <ul>
                        <li>
                            <a href="<?= url_to('notes.edit', $note['id']) ?>">Modifier</a>
                        </li>
                        <li>
                            <form action="<?= url_to('notes.delete', $note['id']) ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Supprimer</button>
                            </form>
                        </li>
                    </ul>
                </li>
            <?php endforeach ?>
        <?php else : ?>
            <li>Aucun note</li>
        <?php endif ?>
    </ul>
</body>
</html>