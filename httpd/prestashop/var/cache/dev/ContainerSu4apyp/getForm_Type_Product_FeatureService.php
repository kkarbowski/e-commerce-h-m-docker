<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.feature' shared service.

return $this->services['form.type.product.feature'] = new \PrestaShopBundle\Form\Admin\Feature\ProductFeature(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.feature']) ? $this->services['prestashop.adapter.data_provider.feature'] : $this->services['prestashop.adapter.data_provider.feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider()) && false ?: '_'});
