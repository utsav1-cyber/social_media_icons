<?php

namespace SocialMedia;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\UninstallContext;

class SocialMedia extends Plugin
{
    public function activate(ActivateContext $activateContext)
    {
        $activateContext->scheduleClearCache(ActivateContext::CACHE_LIST_ALL);
    }

    public function deactivate(DeactivateContext $deactivateContext)
    {
        $deactivateContext->scheduleClearCache(DeactivateContext::CACHE_LIST_ALL);
    }

    public function uninstall(UninstallContext $uninstallContext)
    {
        $uninstallContext->scheduleClearCache(UninstallContext::CACHE_LIST_ALL);
    }
}