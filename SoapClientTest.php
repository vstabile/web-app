<?php

$wsdl = 'http://b2b.pontofriohlg.net/ParceirosV3.svc?wsdl';
$client = new \SoapClient($wsdl);

$products = array();
$products[] = array(
    'Codigo' => 1678378,
    'Quantidade' => 2
);
$products[] = array(
    'Codigo' => 1647,
    'Quantidade' => 2
);

$response = $client->__soapCall('CalcularCarrinho', array(
    'CalcularCarrinho' => array(
        'carrinho' => array(
            'IdCampanha' => '1584',
            'CNPJ' => '65972247000115',
            'CEP' => '02374010',
            'Produtos' => array(
                'DadosListaProdutoCarrinhoDTO' => $products
            )
        )
    )
));
$var = array(
    'Produtos' => array(
        'DadosListaProdutoCarrinhoDTO' => array(
            'Codigo' => 1678378,
            'Quantidade' => 2
        ),
        'DadosListaProdutoCarrinhoDTO' => array(
            'Codigo' => 1647,
            'Quantidade' => 2
        )
    )
);
var_dump($var);

var_dump($response);
