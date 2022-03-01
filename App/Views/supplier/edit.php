<div class="container mb-5">
    <div class="row">
            
        <div class="col-md-12 mt-5">
            <center>
                <h3>Editar o Fornecedor</h3>
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
                    //echo var_dump($viewVar['supplier']);
                ?>
                <form action="http://<?php echo APP_HOST; ?>/supplier/toupdate" method="post">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label> Nome fantasia do fornecedor </label>
                            <input type="text" class="form-control" name="name_supplier" value="<?php echo $viewVar['supplier']->getNameSupplier(); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label> Razão social do fornecedor </label>
                            <input type="text" class="form-control" name="social_supplier" value="<?php echo $viewVar['supplier']->getSocialSupplier(); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label> Endereço do fornecedor </label>
                            <input type="text" class="form-control" name="adress_supplier" value="<?php echo $viewVar['supplier']->getAdressSupplier(); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                            <label> Cidade do fornecedor </label>
                            <input type="text" class="form-control" name="city_supplier" value="<?php echo $viewVar['supplier']->getCitySupplier(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                            <label> Estado do fornecedor </label>
                            <input type="text" class="form-control" name="state_supplier" value="<?php echo $viewVar['supplier']->getStateSupplier(); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                            <label> CNPJ do fornecedor </label>
                            <input type="text" class="form-control" name="cnpj_supplier" value="<?php echo $viewVar['supplier']->getCnpjSupplier(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                            <label> E-mail do fornecedor </label>
                            <input type="email" class="form-control" name="email_supplier" value="<?php echo $viewVar['supplier']->getEmailSupplier(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                            <label> Telefone do fornecedor </label>
                            <input type="text" class="form-control" name="phone_supplier" value="<?php echo $viewVar['supplier']->getPhoneSupplier(); ?>" required>
                        </div>
                    </div>
                    
                    <!-- ### Botões de ações ### -->
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <a href="http://<?php echo APP_HOST; ?>/supplier" class="btn btn-info">Voltar</a>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</div>
