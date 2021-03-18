<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
</head>

<body>
    <?php
        include "Calender.php";
        $calender = new Calender();
        $month = $_POST["month"];
        $day = $_POST["day"];
        $result =  $calender->Showdate($month, $day);

        echo "<h1 id='month'>วัน $day</h1> ";
        echo "<h1 id='day'>เดือน $month</h1> ";
        echo "<h1 id='result'>$result</h1> ";
    ?>
</body>

</html>