    <!-- deny access if user is not admin, making it inaccessible through URL -->
    
    <?php if (session()->get('userIsAdmin')): ?>

        <div class="container mt-3 content">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
                <div class="row mb-3 boxBorder">
                    <!-- back button -->
                    <a class="expandMenuButton" href="updates">Back</a>
                    <br> 
                    <div class="container">
                        <h2 class="text-center">Update</h2>
                        <h3 class="text-center">Post Form</h3>
                        <hr>
                    </div>
                    <!-- new update post submission form -->
                    <form class="w-100" action="updateSubmit" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="newsTitle">Title</label>
                            <input type="text" class="form-control" name="newsTitle" id="newsTitle" value="<?= set_value('newsTitle') ?>">
                        </div>

                        <div class="form-group">
                            <label for="newsDescription">Description</label>
                            <textarea type="text" class="form-control" name="newsDescription" id="newsDescription" ><?php echo set_value('newsDescription'); ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class="custom-file">
                                    <label for="image" class="custom-file-label">Upload image</label>
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                </div>
                            
                        </div>           
                        
                        <!-- if validation fails, CI method listErrors() echoes validation faults  -->
                        
                        <?php if (isset($validation)): ?>
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                        <?php endif; ?>
                        
                        <button type="submit" class="btn btn-info mt-3 float-right">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php else: ?>

    <?php throw new \CodeIgniter\Router\Exceptions\RedirectException('updates'); ?>
    <!-- throws CI exception to automatically redirect to update page, should user accessing through directory/URL not have admin privileges or is not logged in -->


    <?php endif; ?>