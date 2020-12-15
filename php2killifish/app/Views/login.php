<div class="container">
    <div class="row mb-5"> 
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white">
            <div class="container">
                <h3>Login</h3>
                <hr>
                <!-- if session is active, display flashdata 'success' -->
                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <form class="" action="login" method="post">
                    <div class="form-group">
                        <label for="userScreenName">Username</label>
                        <input type="text" class="form-control" name="userScreenName" id="userScreenName" value="<?= set_value('userScreenName') ?>">
                    </div>
                    <div class="form-group">
                        <label for="userPassword">Password</label>
                        <input type="password" class="form-control" name="userPassword" id="userPassword" value="">
                    </div>
                    <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" >
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="register">Not signed up?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

