<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['heading']; ?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <input type="hidden" name="original-term" value="<?= $data->term ?>">
            <div class="form-group">
                <label for="term">Term:</label>
                <input class="form-control" type="text" name="term" id="term" value="<?= $data->term ?>">
            </div>
            <div class="form-group">
                <label for="definition">Definition:</label>
                <input class="form-control" type="text" name="definition" id="definition" value="<?= $data->definition ?>">
            </div>
            <div class="form-group">
                <label for="summary">Summary:</label>
                <textarea class="form-control" name="summary" id="summary"><?= $data->summary ?></textarea>
            </div>
            <div class="from-group">
                <input type="submit" value="Edit Term">
            </div>
        </form>
    </div>
</div>