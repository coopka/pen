<?php
    date_default_timezone_set('American/Chicago');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style type="text/css">
        .img_center
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 50%;
        }

        .pos_cen
        {
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="pos_cen">
    <h1>ooooooo my bellayyy</h1>

    <h2>What the fart?</h2>

    <img class="img_center" src="hank.png" alt="Hank but Awesome...." height="400" width="400">

    <h1>click me to see the real bellayyy rub....</h1>
    <h1><a href="https://www.youtube.com/watch?v=QxJTur-zfKs">hank</a></h1>

    <h1>click to learn the truth about the mysterious hank...</h1>
    <h1><a href="about.php">about hank</a></h1>
</div>
</body>
<body>

<?php
echo "<form> 
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea>
</form>";
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $servername = "localhost";
    $username = "peen";
    $password = "Iamcarton!";
    $dbname = "myDB";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
</body>
</html>