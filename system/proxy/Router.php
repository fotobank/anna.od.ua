<?php
/**
 * @namespace
 */
namespace proxy;

use exception\RouteException;
use classes\Router\Router as Instance;



/**
 * Proxy to Router
 *
 * Example of usage
 *     use proxy\Router;
 *
 *     Router::start()
 *
 * @package  Alex\Proxy
 *
 * @method   static Instance getInstance()
 *
 * @method   static array getUrlRoutes()
 * @see      proxy\Router::getUrlRoutes()
 *
 * @method   static mixed|void setRoute($route)
 * @see      proxy\Router::setRoute()
 *
 * @method   static void start()
 * @see      proxy\Router::start()
 *
 * @method   static mixed getInstanceController()
 * @see      proxy\Router::getInstanceController()
 *
 * @method   static mixed getCurrentMethod()
 * @see      proxy\Router::getCurrentMethod()
 *
 * @method   static mixed getParam()
 * @see      proxy\Router::getParam()
 *
 * @method   static mixed getId()
 * @see      proxy\Router::getId()
 *
 * @method   static string getUrl($controller, $method, $params)
 * @see      proxy\Router::getUrl()
 *
 * @method   static goto404()
 * @see      proxy\Router::goto404()
 *
 * @method   static goto403()
 * @see      proxy\Router::goto403()
 *
 * @method   static stopPage()
 * @see      proxy\Router::stop()
 *
 * @method   static gotoPage($controller, $method, $params = [])
 * @see      proxy\Router::gotot()
 *
 *
 * @author   Alex Jurii
 * @package  Proxy
 */
class Router extends AbstractProxy
{
    /**
     * Init instance
     *
     * @return \classes\Router\Router
     * @throws \Exception
     * @throws \exception\RouteException
     */
    protected static function initInstance()
    {
        try
        {
            $instance = new Instance();
            $instance->setRoute(Config::getData('router'));

            return $instance;
        }
        catch(RouteException $e)
        {
            throw $e;
        }
    }
}
