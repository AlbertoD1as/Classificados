<?php require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php
    exit;
}
?>
<div class="container">
    <h1>Meus Anúncios - Adcionar Anúncio</h1>
    
    <form method="POST" enctype="multpart/form-data">
        
    <div class="form-group">
        <label for="categoria">Categoria:</label>
        <select name="categoria" id="categoria" class="form-control">
        <?php
            require 'classes/categorias.classs.php';
            $c = new Categorias();
            $cats = $c->getLista();
            foreach($cats as $cat);
        ?>
            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nome']; ?>
            </option>
        <?php
        T_endforeach;
        ?>
        
           
        
        </select>
    </div>
    <div clas="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" class="form-control"/>
    </div>
    <div clas="form-group">
        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" class="form-control"/>
    </div>
    <div clas="form-group">
        <label for="descrocao">Descriação:</label>
        <textarea class="form-control" name="descricao"></textarea>
    </div>
    <div class="form-group">
        <label for="estado">Estado de Conservação:</label>
        <select name="estado" id="estado" class="form-control">
             <option value="0">Ruim</option>
             <option value="1">Bom</option>
             <option value="2">Ótimo</option>
     </select>
    </div>
    <input type="submit" value="Adicionar" class="btn btn-default" />
</form>    
</div>









<?php require 'pages/footer.php'; ?>