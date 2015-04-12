<?php

namespace Controller;

class Start
{
    public function index(\Silex\Application $app, \Symfony\Component\HttpFoundation\Request $request)
    {
        return $app['twig']->render(
            'index.html.twig',
            array(
                'name' => $request->get('user', 'Mr. Tomato'),
            )
        );
    }
}
