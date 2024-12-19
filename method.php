<?php

class Method
{
    public static function getDATA(){
        $count = 5;
        $db = db::getConnection();
        $productsList = array();
        $result = $db->query('SELECT * FROM products '
                . 'WHERE RENDER_STAT = "1"'
                . 'ORDER BY DATE_CREATE DESC '                
                . 'LIMIT ' . $count
                );
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['ID'] = $row['ID'];
            $productsList[$i]['PRODUCT_ID'] = $row['PRODUCT_ID'];
            $productsList[$i]['PRODUCT_PRICE'] = $row['PRODUCT_PRICE'];
            $productsList[$i]['PRODUCT_ARTICLE'] = $row['PRODUCT_ARTICLE'];
            $productsList[$i]['PRODUCT_QUANTITY'] = $row['PRODUCT_QUANTITY'];
            $productsList[$i]['DATE_CREATE'] = $row['DATE_CREATE'];
            $productsList[$i]['RENDER_STAT'] = $row['RENDER_STAT'];
            $i++;
        }

        return $productsList;
    }
    
    public static function editDATA($options){

     $db = db::getConnection();

     $options = (int)$options;

     $sql = "UPDATE products SET RENDER_STAT = 2 WHERE ID = '$options'";

     $result = $db->prepare($sql);
     
     return $result->execute();
    }

    public static function editMORE($options){

        $db = db::getConnection();
   
        $options = (int)$options;
   
        $sql = "UPDATE products SET PRODUCT_QUANTITY = PRODUCT_QUANTITY + 1 WHERE ID = '$options'";
   
        $result = $db->prepare($sql);
         
        return $result->execute();
    }
    public static function editLESS($options){

        $db = db::getConnection();
   
        $options = (int)$options;
   
        $sql = "UPDATE products SET PRODUCT_QUANTITY = PRODUCT_QUANTITY - 1 WHERE ID = '$options'";
   
        $result = $db->prepare($sql);
         
        return $result->execute();
    }
    
    
}
