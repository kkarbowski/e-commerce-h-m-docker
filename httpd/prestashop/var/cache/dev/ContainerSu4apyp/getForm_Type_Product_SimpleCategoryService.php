<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.simple_category' shared service.

return $this->services['form.type.product.simple_category'] = new \PrestaShopBundle\Form\Admin\Category\SimpleCategory(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.category']) ? $this->services['prestashop.adapter.data_provider.category'] : $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')) && false ?: '_'});
