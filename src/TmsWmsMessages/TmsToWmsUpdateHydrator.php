<?php

namespace BayWaReLusy\TmsWmsMessages;

use Laminas\Hydrator\ClassMethodsHydrator;

class TmsToWmsUpdateHydrator extends ClassMethodsHydrator
{
    public function __construct()
    {
        parent::__construct(false);
    }
}
