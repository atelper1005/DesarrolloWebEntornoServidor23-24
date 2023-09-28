<!DOCTYPE html>
<html>
<head>
    <title>Información de PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #phpinfo {
            text-align: left;
        }
    </style>
</head>
<body>
    <div id="phpinfo">
        <?php
        phpinfo();
        ?>
    </div>
</body>
</html>
