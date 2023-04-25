<h1><?= $title;?></h1>
<ul>
    <?php foreach($posts as $row){?>
    <li><?= $row['title'];?></li>
    <?php } ?>
</ul>