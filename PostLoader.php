<?php
class PostLoader
{
    public function savePost(Post $post)
    {
        $file = './messages.txt';
        $fileGet = file_get_contents($file);
        $fileGetDecoded = json_decode($fileGet);
        $fileGetDecodedEncoded = json_decode(json_encode($fileGetDecoded), true);
        $postArray = array('name' => $post->getName(), 'title' => $post->getTitle(), 'message' => $post->getMessage(), 'time' => $post->getTime());
        $fileGetDecodedEncoded[] = $postArray;
        $encodedArray = json_encode($fileGetDecodedEncoded);
        file_put_contents($file, $encodedArray);
    }

    public function loadPost()
    {
        $stdClassPosts = json_decode(file_get_contents('./messages.txt'));
        $posts = [];
        foreach ($stdClassPosts as $stdClassPost) {
            $posts[] = new Post($stdClassPost->name, $stdClassPost->title, $stdClassPost->message, $stdClassPost->time);
        }
        return $posts;
    }
}