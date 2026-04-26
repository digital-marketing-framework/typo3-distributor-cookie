<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Cookie\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Cookie\DistributorCookieInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorCookieInitialization('dmf_distributor_cookie'));
    }
}
