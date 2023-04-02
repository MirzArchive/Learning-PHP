<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['heading']; ?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="term">Term:</label>
                <input class="form-control" type="text" name="term" id="term" value="<?= $data->term ?>">
            </div>
            <div class="from-group">
                <input type="submit" value="Delete">
            </div>
        </form>
    </div>
</div>