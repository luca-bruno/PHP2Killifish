<body>
    <!-- Update Post -->
    <div class="container content">
        <div class="mt-5 pt-1 pb-5">
                <!-- back button -->
                <a class="expandMenuButton pl-2" href="<?= base_url('/updates'); ?>">Back</a>
            
            <div class="boxBorderPost">
                <?php
                // display image attached to update post
                // match filename of image path to newsID
                    $id = esc($news['newsID']);
                    foreach(glob("uploads/updates/{$id}.*", GLOB_NOSORT) as $image)  {
                        $image_path = base_url('') . '/' . $image; 
                        echo '<img class="postImage" src="' . $image_path . '">';
                    }
                ?>
                <h2 class="text-center px-3 pt-3"> <?= esc($news['newsTitle']); ?></h2>
                <!-- update post author (first name and username) -->
                <h6 class="text-center pt-1">by <strong>Mod <?= esc($news['userFirstName']); ?> </strong> (<strong><?= esc($news['userScreenName']); ?></strong>)</h6>
                <hr>
                <p class="text-justify px-3 pt-3"><?= esc($news['newsDescription']); ?>
                </p>
            </div>
        </div>
    </div>
</body>