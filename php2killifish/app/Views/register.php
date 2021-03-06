<div class="container">
    <div class="row mb-5"> 
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3">
            <div class="container boxBorder">
                <h3>Register</h3>
                <hr>
                <!-- register form -->
                <form class="" action="register" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="userFirstName">First Name</label>
                                <input type="text" class="form-control" name="userFirstName" id="userFirstName" value="<?= set_value('userFirstName') ?>"> 
                                <!-- set_value() to retain inputted data in field, in case of failed register validation -->
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
                        <div class="col-12 col-sm-6 mt-4 pt-2">
                            <div class="custom-file">
                                <label for="image" class="custom-file-label">Upload avatar</label>
                                <input type="file" class="custom-file-input" name="image" id="image">
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
                        
                        <!-- if validation has been submitted (post-register attempt), CI method listErrors() echoes validation faults  -->
                        <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <button type="submit" class="btn btn-info">Register</button>
                            </div>
                            <div class="col-12 col-sm-8 text-right">
                                <a class="createPost" href="login">Already got an account?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

