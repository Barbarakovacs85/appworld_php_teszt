<!doctype html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Számológép</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
.container{
  position:center;
  margin-top:250px;
  background: pink;
  height: 550px;
  padding:15px;
  
}
.btn-success{
  width:420px;
  height:50px;
}
.btn-danger{
  width:420px;
  height:50px;
}
</style>
</head>

<body>
  <div class="container">

<?php 
  if( isset($_SESSION["error"])) {
    ?>
    <div class="alert alert-danger m-3">
      <?php print $_SESSION["error"] ?>
    </div>
      <?php
  } elseif( isset($_SESSION["success"]) ) {
    ?>
    <div class="alert alert-success m-3">
      <?php print $_SESSION["success"] ?>
    </div>
    <?php
  }
?>
    <div class="row mt-5 justify-content-center">
      <h3 class="text-center">Számológép</h3>
      <form action="?page=calculatorProcess" method="post" class="col-lg-4 col-md-6 mx-auto">
        
        <div class="form-floating mb-3">  
        <input type="number" name="numb1" placeholder="Első szám" class="form-control" id="numb1" value="<?php echo isset($_SESSION['eredmeny']) ? $_SESSION['eredmeny'] : ''; ?>">
          <label for="numb1">Adj meg egy számot</label>
        </div>

        <div class="form-floating mb-3" id="numb2-container">  
          <input type="number" name="numb2" placeholder="Második szám" class="form-control" id="numb2">
          <label for="numb2">Adj meg egy második számot</label>
        </div>

        <div class="form-floating mb-3">   
          <select name="Operator" class="form-control" id="operator">
            <option value="Műveletek"></option>
            <option value="Összeadás">Összeadás</option>
            <option value="Kivonás">Kivonás</option>
            <option value="Szorzás">Szorzás</option>
            <option value="Osztás">Osztás</option>
            <option value="Négyzetre emelés">Négyzetre emelés</option>
            <option value="Négyzetgyökvonás">Négyzetgyökvonás</option>
          </select>
          <label>Válassz egy műveletet</label>
        </div>

        <div class="text-center"> 
          <input type="submit" name="submit" value="Kiszámol" class="btn btn-success">
        </div>

      </form>
<!-- hozzáadok egy törlés gombot az numb1 input mező lenullázása érdekében újabb művelet előtt -->
      <form action="?page=clearForm" method="post" class="text-center mt-2 " >
        <input type="submit" name="clear" value="Törlés" class="btn btn-danger">
      </form>
    </div>

  </div>

<script>
document.getElementById('operator').addEventListener('change', function() {
    var operator = this.value;
    var numb2Container = document.getElementById('numb2-container');
    if (operator === 'Négyzetre emelés' || operator === 'Négyzetgyökvonás') {
        numb2Container.style.display = 'none';
    } else {
        numb2Container.style.display = 'block';
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
