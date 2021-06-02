<!DOCTYPE html>
<html lang="en">

</html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form method="POST" action="mission1-2.php">
    <input type="text" name="search" value="" />
    <input type="submit" name="send" value="検索" />
  </form>
  <?php
  $fruits = ['apple', 'orange', 'strawberry'];
if(!empty($_POST['send']) && array_search($_POST['search'],$fruits,true) !== false){
  echo $_POST['search'].'は,配列fruitsの中に存在しています。';
}else if(!empty($_POST['send']) ){
  echo $_POST['search'].'は,配列fruitsの中に存在していません。';
}
?>
</body>

</html>