<?php

use Alex\Habr\Post\Post;
use Alex\Habr\Post\Comment;
use Alex\Habr\User\User;

include __DIR__ . "/vendor/autoload.php";

$faker = Faker\Factory::create('ru_RU');
$user = new User(
    $faker->firstName('male'),
    $faker->lastName('male')
);

$route = $argv[1] ?? null;

switch ($route) {
    case "post":
        $post = new Post(
            $user,
            $faker->realText(10),
            $faker->realText(100)
        );
        echo $post;
        break;
    case "comment":
        $comment = new Comment(
            $user,
            $faker->randomDigit(),
            $faker->realText(25)
        );
        echo $comment;
        break;
    case "user":
        echo $user;
        break;
    default:
        echo "only user, comment or post allowed";
}