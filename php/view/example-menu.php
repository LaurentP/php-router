<?php
$baseDirectory = trim($_SERVER['REQUEST_URI'], '/');
$baseDirectory = str_replace('/post/lorem-ipsum-123', '', $baseDirectory);
$baseDirectory = str_replace('/post', '', $baseDirectory);
$baseDirectory = str_replace('/user/123', '', $baseDirectory);
$baseDirectory = str_replace('/user', '', $baseDirectory);
?>

<ul>
    <li><a href="/<?= $baseDirectory ?>">Home</a></li>
    <li><a href="/<?= $baseDirectory ?>/post">Post</a></li>
    <li><a href="/<?= $baseDirectory ?>/post/lorem-ipsum-123">Post with slug</a></li>
    <li><a href="/<?= $baseDirectory ?>/user">User</a></li>
    <li><a href="/<?= $baseDirectory ?>/user/123">User with id</a></li>
</ul>