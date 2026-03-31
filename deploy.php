<?php

namespace Hypernode\DeployConfiguration;

$configuration = new ApplicationTemplate\Magento2(['en_US']);

$productionStage = $configuration->addStage('production', 'magento2.komkommer.store');
$productionStage->addServer('appname.hypernode.io');

return $configuration;