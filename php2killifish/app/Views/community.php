
<body>
    <div class="container content">
        <div class="row mb-5"> 
            <div class="col-12 col-sm-8 offset-sm-2 col-md-8 mt-5 pt-3 pb-3">
                <div class="middleButton boxBorder createPost">
                    <a class="expandMenuButton" href="postSubmit">
                    <i class="material-icons">add_circle_outline</i>Create A Post</a>
                </div>
                <br>

                <?php if (!empty($posts) && is_array($posts)): ?>
                    <?php foreach (array_reverse($posts) as $post_item): ?>
                        <div class="container boxBorder" >
                            <img class="imageCenter" alt="Posts" src="https://i.pravatar.cc/150?img=50">
                                <h3><?= esc($post_item['postTitle']); ?></h3>
                                <p class="text-truncate"><?= esc($post_item['postDescription']); ?></p>
                                <hr>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <i class="material-icons">face</i> <?= esc($post_item['userScreenName']); ?>
                                    </div>
                                    <div class="col-12 col-sm-8 text-right">
                                        <button type="submit" > <i  class="material-icons space">thumb_up</i></button>
                                        <button type="submit" > <i  class="material-icons space">thumb_down</i></button>
                                        <a href="postDisplay/<?= esc($post_item['postSlug'], 'url'); ?>"><button type="submit" > <i  class="material-icons space">message</i></button></a>
                                    </div>
                                </div>
                        </div>
                        <br>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <h3>No News</h3>
                        <p>Unable to find any news for you.</p>
            <?php endif; ?>
            </div>
        </div>
    </div>    
</body>