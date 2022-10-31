<?php 

    function contactTable($row){
        echo '<tr class="contact" id="' . $row['id'] . '">';
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td id='email'>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>";
        echo "<form action='email.php' method='post'>";
        echo "<input type='hidden' name='to' value='" . $row['Name'] . "' />";
        echo "<button type='submit' name='email' value='" . $row['email'] . "'><img src='../icons/email.svg' alt='E-Mail'/></button>";
        echo "</form>";
        echo "</td>";
        echo "<td>";
        echo "<form action='call.php'  method='post'>";
        echo "<input type='hidden' name='number' value='" . $row['phone'] . "' />";
        echo "<button type='submit' name='call' value='" . $row['Name'] . "' >Call</button>";
        echo "</form>";
        echo "</td>";
        echo "<td>";
        echo "<form action='backend/delete.php' method='post'>";
        echo "<button type='submit' name='id' value='" . $row['id'] ."'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo '</tr>';
    }
    
?>