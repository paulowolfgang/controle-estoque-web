<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Fornecedor
               </h2>
          </div>     
     </center>

     <?php if($Session::returnError()) { ?>
          <div class="alert alert-warning" role="alert">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <?php foreach($Session::returnError() as $key => $message){ ?>
                    <?php echo $message; ?> <br/>
               <?php } ?>
          </div>
     <?php } ?>

     <!-- ### Início do formulário de cadastro -->
     <div class="mb-5">
          <form action="http://<?php echo APP_HOST; ?>/supplier/save" method="post">
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Nome fantasia do fornecedor </label>
                         <input type="text" class="form-control" name="nameSupplier" value="<?php echo $Session::returnValueForm('nameSupplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Razão social do fornecedor </label>
                         <input type="text" class="form-control" name="socialSupplier" value="<?php echo $Session::returnValueForm('socialSupplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Endereço do fornecedor </label>
                         <input type="text" class="form-control" name="adressSupplier" value="<?php echo $Session::returnValueForm('adressSupplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                         <label> Cidade do fornecedor </label>
                         <input type="text" class="form-control" name="citySupplier" value="<?php echo $Session::returnValueForm('citySupplier'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Estado do fornecedor </label>
                         <input type="text" class="form-control" name="stateSupplier" value="<?php echo $Session::returnValueForm('stateSupplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> CNPJ do fornecedor </label>
                         <input type="text" class="form-control" name="cnpjSupplier" value="<?php echo $Session::returnValueForm('cnpjSupplier'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> E-mail do fornecedor </label>
                         <input type="email" class="form-control" name="emailSupplier" value="<?php echo $Session::returnValueForm('emailSupplier'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Telefone do fornecedor </label>
                         <input type="text" class="form-control" name="phoneSupplier" value="<?php echo $Session::returnValueForm('phoneSupplier'); ?>" required>
                    </div>
               </div>
               <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
     </div>
     <!-- ### Fim do formulário de cadastro -->
</div>
