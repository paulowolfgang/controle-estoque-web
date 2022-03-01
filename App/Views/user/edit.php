<div class="container mb-5">
    <div class="row">
            
        <div class="col-md-12 mt-5">
            <center>
                <h3>Editar o Usuário</h3>
            </center>
        </div>
        
        <div class="col-md-12 mt-5">

            <?php if($Session::returnError()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Session::returnError() as $key => $message){ ?>
                        <?php echo $message; ?> <br/>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class="mb-5">
                <?php
                    echo var_dump($viewVar['user']);
                ?>
                <form action="http://<?php echo APP_HOST; ?>/user/toupdate" method="post">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label> Nome do usuário </label>
                            <input type="text" class="form-control" name="name_user" value="<?php //echo  ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label> E-mail do usuário </label>
                            <input type="email" class="form-control" name="email_user" value="<?php //echo  ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label> Senha do usuário </label>
                            <input type="text" class="form-control" name="pass_user" value="<?php //echo  ?>" required>
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
                    
                    <!-- ### Botões de ações ### -->
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <a href="http://<?php echo APP_HOST; ?>/user" class="btn btn-info">Voltar</a>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</div>
