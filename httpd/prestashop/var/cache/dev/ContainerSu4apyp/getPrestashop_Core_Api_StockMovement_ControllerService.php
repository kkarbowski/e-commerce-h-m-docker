<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.api.stock_movement.controller' shared service.

$this->services['prestashop.core.api.stock_movement.controller'] = $instance = new \PrestaShopBundle\Controller\Api\StockMovementController();

$instance->stockMovementRepository = ${($_ = isset($this->services['prestashop.core.api.stock_movement.repository']) ? $this->services['prestashop.core.api.stock_movement.repository'] : $this->load('getPrestashop_Core_Api_StockMovement_RepositoryService.php')) && false ?: '_'};
$instance->queryParams = ${($_ = isset($this->services['prestashop.core.api.query_stock_movement_params_collection']) ? $this->services['prestashop.core.api.query_stock_movement_params_collection'] : $this->services['prestashop.core.api.query_stock_movement_params_collection'] = new \PrestaShopBundle\Api\QueryStockMovementParamsCollection()) && false ?: '_'};
$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
$instance->setContainer($this);

return $instance;
