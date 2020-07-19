<?php
    require 'inc/config.php';
    include_once ("view/header.php");
       
?>
<div class="row container-fluid">
<div class="card content-body" >

                <div class="col">
                            <div class="titulo">card rapido</div>

                                <div class="card-body">
                                        <h5 class="card-title">Materia</h5>
                                        <select class="form-control">
                                                <option value="">Programacao PHP7</option>
                                                <option value="">Financas</option>
                                                <option value="">HTML e CSS</option>
                                        </select>
                                        <h5 class="card-title">Titulo</h5>
                                        <input class="form-control" type="text" placeholder="Default input">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Descricao do Card</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <a href="#" class="btn btn-primary disabled">Feito</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"> 42 horas Restantes para revisar</small>
                                </div>
                        </div>
                </div>

            <div class="col">

                <div class="titulo">card rapido</div>
               
                        <div class="row">
                       
                                <div class="col">
                                    Materias
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>
                        
                                <div class="col">
                                    Concluido
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>
                                
                                <div class="col">
                                    Topico_estudado
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    Descricao_estudado
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    Revisar_atual
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    Qtd_revisoes
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    primeira_data
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    segunda_data 
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    terceira_data 
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>

                                <div class="col">
                                    quarta_data 
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
                                </div>
                                
                        </div>           

                        

            </div>

</div>

</div>


<style type="text/css">

.col 
{
  padding: 2px;
}
</style>   


<?php
    require_once("footer.php");
?>
