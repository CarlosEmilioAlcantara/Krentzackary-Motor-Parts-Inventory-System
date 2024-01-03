<?php
    // session_start();

    include('../database/connection.php');

    // Stocks analytics
    $stmt = $conn->prepare("SELECT amount_held FROM products");
    $stmt->execute();
    // $row = $stmt->fetch();
    // $value = $row['amount'];
    // echo $value;
    $values = [];

    // Getting amount_held values
    while ($row = $stmt->fetch()){
        // $stmt = $conn->prepare("SELECT * FROM products");
        // $result = $row + $row;
        // var_dump($result);
        $value = $row['amount_held'];
        // echo $value . "\n";
        array_push($values, $value);
    }

    // Total amount of stocked items
    $total_stocked = array_sum($values);
    // echo $res . "\r\n";

    // Sort stocks from lowest to highest
    rsort($values);
    $ascending = array_reverse(array_slice($values, 0, 5));
    $most_stocked_amount = $values[0];

    // foreach ($ascending as $item){
    //     echo $item . "\n";
    // }
    
    // Sort stocks from highest to lowest
    sort($values);
    $descending = array_slice($values, 0, 5);
    $least_stocked_amount = $values[0];

    // foreach ($descending as $item){
    //     echo $item . "\n";
    // }

    // Getting the names of relevant stocked items based on ascending amount
    $stmt = $conn->prepare("SELECT product_name FROM products ORDER BY amount_held");
    $stmt->execute();
    $names = [];

    while ($row = $stmt->fetch()){
        // $stmt = $conn->prepare("SELECT * FROM products");
        // $result = $row + $row;
        // var_dump($result);
        $name = $row['product_name'];
        // echo $value . "\n";
        array_push($names, $name);
    }

    // foreach ($names as $name){
    //     echo $name . "\r\n";
    // }

    $top_stocked = array_reverse($names);
    $most_stocked = $top_stocked[0];
    $least_stocked = $names[0];

    // Getting the names of relevant stocked items based on descending amount
    $stmt = $conn->prepare("SELECT product_name FROM products ORDER BY amount_held DESC");
    $stmt->execute();
    $names = [];

    while ($row = $stmt->fetch()){
        // $stmt = $conn->prepare("SELECT * FROM products");
        // $result = $row + $row;
        // var_dump($result);
        $name = $row['product_name'];
        // echo $value . "\n";
        array_push($names, $name);
    }

    // foreach ($names as $name){
    //     echo $name . "\r\n";
    // }

    // Sales analytics
    $stmt = $conn->prepare("SELECT amount_sold FROM products");
    $stmt->execute();
    // $row = $stmt->fetch();
    // $value = $row['amount'];
    // echo $value;
    $sales = [];

    // Sales analytics amount
    // Getting amount_sold values
    while ($row = $stmt->fetch()){
        // $stmt = $conn->prepare("SELECT * FROM products");
        // $result = $row + $row;
        // var_dump($result);
        $sale = $row['amount_sold'];
        // echo $value . "\n";
        array_push($sales, $sale);
    }

    // Total amount of stocked items
    $sold = array_sum($sales);
    // echo $sold . "\r\n";

    // Sort sales from lowest to highest
    rsort($sales);
    $ascending_sales = array_reverse(array_slice($sales, 0, 5));
    $top_sales = array('first', 'second', 'third', 'fourth', 'fifth');
    $combined_top_sales = array_combine($top_sales, $ascending_sales);

    extract($combined_top_sales);

    // Getting percentages of top sellers for piechart
    $top_percentage = round($fifth / $sold * 100);
    $second_percentage = $top_percentage + round($fourth / $sold * 100);
    $third_percentage = $second_percentage + round($third / $sold * 100);
    $fourth_percentage = $third_percentage + round($second / $sold * 100);
    $fifth_percentage = $fourth_percentage + round($first / $sold * 100);

    // Getting percentages of top sellers for list
    $top_percentage = round($fifth / $sold * 100);
    $second_percentage_list = round($fourth / $sold * 100);
    $third_percentage_list = round($third / $sold * 100);
    $fourth_percentage_list = round($second / $sold * 100);
    $fifth_percentage_list = round($first / $sold * 100);
    
    // Sort sales from lowest to highest
    sort($sales);
    // var_dump($sales);
    $descending_sales = array_slice($sales, 0, 5);
    $lowest_sales = array('first', 'second', 'third', 'fourth', 'fifth');
    $combined_lowest_sales = array_combine($lowest_sales, $descending_sales);

    extract($combined_lowest_sales);
    // echo $first . "<br>";
    // echo $second . "<br>";
    // echo $third . "<br>";
    // echo $fourth . "<br>";
    // echo $fifth . "<br>";

    // Getting percentages of least sellers for piechart
    $least_percentage = round($first / $sold * 100);
    $second_least_percentage = $least_percentage + round($second / $sold * 100);
    $third_least_percentage = $second_least_percentage + round($third / $sold * 100);
    $fourth_least_percentage = $third_least_percentage + round($fourth / $sold * 100);
    $fifth_least_percentage = $fourth_least_percentage + round($fifth / $sold * 100);

    // Getting percentages of least sellers for list
    $least_percentage = round($first / $sold * 100);
    $second_least_percentage_list = round($second / $sold * 100);
    $third_least_percentage_list = round($third / $sold * 100);
    $fourth_least_percentage_list = round($fourth / $sold * 100);
    $fifth_least_percentage_list = round($fifth / $sold * 100);

    // foreach ($descending_sales as $item){
    //     echo $item . "\n";
    // }

    // Sales analytics names
    // Getting names of product by amount sold ascending
    $stmt = $conn->prepare("SELECT product_name FROM products ORDER BY amount_sold");
    $stmt->execute();
    // $row = $stmt->fetch();
    // $value = $row['amount'];
    // echo $value;
    $name_of_sales = [];

    while ($row = $stmt->fetch()){
        // $stmt = $conn->prepare("SELECT * FROM products");
        // $result = $row + $row;
        // var_dump($result);
        $sale_name = $row['product_name'];
        // echo $value . "\n";
        array_push($name_of_sales, $sale_name);
    }
    // var_dump($name_of_sales);
    // print_r(array_reverse($name_of_sales));

    // Getting name of top sold item
    // sort($name_of_sales);
    $top_sale_item = array_reverse($name_of_sales);
    // var_dump($top_sale_item);
    $top_sale_name = end($name_of_sales);
    $second_sale_name = $top_sale_item[1];
    $third_sale_name = $top_sale_item[2];
    $fourth_sale_name = $top_sale_item[3];
    $fifth_sale_name = $top_sale_item[4];
    // var_dump($second_sale_name);

    // Getting name of least sold item
    // rsort($name_of_sales);
    // $least_sale_item = array_slice($name_of_sales, 0, 1);
    $least_sale_name = reset($name_of_sales);
    $second_least_sale_name = $name_of_sales[1];
    $third_least_sale_name = $name_of_sales[2];
    $fourth_least_sale_name = $name_of_sales[3];
    $fifth_least_sale_name = $name_of_sales[4];

    // Total amount of stocked items
    // $sold = array_sum($sales);
    // echo $sold . "\r\n";

    // Sort sales from lowest to highest
    // rsort($sales);
    // $ascending_sales = array_reverse(array_slice($sales, 0, 5));
    // $top_sales = array('first', 'second', 'third', 'fourth', 'fifth');
    // $combined_top_sales = array_combine($top_sales, $ascending_sales);

    // extract($combined_top_sales);

    // foreach ($combined_top_sales as $item){
    //     echo $item . "\n";
    // }
    
    // Sort sales from highest to lowest
    // sort($sales);
    // $descending_sales = array_slice($sales, 0, 5);
    // $lowest_sales = array('first', 'second', 'third', 'fourth', 'fifth');
    // $combined_lowest_sales = array_combine($lowest_sales, $descending_sales);

    // extract($combined_lowest_sales);

    // foreach ($descending_sales as $item){
    //     echo $item . "\n";
    // }

    // POSTING values
    // $total_stocked = $POST[$res];
?>