<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Usuário
               </h2>
          </div>     
     </center>

     <!-- ### Início do formulário de cadastro -->
     <div class="mb-5">
          <form action="http://<?php echo APP_HOST; ?>/user/save" method="post">
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Nome do usuário </label>
                         <input type="text" class="form-control" name="nameUser" aria-describedby="emailHelp">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> E-mail do usuário </label>
                         <input type="email" class="form-control" name="emailUser" aria-describedby="emailHelp">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label> Senha do usuário </label>
                         <input type="password" class="form-control" name="passUser">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Tipo do usuário </label>
                         <select class="form-control" name="typeUser">
                              <option> Administrador </option>
                              <option> Conferente </option>
                         </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Status do usuário </label>
                         <select class="form-control" name="statusUser">
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
