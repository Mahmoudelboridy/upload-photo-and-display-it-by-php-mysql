<style>
td {
    border: 1px solid black;
}

th {
    border: 1px solid black;

}

* {
    font-size: 30pt;
}

table {
    margin-left: auto;
    margin-right: auto;
}
</style>

<?php
include ('connection.php');
$q="SELECT * FROM `student`";
$data=mysqli_query($con,$q);
$display=mysqli_num_rows($data);
if($display != 0){
    ?>

<table>
    <tr>
        <th>name</th>
        <th>image</th>
    </tr>

    <?php
     while($result=mysqli_fetch_assoc($data)){
        echo "<tr>

        <td>".$result["name"]."</td>
        <td><img src=".$result['img']." height='300' width='300' /></td>

        </tr>";
     }

}