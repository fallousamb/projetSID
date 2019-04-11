<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mon super projet</title>

    <!-- Bootstrap core CSS -->

    <link href="app.css" rel="stylesheet">
    <style>
        .close {
            font-size: 20px;
        }
        #moy {
            text-decoration-color: #9c27b0;
            font-style: italic;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mon super projet</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">FairGuest</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <!--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1 style="padding-bottom: 50px">Services offerts</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nom du service</th>
                    <th>Catégorie du service</th>
                    <th>Note moyenne</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Accès wifi</td>
                    <td>Confort</td>
                    <td id="moy">8,5</td>
                </tr>
                <tr>
                    <td>Piscine</td>
                    <td>Confort</td>
                    <td id="moy">6.5</td>
                </tr>
                <tr>
                    <td>Animation</td>
                    <td>Activités</td>
                    <td id="moy">3,7</td>
                </tr>
                <tr>
                    <td>Air recconditionné</td>
                    <td>Confort</td>
                    <td id="moy">9</td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
</div><!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
</script>
</body>
</html>

