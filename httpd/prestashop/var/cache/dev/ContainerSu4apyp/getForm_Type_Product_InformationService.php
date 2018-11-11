<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.information' shared service.

return $this->services['form.type.product.information'] = new \PrestaShopBundle\Form\Admin\Product\ProductInformation(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.category']) ? $this->services['prestashop.adapter.data_provider.category'] : $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.product']) ? $this->services['prestashop.adapter.data_provider.product'] : $this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.feature']) ? $this->services['prestashop.adapter.data_provider.feature'] : $this->services['prestashop.adapter.data_provider.feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.manufacturer']) ? $this->services['prestashop.adapter.data_provider.manufacturer'] : $this->services['prestashop.adapter.data_provider.manufacturer'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider()) && false ?: '_'});
