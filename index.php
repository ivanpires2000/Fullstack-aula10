<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculo do Delta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Estilos principais da página */
      body {
        background-color: #f4f7fa;
        font-family: 'Arial', sans-serif;
      }

      h1 {
        text-align: center;
        margin-top: 40px;
        color: #4e73df;
        font-size: 2.5rem;
      }

      .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
      }

      .row {
        margin-bottom: 20px;
      }

      .form-label {
        font-size: 1.1rem;
        font-weight: 600;
        color: #495057;
      }

      .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        font-size: 1.1rem;
      }

      .btn {
        font-size: 1.2rem;
        padding: 10px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
      }

      .btn-outline-info {
        color: #17a2b8;
        border-color: #17a2b8;
      }

      .btn-outline-info:hover {
        background-color: #17a2b8;
        color: white;
      }

      #resultado {
        margin-top: 20px;
        padding: 15px;
        background-color: #e9f7fa;
        border-radius: 8px;
        border: 1px solid #17a2b8;
        font-size: 1.1rem;
        color: #17a2b8;
        text-align: center;
      }

      /* Responsividade */
      @media (max-width: 768px) {
        .container {
          padding: 20px;
        }

        h1 {
          font-size: 2rem;
        }

        .row {
          margin-bottom: 15px;
        }
      }
    </style>
  </head>
  <body>
    <h1>Cálculo do Delta</h1>

    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3"> 
                <label for="a" class="form-label">Valor de a</label>
                <input type="number" class="form-control" name="a" id="a" placeholder="Digite o valor de a">
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <label for="b" class="form-label">Valor de b</label>
                <input type="number" class="form-control" name="b" id="b" placeholder="Digite o valor de b">
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3"> 
                <label for="c" class="form-label">Valor de c</label>
                <input type="number" class="form-control" name="c" id="c" placeholder="Digite o valor de c">
            </div>
        </div>

        <div class="row mt-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button onclick="calcularDelta();" class="btn btn-outline-info">Calcular</button>
            </div>
        </div>
       
        <p id="resultado"></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function calcularDelta(){
            const campo = document.getElementById("resultado");

            campo.innerHTML = "";
            campo.innerHTML = "Aguarde... Calculando...";

            // Obtemos os dados dos campos HTML
            const a = parseFloat(document.getElementById("a").value);
            const b = parseFloat(document.getElementById("b").value);
            const c = parseFloat(document.getElementById("c").value);

            // Calculando o Delta
            const delta = (b * b) - (4 * a * c);
            
            campo.innerHTML = "O resultado do cálculo do Delta é: " + delta;
        }
    </script>
  </body>
</html>
