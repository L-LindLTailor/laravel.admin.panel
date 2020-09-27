<?php


namespace App\SBlog\Core;


class Registry
{
    use TSingleton;

    protected static $proprerties = [];

    public function setProperty($name, $value)
    {
        self::$proprerties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$proprerties[$name]))
        {
            return self::$proprerties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$proprerties;
    }
}
