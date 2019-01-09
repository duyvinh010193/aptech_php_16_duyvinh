<!DOCTYPE html>
<html>
<body>
    <?php
    $products =array(
        'iphoneX' => array(
            'price'  => 18200000,
            'color' =>'rose'
        ),
        'ipad' => array(
            'price'  => 9000000,
            'color'   => 'gray'
        )
    );
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Name</th>";
    echo "<th>Price</th>";
    echo "<th>Color</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";  
    for($i = 1; $i < count($products); $i++){
        foreach($products as $key=>$value){
            echo "<tr>";
            echo "<th>".$i++."</th>";
            echo "<td>".$key."</td>";
            foreach($value as $key1=>$value1){
                echo "<td>".$value1."</td>";
            }
            echo "</tr>";   
        }       
    }   
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>