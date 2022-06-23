<div class="container">
     <div class="row mt-5 mb-5">
          <div class="col-md-4">
               <div class="card text-center border-dark mb-3">
                    <div class="card-header text-white bg-primary">
                         Usuários
                    </div>
                    <div class="card-body text-dark">
                         <h5 class="card-title">Total de cadastros</h5>
                         <p class="card-text"><?php echo var_dump($viewVar['totalUser']); ?></p>
                    </div>
               </div>
          </div>
          <div class="col-md-4">
               <div class="card text-center border-dark mb-3">
                    <div class="card-header text-white bg-info">
                         Fornecedores
                    </div>
                    <div class="card-body text-dark">
                         <h5 class="card-title">Total de cadastros</h5>
                         <p class="card-text"><?php echo var_dump($viewVar['totalSupplier']); ?></p>
                    </div>
               </div>
          </div>
          <div class="col-md-4">
               <div class="card text-center border-dark mb-3">
                    <div class="card-header text-white bg-success">
                         Produtos
                    </div>
                    <div class="card-body text-dark">
                         <h5 class="card-title">Total de cadastros</h5>
                         <p class="card-text"><?php echo var_dump($viewVar['totalProduct']); ?></p>
                    </div>
               </div>
          </div>
     </div>
</div>
