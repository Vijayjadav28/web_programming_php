<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
            color:blue;
           font-size: 48px;
            margin: 0;
        }
        #clock {
            background: aqua;
            padding: 20px;
            border-radius: 10px;
        
        }
    </style>
</head>
<body>
    <div id="clock">
        <?php
        date_default_timezone_set('UTC'); // Set timezone, change 'UTC' to your preferred timezone
        echo date('H:i:s'); // Display time in 24-hour format with hours, minutes, and seconds
        ?>
    </div>
</body>
</html>
