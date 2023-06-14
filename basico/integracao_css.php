<div class="titulo">Integração</div>

<h1 center>
    <?php
    echo 'Olá' . '<small>' . 'Mundo' . '</small>';
    ?>
</h1>

<button id="bTmodal2"><?= 'Teste' ?></button> <!--Criando tags com PHP-->

<style>
    #bTmodal2 {
        padding: 5px <?= 2 * 10 ?>px;
        /*Colocando PHP em tags css*/
        background-color: #4286f4;
        color: #EEE;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }
</style>