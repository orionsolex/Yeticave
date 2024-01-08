<?php
require_once('funcs.php');
require_once('config.php');
require_once('data.php');


$page = include_template('templates/index.php',
    ['$categories' => $categories ?? [],
        '$items' => $items ?? [],
        '$estimateTime' => $estimateTime ?? '',
        '$tomorrow' => $tomorrow ?? 0]);
$layout = include_template('templates/layout.php', [
    '$content' =>
        $page,
    '$title' =>
        $title ?? '',

]);

print ($layout);
?>

