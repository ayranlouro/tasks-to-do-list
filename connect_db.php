<?php

try {
    $connect = new PDO('mysql:host=localhost;dbname=study', 'root', 'root');

    $query = 'SELECT * FROM ABC';

    $result = $connect->query($query);

    $output = $result->fetchAll(PDO::FETCH_OBJ);

    echo "<pre>";
        print_r($output[1]->name);
    echo "<pre>";

} catch (\Throwable $e) {
    echo "<pre></pre>";
    print_r('Code: ' . $e->getCode() . ' / ' . $e->getMessage());
    echo "<pre></pre>";
}

?>