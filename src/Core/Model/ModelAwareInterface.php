<?php

namespace Omnibus\Core\Model;

interface ModelAwareInterface
{
    /**
     * @param mixed $model
     */
    public function setModel($model);
}