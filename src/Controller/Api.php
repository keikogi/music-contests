<?php

namespace Controller;

class Api
{
    public function index(\Silex\Application $app, \Symfony\Component\HttpFoundation\Request $request)
    {
        return $app->json([
            'time' => time(),
            'count' => $app['contest']->count(),
        ], 201);
    }
}
