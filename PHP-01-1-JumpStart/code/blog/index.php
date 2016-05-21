<?php

$dir = '/var/www/blogposts';
$files = scandir($dir);
unset($files[0], $files[1]);

// We create an empty array
$byDateFiles = [];

// We loop on file names
foreach ($files as $fileName) {
    // We get the date of the file
    $date = filectime($dir.'/'.$fileName);
    // We use it as the array key
    $byDateFiles[$date] = [
        'date' => date('D, d M Y H:i:s', $date), // formatting date in natural language
        'name' => $fileName,
        'content' => nl2br(file_get_contents($dir.'/'.$fileName)) // getting file contents, with <br> instead of \r\n
    ];
}

// We order the array by its keys
ksort($byDateFiles);

// To finally reverse it (newer posts first!)
$orderedFiles = array_reverse($byDateFiles, true);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP - A Jumpstart Session</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container" style="margin-top: 30px;">
            <h1>This is my blog</h1>
            <p class="lead">You will find interested things on what I feel or like.</p>
            <p><a href="/contact">Get in touch</a>, or <a href="/">back to the homepage.</a></p>
            <hr/>
            <?php if (empty($orderedFiles)) { ?>
            <p style="text-align: center; margin-top: 60px;"><em>No blog posts for now...</em></p>
            <?php } else {
                foreach ($orderedFiles as $date => $file) { ?>
                    <h2><?php echo $file['name']; ?></h2>
                    <p class="small">Written: <?php echo $file['date']; ?></p>
                    <blockquote>
                        <p><?php echo $file['content']; ?></p>
                    </blockquote>
                <?php }
            } ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>