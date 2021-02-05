<body>
    <!-- Post -->
    <div class="container content">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-8 mt-5 pt-3 pb-3">

            <a class="expandMenuButton p-3" href="<?= base_url('/community'); ?>">Back</a>   
            
            <div class="boxBorderPost">
                <?php
                // match filename of image path to postID
                    $id = esc($posts['postID']);
                    foreach(glob("uploads/posts/{$id}.*", GLOB_NOSORT) as $image)  {
                        $image_path = base_url('') . '/' . $image; 
                        echo '<img class="postImage" src="' . $image_path . '">';
                    }
                ?>

                <h3 class="px-3 pt-3"><?= esc($posts['postTitle']); ?></h3>
                <p class="px-3"><?= esc($posts['postDescription']); ?></p>
                <hr>
                <div class="row">
                    <div class="col-12 col-sm-4 ">
                    <?php
                        $id = esc($posts['postAuthor']);
                        
                        $image_defaultpath = base_url('') . '/' . 'uploads/avatars/default.png'; 
                        $image_path = NULL;
                        foreach(glob("uploads/avatars/{$id}.*", GLOB_NOSORT) as $image)  {
                            $image_path = base_url('') . '/' . $image; 
                        }
                            if($image_path != NULL){
                                echo '<img class="avatar ml-3 mr-2" src="' . $image_path . '">';
                            } else {
                                echo '<img class="avatar ml-3 mr-2" src="' . $image_defaultpath . '">';
                            }
                    ?> 
                        <strong><?= esc($posts['userScreenName']); ?></strong>
                    </div>
                    <!-- <div class="col-12 col-sm-8 text-right">
                        <button type="submit" > <i  class="material-icons">thumb_up</i></button>
                        <button type="submit" > <i  class="material-icons">thumb_down</i></button>
                    </div> -->
                </div>
            </div>
            
            
            <div class="boxBorder" >
                <!--  New comment input -->
                <?php if (isset($_SESSION['userScreenName'])): ?>
                <div class="row">
                    <form class="w-100" action="<?= base_url('/postDisplay') ?>" method="post">
                        <div class="col-12">

                            <div class="form-group px-3 pt-3">
                                <label for="commentDescription">Comments</label>
                                <textarea type="text" class="form-control" name="commentDescription" id="commentDescription" ></textarea>
                                <input type="hidden" name="parent-post-id" value="<?= esc($posts['postID']); ?>">
                            </div>
                            <!-- if validation fails, CI method listErrors() echoes validation faults  -->
                        
                            <?php if (isset($validation)): ?>
                                    <div class="col-12">
                                        <div class="alert alert-danger">
                                            <?= $validation->listErrors() ?>
                                        </div>
                                    </div>
                            <?php endif; ?>

                            <div class="pr-3">
                                <button class="btn btn-info float-right " type="submit"> <i  class="material-icons submit-arrow ">arrow_forward</i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php endif; ?>

                <hr>
                <!-- Previously posted comments -->
                <?php if (!empty($comments) && is_array($comments)): ?>
                    <?php foreach (($comments) as $comment_item): ?>
                        <?php if ($comment_item['commentParent'] == $posts['postID']): ?>
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <?php
                                        $id = esc($comment_item['commentAuthor']);

                                        $image_defaultpath = base_url('') . '/' . 'uploads/avatars/default.png'; 
                                        $image_path = NULL;
                                        foreach(glob("uploads/avatars/{$id}.*", GLOB_NOSORT) as $image)  {
                                            $image_path = base_url('') . '/' . $image; 
                                        }
                                            if($image_path != NULL){
                                                echo '<img class="avatar ml-3 mr-2" src="' . $image_path . '">';
                                            } else {
                                                echo '<img class="avatar ml-3 mr-2" src="' . $image_defaultpath . '">';
                                            }
                                    ?> 
                                
                                    <strong> <?= esc($comment_item['userScreenName']); ?> </strong>
                                    <p class="ml-3 mt-3"><?= esc($comment_item['commentDescription']); ?></p>
                                    <br>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>    
</body>