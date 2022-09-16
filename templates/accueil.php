
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                <a href="<?= URL_ROOT . '/admin/article/add' ?>" class="btn btn-primary">Ajouter</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Auteur</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?php $article->getId() ?></td>
                        <td><?php $article->getTitre() ?></td>
                        <td><?php $article->getContenu() ?></td>
                        <td><?php $article->getAuteur() ?></td>
                        <td>
                            <a href="<?= URL_ROOT . '/admin/article/show/' . $article->getId() ?>"
                               class="btn btn-primary">Voir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>