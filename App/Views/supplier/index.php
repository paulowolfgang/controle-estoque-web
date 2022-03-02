<div class="container mb-5">
    <div class="row">
        
        <div class="col-md-12 mt-5 mb-3">
            <a href="http://<?php echo APP_HOST; ?>/supplier/register" class="btn btn-success btn-sm">Adicionar Novo</a>
        </div>
        
        <div class="col-md-12">
            <?php if($Session::returnMessage()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $Session::returnMessage(); ?>
                </div>
            <?php } ?>

            <?php
                if(!count($viewVar['listSuppliers'])){
                /*
                echo "<pre>";
                    echo var_dump($viewVar['listSuppliers']);
                echo "</pre>";
                */
            ?>
                <div class="alert alert-info" role="alert">Não há fornecedores cadastrados!</div>
            <?php
                } else {
            ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Nome fantasia</td>
                            <td class="info">E-mail</td>
                            <td class="info">Telefone</td>
                            <td class="info"></td>
                        </tr>

                        <?php
                            foreach($viewVar['listSuppliers'] as $supplier)
                            {
                                /*
                                echo "<pre>";
                                    echo var_dump($viewVar['listSuppliers']);
                                echo "</pre>";
                                */
                        ?>
                            <tr>
                                <td><?php echo $supplier->getNameSupplier(); ?></td>
                                <td><?php echo $supplier->getEmailSupplier(); ?></td>
                                <td><?php echo $supplier->getPhoneSupplier(); ?></td>
                                <td>
                                    <center>
                                        <a href="http://<?php echo APP_HOST; ?>/supplier/edit/<?php echo $supplier->getIdSupplier(); ?>" class="btn btn-info btn-sm">Editar</a>
                                        <a href="http://<?php echo APP_HOST; ?>/supplier/delete/<?php echo $supplier->getIdSupplier(); ?>" class="btn btn-danger btn-sm">Remover</a>
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
