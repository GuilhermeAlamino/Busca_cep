<?php include("./header.php") ?>

<body>
    <form id="form.php">
    
    <div class="form-group col-md-4">

    <h1>Busca Cep</h1>

    <label for="Cep">Cep</label>
    <input type="cep" placeholder=(ex:08450-579) class="form-control form-control-sm" id="cep" name="cep">
    
    <label for="logradouro">Logradouro</label>
    <input type="text" placeholder=(Avenida-liberdade) required class="form-control form-control-sm"  id="logradouro" name="logradouro">
    
    <label for="complemento">Complemento</label>
    <input type="text" placeholder=(ex:41-B)  required  class="form-control form-control-sm" id="complemento" name="complemento">
    
    <label for="bairro">Bairro</label>
    <input type="text" placeholder=(ex:Paulista) required  class="form-control form-control-sm" id="bairro" name="bairro">
    
    <label for="localidade">Localidade</label>
    <input type="text" placeholder=(ex:São-Paulo) required  class="form-control form-control-sm" id="localidade" name="localidade" >
    
    <label for="uf">UF</label>
    <input type="text" placeholder=(ex:SP) required  class="form-control form-control-sm" id="uf" name="uf">
    
    <label for="ibge">IBGE</label>
    <input type="text"  class="form-control form-control-sm" id="ibge" name="ibge">
    
    <label for="ddd">DDD</label>
    <input type="text" placeholder=(ex:11) required  class="form-control form-control-sm" id="ddd" name="ddd">
    
    <input type="submit" id="botao" class="btn btn-secondary btn-lg btn-block btn-sm" value="Buscar">

    <footer>&copy;Todos os Direitos Reservados!</footer>
    <div class="alert alert-success form-control-sm" role="alert"><p></p></div>

    <div class="alert alert-danger form-control-sm" role="alert"><p></p></div>
   
    <div>
    </form>

<?php include("./footer.php")?>