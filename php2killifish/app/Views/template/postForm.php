<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
    <link rel="stylesheet" href="<?php echo base_url('css/base.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>

<body>
    <div class="centered">
        <div>
            <h2 class="text-center">Community</h2>
        </div>
        <div>
            <h3 class="text-center">Post Form</h3>
        </div>
    
        <div class="table" >
            <form  action="/action_page.php" method="get">
                <label class="center"for="title"></label>
                <input type="text" placeholder="Title" name="title" required>
                <br>
                <label for="description"></label>
                <textarea name="description" id="description" cols="50" rows="10" ></textarea>
                <br>
                <label for="media"></label>
                <input type="file" placeholder="Enter Media" name="media" required>
                <br>
                <button type="submit">Create Post</button>
            </form>
        </div>
    </div>
</body<