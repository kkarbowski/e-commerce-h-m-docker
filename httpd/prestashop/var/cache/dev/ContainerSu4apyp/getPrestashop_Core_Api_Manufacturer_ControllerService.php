<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.api.manufacturer.controller' shared service.

$this->services['prestashop.core.api.manufacturer.controller'] = $instance = new \PrestaShopBundle\Controller\Api\ManufacturerController();

$instance->manufacturerRepository = ${($_ = isset($this->services['prestashop.core.api.manufacturer.repository']) ? $this->services['prestashop.core.api.manufacturer.repository'] : $this->load('getPrestashop_Core_Api_Manufacturer_RepositoryService.php')) && false ?: '_'};
$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
$instance->setContainer($this);

return $instance;
