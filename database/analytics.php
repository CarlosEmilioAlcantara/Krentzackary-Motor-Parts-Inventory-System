<?php
    include('../database/connection.php');

    // Stocks analytics
    $stmt = $conn->prepare("SELECT amount_held FROM products");
    $stmt->execute();

    $values = [];

    // Getting amount_held values
    while ($row = $stmt->fetch()){
        $value = $row['amount_held'];
        array_push($values, $value);
    }

    // Total amount of stocked items
    $total_stocked = array_sum($values);

    // Sort stocks from lowest to highest
    rsort($values);
    $ascending = array_reverse(array_slice($values, 0, 5));
    $most_stocked_amount = $values[0];
    
    // Sort stocks from highest to lowest
    sort($values);
    $descending = array_slice($values, 0, 5);
    $least_stocked_amount = $values[0];

    // Getting the names of relevant stocked items based on ascending amount
    $stmt = $conn->prepare("SELECT product_name FROM products ORDER BY amount_held");
    $stmt->execute();
    $names = [];

    while ($row = $stmt->fetch()){
        $name = $row['product_name'];
        array_push($names, $name);
    }

    $top_stocked = array_reverse($names);
    $most_stocked = $top_stocked[0];
    $least_stocked = $names[0];

    // Getting the names of relevant stocked items based on descending amount
    $stmt = $conn->prepare("SELECT product_name FROM products ORDER BY amount_held DESC");
    $stmt->execute();
    $names = [];

    while ($row = $stmt->fetch()){
        $name = $row['product_name'];
        array_push($names, $name);
    }

    // Sales analytics
    $stmt = $conn->prepare("SELECT amount_sold FROM products");
    $stmt->execute();

    $sales = [];

    // Sales analytics amount
    // Getting amount_sold values
    while ($row = $stmt->fetch()){
        $sale = $row['amount_sold'];
        array_push($sales, $sale);
    }

    // Total amount of stocked items
    $sold = array_sum($sales);

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
    $descending_sales = array_slice($sales, 0, 5);
    $lowest_sales = array('first', 'second', 'third', 'fourth', 'fifth');
    $combined_lowest_sales = array_combine($lowest_sales, $descending_sales);
    extract($combined_lowest_sales);

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

    // Sales analytics names
    // Getting names of product by amount sold ascending
    $stmt = $conn->prepare("SELECT product_name FROM products ORDER BY amount_sold");
    $stmt->execute();
    $name_of_sales = [];

    while ($row = $stmt->fetch()){
        $sale_name = $row['product_name'];
        array_push($name_of_sales, $sale_name);
    }

    // Getting name of top sold item
    $top_sale_item = array_reverse($name_of_sales);
    $top_sale_name = end($name_of_sales);
    $second_sale_name = $top_sale_item[1];
    $third_sale_name = $top_sale_item[2];
    $fourth_sale_name = $top_sale_item[3];
    $fifth_sale_name = $top_sale_item[4];

    // Getting name of least sold item
    $least_sale_name = reset($name_of_sales);
    $second_least_sale_name = $name_of_sales[1];
    $third_least_sale_name = $name_of_sales[2];
    $fourth_least_sale_name = $name_of_sales[3];
    $fifth_least_sale_name = $name_of_sales[4];
?>