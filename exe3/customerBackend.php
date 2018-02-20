<?php
    $email = $_POST["username"];
    $password = $_POST["password"];
    $items = getItemList();
    $shipping_type = $_POST["shipping-radio"];
    $shipping_price = $_POST["shipping-price"];

    $total = 0;

    function getItemList(){
        $items = array();
        for($i = 1;;$i++){
            if(isset($_POST["item".$i."-amount"])){
                //Returns an array {"name_of_item", "price_of_item"}
                $item_info = explode("#",$_POST["item".$i."-hidden"]);
                //Pushes an array of type {"name_of_item", "price_of_item", "amount_of_item"} to $items
                array_push($items, array($item_info[0], $item_info[1], $_POST["item".$i."-amount"]));
            } else {
                break;
            }
        }
        return $items;
    }
?>

<html>
    <head>
     <link rel="stylesheet" href="style.css" />
    </head>
    <body> 
        <header>
            <h1>Geek Shop</h1>
        </header>
        <h2>Thank you for purchasing at Geek Shop</h2>
        <p>Bellow is the receipt for the user <?php echo $email; ?> and password <?php echo $password; ?></p>
        <br>
        <table class="tg">
            <tr>
                <th class="tg-yw4l"></th>
                <th class="tg-yw4l"><span>Cost Per Item</span></th>
                <th class="tg-yw4l"><span>Quantity</span></th>
                <th class="tg-yw4l"><span>Sub Total</span></th>
            </tr>
            <?php
                for($i = 0; $i < count($items); $i++){
                    $sub_total = (int)$items[$i][1] * (int)$items[$i][2];
                    $total += $sub_total;
                    echo '
                    <tr>
                        <td class="tg-yw4l"><span>'.$items[$i][0].'</span></td>
                        <td class="tg-yw4l"><span>$'.$items[$i][1].'</span></td>
                        <td class="tg-yw4l"><span>'.$items[$i][2].'</span></td>
                        <td class="tg-yw4l"><span>$'.$sub_total.'</span></td>
                    </tr>
                    ';
                }          
            ?>
            <tr>
                <td class="tg-yw4l"><span>Shipping</span></td>
                <td class="tg-yw4l" colspan="2"><span><?php echo $shipping_type; ?></span></td>
                <td class="tg-yw4l"><span>$<?php echo $shipping_price; ?></span></td>
            </tr>
            <tr>
                <td class="tg-yw4l" colspan="3">Total Cost</span></td>
                <td class="tg-yw4l"><span>$<?php echo $total + $shipping_price; ?></span></td>
            </tr>
        </table>
    </body>
</html>
