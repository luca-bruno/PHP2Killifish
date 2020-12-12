<!DOCTYPE html>
<html lang="en">
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
        <div class="row mb-5"> 
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3">
                <div class="middleButton boxBorder">
                    <i  class="material-icons ">add_circle_outline</i>
                    <a href="postSubmit">Create A Post</a>
                </div>
                <br>
                <div class="container boxBorder" >
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
                            <a href="postDisplay"><button type="submit" > <i  class="material-icons space">message</i></button></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container boxBorder" >
                    <img class="imageCenter" alt="Post2" src="https://i.pravatar.cc/150?img=50">
                    <h3 > Post2</h3>
                    <p>Some text that describes me lorem ipsum </p>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <i class="material-icons">face</i> User2
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <button type="submit" > <i  class="material-icons space">thumb_up</i></button>
                            <button type="submit" > <i  class="material-icons space">thumb_down</i></button>
                            <a href="postDisplay"><button type="submit" > <i  class="material-icons space">message</i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>