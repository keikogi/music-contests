<?php

namespace Service;

class Mongo implements \Silex\ServiceProviderInterface
{
    private $app;

    public function register(\Silex\Application $app)
    {
        $this->app = $app;

        $app['connect'] = new \MongoClient('localhost');

        $app['db'] = $app['connect']->contests;
    }

    public function boot(\Silex\Application $app) {}
}
