<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Produto
               </h2>
          </div>     
     </center>

     <!-- ### Retorno de Erro ### --> 
     <?php if($Session::returnError()) { ?>
          <div class="alert alert-warning" role="alert">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <?php foreach($Session::returnError() as $key => $message){ ?>
                    <?php echo $message; ?> <br/>
               <?php } ?>
          </div>
     <?php } ?>

     <!-- ### Início do formulário de cadastro -->
     <div class="mb-5">
          <form action="http://<?php echo APP_HOST; ?>/product/save" method="post">
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Referência do produto </label>
                         <input type="text" class="form-control" name="refProduct" value="<?php echo $Session::returnValueForm('refProduct'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                         <label> Nome do produto </label>
                         <input type="text" class="form-control" name="nameProduct" value="<?php echo $Session::returnValueForm('nameProduct'); ?>" required>
                    </div>
               </div>
               <div class="form-group">
                   <label> Descrição do produto </label>
                   <textarea class="form-control" name="descriptionProduct" rows="2" required><?php echo $Session::returnValueForm('descriptionProduct'); ?></textarea>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Valor de custo do produto </label>
                         <input type="text" class="form-control" name="costPriceProduct" value="<?php echo $Session::returnValueForm('costPriceProduct'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Valor de venda do produto </label>
                         <input type="text" class="form-control" name="salePriceProduct" value="<?php echo $Session::returnValueForm('salePriceProduct'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Quantidade em estoque </label>
                         <input type="text" class="form-control" name="stockProduct" value="<?php echo $Session::returnValueForm('stockProduct'); ?>" required>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Categoria </label>
                         <select class="form-control" name="categoryProduct">
                              <option>Açougue</option>
                              <option>Farmácia</option>
                              <option>Eletrônicos</option>
                              <option>Eletros</option>
                              <option>Bebidas</option>
                              <option>Vestuário</option>
                        </select>
                    </div>
               </div>
               <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
     </div>
     <!-- ### Fim do formulário de cadastro -->
</div>
