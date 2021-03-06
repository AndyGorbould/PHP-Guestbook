<?php
require_once('./Post.php');
require_once('./PostLoader.php'); // methods for:  get all messages from .txt -&- save in .txt

?>


<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Guestbook</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <?php include('./view/header.php') ?>

    <!-- Form -->
    <form method="POST">
        NAME: <input type="text" id="name" name="name" /></br>
        TITLE: <input type="text" id="title" name="title" /></br>
        MESSAGE: <input type="text" id="message" name="message" /></br>
        <button id="submit" name="submit">SUBMIT</button>
    </form>
    <!-- Form processing -->
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $title = $_POST['title'];
        $message = $_POST['message'];
        
        // grab the time!!
        date_default_timezone_set('Europe/Amsterdam');
        $time = date("D.d.F.Y");
        $currentMessage = new Post($name, $title, $message, $time);
        // $this->PostLoader->savePost($this->currentMessage);
        $save = new PostLoader;
        $save->savePost($currentMessage);
    }
    ?>

    <!-- Content -->
    <div id="target">Previous Messages:</div>
    <?php
    $load = new PostLoader;
    $loaded = $load->loadPost();       /// how to display with keys??

    
    foreach(array_reverse($loaded) as $singlePost) {
    
            echo '<div class="displayBox">'; // create div for each
    
            echo '<p class="displayName">Name: ';
            echo $singlePost->getName();
            echo '</p>';
    
            echo '<p class="displayTitle">Title: ';
            echo $singlePost->getTitle();
            echo '</p></br>';
    
            echo '<p class="displayMessage">Message: ';
            echo $singlePost->getMessage();
            echo '</p></br>';
    
            echo '<p class="displayTime">Time posted: ';
            echo $singlePost->getTime();
            echo '</p></br>';
    
            echo '</div>'; // close div tag
        }
    ?> 

    <!-- Footer -->
    <?php include('./view/footer.php') ?>
</body>

</html>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  -->