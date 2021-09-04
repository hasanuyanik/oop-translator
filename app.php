<?php

require "filesystem.php";
require "translator.php";

//IFileSystem;

$fs = new FileSystem(__DIR__."/diller");

$lang = ($_GET['lang']) ? $_GET['lang'] : "tr";

$translate = new Translator(
  $fs,
  $lang
);

echo "<h1>".$translate->get('user.index')."</h1>";

echo "<h3>".$translate->get('user.show', ['name' => "Eray", 'surname' => "Aydın"])."</h3>";
echo "<p>".$translate->get('user.info.name').": Eray</p>";

$translate->get('user.info')['name'];

echo "<p>".$translate->get('user.olmayanBirAnahtar')."</p>"; // <p>user.olmayanBirAnahtar</p>

echo "<h1>".$translate->get('user.index', locale: "en")."</h1>";

echo "<hr>Single:true => ";
var_dump($translate->get('user.count', single: true)); // Kullanıcı
echo "<hr>Single: false => ";
var_dump($translate->get('user.count', single: false)); // Kullanıcılar
echo "<hr>count: 1 => ";
var_dump($translate->get('user.count', count: 1)); // 1 Kullanıcı
echo "<hr>count: 10 => ";
var_dump($translate->get('user.count', count: 10)); // 10 Kullanıcı


echo "<hr>";

var_dump($translate->get("user.index"));
var_dump($translate->get("user.show", ['name' => "Eray"]));
var_dump($translate->get('user.info.name'));
var_dump($translate->get('user.index', locale: "en"));
