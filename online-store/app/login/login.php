<?php
    require_once "../../config.php";
    include "../../public/data.php";

    if(!isset($_SESSION)){
        session_start();
    }

    include "../layouts/header.php";
    include "../layouts/menu-cliente.php";

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Log-in</h1>
        </div>
    </div>
    <div class="mt-5">
        <form action="verify.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control"  name="inputEmail" id="inputEmail" required/>
                <label class="form-label" for="form2Example1">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control"  name="inputSenha" id="inputSenha" required/>
                <label class="form-label" for="form2Example2">Senha</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Log-in</button>
        </form>
    </div>
</div>