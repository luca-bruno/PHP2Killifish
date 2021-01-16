<div class="">
    <div class="container">
        <div class="mt-5 pt-1 pb-1">
            <?php if (session()->get('userIsAdmin')): ?>
                <div class="middleButton boxBorder createPost">
                    <a class="expandMenuButton" href="updateSubmit">
                    <i class="material-icons">add_circle_outline</i>Create A Post</a>
                </div>

            <?php endif ?>

            <br>
            <?php if (!empty($news) && is_array($news)): ?>
                <div class="col-md boxBorder">
                    <img class="imageCenter" alt="Latest Update" src="https://i.pravatar.cc/150?img=50">
                    <br>
                    <h2 class="text-center"><?= esc(end($news)['newsTitle']); ?></h2>
                    <hr>
                    <div class="main text-center text-truncate" >
                        <?= esc(end($news)['newsDescription']); ?>
                    </div>
                    <div class="text-right">
                        <a class="expandMenuButton" href="updateDisplay/<?= esc(end($news)['slug'], 'url'); ?>">Read More</a>
                    </div>
                </div>
                <?php else: ?>
                    <h3>No News</h3>
                    <p>Unable to find any news for you.</p>
            <?php endif; ?>

        <br>

        <div class="row">
            <?php if (!empty($news) && is_array($news)): ?>
                <?php foreach (array_slice(array_reverse($news),1) as $news_item): ?>
                    <div class="col-md-4 mb-4">
                        <div class="col-md-12 boxBorder">
                            <img class="imageCenter" alt="Older Update" src="https://i.pravatar.cc/150?img=50">
                            <h2><?= esc($news_item['newsTitle']); ?></h2>
                            <hr>
                            <div class="main text-truncate">
                                <?= esc($news_item['newsDescription']); ?>
                            </div>
                            <!-- button -->
                            <div class="text-right">
                                <a class="expandMenuButton" href="updateDisplay/<?= esc($news_item['slug'], 'url'); ?>">Read More</a>
                            </div>
                            <!-- <p> <a href="/ci-news/public/news/view/">View Article</a></p> -->
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php else: ?>
                    <h3>No News</h3>
                    <p>Unable to find any news for you.</p>
            <?php endif; ?>
        </div>
        <br>
    </div>
</div>