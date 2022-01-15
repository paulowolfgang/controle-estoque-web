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
          <form>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label for="exampleInputEmail1"> Nome do usuário </label>
                         <input type="email" class="form-control" id="nameUser" aria-describedby="emailHelp">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label for="exampleInputEmail1"> E-mail do usuário </label>
                         <input type="email" class="form-control" id="emailUser" aria-describedby="emailHelp">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 form-group">
                         <label for="exampleInputPassword1"> Senha do usuário </label>
                         <input type="password" class="form-control" id="passUser">
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label for="exampleFormControlSelect1">Tipo do usuário</label>
                         <select class="form-control" id="typeUser">
                              <option> Administrador </option>
                              <option> Conferente </option>
                         </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label for="exampleFormControlSelect1">Status do usuário</label>
                         <select class="form-control" id="statusUser">
                              <option>Ativado</option>
                              <option>Desativado</option>
                        </select>
                    </div>
               </div>
               <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
     </div>
</div>
