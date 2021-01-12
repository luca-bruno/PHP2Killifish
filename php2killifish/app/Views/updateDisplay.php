<body>
    <div class="container content">
        <div class="mt-5 pt-1 pb-5">
            <div class="boxBorder">
                <a href="updates">Back</a>
                <br>
                <img class="imageCenter" alt="Latest Update" src="https://i.pravatar.cc/150?img=50">
                <h2 class="text-center"> <?= esc($news['newsTitle']); ?></h2>
                <h6 class="text-center"> <?= esc($news['userFirstName']); ?> <?= esc($news['userLastName']); ?> (<?= esc($news['userScreenName']); ?>)</h6>
                <hr>
                <p class="text-center"><?= esc($news['newsDescription']); ?>
                </p>
            </div>
        </div>
    </div>
</body>