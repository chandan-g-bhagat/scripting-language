<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
        //array example
        $day[0]= "Sunday";
        $day[1]= "Monday";
        $day[2]= "Tuesday";
        $day[3]= "Wednesday";
        $day[4]= "Thursday";
        $day[5]= "Friday";
        $day[6]= "Saturday";

        echo $day[5];
        //to clear the array
        //unset($day);
        var_dump($day);


        //array with key
        $a_day["day1"]= "Sunday";
        $a_day["day2"]= "Monday";
        $a_day["day3"]= "Tuesday";
        $a_day["day4"]= "Wednesday";
        $a_day["day5"]= "Thursday";
        $a_day["day6"]= "Friday";
        $a_day["day7"]= "Saturday";

    ?>
</body>
</html>