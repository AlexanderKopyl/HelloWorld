<?php


namespace AlexsanderKopyl\Helloworld\App\Router;


class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{

    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        // TODO: Implement process() method.

        $moduleName = 'cms';
        $controllerPath = 'index';
        $controllerName = 'index';

        $request->setModuleName($moduleName)->setControllerName($controllerPath)->setActionName($controllerName);

        return true;
    }
}
