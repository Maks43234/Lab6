<?php

    $task = file_get_contents("data.json");
    $task = json_decode($tasks, true);

    var_dump($tasks);
?>
<?php foreach($tasks as $task): ?>
    <h2>
        <?=$task['title'];?>
    </h2>
    <p>
        <?=$task['description'];?>
    </p>
    Пріорітет: <?= $task['priority']; ?>
<?php endforeach ?>
    

<form action="create.php" method="POST">
    <input type="text" placeholder="Назва завдання">
    <br><br>
    <textarea> name="description" id="" placeholder="Опис завдання" required></textarea>
    <br><br>
    <select nam="priority" id="" required>
        <option value="Low">Low</option select>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
</select>
<br><br>
<button type="sumbit">Зберегти</button>

</form>