<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <tr>
        <?php
        include "partials/connect.php";
        $sql = "SELECT * FROM products";
        $results = $connect->prepare($sql);
        $results->execute();
        while ($row = $results->fetch(PDO::FETCH_ASSOC)){ 
            ?>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><a href="demoview.php?cart_id=<?php echo $row['id'] ?>"><button>Add to cart</button></a></td>
    </tr>
    <?php } ?>
</table>