<div class="">
    <div class="container">
        <div class="mt-5 pt-1 pb-1">
            <?php if (session()->get('userIsAdmin')): ?>
                <div class="middleButton boxBorder">
                    <i  class="material-icons ">add_circle_outline</i>
                    <a href="updateSubmit">Create A Post</a>
                </div>

            <?php endif ?>

            

            <br>
            <!-- <div class="col-md boxBorder">
                <img class="imageCenter" alt="Latest Update" src="https://i.pravatar.cc/150?img=50">
                <br>
                <h2 class="text-center"> Latest Update</h2>
                <hr>
                <p class="text-center">Some text that describes me lorem ipsum ipsum lorem.</p>
                <a href="updateDisplay">Read More</a>
            </div> -->
        </div>

        <br>

        <div class="row">
            <?php if (!empty($news) && is_array($news)): ?>
                <?php foreach ($news as $news_item): ?>
                    <div class="col-md-4">
                        <div class="col-md-12 boxBorder">
                            <img class="imageCenter" alt="Older Update" src="https://i.pravatar.cc/150?img=50">
                            <h2><?= esc($news_item['newsTitle']); ?></h2>
                            <div class="main" >
                                <?= esc($news_item['newsDescription']); ?>
                            </div>
                            <!-- button -->
                            <a href="updateDisplay/<?= esc($news_item['slug'], 'url'); ?>">Read More</a>
                            
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