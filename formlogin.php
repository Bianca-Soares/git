<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Linkando o arquivo de formatação do conteudo - layout.css -->
        <link href="css/layout.css" rel="stylesheet" type="text/css" />

        <!-- Linkando a biblioteca javascript jQuery -->
        <script type="text/javascript" src="js/lib/jquery-1.4.2.js"></script>

    </head>

    <body>
        <div class="container">
            <div id="form_container">

                <form action="camadas/Controller.php" method="post" name="frm_login">
                    <input type="hidden" name="acao" value="autenticar" />

                    <fieldset>
                        <legend>Efetuar login:</legend>
                        Login:<br />
                        <input type="text" name="login" id="login" />

                        <br /><br />

                        Senha:<br />
                        <input type="password" name="senha" id="senha" /><br /><br />
                        <input type="submit" name="btn_login" id="btn_login">

                    </fieldset>
                </form>

            </div>
            <br/>
            <div id="resultado">
                <?php
                if (isset($_GET['msg'])) {
                    echo $_GET['msg'];
                }
                ?>

            </div>

        </div>
    </body>
</html>