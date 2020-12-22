    <div class="container mt-3">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            <div class="row mb-3 boxBorder">
                <a href="updates">Back</a>
                <br> 
                <div class="container">
                    <h2 class="text-center">Update</h2>
                    <h3 class="text-center">Post Form</h3>
                    <hr>
                </div>
                <form class="w-100" action="updateSubmit" method="post">
                    <div class="form-group">
                        <label class="center" for="newsTitle">Title</label>
                        <input type="text" class="form-control" name="newsTitle" id="newsTitle" value="<?= set_value('newsTitle') ?>">
                    </div>

                    <div class="form-group">
                        <label for="newsDescription">Description</label>
                        <textarea type="text" class="form-control" name="newsDescription" id="newsDescription" ><?php echo set_value('newsDescription'); ?></textarea>
                    </div>
                    
                    <!-- <div class="form-group">
                        <label for="newsImage"></label>
                        <input type="file" class="form-control-file" placeholder="Enter Media" name="media">
                    </div> -->                    
                    
                        <!-- if validation fails, CI method listErrors() echoes validation faults  -->
                    
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