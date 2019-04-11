<?php
$pdo = new PDO('mysql:dbname=fairguest;host:localhost', 'root', 'fallousamb');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$req = $pdo->query("SELECT * FROM fact");
var_dump($req->fetchAll());