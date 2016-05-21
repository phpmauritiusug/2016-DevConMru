<?php

if (!empty($_POST['email']) && !empty($_POST['message'])) {
    // Here we are sure the both of these indexes exists
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Connecting to MySQL server
    $connection = mysqli_connect('localhost', 'root', 'root', 'scotchbox');

    // Escaping special characters for use in an SQL statement
    $escapedEmail = mysqli_real_escape_string($connection, $email);
    $escapedMessage = mysqli_real_escape_string($connection, $message);

    // Creating the MySQL query to insert new data
    $query = 'INSERT INTO contact (id, email, message) VALUES (NULL, "'.$escapedEmail.'", "'.$escapedMessage.'");';

    // Querying the server again
    if (mysqli_query($connection, $query) !== true) {
        exit('Sorry, but I was unable to store your data on the server.');
    }

    // Know what? Here PHP just did the job!
    exit('Thank you! I will get in touch with you as soon as possible. <a href="/">Got that</a>');
}

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
            <div class="row">
                <div class="col-xs-3">&nbsp;</div>
                <div class="col-xs-6">
                    <h1>Get in touch</h1>
                    <p>Simply fill-in this form to contact me.</p>
                    <form method="POST" class="form-horizontal" style="margin-top: 30px;">
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Type in your email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea name="message" class="form-control" id="inputMessage" placeholder="Your message here" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Contact</button>
                                <span class="pull-right" style="margin-top: 10px"><a href="/">Back to homepage</a></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-3">&nbsp;</div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>