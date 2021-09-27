<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background:orange">
    <?php
while (have_posts()) {
    the_post(); ?>
    <h2 style="color:white;background:black"><?php the_title() ?></h2>
    <hr>
    <h2> <?php the_content() ?> </h2>
    <?php

}

?>
</body>

</html>