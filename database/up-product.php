<?php
    $data = $_POST;
    $prod_Id = (int) $data['prod_id'];
    $prod_Name = $data['prod_name'];
    $prod_Desc = $data['prod_desc'];
    $prod_Cat = $data['prod_cat'];
    $prod_Attr = $data['prod_attr'];
    $prod_AmntHeld = $data['prod_amnt_held'];
    $prod_AmntSold = $data['prod_amnt_sold'];
    $prod_Loc = $data['prod_loc'];
    $now = date('F d @ h:i:s A');

    try {
        $sql = "UPDATE products SET product_name=?, category=?, description=?, attribute=?, amount_held=?, amount_sold=?, location=?, updated_at=? WHERE id=?";

        include('connection.php');
        $conn->prepare($sql)->execute([$prod_Name, $prod_Cat, $prod_Desc, $prod_Attr, $prod_AmntHeld, $prod_AmntSold, $prod_Loc, $now, $prod_Id]);

        echo json_encode([
            'success' => true,
            'message' => 'Product successfully updated'
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Product deletion error'
        ]);
    }
?>