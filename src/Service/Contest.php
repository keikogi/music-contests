<?php

namespace Service;

class Contest implements \Silex\ServiceProviderInterface
{
    private $app;

    public function register(\Silex\Application $app)
    {
        $this->app = $app;

        $app['contest'] = new \Model\Contest(
            $app['db']
        );
    }

    public function boot(\Silex\Application $app) {}
}
