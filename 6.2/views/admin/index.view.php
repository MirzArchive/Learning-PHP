<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['heading']; ?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <a href="create.php">Create new Term</a>
    </div>
    <div class="row">
        <table class="table table-striped">
            <?php foreach ($data as $item) : ?>
                <tr>
                    <td><a href="../admin/edit.php?key=<?php echo $item->id; ?>">Edit</a></td>
                    <td><a href="../detail.php?id=<?php echo $item->id; ?>"><?= $item->term; ?></a></td>
                    <td><?= $item->definition; ?></td>
                    <td><a href="../admin/delete.php?key=<?php echo $item->id; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>