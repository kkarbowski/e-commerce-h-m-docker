<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.optional_features.configuration' shared service.

return $this->services['prestashop.adapter.optional_features.configuration'] = new \PrestaShop\PrestaShop\Adapter\OptionalFeatures\OptionalFeaturesConfiguration(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.combination_feature']) ? $this->services['prestashop.adapter.combination_feature'] : $this->load('getPrestashop_Adapter_CombinationFeatureService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.feature.feature']) ? $this->services['prestashop.adapter.feature.feature'] : $this->load('getPrestashop_Adapter_Feature_FeatureService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.group.feature']) ? $this->services['prestashop.adapter.group.feature'] : $this->load('getPrestashop_Adapter_Group_FeatureService.php')) && false ?: '_'});
