<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="comment.css">
</head>
<body>
    <div>
        <h1>Jared & Josh's Resort</h1>

        <nav></nav>

    <?php
    // $name = null;
    // $phone = null;
    // $email = null;
    // $comments = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        if (($name != null) and ($comments != null)) {
            echo "<h2>Dear $name, thank you for your comments.</h2>";
        } elseif(($email != null) and ($comments != null)) {
            echo "<h2>Dear $email, thank you for your comments.</h2>";
        } elseif(($phone != null) and ($comments != null)) {
            echo "<h2>Dear guest, thank you for your comments.</h2>";
        } elseif(($comments != null)) {
            echo "<h2>Dear guest, thank you for your comments.</h2>";
        } else {
            echo "<h2>Dear guest, please enter your comments.</h2>";
        }
    } else {
        echo "<h2>We treasure your comments</h2>";
    }
    ?>

        <form action="" method="post">
            <p>
                <label for="name">Name:</label>
                <input class="extend" type="text" name="name" id="name">
            </p>
            <p>
                <label for="phone">Phone:</label>
                <input class="extend" type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </p>
            <p>
                <label for="email">E-mail Address:</label>
                <input class="extend" type="email" name="email" id="email" placeholder="name@domain.com">
            </p>
            <p>
                <label class="boxarea" for="comments">Your comments:</label>
                <textarea class="extend" name="comments" id="comments" rows="20"></textarea>
            </p>
            <p>
                <label for=""></label>
                <input class="button" type="submit" value="Submit Comments">
            </p>
        </form>
    </div>
</body>

<footer>
    <p>Copyright &copy; 2023 Jared & Josh's Resort</p>
    <p>email:kruegelj1@montclair.edu</p>
    <p>email:WRITE YOUR EMAIL HERE</p>
</footer>
</html>
