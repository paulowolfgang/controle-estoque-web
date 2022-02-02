<?php
     // Oculta o Warning provisóriamente
     //ini_set('display_errors', 0 );
     //error_reporting(0);
?>

<div class="container">
    <div class="row">
        
        <div class="col-md-12 mt-5">
            <a href="http://<?php echo APP_HOST; ?>/product/register" class="btn btn-success btn-sm">Adicionar Novo</a>
        </div>
        <div class="col-md-12">
            <?php if($Session::returnMessage()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $Sessao::returnMessage(); ?>
                </div>
            <?php } ?>

            <?php
                if(!count($viewVar['listProducts'])){
            ?>
                <div class="alert alert-info" role="alert">Não há produtos cadastrados!</div>
            <?php
                } else {
            ?>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Refrência</td>
                            <td class="info">Nome</td>
                            <td class="info">Quantidade</td>
                            <td class="info"></td>
                        </tr>

                        <?php
                            foreach($viewVar['listProducts'] as $product) {
                        ?>
                            <tr>
                                <td><?php echo $product->getRefProduct(); ?></td>
                                <td>R$ <?php echo $produto->getNameProduct(); ?></td>
                                <td><?php echo $produto->getStockProduct(); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/product/edit/<?php echo $product->getIdProduct(); ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/product/delet/<?php echo $product->getIdProduct(); ?>" class="btn btn-danger btn-sm">Remover</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
