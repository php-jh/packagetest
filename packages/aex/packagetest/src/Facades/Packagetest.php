<?php
/**
 * Created by PhpStorm.
 * User: ${蒋华}
 * Date: 2019/1/7
 * Time: 18:01
 */
namespace Aex\Packagetest\Facades;
use Illuminate\Support\Facades\Facade;
class Packagetest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packagetest';
    }
}