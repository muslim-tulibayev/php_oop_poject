<?php

use Src\Database;
use Src\Post;

require_once 'autoload.php';
require_once './helpers/env.php';

loadEnvFile();

$conn = new Database;
Post::$pdo = $conn->connect();
