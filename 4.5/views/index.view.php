<div class="row">
    <form class="form-inline" action="" method="GET">
        <div class="form-group">
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
        </div>
    </form>
</div>
<div class="row">
    <table class="table table-striped">
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><a href="detail.php?term=<?php echo $item->term; ?>"><?= $item->term; ?></a></td>
                <td><?= $item->definition; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>