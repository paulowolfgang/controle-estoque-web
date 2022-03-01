<div class="container mb-5">
    <div class="row">
        
        <div class="col-md-12 mt-5 mb-3">
            <a href="http://<?php echo APP_HOST; ?>/product/register" class="btn btn-success btn-sm">Adicionar Novo</a>
        </div>
        
        <div class="col-md-12">
            <?php if($Session::returnMessage()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $Session::returnMessage(); ?>
                </div>
            <?php } ?>

            <?php
                if(!count($viewVar['listProducts'])){
                /*
                echo "<pre>";
                    echo var_dump($viewVar['listProducts']);
                echo "</pre>";
                */
            ?>
                <div class="alert alert-info" role="alert">Não há produtos cadastrados!</div>
            <?php
                } else {
            ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Referência</td>
                            <td class="info">Nome</td>
                            <td class="info">Quantidade</td>
                            <td class="info"></td>
                        </tr>

                        <?php
                            foreach($viewVar['listProducts'] as $product)
                            {
                                /*
                                echo "<pre>";
                                    echo var_dump($viewVar['listProducts']);
                                echo "</pre>";
                                */
                        ?>
                            <tr>
                                <td><?php echo $product->getRefProduct(); ?></td>
                                <td><?php echo $product->getNameProduct(); ?></td>
                                <td><?php echo $product->getStockProduct(); ?></td>
                                <td>
                                    <center>
                                        <a href="http://<?php echo APP_HOST; ?>/product/edit/<?php echo $product->getIdProduct(); ?>" class="btn btn-info btn-sm">Editar</a>
                                        <a href="http://<?php echo APP_HOST; ?>/product/delet/<?php echo $product->getIdProduct(); ?>" class="btn btn-danger btn-sm">Remover</a>
                                    </center>
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
