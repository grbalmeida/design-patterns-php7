<?php

require_once('../autoloader.php');

$strategyRar = new \Strategy\CompressRar();
$strategyZip = new \Strategy\CompressZip();
$strategyTar = new \Strategy\CompressTar();

$compressionContext = new \Strategy\CompressionContext($strategyRar);

$compressionContext->compress('/CAMINHO/ARQUIVOS');
echo '<br/>';

$compressionContext->setCompressionStrategy($strategyZip);
$compressionContext->compress('/CAMINHO/ARQUIVOS');
echo '<br/>';

$compressionContext->setCompressionStrategy($strategyTar);
$compressionContext->compress('/CAMINHO/ARQUIVOS');