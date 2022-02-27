<?php
     // Oculta o Warning provisóriamente
     ini_set('display_errors', 0 );
     error_reporting(0);
?>

<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Usuário
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

     <!-- ### Retorno de Mensagem ### -->     
     <?php if($Session::returnMessage()){ ?>
          <div class="alert alert-warning" role="alert"><?php echo $Session::returnMessage(); ?></div>
     <?php } ?>

     <!-- ### Início do formulário de cadastro ### -->
     <div class="mb-5">
          <form action="http://<?php echo APP_HOST; ?>/user/save" method="post">
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Nome do usuário </label>
                         <input type="text" class="form-control" name="name_user" value="<?php echo $Session::returnValueForm('name_user'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> E-mail do usuário </label>
                         <input type="email" class="form-control" name="email_user" value="<?php echo $Session::returnValueForm('email_user'); ?>" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Senha do usuário </label>
                         <input type="password" class="form-control" name="pass_user" required>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Tipo do usuário </label>
                         <select class="form-control" name="type_user">
                              <option> Administrador </option>
                              <option> Conferente </option>
                         </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Status do usuário </label>
                         <select class="form-control" name="status_user">
                              <option>Ativado</option>
                              <option>Desativado</option>
                        </select>
                    </div>
               </div>
               <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
     </div>
     <!-- ### Fim do formulário de cadastro -->
</div>
