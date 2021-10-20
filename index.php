<?php

require('./config/app.php');

// I typically try to do all the DB work at the top of the page, so I can report errors before displaying content
// this loads the 50 most recent podcasts into the $podcasts as an array

$podcasts_class = new Podcasts();
$podcasts = $podcasts_class->getRecent(50);	

?>
<!doctype html>
<html lang="en">
<head>
<title>My Sample Page</title>
<meta name="keywords" content="some, keywords, here">
<meta name="description" content="This is my description">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<?php require('./tpl-header.php'); ?>
<table>
  <tr>
    <th>Name</th>
    <th>Date</th>
    <th>Author</th>
  </tr>
 <?php foreach($podcasts as $podcast) { ?>
  <tr>
    <td><?= $podcast['name'] ?></td>
    <td><?= $podcast['date'] ?></td>
    <td><?= $podcast['author'] ?></td>
  </tr>
<?php } ?>
</table>
<?php require('./tpl-footer.php'); ?>
</body>
</html>
