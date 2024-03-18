<?php

namespace Src;

class Post
{
    public $id;
    public $title;
    public $body;
    public $updated_at;
    public $created_at;

    const TABLE = 'posts';

    public static $pdo;

    public static function getAll()
    {
        // $stmt = self::$pdo->prepare("SELECT * FROM WHERE id = ?");
        // $stmt = self::$pdo->prepare("SELECT * FROM ${self::TITLE}");
        $stmt = self::$pdo->prepare("SELECT * FROM posts");
        // $stmt->execute([$id]);
        $stmt->execute();
        // $user = $stmt->fetch();
        $posts = $stmt->fetchAll();

        return $posts;
    }
}
