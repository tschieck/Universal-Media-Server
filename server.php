<?php
require("include/config.php");
header("Content-Type: text/xml");
db_con();
mysql_select_db("media");
 
$command = $_GET["mode"];
    if ($command == "TV") {
        $query = mysql_query("SELECT * FROM TV_Shows");
        echo "<shows>\n";
        
        while ($shows = mysql_fetch_array($query)) {
            echo "<show>\n";
            echo "\t<id>" . $shows["ID"] . "</id>\n";
            echo "\t<name>" . $shows["Name"] . "</name>\n";
            echo "\t<seasons>" . $shows["Seasons"] . "</seasons>\n";
            echo "\t<episodes>" . $shows["Episodes"] . "</episodes>\n";
            echo "</show>\n";
        }
        echo "</shows>\n";

        if (isset($_GET["show"])) {
           
            $query = mysql_query("SELECT * FROM TV_Episodes WHERE ");
        }
    }   else {
        echo "<version>" . $software["Version"] . "</version>";
        echo "<modules>" . $software["Modules"] . "</modules>";

    }
    ?>



