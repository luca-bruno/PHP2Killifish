<div class="container">
    <div class="row"> 
        <div class="col-12 cold-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form class="" action="register" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="userFirstName">First Name</label>
                                <input type="text" class="form-control" name="userFirstName" id="userFirstName" value="<?= set_value('userFirstName') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="userLastName">Last Name</label>
                                <input type="text" class="form-control" name="userLastName" id="userLastName" value="<?= set_value('userLastName') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="userScreenName">Username</label>
                                <input type="text" class="form-control" name="userScreenName" id="userScreenName" value="<?= set_value('userScreenName') ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="userEmail">Email address</label>
                            <input type="text" class="form-control" name="userEmail" id="userEmail" value="<?= set_value('userEmail') ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="userEmail_confirm">Confirm Email address</label>
                            <input type="text" class="form-control" name="userEmail_confirm" id="userEmail_confirm" value="<?= set_value('userEmail_confirm') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="userPassword">Password</label>
                                <input type="password" class="form-control" name="userPassword" id="userPassword" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="userPassword_confirm">Confirm Password</label>
                                <input type="password" class="form-control" name="userPassword_confirm" id="userPassword_confirm" value="">
                            </div>
                        </div>
                        <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" >
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <div class="col-12 col-sm-8 text-right">
                                <a href="login">Login here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

