<?php
if ($_SERVER['REQUEST_MERTHOD'] == 'POST'){

   $title = '';
   $description = '';
   $priority = '';

   if(isset($_POST['title'])) {
     $title = $_POST['title'];
   }

   if(isset($_POST['description'])) {
    $_POST['description'] = $description;
   }
   
   if(isset($_POST['priority'])) {
    $_POST['priority'] = $priority;
   }

   $data = file_get_contents("data.json");
   $data = json_decode($data, true);


   $data[] = [
    'title'=> $title,
    'description'=> $description,
    'priority'=> $priority

   ];
   

   $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
   file_put_contents('data.json', $data);

   echo '<h1>Дані збережено!</h1>';
   echo "<a href='index.php'>Назад</a>";
}
?>

<a href="index.php">Назад</a>