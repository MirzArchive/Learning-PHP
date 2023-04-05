<h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['heading']; ?> </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="column text-center">
        <h1><?= $data->term ?></h1>
        <h2><?= $data->definition ?></h2>
        <p><?= $data->summary ?></p>
    </div>
</div>