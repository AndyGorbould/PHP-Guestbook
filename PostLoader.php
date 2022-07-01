<?php
class PostLoader
{
    public function savePost(Post $post)
    { // (file put, serialize)
        $file = './messages.txt';
        file_get_contents($file);
        $file .= $post->getMessage();
        $fileData = serialize($this->fileData)
        file_put_contents($file, $fileData); // why redline?
    }

    public function loadPost()
    { // (file get, unserialize)
        file_get_contents($file);
    }
}




// $currentMessageSerialized = serialize($currentMessage);
//         $file = './messages.txt';
//         $fileData = file_get_contents($file);
//         $fileData .= $currentMessage;
//         file_put_contents($file, $fileData);
    