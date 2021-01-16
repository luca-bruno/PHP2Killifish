
<body>
    <div class="container content">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3">
            <div class="boxBorder" >
                <a  href="<?= base_url('/community'); ?>">Back</a>
                <br>
                <img class="imageCenter" alt="Post1" src="https://i.pravatar.cc/150?img=50">
                    <h3 ><?= esc($posts['postTitle']); ?></h3>
                    <p><?= esc($posts['postDescription']); ?></p>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <i class="material-icons">face</i> <?= esc($posts['userScreenName']); ?>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <button type="submit" > <i  class="material-icons space">thumb_up</i></button>
                            <button type="submit" > <i  class="material-icons space">thumb_down</i></button>
                        </div>
                    </div>
            </div>
            <div class="boxBorder" >
                <div class="row">
                    <form class="w-100" action="/" method="post">
                        <div class="col-12">
                            <i class="material-icons">face</i> User_logedIn
                            <div class="form-group">
                                <label for="comment"></label>
                                <textarea type="text" class="form-control" name="comment" id="comment" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12 text-right">
                                <button type="submit"> <i  class="material-icons space">arrow_forward</i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="row">
                        <div class="col-12 col-sm-8">
                            <i class="material-icons">face</i> User2:
                            <p>Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.</p>
                        </div>
                        <div class="col-12 col-sm-4 text-right">
                            <button type="submit" > <i  class="material-icons space">thumb_up</i></button>
                            <button type="submit" > <i  class="material-icons space">thumb_down</i></button>
                        </div>
                    </div>
            </div>
        </div>
    </div>    
</body>