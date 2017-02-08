<?php require '_partials/head.php' ?>

<ul>
<?php foreach ($tasks  as $task) : ?>
    <li><?= $task->description; ?></li>
<?php endforeach; ?>
</ul>
<script src="js/scripts.js"></script>
</body>
</html>