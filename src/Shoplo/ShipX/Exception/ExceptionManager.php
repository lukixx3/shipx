<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 12.05.2017
 * Time: 15:19
 */

namespace Shoplo\ShipX\Exception;

class ExceptionManager
{
    public static function throwException(\Throwable $e)
    {
        $body = null;
        if (method_exists($e, 'getResponse')) {
            $body = json_decode($e->getResponse()->getBody()->getContents(), true);
        }
        switch ($e->getCode()) {
            case 400:
                throw new ValidationException($e, $body);
                break;
            case 401:
                throw new AuthorizationException($e, $body);
                break;
            case 404:
                throw new NotFoundException($e, $body);
                break;
            case 500:
                throw new BackendException($e, $body);
                break;
            default:
                throw $e;
        }
    }
}