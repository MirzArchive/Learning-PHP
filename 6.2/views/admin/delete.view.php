<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['heading']; ?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <input type="hidden" name="key" value="<?= $data->id ?>">
            <p>Are you sure you want to delete <?= $data->term ?></p>
            <div class="from-group">
                <input type="submit" value="Delete">
            </div>
        </form>
    </div>
</div>