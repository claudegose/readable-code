<?php

// fw = for who
function order_pizza($pizza_type, $customer) {

    $type = $pizza_type;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizza_type;
    $p = calc_cts($type);

    $address = 'unknown';
    if($customer == 'koen')
    {
        $address = 'a yacht in Antwerp';
    } else if ($customer == 'manuele')
    {
        $address = 'somewhere in Belgium';
    } else if ($customer == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$p.'.<br>';


    echo "Order finished.<br><br>";
}




function total_price($p) {
    return $p;
}

function test($pizza_type) {
    echo "Test: type is {$pizza_type}. <br>";
}

function calc_cts($pizza_type)
{


    if ($pizza_type == 'marguerita') {
        $pizza_cost = 50;
    }
    else
    {
        if ($pizza_type == 'golden')
        {
            $pizza_cost = 100;
        }

        if ($pizza_type == 'calzone')
        {
            $pizza_cost = 10;
        }

        if ($pizza_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $pizza_cost;
}

function orderAllPizzas()
{
    $test= 0;
    order_pizza('calzone', 'koen');
    order_pizza('marguerita', 'manuele');

    order_pizza('golden', 'students');
}

function make_Allhappy($do_it) {
    if ($do_it) {
        orderAllPizzas();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);