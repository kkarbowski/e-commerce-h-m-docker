<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'prestashop.translation.extractor.twig' shared service.

return $this->services['prestashop.translation.extractor.twig'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
