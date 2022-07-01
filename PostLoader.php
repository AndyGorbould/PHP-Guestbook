<?php
class PostLoader
{
        private const $file = './messages.txt'; // why redlines?
        private array $fileData = [];

            // CONSTRUCT
    public function __construct($fileData)
	{
		$this->fileData = $fileData;
	}

    public function savePost($currentMessage)
    { // (file put, serialize)
        $fileData = serialize($this->fileData)
        file_put_contents($file, $this->fileData[]); // why redline?
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
    