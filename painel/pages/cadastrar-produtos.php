<?php 
verificaPermissaoPagina(2);
if(isset($_POST['acao'])){
    print_r($_FILES['imagem']);
}
?>
<div class="box-container w100" <?php verificaPermissaoMenu(2);?>>
    <h2 class="title"><i class="fas fa-user-plus"></i> Adicionar Produto</h2>
    <hr>
    <div class="mensagem"></div>

    <form   method="post"  enctype="multipart/form-data">
        <div class="box-form">
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="box-form">
            <label for="descricao">Descrição do Produto:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        </div>
        <div class="box-form" style="width:200px; float:left;">
            <label for="altura">Altura:</label>
            <input  type="number" id="altura" name="altura" min="0" max="900" step="5" value="0">
        </div>
        <div class="box-form" style="width:200px; float:left;">
            <label for="largura">Largura:</label>
            <input  type="number" id="largura" name="largura" min="0" max="900" step="5" value="0">
        </div>
        <div class="box-form" style="width:200px; float:left;">
            <label for="comprimento">Comprimento:</label>
            <input  type="number" id="comprimento" name="comprimento" min="0" max="900" step="5" value="0">
        </div>
        <div class="box-form" style="width:100%; float:left;">
            <label for="img">Imagem:</label>
            <input multiple type="file" name="imagem" id="img">
        </div>
        <div class="box-form" style="100%; float:left;">            
            <input type="submit" name="acao" value="Cadastrar">
        </div>
        <div class="clear"></div>
    </form>
    
</div>

