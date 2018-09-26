<?= validation_errors() ?>
<?= form_open('news/create') ?>

<label for="title">Título</label>
<input type="text" name="title"/> <br/>

<label for="text">Texto</label>
<textarea name="text"></textarea><br/>

<input type="submit" name="submit" value="Postar notícia">


<?= form_close() ?>


