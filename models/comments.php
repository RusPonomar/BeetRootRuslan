<?php
class Comments
{
    public function setComments($conn)
    {
        if (isset($_POST['commentSubmit'])) {
            $id = $_POST['id'];
            $text = $_POST['text'];
            $author_name = $_POST['author_name'];

            $sql = "INSERT INTO comments (id, text, author_name) VALUES ('$id', '$text', '$author_name')";
            $result = $conn->query($sql);
        }
    }
}