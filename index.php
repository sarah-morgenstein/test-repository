<?php 
// G =	24-hour format of an hour without leading zeros	0 through 23
$time_of_day = date('G');

// testing for different times of day to make sure greeting works correctly.
//$time_of_day = 10;
//$time_of_day = 15;
//$time_of_day = 20;

$greeting = '';

if ($time_of_day <= 11)
{//morning
$greeting = 'Top of the morning to you!';
}
elseif ($time_of_day <= 17 )
{//afternoon
$greeting = 'G \'day Mate!';
}
else {
//evening
$greeting = 'Good Evening!';
}

//n	Numeric representation of a month, without leading zeros	1 through 12

//$current_month = date('n');

// testing for different months to make sure image changes correctly
//$current_month = 1;
//$current_month = 4;
//$current_month = 7;
//$current_month = 11;


$hero_image = '';
$hero_alt = '';

if ($current_month <= 3)
{ //Q1
$hero_image = 'quarter-one.png';
$hero_alt = 'Winter Promotion';
}
elseif ($current_month <= 6)
{ //Q2
$hero_image = 'quarter-two.png';
    $hero_alt = 'Spring Promotion';
}
elseif ($current_month <= 9)
{ //Q3
$hero_image = 'quarter-three.png';
    $hero_alt = 'Summer Promotion';
}
else {

// Q4
$hero_image = 'quarter-four.png';
    $hero_alt = 'Fall Promotion';
}



?>
    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>PHP Practice</title>
        <link href='http://fonts.googleapis.com/css?family=Lato|Passion+One:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="container">

            <?php include 'includes/header.php'; ?>

                <section id="hero">


                    <img class="pure-img" src='images/<?php echo $hero_image ?>' alt='<?php echo $hero_alt ?>' />
                    <h1><?php echo $greeting; ?></h1>

                </section>

                <?php include 'includes/footer.php'; ?>

        </div>


    </body>

    </html>