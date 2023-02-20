<?php

/*
 * This file is part of Facturama PHP SDK.
 *
 * (c) Facturama <soporte-api@facturama.mx>
 *
 * This source file is subject to a MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require __DIR__.'/../../../vendor/autoload.php';

$facturama = new Facturama\Client('pruebas', 'pruebas2011');
$body = [];
$params = [
'cfdiType' => 'issuedLite',
'cfdiId' => '7eo51BvzV-E16gBx3nnxfQ2',
'email' => 'tu_correo@tu_dominio.com',
];

$result = $facturama->post('Cfdi', $body, $params);

printf('<pre>%s<pre>', var_export($result, true));