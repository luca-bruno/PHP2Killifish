<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            
            <div class="row mb-3 boxBorder">
                <a href="community">Back</a>
                <br> 
                <div class="container">
                    <h2 class="text-center">Community</h2>
                    <h3 class="text-center">Post Form</h3>
                    <hr>
                </div>
                <form class="w-100" action="/" method="post">
                    <div class="form-group">
                        <label class="center"for="title"></label>
                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="description"></label>
                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Desription"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="media"></label>
                        <input type="file" class="form-control-file" placeholder="Enter Media" name="media" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Create Post</button>
                </form>
            </div>
        </div>
    </div>
</body<