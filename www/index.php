<?php

define('STATIC_VERSION', '1.0.0');

define('WEB_PATH', __DIR__);

define('ROOT_PATH', __DIR__ . '/..');

define('UPLOAD_PATH', __DIR__ . '/static/uploads');

date_default_timezone_set('Etc/GMT-5');

setlocale(LC_TIME, 'ru_RU.UTF-8');

error_reporting(-1);

ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

$app = Keikogi\Application\Application::get(array(), true);

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());

$app->register(new Service\Mongo());
$app->register(new Service\Contest());

$app['session.storage.options'] = array(
    'name' => 'contests_sid',
    'cookie_lifetime' => 604800,
    'cookie_domain' => 'music.hakama.keikogi.ru',
    'gc_probability' => 0,
);

$app->run();
