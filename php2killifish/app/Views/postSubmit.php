    <!-- deny access if user is not logged in, making it inaccessible through URL -->
    
    <?php if (isset($_SESSION['userScreenName'])): ?>
        
        <div class="container mt-3 content">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            
            <div class="row mb-3 boxBorder">
                <a class="expandMenuButton" href="community">Back</a>
                <br> 
                <div class="container">
                    <h2 class="text-center">Community</h2>
                    <h3 class="text-center">Post Form</h3>
                    <hr>
                </div>
                <form class="w-100" action="postSubmit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="center" for="postTitle">Title</label>
                        <input type="text" class="form-control" name="postTitle" id="postTitle" value="<?= set_value('postTitle') ?>">
                    </div>

                    <div class="form-group">
                        <label for="postDescription">Description</label>
                        <textarea type="text" class="form-control" name="postDescription" id="postDescription" ><?php echo set_value('postDescription'); ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-file">
                            <label for="image" class="custom-file-label">Upload image</label>
                            <input type="file" class="custom-file-input" name="image" id="image">
                    </div>

                    <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary mt-3">Create Post</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php else: ?>

    <?php throw new \CodeIgniter\Router\Exceptions\RedirectException('community'); ?>
    <!-- throws CI exception to automatically redirect to update page, should user accessing through directory/URL not have admin privileges or is not logged in -->


    <?php endif; ?>