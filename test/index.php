<?php
$mysqli = new mysqli("localhost", "root", "", "optc1");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";


$path = "2";
            $files = scandir($path);
            foreach ($files as &$value) {
                if ($value[0]=="f") {         
                echo "<a href='" .$path ."/"  .$value."' target='_black' >".$value."</a><br/>";
                $sql = "insert into characters (id, name, description, image) values( NULL, '', '', '".$value."')";
                $mysqli->query($sql); 

}}

?>