<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Exo 2", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FROM </h1>
        <form>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">
                        ชื่อ
                    </label>
                </div>
                <div class="col">
                    <input id="fname" class="form-control">
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="lname">
                        สกุล
                    </label>
                </div>
                <div class="col">
                    <input id="lname" class="form-control">
                </div>
            </div>
        </form>
        </div>
    </body>
</html>
