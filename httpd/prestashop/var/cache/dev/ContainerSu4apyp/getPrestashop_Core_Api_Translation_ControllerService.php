<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.api.translation.controller' shared service.

$this->services['prestashop.core.api.translation.controller'] = $instance = new \PrestaShopBundle\Controller\Api\TranslationController();

$instance->translationService = ${($_ = isset($this->services['prestashop.service.translation']) ? $this->services['prestashop.service.translation'] : $this->load('getPrestashop_Service_TranslationService.php')) && false ?: '_'};
$instance->queryParams = ${($_ = isset($this->services['prestashop.core.api.query_translation_params_collection']) ? $this->services['prestashop.core.api.query_translation_params_collection'] : $this->services['prestashop.core.api.query_translation_params_collection'] = new \PrestaShopBundle\Api\QueryTranslationParamsCollection()) && false ?: '_'};
$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
$instance->setContainer($this);

return $instance;
