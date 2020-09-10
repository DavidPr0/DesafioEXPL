<!DOCTYPE html>
<html>
<head>
    <style>
    table, th, td {
        border: 1px solid gray;
        padding: 2px;
    }
    </style>
</head>
<body>
    <a href="/explicae" style="margin-left: 20px;">Voltar</a>  <a href="" style="margin-left: 20px;">Atualizar</a>
    <table>
        <tr>
            <th colspan='10'>Sorte 01</th>
        </tr>
        <?php $cont = 0; for ($i = 1; $i <= 6; $i++) { ?>
            <tr>
                <?php for ($e = 1; $e <= 10; $e++) { ?>
                    <?php
                    $cont++;
                        $cor = in_array($cont, $sorteio01) ? '#ff00ff' : '#fff'; ?>
                        <th style="background-color:<?php echo $cor ?> ">
                            <?php  echo $cont; ?>
                        </th>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <table>
        <tr>
            <th colspan='10'>Sorte 02</th>
        </tr>
        <?php $cont = 0; for ($i = 1; $i <= 6; $i++) { ?>
            <tr>
                <?php for ($e = 1; $e <= 10; $e++) { ?>
                    <?php
                    $cont++;
                        $cor = in_array($cont, $sorteio02) ? '#ff00ff' : '#fff'; ?>
                        <th style="background-color:<?php echo $cor ?> ">
                            <?php  echo $cont; ?>
                        </th>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <table>
        <tr>
            <th colspan='10'>Sorte 03</th>
        </tr>
        <?php $cont = 0; for ($i = 1; $i <= 6; $i++) { ?>
            <tr>
                <?php for ($e = 1; $e <= 10; $e++) { ?>
                    <?php
                    $cont++;
                        $cor = in_array($cont, $sorteio03) ? '#ff00ff' : '#fff'; ?>
                        <th style="background-color:<?php echo $cor ?> ">
                            <?php  echo $cont; ?>
                        </th>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>