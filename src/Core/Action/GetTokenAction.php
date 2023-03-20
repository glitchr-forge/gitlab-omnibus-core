<?php

namespace Omnibus\Core\Action;

use Omnibus\Core\Exception\LogicException;
use Omnibus\Core\Exception\RequestNotSupportedException;
use Omnibus\Core\Request\GetToken;
use Omnibus\Core\Storage\StorageInterface;

class GetTokenAction implements ActionInterface
{
    /**
     * @var StorageInterface
     */
    private $tokenStorage;

    public function __construct(StorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param GetToken $request
     */
    public function execute($request)
    {
        RequestNotSupportedException::assertSupports($this, $request);

        if (false == $token = $this->tokenStorage->find($request->getHash())) {
            throw new LogicException(sprintf('The token %s could not be found', $request->getHash()));
        }

        $request->setToken($token);
    }

    public function supports($request)
    {
        return $request instanceof GetToken;
    }
}