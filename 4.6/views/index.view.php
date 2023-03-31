<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['heading']; ?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
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
</div>