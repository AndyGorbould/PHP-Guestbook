# PHP-Guestbook




### Objectives:
- Storing data in files
- Converting complex constructs (array/objects) to string representation.
- Deliver a project under a strict deadline


### Notes:
- file_put_contents() for storing the messages on the system
- json_encode() or serialize() string conversion of the array
- include('filename.php') will insert that partial into html (header/footer in this case)


### Must Haves:
- Posts must have the following attributes:
    - Title
    - Date
    - Content
    - Author name

- Use at least 2 classes: PostLoader & Post
- The messages are sorted from new (top) to old (bottom).
- Make sure the script can handle site defacement attacks: use htmlspecialchars()
- Only show the latest 20 posts.