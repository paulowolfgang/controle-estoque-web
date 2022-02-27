<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Fornecedor
               </h2>
          </div>     
     </center>

     <!-- ### Retorno de Erro ### --> 
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
                         <input type="text" class="form-control" name="name_supplier" value="<?php echo $Session::returnValueForm('name_supplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Razão social do fornecedor </label>
                         <input type="text" class="form-control" name="social_supplier" value="<?php echo $Session::returnValueForm('social_supplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Endereço do fornecedor </label>
                         <input type="text" class="form-control" name="adress_supplier" value="<?php echo $Session::returnValueForm('adress_supplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                         <label> Cidade do fornecedor </label>
                         <input type="text" class="form-control" name="city_supplier" value="<?php echo $Session::returnValueForm('city_supplier'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Estado do fornecedor </label>
                         <input type="text" class="form-control" name="state_supplier" value="<?php echo $Session::returnValueForm('state_supplier'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> CNPJ do fornecedor </label>
                         <input type="text" class="form-control" name="cnpj_supplier" value="<?php echo $Session::returnValueForm('cnpj_supplier'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> E-mail do fornecedor </label>
                         <input type="email" class="form-control" name="email_supplier" value="<?php echo $Session::returnValueForm('email_supplier'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Telefone do fornecedor </label>
                         <input type="text" class="form-control" name="phone_supplier" value="<?php echo $Session::returnValueForm('phone_supplier'); ?>" required>
                    </div>
               </div>
               <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
     </div>
     <!-- ### Fim do formulário de cadastro -->
</div>
