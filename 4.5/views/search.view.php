<div class="row">
    <table class="table table-striped">
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item->term; ?></td>
                <td><?= $item->definition; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>