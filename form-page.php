<!DOCTYPE html>
<html lang="en">

<div class="url-card" style="height: 100vh" >

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
    <div class="container">
        <div class="row">
            <div class="url-form d-flex justify-content-center mt-5">
                <div class="card text-center">
                    <div class="card-header">
                        File Transfer App
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method ="get">

                            <div class="mb-3" style="width: auto">
                                <label class="form-label">Long URL:</label>
                                <input type="url" class="form-control" required="true" name="longUrl">
                            </div>

                            <div class="mb-3" style="width: auto">
                                <label class="form-label">Short URL:</label>
                                <input type="text" class="form-control" required="true" name="shortUrl">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

</div>
</html>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=

        , initial-scale=1.0">
        <title>URL Shortening App</title>
    </head>
    <body>
        <form action="insert.php" method ="get">
            Long URL:<br/><br/>
            <input type="url" class="form-control" required="true" name="longUrl">
            Short URL:<br/><br/>
            <input type="text" class="form-control" required="true" name="shortUrl">
            <input type="submit" value="Create">
        </form>
    </body>
</html>