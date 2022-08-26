<?php

include 'db.php';

$shortUrl=$_GET["i"];

$stmt = $conn->prepare("SELECT id, long_url, short_url FROM url_table WHERE short_url=?");
$stmt->bindParam(1, $shortUrl);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetch();

if($result == NULL){
    echo  "Page cannot be found.";
}
else{
    header('Location: '.$result["long_url"]);
}