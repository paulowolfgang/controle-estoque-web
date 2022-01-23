<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Fornecedor
               </h2>
          </div>     
     </center>

     <!-- ### Início do formulário de cadastro -->
     <div class="mb-5">
          <form action="http://<?php echo APP_HOST; ?>/supplier/save" method="post">
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Nome fantasia do fornecedor </label>
                         <input type="text" class="form-control" name="nameSupplier">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Razão social do fornecedor </label>
                         <input type="text" class="form-control" name="socialSupplier">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Endereço do fornecedor </label>
                         <input type="text" class="form-control" name="adressSupplier">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                         <label> Cidade do fornecedor </label>
                         <input type="text" class="form-control" name="citySupplier">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Estado do fornecedor </label>
                         <input type="text" class="form-control" name="stateSupplier">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> CNPJ do fornecedor </label>
                         <input type="text" class="form-control" name="cnpjSupplier">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> E-mail do fornecedor </label>
                         <input type="email" class="form-control" name="emailSupplier">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Telefone do fornecedor </label>
                         <input type="text" class="form-control" name="phoneSupplier">
                    </div>
               </div>
               <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
     </div>
     <!-- ### Fim do formulário de cadastro -->
</div>