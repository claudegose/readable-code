<?php
function order_pizza($pizzaType, $customer) {
    $Type = $pizzaType;
    echo 'Creating new order... <br>';
    $ToPrint = 'A ';
    $ToPrint .= $pizzaType;
    $price = calculatePrice($Type);

        $Address = 'unknown';

        switch($customer){
            case "koen":
                $address = 'a yacht in Antwerp';
                break;
            case "manuele":
                $address = 'somewhere in Belgium';
                break;
            case "students":
                $address = "Becode Office";
                break;
        }



    $ToPrint .=   ' pizza should be sent to ' . $customer . ". <br>The address: {$Address}.";
    echo $ToPrint; echo '<br>';
    echo'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
 }

    //Functions Start
    function total_price($price) {
        return $price;
 }

    function test($pizzaType) {
        echo "Test: type is {$pizzaType}. <br>";
    }

    function calculatePrice($pizzaType)
        {
        if ($pizzaType == 'marguerita')
        {
            $pizzaCost = 50;
        }
        else
         {
        if ($pizzaType == 'golden')
        {
            $pizzaCost = 100;
        }
        if ($pizzaType == 'calzone')
        {
            $pizzaCost = 10;
        }
        if ($pizzaType == 'hawai')
        {
            throw new Exception('Computer says no');
        }

    }

         return $pizzaCost;
    }


    function orderAllPizzas()
    {
        $test= 0;
        order_pizza('calzone', 'koen');
        order_pizza('marguerita', 'manuele');

        order_pizza('golden', 'students');
    }

    function make_Allhappy($runFunction)
    {
        if ($runFunction)
        {
            orderAllPizzas();
        }
        else
        {
            // Should not do anything when false
        }
    }

make_Allhappy(true);