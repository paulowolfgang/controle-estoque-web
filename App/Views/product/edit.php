<div class="container mb-5">
    <div class="row">
            
        <div class="col-md-12 mt-5">
            <center>
                <h3>Editar o Produto</h3>
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
                    //echo var_dump($viewVar['product']);
                ?>
                <form action="http://<?php echo APP_HOST; ?>/product/toupdate" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                            <label> Referência do produto </label>
                            <input type="text" class="form-control" name="ref_product" value="<?php echo $viewVar['product']->getRefProduct(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                            <label> Nome do produto </label>
                            <input type="text" class="form-control" name="name_product" value="<?php echo $viewVar['product']->getNameProduct(); ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> Descrição do produto </label>
                        <textarea class="form-control" name="description_product" rows="2" required><?php echo $viewVar['product']->getDescriptionProduct(); ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                            <label> Valor de custo do produto </label>
                            <input type="text" class="form-control" name="cost_price_product" value="<?php echo $viewVar['product']->getCostPriceProduct(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                            <label> Valor de venda do produto </label>
                            <input type="text" class="form-control" name="sale_price_product" value="<?php echo $viewVar['product']->getSalePriceProduct(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                            <label> Quantidade em estoque </label>
                            <input type="text" class="form-control" name="stock_product" value="<?php echo $viewVar['product']->getStockProduct(); ?>" required>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                            <label> Categoria </label>
                            <select class="form-control" name="category_product">
                                <option value="0" <?php echo $viewVar['product']->getCategoryProduct() == 'Açougue' ? 'selected' : '';?> >Açougue</option>
                                <option value="1" <?php echo $viewVar['product']->getCategoryProduct() == 'Farmácia' ? 'selected' : '';?> >Farmácia</option>
                                <option value="2" <?php echo $viewVar['product']->getCategoryProduct() == 'Eletrônicos' ? 'selected' : '';?> >Eletrônicos</option>
                                <option value="3" <?php echo $viewVar['product']->getCategoryProduct() == 'Eletros' ? 'selected' : '';?> >Eletros</option>
                                <option value="4" <?php echo $viewVar['product']->getCategoryProduct() == 'Bebidas' ? 'selected' : '';?> >Bebidas</option>
                                <option value="5" <?php echo $viewVar['product']->getCategoryProduct() == 'Vestuário' ? 'selected' : '';?> >Vestuário</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- ### Botões de ações ### -->
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <a href="http://<?php echo APP_HOST; ?>/product" class="btn btn-info">Voltar</a>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</div>
