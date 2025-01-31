<?php declare(strict_types=1);

namespace GoAIEAA2025;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Context;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext as DeactivateContextAlias;

class GoAIEAA2025 extends Plugin
{
    public function activate(ActivateContext $activateContext): void
    {
        parent::activate($activateContext);
        $systemConfigService = $this->container->get(SystemConfigService::class);
        $systemConfigService->set('GoAIEAA2025.config.scriptUrl', '');
    }

    public function deactivate(DeactivateContextAlias $context): void
    {
        parent::deactivate($context);
    }

    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);
        $systemConfigService = $this->container->get(SystemConfigService::class);
        $systemConfigService->set('GoAIEAA2025.config.scriptUrl', '');
    }

    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);
    }
}
