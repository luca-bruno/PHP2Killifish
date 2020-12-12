<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3">
            <div class="boxBorder" >
                <a href="community">Back</a>
                <br>
                <img class="imageCenter" alt="Post1" src="https://i.pravatar.cc/150?img=50">
                    <h3 > Post1</h3>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <i class="material-icons">face</i> User1
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