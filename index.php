<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>MEU FORMULÁRIO</title>
    <link rel="stylesheet" href="css/buma.min.css">

</head>
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                <h1 class="title has-text-centered">VAMOS FORMULAR</h1>
                <form action="enviar.php" method="POST">
                    <div class="field"> 
                        <label class="label"> Nome</label>
                        <div class="control">
                            <input name="nome" class="input" type="text" placeholder="Digite seu nome">
                        </div>
                    </div> 

                    <div class="field"> 
                        <label class="label"> E-mail *</label>
                        <div class="control">
                            <input name="e-mail" class="input" type="text" placeholder="Digite seu e-mail">
                        </div>
                    </div> 

                    <div class="field"> 
                        <label class="label"> Assunto</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="Assunto">
                                <option> Reportar erro</option>
                                <option> Anunciar</option>
                                <option> outros</option>
                        </div>
                    </div> 



                    <div class="field"> 
                        <label class="label"> Mensagem *</label>
                        <div class="control">
                            <textarea name="Mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlenght="2000"></textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link is-medium">Enviar</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

</section>


</html>    