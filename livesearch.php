<?php
include "db.php";
?>
<html>
<link rel="stylesheet" type="text/css" href="menustyle.css">

</html>
<style>
   h3{
    color:white;
   }

    </style>
<?php
if (isset($_POST['input'])) {

    $input = $_POST['input'];

    $query = "SELECT * FROM menu WHERE name LIKE '{$_POST['input']}%'";

    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) { ?>
        <table class="table table-bordred" style="z-index:10000;">
            <thead>
                <tr>
                    <th> <h3>ID</h3> </th>
                    <th> <h3>Category </h3></th>
                    <th> <h3>Name </h3></th>
                    <th> <h3>Price </h3></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $Category = $row['parent_menu'];
                    $Name = $row['name'];
                    $Price = $row['Price'];
                ?>
                        <tr>
                            <td>
                                <h3><?php echo $id; ?></h3>
                            </td>
                         
                            <td>
                                <h3><?php echo $Category; ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $Name; ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $Price; ?></h3>
                            </td>
                           
                        </tr>
                    </div>
                    </div>
                <?php
                }
                ?>

            </tbody>
        </table>

<?php
    } else {

        echo "<h3 class='text-danger'> No plate found<h3>";
    }
}
?>