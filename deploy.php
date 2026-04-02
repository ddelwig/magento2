<?php

namespace Hypernode\DeployConfiguration;

$configuration = new ApplicationTemplate\Magento2(['en_US']);

$productionStage = $configuration->addStage('production', 'hntestdemian.hypernode.io');
$productionStage->addServer('hntestdemian.hypernode.io');

return $configuration;
