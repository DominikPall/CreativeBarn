<?php 
  include 'nav&foot/header.php';
?>
    <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <?php
            $coverView = new CoversView();
            $result = $coverView->showCover();
        ?>
        <select name="covers" id="form" onchange="showEdit(this.value)">
        <option value="">Select a cover:</option>
            <?php
                $index = 0;
                while($rows = $result[$index]) {
                    $name = $rows['name'];
                    echo "<option value='$rows[coverID]'>$name</option>";
                    $index++;
                }
            ?>
        </select>
        <div id="cover">
        <p>Your cover will be here</p>
        </div>
        <?php
            if(isset($_GET['q'])) {
                if($_GET['q'] == 'success') {
                    echo "<p>EDIT WAS SUCCESS</p>";
                } else if ($_GET['q'] == 'deleted') {
                    echo "<p> Product was deleted </p>";
                }
            }
        ?>

    <script>
        function showEdit(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("cover").innerHTML = "";
                return;
            }

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cover").innerHTML = this.responseText;
                }
            };

            xhttp.open("GET", "functions/getCover.func.php?q="+str, true);
            xhttp.send();
        }
    </script>
    </body>
</html>