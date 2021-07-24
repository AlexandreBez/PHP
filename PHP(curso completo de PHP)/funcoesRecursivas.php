<?php

$hierarquia = array( 

    array (

        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                //inicio gerente de vendas
                'subordinados' =>array(
                    'nome_cargo' => 'Gerente de Vendas'
                ),
                //termino gerente de vendas

            ),
            //termino diretor comercial
            //inicio diretor financeiro
            array(
                'nome_cargo' => 'diretor financeiro',
                'subordinado' => array(
                    //inicio gerente de contas
                    'nome_cargo' => 'gerente de contas',
                    'subordinados' => array(
                        //inicio supervisor de pagamentos
                        'nome_cargo' => 'supervisor de contas'
                    )
                    //termino supervisor de pagamentos
                )
                //termino gerente de contas
            ),
            //inicio gerente de compras
            array(
                'nome_cargo' => 'gerente de compras',
                'subordinados' => array(

                    array(
                        'nome_cargo' => 'supervisor de suprimentos'
                    )

                )
            )
            //termino gerente de compras
            //termino diretor financeiro
        )

    )

);

function exibe($cargos){
    $html = '<ul>';


    foreach($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }

        $html .= '</li>';

    }

    $html .= '</ul>';
    return $html;
}

echo exibe($hierarquia);

