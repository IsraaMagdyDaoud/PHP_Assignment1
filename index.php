<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Day1</h1>
        <?php
        //Show your phpinfo on browser.
        phpinfo();
        echo '<br>';
        //Use constants to display your website name which mustn’t change across your pages.
        define('WEBSITE_NAME', 'PHP_lab1');
        echo WEBSITE_NAME;
        //Show your server name
        echo "<br>Server Name: ";
        echo  $_SERVER['SERVER_NAME'];
        //Show your server address
        echo "<br>Server Address: ";
        echo  $_SERVER['SERVER_ADDR'];
        //Show your server port
        echo "<br>Server Port: ";
        echo $_SERVER['SERVER_PORT'];
        //Show your server filename and server path of the currently executing script
        echo "<br>Current Script Filename: ";
        echo basename(__FILE__);
        echo "<br>Current Script Full Path: ";
        echo  __FILE__;


        //Your brother is 10 years old, If you know that :
        // age less than 5 --> Print Msg --> Stay at home,
        // age equal 5 --> Print Msg --> Go to Kindergarden,
        // age between 6 & 12 --> Print Msg --> Go to grade :XXX
        // (Use switch case).
        $age = 10;
        switch ($age) {
            case ($age < 5):
                echo "<br>Stay at home";
                break;
            case 5:
                echo "<br>Go to Kindergarden";
                break;
            case ($age >= 6 && $age <= 12):
                echo "<br>Go to grade: ";
                echo ($age - 6); 
                break;
            default:
                echo "<br>too old";
        }
    
        
        ?>
    </body>
</html>
