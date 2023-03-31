<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= 'Search result for'?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
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
</div>