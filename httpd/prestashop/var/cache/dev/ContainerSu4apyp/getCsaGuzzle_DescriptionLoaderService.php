<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'csa_guzzle.description_loader' shared service.

return $this->services['csa_guzzle.description_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader(${($_ = isset($this->services['csa_guzzle.description_loader.resolver']) ? $this->services['csa_guzzle.description_loader.resolver'] : $this->load('getCsaGuzzle_DescriptionLoader_ResolverService.php')) && false ?: '_'});
