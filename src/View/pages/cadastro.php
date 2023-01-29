<?php $this->layout('template', ['title' => "Cadastro"]); 
use Source\Utils\Csrf;?>
<h1 class="text-center">Cadastro Teste</h1>
<div class="container">
    <div class="row">
        <div class="md-4">
            <form action="" method="POST">
                <?php Csrf::tokenCsrf(); ?>
                <input type="hidden" name="token" value="<?= Csrf::getToken() ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

