<div class="container">
     <center>
          <!-- ### Título da página ### -->
          <div class="mt-5 mb-5">
               <h2>
                    Cadastro de Produto
               </h2>
          </div>     
     </center>

     <!-- ### Início do formulário de cadastro -->
     <div class="mb-5">
          <form action="http://<?php echo APP_HOST; ?>/product/save" method="post">
               <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                         <label> Referência do produto </label>
                         <input type="text" class="form-control" name="refProduct">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 form-group">
                         <label> Nome do produto </label>
                         <input type="text" class="form-control" name="nameProduct">
                    </div>
               </div>
               <div class="form-group">
                   <label> Descrição do produto </label>
                   <textarea class="form-control" name="descriptionProduct" rows="2"></textarea>
               </div>
               <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Valor de custo do produto </label>
                         <input type="text" class="form-control" name="costPriceProduct">
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Valor de venda do produto </label>
                         <input type="text" class="form-control" name="salePriceProduct">
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 form-group">
                         <label> Quantidade em estoque </label>
                         <input type="text" class="form-control" name="stockProduct">
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
