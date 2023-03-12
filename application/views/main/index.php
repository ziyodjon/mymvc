<h1>Main view page</h1>

<?php foreach($news as $val):?>
<h3><?php echo $val['title']?></h3>
<p><?php echo $val['description']?></p>
    <hr>
<?php endforeach;?>