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
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div cl ass="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="from-group">
                <input type="submit" n ame="login" value="Login">
            </div>
        </form>
    </div>
    <div class="row">
        <?php
        if (isset($viewBag['status'])) {
            echo $viewBag['status'];
        }
        ?>
    </div>
</div>