<h3>Lista de notícias abaixo</h3>

<?php

    function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
?>


<?php foreach ($news as $n_item): ?>

    <h3><?php echo $n_item['title']; ?></h3>
    <div class="main">
        <?php
            echo $n_item['text'];
        ?>
    </div>
    <p><a href="<?php echo site_url('news/view/'.tirarAcentos($n_item['slug'])); ?>">Ler notícia</a></p>


<?php endforeach; ?>

<br/>
<br/>
<form action="<?= site_url('news/create/')?>" method="get">
    <input type="submit" value="Criar nova notícia">
</form>
<br/>
<br/>