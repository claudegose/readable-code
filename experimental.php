<?php




function order_pizza($PizzaType, $Customer) {

    $Type = $PizzaType;
    echo 'Creating new order... <br>';
    $ToPrint = 'A ';
    $ToPrint .= $PizzaType;
    $P = calc_cts($Type);

        $Address = 'unknown';
         if($Customer == 'koen')
         {
        $Address = 'a yacht in Antwerp';
         }
         else if ($Customer == 'manuele')
         {
        $Address = 'somewhere in Belgium';
         }
         else if ($Customer == 'students')
         {
        $Address = 'BeCode office';
         }

    $ToPrint .=   ' pizza should be sent to ' . $Customer . ". <br>The address: {$Address}.";
    echo $ToPrint; echo '<br>';
    echo'The bill is €'.$P.'.<br>';
    echo "Order finished.<br><br>";
}

//Functions Start
function total_price($P) {
    return $P;
}

function test($PizzaType) {
    echo "Test: type is {$PizzaType}. <br>";
}

function calc_cts($PizzaType)
{

    if ($PizzaType == 'marguerita')
    {
        $PizzaCost = 50;
        }
         else {
             if ($PizzaType == 'golden') {
                 $PizzaCost = 100;
             }
             if ($PizzaType == 'calzone') {
                 $PizzaCost = 10;
             }
             if ($PizzaType == 'hawai') {
                 throw new Exception('Computer says no');
             }

         }

         return $PizzaCost;
    }


function orderAllPizzas()
{
    $test= 0;
    order_pizza('calzone', 'koen');
    order_pizza('marguerita', 'manuele');

    order_pizza('golden', 'students');
}

function make_Allhappy($RunFunction)
{
    if ($RunFunction)
    {
        orderAllPizzas();
    }
    else {
        // Should not do anything when false
    }
}

Make_Allhappy(true);