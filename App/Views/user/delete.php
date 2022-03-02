<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 mt-5">
            <center>
                <h3>Excluir o Usuário</h3>
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

        <form action="http://<?php echo APP_HOST; ?>/user/exclusion" method="post">
            <input type="hidden" class="form-control" name="id_user" value="<?php echo $viewVar['user']->getIdUser(); ?>">

            <div class="panel panel-danger">
                <div class="panel-body mt-5 mb-5">
                    Você deseja realmente excluir esse usuário? <b> <?php echo $viewVar['user']->getNameUser(); ?> </b>
                </div>
                <div class="panel-footer"> 
                    <button type="submit" class="btn btn-danger btn">Excluir</button>
                    <a href="http://<?php echo APP_HOST; ?>/user" class="btn btn-info btn">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
