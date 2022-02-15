<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP JSON ARRAY OF OBJECTS</title>
</head>
<body>
    <?php
        define("FILENAME", "data.json");
        $handle = fopen(FILENAME, "r");
        
         /*Read the content from the file*/
        $fr = fread($handle, filesize(FILENAME));
        var_dump($fr);
        echo "<br><br>";
        
         /*Decode the string content to json*/
        $json = json_decode($fr);
        var_dump($json);
        echo "<br><br>";
        
         fclose($handle);
        
        $handle = fopen(FILENAME, "a");
        
        $name = "Mir Md. Kawsur";
        $age = 10;
        if ($json === NULL) {
            $data = array(array(
            "name" => $name, "age" => $age));
            $data = json_encode($data);
            fwrite($handle, $data);
        }
        else {
            $json = json_encode($json);
            $json = substr_replace($json, ",", strlen($json)-1);
            $data = array(array(
            "name" => $name, "age" => $age));
            $data = substr(json_encode($data),1);
            $data = $json.$data;
            file_put_contents(FILENAME, $data);
        }
        
         fclose($handle);
    ?>

</body>
</html>