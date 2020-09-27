<?php


namespace App\SBlog\Core;


class BlogApp
{
    public static $app;

    public static function getInstance()
    {
        self::$app = Registry::instance();
        self::getParams();
        return self::$app;
    }

    protected static function getParams()
    {
        $params = require CONF . '/params.php';

        if (!empty($params))
        {
            foreach ($params as $k => $v)
            {
                self::$app->setProperty($k, $v);
            }
        }
    }
}
