<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName ?></title>
</head>
<body>
    <div class="container">
        <nav class="nav">
        <span> <a href="index.php">library</a> </span>

<ul>
<li><a href="index.php" data-type="home"  <?php if($pageName=='home'){ echo 'class="active"';} ?> >home</a></li>
<li><a href="retrieve.php"data-type="books"  <?php if($pageName=='books'){ echo 'class="active"';} ?>>books</a></li>
</ul>
</nav>



    </div>
    
