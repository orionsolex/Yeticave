<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$is_auth = (bool)rand(0, 1);
date_default_timezone_set("Europe/Moscow");
$tomorrow = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
$estimateTime = date('H:i', (strtotime('tomorrow') - time()));

$title='Главная Говностраница';
$user_name = 'Константин';
$user_avatar = 'img/user.jpg';
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', "Инструменты", "Разное"];
$items = [
    ["Название" => "2014 Rossingol District Snowboard",
        "Категория" => "Доски и лыжи",
        "Цена" => 10999,
        "Url картинки" => "img/lot-1.jpg"

    ], ["Название" => "DC Ply Mens 20 16/ 20 17 Snowboard",
        "Категория" => "Доски и лыжи",
        "Цена" => 159999,
        "Url картинки" => "img/lot-2.jpg"

    ], ["Название" => "Креплен ия Union Contact Рго 2015 года размер L/XL",
        "Категория" => "Крепления",
        "Цена" => 8000,
        "Url картинки" => "img/lot-3.jpg"

    ], ["Название" => "Ботинки для сноуборда DC Mutiny Charocal",
        "Категория" => "Ботинки",
        "Цена" => 10999,
        "Url картинки" => "img/lot-4.jpg"

    ], ["Название" => "Куртка для сноуборда ОС Mutiny Charocal",
        "Категория" => "Одежда",
        "Цена" => 7500,
        "Url картинки" => "img/lot-5.jpg"

    ], ["Название" => "Маска Oakley Сапору",
        "Категория" => "Разное",
        "Цена" => 5400,
        "Url картинки" => "img/lot-6.jpg"

    ],
];
