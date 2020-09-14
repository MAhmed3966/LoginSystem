<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
<!--    <input type="text"-->
<!--    name="token" value="-->
    <h1 hidden>
        <?php
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }
        ?>
    </h1>
     <input type="hidden" value="<?php echo  generate_string($permitted_chars,64);  ?> "
     name="token" hidden>
    <input type="email" name="email" >
    <input type="password" name="pass">
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
