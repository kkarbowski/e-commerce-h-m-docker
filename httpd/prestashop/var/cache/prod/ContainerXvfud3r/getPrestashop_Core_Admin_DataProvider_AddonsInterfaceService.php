<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.admin.data_provider.addons_interface' shared service.

$this->services['prestashop.core.admin.data_provider.addons_interface'] = $instance = new \PrestaShop\PrestaShop\Adapter\Addons\AddonsDataProvider(${($_ = isset($this->services['prestashop.addons.client_api']) ? $this->services['prestashop.addons.client_api'] : $this->load('getPrestashop_Addons_ClientApiService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.module.zip.manager']) ? $this->services['prestashop.module.zip.manager'] : $this->load('getPrestashop_Module_Zip_ManagerService.php')) && false ?: '_'});

$instance->cacheDir = $this->targetDirs[0];

return $instance;
