# php-guestbook
Title: PHP Guestbook

Learning objectives

-Storing data in files
-Converting complex constructs (array/objects) to string representation.
-Deliver a project under a strict deadline

To DO

- 2 classes : PostLoader & Post

- Posts must have: - title
                   - date
                   - content
                   - author name

- the messages are sorted from new(at top) to old (at bottom)

- the script can handle site defacement attacks: have to use htmlspecialchars()

- only show the lastest 20 posts.

suggested tips to complete this exercise
- use file_put_contents() to store the messages
- use json_encode() or serialize() to convert array to a string.
