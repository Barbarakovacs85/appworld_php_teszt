<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Számológép</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div>
    <form action="" method="post" >
        <label>Addj meg egy számot</label>
        <input type="number" name="numb1" placeholder="Első szám" class="form-control">
        <br>
        <br>
        <label>Addj meg a második számot</label>
        <input type="number" name="numb2" placeholder="Második szám" class="form-control">
        <br>
        <br>
        <p>Válassz egy műveletet:</p>
        <select name="Operator" class="form-control">
        <option>Műveletek</option>
        <option>Összeadás</option>
        <option>Kivonás</option>
        <option>Szorzás</option>
        <option>Osztás</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit" value="Calculate" class="btn btn-success">
    </form>
    <br>
    <br>
    <h4>Végeredmény:</h4>
    <div id="answer"></div>
    </div>
    <div class="col-lg-3"></div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>