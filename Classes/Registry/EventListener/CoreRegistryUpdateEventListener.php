<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Cookie\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Cookie\DistributorCookieInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorCookieInitialization('dmf_distributor_cookie'));
    }
}
