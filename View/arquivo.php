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
        <a href="/explicae">Voltar</a>
        <form enctype="multipart/form-data" action="" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            Enviar esse arquivo: <input name="arquivo" type="file" />
            <input type="submit" value="Enviar arquivo" />
        </form>
    </body>
</html>