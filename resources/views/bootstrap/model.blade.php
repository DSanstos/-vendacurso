<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{getenv("SITE_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.0/superhero/bootstrap.min.css" integrity="sha512-pCTSMcZZ+tTaq3FXSWGhMmO/OZ+52FqEdhlExLz8PTBQKMyqxAdav13kofJWiyI5zeieBo8tZ++SMZ2ZgueRBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @section("headpage")
    @show
</head>
<body>
    @section("bodypage")
    @show
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    @section("footerpage")
    @show
</html>