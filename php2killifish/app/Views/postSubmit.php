
    <div class="container mt-3 content">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            
            <div class="row mb-3 boxBorder">
                <a href="community">Back</a>
                <br> 
                <div class="container">
                    <h2 class="text-center">Community</h2>
                    <h3 class="text-center">Post Form</h3>
                    <hr>
                </div>
                <form class="w-100" action="postSubmit" method="post">
                    <div class="form-group">
                        <label class="center" for="postTitle">Title</label>
                        <input type="text" class="form-control" name="postTitle" id="postTitle" value="<?= set_value('postTitle') ?>">
                    </div>

                    <div class="form-group">
                        <label for="postDescription">Description</label>
                        <textarea type="text" class="form-control" name="postDescription" id="postDescription" ><?php echo set_value('postDescription'); ?></textarea>
                    </div>
                    <!-- 
                    <div class="form-group">
                        <label for="media"></label>
                        <input type="file" class="form-control-file" placeholder="Enter Media" name="media" required>
                    </div> -->

                    <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary mt-3">Create Post</button>
                </form>
            </div>
        </div>
    </div>