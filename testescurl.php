<?php
$data = file_get_contents("http://google.com.br"); //read the file
$convert = explode("\n", $data); //create array separate by new line


for ($i=0;$i<count($convert);$i++)
{
    echo $convert[$i].', '; //write value by index
}
?>
