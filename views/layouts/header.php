<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="/">Autoline</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-6 col-md-3">
            <h2>Categories</h2>
            <div class="list-group">
               <?php echo $html;?>
            </div>
            <h2>Filter</h2>
            <ul class="list-group">
                <form action="/filter" method="get">
                    <li class="list-group-item">
                        <strong>Color</strong><br>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="red" id="firstCheckbox" name="colors[]">
                                <label class="form-check-label" for="firstCheckbox">Red</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="purple" id="firstCheckbox" name="colors[]">
                                <label class="form-check-label" for="firstCheckbox">Purple</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="silver" id="firstCheckbox" name="colors[]">
                                <label class="form-check-label" for="firstCheckbox">Silver</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="teal" id="firstCheckbox" name="colors[]">
                                <label class="form-check-label" for="firstCheckbox">Teal</label>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>Speed </strong><br>
                        <label for="speed" class="form-label">(min 200 - max 400)</label>
                        <input type="range" class="form-range" min="200" max="400" step="50" id="speed" name="speed">
                    </li>
                    <li class="list-group-item">
                        <strong>Amount</strong><br>
                        <label for="amount" class="form-label">(min 1 - max 10000)</label>
                        <input type="range" class="form-range" min="1" max="10000" step="500" id="amount" name="amount">
                    </li>
                    <li class="list-group-item">
                        <button type="submit" class="btn btn-success">Light</button>
                    </li>
                </form>
            </ul>
        </div>
