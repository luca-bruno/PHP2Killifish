    <div class="container content">
        <div class="row mb-5"> 
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3">
            <?php if (isset($_SESSION['userScreenName'])): ?>    
                <div class="middleButton boxBorderPost createPost pt-3">
                    <a class="expandMenuButton" href="postSubmit">
                    <i class="material-icons">add_circle_outline</i>Create A Post</a>
                </div>
                <?php endif; ?>
                <br>

                <?php if (!empty($posts) && is_array($posts)): ?>
                    <?php foreach (array_reverse($posts) as $post_item): ?>
                        <div class="boxBorderPost">
                            <?php
                            // match filename of image path to postID
                                $id = esc($post_item['postID']);
                                foreach(glob("uploads/posts/{$id}.*", GLOB_NOSORT) as $image)  {
                                    $image_path = base_url('') . '/' . $image; 
                                    echo '<img class="postImage" src="' . $image_path . '">';
                                }
                            ?>

                            <h3 class="px-3 pt-3"><?= esc($post_item['postTitle']); ?></h3>
                            <p class="text-truncate px-3"><?= esc($post_item['postDescription']); ?></p>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-sm-8 pl-3">
                                <?php
                                    $id = esc($post_item['postAuthor']);
                                    
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
                                    
                                // else if id == empty
                                ?> 
                                    <strong><?= esc($post_item['userScreenName']); ?></strong>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <!-- <button type="submit" > <i  class="material-icons">thumb_up</i></button>
                                    <button type="submit" > <i  class="material-icons">thumb_down</i></button> -->
                                    <a class="expandMenuButton float-right pr-3 mt-3" href="postDisplay/<?= esc($post_item['postSlug'], 'url'); ?>"><i  class="material-icons">message</i></a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <h3 style="color: #C1f6ED">No Community Posts</h3>
                            <p style="color: #C1f6ED">Unable to find any community posts.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>