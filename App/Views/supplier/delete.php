<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 mt-5">
            <center>
                <h3>Excluir o Fornecedor</h3>
            </center>
        </div>

        <?php if($Session::returnError()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php foreach($Session::returnError() as $key => $message){ ?>
                    <?php echo $message; ?> <br>
                <?php } ?>
            </div>
        <?php } ?>

        <form action="http://<?php echo APP_HOST; ?>/supplier/exclusion" method="post">
            <input type="hidden" class="form-control" name="id_supplier" value="<?php echo $viewVar['supplier']->getIdSupplier(); ?>">

            <div class="panel panel-danger">
                <div class="panel-body mt-5 mb-5">
                    Você deseja realmente excluir esse fornecedor? <b> <?php echo $viewVar['supplier']->getNameSupplier(); ?> </b>
                </div>
                <div class="panel-footer"> 
                    <button type="submit" class="btn btn-danger btn">Excluir</button>
                    <a href="http://<?php echo APP_HOST; ?>/supplier" class="btn btn-info btn">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
