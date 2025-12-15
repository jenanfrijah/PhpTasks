<?php session_start();


if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks']=[];
}

if (isset($_POST['task'])) {
    $_SESSION['tasks'][] = $_POST['task']; 
}


if (isset($_GET['delete'])) {
    $index = (int)$_GET['delete'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
    }
}


?>
<h1>Q4</h1>
<h2>To Do List</h2>


<form action="" method="post">
    New Task: <input type="text" name="task" required>
    <input type="submit" value="Add">
</form>


<ul>
    <?php if(!empty($_SESSION['tasks'])): ?>
        <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
            <li>
                <?php echo $task; ?>
                <a class="delete" href="?delete=<?php echo $index; ?>">X</a>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No tasks yet.</li>
    <?php endif; ?>
</ul>

</body>
</html>
