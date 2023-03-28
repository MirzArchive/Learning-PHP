<div class="row">
    <table class="table table-striped">
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item->term; ?></td>
                <td><?= $item->definition; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <table class="table table-striped">
        <?php
        foreach ($data as $item) {
            $term = $item->term;
            $definition = $item->definition;

            echo "<tr><td>$term</td><td>$definition</td></tr>";
        }
        ?>
    </table>
</div>