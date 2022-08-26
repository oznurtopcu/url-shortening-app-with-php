<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=

    , initial-scale=1.0">
    <title>URL Shortening App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">
</head>
<body>
<?php

include 'db.php';

$baseUrl = "http://localhost/?i=";
$longUrl = $_GET["longUrl"];
$shortUrl = $_GET["shortUrl"];
$resultUrl = "$baseUrl$shortUrl";


$sumUrl = $conn->prepare("SELECT COUNT(*) short_url FROM url_table WHERE short_url=?");
$sumUrl->bindParam(1, $shortUrl);
$sumUrl->execute();

$resultSum = $sumUrl->setFetchMode(PDO::FETCH_ASSOC);
$resultSum = $sumUrl->fetch();


if ($resultUrl == $longUrl) {
    echo "Unable to perform shortening for this url!" . "<br /><br /><br />";
    include 'form-page.php';

} elseif ($resultSum["short_url"] != 0) {
    echo "This URL is already used. Please enter another URL address." . "<br /><br /><br />";
    include 'form-page.php';

} elseif ($shortUrl == null or $longUrl == null) {
    include 'form-page.php';
} else {

    try {
        $sql = "INSERT INTO url_table (long_url, short_url) VALUES ('$longUrl','$shortUrl')";
        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "New record created successfully";
        //echo "<br />";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        echo "<br />";
    }
    //echo "The URL shortening has been successfully completed. You can go to the relevant page by copying the URL.";
    //echo "<br /><br />";
    ?>
    <div class="alert alert-success mt-5" role="alert">
        <h4 class="alert-heading">URL Created!</h4>
        <p>The URL shortening has been successfully completed. You can go to the relevant page by copying the URL.</p>
        <hr>
        <p class="mb-0"><?php echo "$resultUrl"; ?></p>
    </div>

<?php
}
?>
</body>
</html>