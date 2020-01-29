
<!doctype html>
<html lang="pt-br">
  <head>
    <title>E-mechanical</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo.css">
  </head>
  <body>

    <header>        
      <div class="container-fluid dark bg-dark text-light pt-3 border-bottom">
        <h1 class="text-left pb-3">E-mechanical</h1> 
      </div>        
    </header>

    <div class="container-fluid pt-5">
      <form action="cadastrar.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">                        
              <input type="name" class="form-control" name="inputName" placeholder="Nome">
          </div>
          <div class="form-group col-md-5">
              <input type="email" class="form-control" name="inputEmail" placeholder="E-mail">
          </div>          
        </div>

        <div class="form-row">
              <div class="form-group col-md-6">                        
                  <input type="text" class="form-control" name="inputCity" placeholder="Cidade">
              </div>

              <div class="form-group col-md-4">                        
                  <select name="inputState" class="form-control">
                      <option selected>Estado...</option>
                      <option>Acre</option>
                      <option>Alagoas</option>
                      <option>Macapá</option>
                      <option>Manaus</option>
                      <option>Bahia</option>
                      <option>Ceará</option>
                      <option>Distrito Federal</option>
                      <option>Espiríto Santo</option>
                      <option>Goiás</option>
                      <option>Maranhão</option>
                      <option>Mato Grosso</option>
                      <option>Mato Grosso do Sul</option>
                      <option>Minas Gerais</option>
                      <option>Pará</option>
                      <option>Paraíba</option>
                      <option>Paraná</option>
                      <option>Pernambuco</option>
                      <option>Piauí</option>
                      <option>Rio de Janeiro</option>
                      <option>Rio Grande do Norte</option>
                      <option>Rio Grande do Sul</option>
                      <option>Rondônia</option>
                      <option>Roraima/option>
                      <option>Santa Catarina</option>
                      <option>São Paulo</option>
                      <option>Sergipe</option>
                      <option>Tocantins</option>
                  </select>
              </div>          
        </div>

              <div class="form-row">
                  <div class="form-group col-md-3">
                    <p class="h3 mb-3 font-weight-normal">Descrição:</p>
                  </div>            
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <textarea rows="4" cols="80" name="desc" placeholder="Descreva aqui o seu problema"></textarea>
                </div>
              </div>      
        
        <button type="submit" class="btn btn-primary btn-lg" name="btnEnviar">Enviar</button>
      </form>
    </div>

    <footer>


    </footer>

    <!-- CDN jQuery, popper.js and bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    

  </body>
</html>