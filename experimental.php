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


    echo "A {$pizzaType} pizza should be sent to {$customer}";
    echo "<br>";
    echo "The address is: {$address}";
    echo "<br>";
    echo "The bill is {$price} Euros<br>";
    echo "Order finished. <br> <br>";
    echo "<br>";

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
        if ($pizzaType == 'hawaii')
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