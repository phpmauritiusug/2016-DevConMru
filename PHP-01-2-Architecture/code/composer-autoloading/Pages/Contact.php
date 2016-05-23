<?php

namespace Pages;

class Contact extends PageModel
{
    public $title = 'Get in touch!';

    public function prerender()
    {
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
    }
}
