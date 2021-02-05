<div>
    <div class="container">
        <div class="mt-5 pt-1 pb-1">
            <?php if (session()->get('userIsAdmin')): ?>
                <div class="middleButton boxBorderPost createPost pt-3">
                    <a class="expandMenuButton" href="updateSubmit">
                    <i class="material-icons">add_circle_outline</i>Create A Post</a>
                </div>

            <?php endif ?>

            <br>
            <?php if (!empty($news) && is_array($news)): ?>
                <div class="col-md boxBorderPost">
                    <?php
                    // match filename of image path to postID
                        $id = esc(end($news)['newsID']);
                        foreach(glob("uploads/updates/{$id}.*", GLOB_NOSORT) as $image)  {
                            $image_path = base_url('') . '/' . $image; 
                            echo '<img class="postImage" src="' . $image_path . '">';
                        }
                    ?>

                    <br>
                    <h2 class="text-center px-3 "><?= esc(end($news)['newsTitle']); ?></h2>
                    <hr>
                    <div class="main text-center text-truncate px-3 pt-1" >
                        <?= esc(end($news)['newsDescription']); ?>
                    </div>
                    <div class="text-right">
                        <a class="expandMenuButton pr-3" href="updateDisplay/<?= esc(end($news)['newsSlug'], 'url'); ?>">Read More</a>
                    </div>
                </div>
                <?php else: ?>
                    <h3>No Updates</h3>
                    <p>Unable to find any updates.</p>
            <?php endif; ?>

        <br>

        <div class="row">
            <?php if (!empty($news) && is_array($news)): ?>
                <?php foreach (array_slice(array_reverse($news),1) as $news_item): ?>
                    <div class="col-md-4 mb-4">
                        <div class="col-md-12 boxBorderPost">
                            <?php
                            // match filename of image path to newsID
                                $id = esc($news_item['newsID']);
                                foreach(glob("uploads/updates/{$id}.*", GLOB_NOSORT) as $image)  {
                                    $image_path = base_url('') . '/' . $image; 
                                    echo '<img class="postImage" src="' . $image_path . '">';
                                }
                            ?>
                            <h2 class="px-3 pt-3"><?= esc($news_item['newsTitle']); ?></h2>
                            <hr>
                            <div class="main text-truncate px-3 pt-0.5">
                                <?= esc($news_item['newsDescription']); ?>
                            </div>
                            <!-- button -->
                            <div class="text-right">
                                <a class="expandMenuButton pr-3" href="updateDisplay/<?= esc($news_item['newsSlug'], 'url'); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php else: ?>
            <?php endif; ?>
        </div>
        <br>
    </div>
</div>