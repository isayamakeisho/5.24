<?php
   $kekka = 0;
   $left = $_POST["left"];
   $center = $_POST["center"];
   $right = $_POST["right"];

   if($center == "1"){
       $kekka = $left + $right;
   }
   if($ceter =="2"){
       $kekka = $left - $right;
   }
   if($ceter =="3"){
    $kekka = $left * $right;
   }
   if($ceter =="4"){
    $kekka = $left / $right;
   }
   if($ceter =="5"){
    $kekka = $left % $right;
   }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>私は仕事が大好きです。</title>
  </head>
  <body>
    <h1>私は仕事が大好きです。</h1>
    <form action="index.php" method="post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername"></label>
    <div class="input-group">
      <div class="input-group-text"></div>
      <input type="text" name="left"class="form-control" id="inlineFormInputGroupUsername" placeholder="">
    </div>
  </div>

  <div class="col-12">
    <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
    <select name="center"class="form-select" id="inlineFormSelectPref">
    <option value="1">加算（＋）</option>
    <option value="2">減算（ー）</option>
    <option value="3">乗算（Ｘ）</option>
    <option value="4">除算（/)</option>
    <option value="5">剰余算（％）</option>

    </select>
  </div>

  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text"></div>
      <input type="text" name="right"class="form-control" id="inlineFormInputGroupUsername" placeholder="">
    </div>
  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary"> = </button>
      <?php
        echo $kekka;
        ?>
  </div>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>