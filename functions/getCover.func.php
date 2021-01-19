<?php
    include_once "../includes/autoLoader.inc.php";

    $id = $_GET['q'];
    $cover = new CoversView();
    $result = $cover->showCoverById($id);

    echo  "<form action='functions/edit.func.php' method='post'>";
    echo "
    <label for='id'>ID:</label><br>
    <input type='text' id='id' name='id' value=$result[coverID]><br>
    <label for='name'>Name:</label><br>
    <input type='text' id='name' name='name' value=$result[name]><br>
    <label for='price'>Price:</label><br>
    <input type='text' id='price' name='price' value=$result[price]><br>
    <label for='desc'>Description:</label><br>
    <input type='text' id='desc' name='desc' value=$result[description]><br><br>
    <button type='submit' name='submit' role ='button' class='btn btn-outline-dark' value='edit'>EDIT</button>
    <button type='submit' name='submit' role ='button' class='btn btn-outline-dark' value='delete'>DELETE</button>
    </form>
    ";
?>