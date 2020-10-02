<?php

namespace AlexsanderKopyl\Helloworld\App;

use Magento\Framework\App\AreaList;
use Magento\Framework\App\Request\ValidatorInterface as RequestValidator;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterListInterface;
use Magento\Framework\App\State;
use Magento\Framework\Message\ManagerInterface as MessageManager;
use Psr\Log\LoggerInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var RouterListInterface
     */
    protected $routerList;

    /**
     * @var ResponseInterface
     */
    protected $response;

    protected $logger;

    /**
     * FrontController constructor.
     * @param RouterListInterface $routerList
     * @param ResponseInterface $response
     * @param RequestValidator|null $requestValidator
     * @param MessageManager|null $messageManager
     * @param LoggerInterface|null $logger
     * @param State|null $appState
     * @param AreaList|null $areaList
     */
    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        RequestValidator $requestValidator = null,
        MessageManager $messageManager = null,
        LoggerInterface $logger,
        State $appState = null,
        AreaList $areaList = null
    )
    {
        parent::__construct($routerList, $response, $requestValidator, $messageManager, $logger, $appState, $areaList);
        $this->response = $response;
        $this->logger = $logger;
        $this->routerList = $routerList;
    }

    public function dispatch(RequestInterface $request)
    {
        foreach ($this->routerList as $router) {
            $this->logger->info(get_class($router));
        }

        return parent::dispatch($request); // TODO: Change the autogenerated stub
    }
}
