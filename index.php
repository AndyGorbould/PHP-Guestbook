<?php
require('./message.php')

// $file = './messages.txt';
// // Open the file to get existing content
// $current = file_get_contents($file);
// // Append a new person to the file
// $current .= "John Smith\n";
// // Write the contents back to the file
// file_put_contents($file, $current);




if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $time = $_POST['name'];
    $currentMessage = new Message($name, $title, $message, $time);
    echo $currentMessage; // 

    // this probably won't work, but let's find out
    $currentMessageSerialized = serialize($currentMessage);
    $file = './messages.txt';
    $fileData = file_get_contents($file);
    $fileData .= $currentMessage;
    file_put_contents($file, $fileData);
}



?>


<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Guestbook</title>
</head>
<body>
    <h1>PHP Guestbook</h1>
    <form action="" method="POST">
        NAME: <input type="text" id="name"/>
        TITLE: <input type="text" id="title"/>
        MESSAGE: <input type="text" id="message"/>
        <button id="submit">SUBMIT</button>
    </form>


    <div id="target">THIS IS WHERE THE MESSAGES WILL GO (hopefully)</div>
    
</body>
</html>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  -->