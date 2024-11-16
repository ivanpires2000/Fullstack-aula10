<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculo do Delta</title>
    
    <!-- Link para o CSS do Bootstrap para usar componentes prontos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Estilos personalizados da página -->
    <style>
      /* Estilos para o corpo da página */
      body {
        background-color: #f4f7fa;  /* Cor de fundo suave */
        font-family: 'Arial', sans-serif;  /* Define a fonte padrão */
      }

      /* Estilo para o título */
      h1 {
        text-align: center;  /* Centraliza o título */
        margin-top: 40px;  /* Adiciona espaço acima do título */
        color: #4e73df;  /* Cor vibrante para o título */
        font-size: 2.5rem;  /* Tamanho maior da fonte */
      }

      /* Estilos para o container de entrada e botões */
      .container {
        background-color: #ffffff;  /* Fundo branco */
        padding: 30px;  /* Espaçamento interno */
        border-radius: 10px;  /* Bordas arredondadas */
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);  /* Sombra suave para dar profundidade */
        margin-top: 40px;  /* Espaço superior */
      }

      /* Estilos para as linhas de campos de entrada */
      .row {
        margin-bottom: 20px;  /* Espaço inferior para separar os campos */
      }

      /* Estilo das legendas dos campos de entrada */
      .form-label {
        font-size: 1.1rem;  /* Tamanho maior das legendas */
        font-weight: 600;  /* Deixa as legendas mais fortes */
        color: #495057;  /* Cor escura para contraste */
      }

      /* Estilos para os campos de entrada */
      .form-control {
        border-radius: 8px;  /* Bordas arredondadas */
        border: 1px solid #ced4da;  /* Cor suave para a borda */
        font-size: 1.1rem;  /* Tamanho de fonte maior */
      }

      /* Estilos para o botão */
      .btn {
        font-size: 1.2rem;  /* Tamanho de fonte maior */
        padding: 10px;  /* Aumenta o espaço interno do botão */
        border-radius: 8px;  /* Bordas arredondadas */
        transition: background-color 0.3s ease;  /* Transição suave na cor de fundo */
      }

      /* Estilo específico do botão */
      .btn-outline-info {
        color: #17a2b8;  /* Cor de texto azul */
        border-color: #17a2b8;  /* Cor da borda azul */
      }

      /* Efeito de hover no botão */
      .btn-outline-info:hover {
        background-color: #17a2b8;  /* Cor de fundo azul quando o mouse passa */
        color: white;  /* Cor do texto muda para branco quando o botão é pressionado */
      }

      /* Estilos para a área de resultado */
      #resultado {
        margin-top: 20px;  /* Espaço superior */
        padding: 15px;  /* Espaço interno */
        background-color: #e9f7fa;  /* Fundo azul claro */
        border-radius: 8px;  /* Bordas arredondadas */
        border: 1px solid #17a2b8;  /* Borda azul */
        font-size: 1.1rem;  /* Tamanho maior da fonte */
        color: #17a2b8;  /* Cor do texto azul */
        text-align: center;  /* Centraliza o texto */
      }

      /* Estilos para tornar o layout mais responsivo */
      @media (max-width: 768px) {
        .container {
          padding: 20px;  /* Reduz o padding para telas menores */
        }

        h1 {
          font-size: 2rem;  /* Tamanho de fonte do título menor em dispositivos pequenos */
        }

        .row {
          margin-bottom: 15px;  /* Menos espaço entre os campos */
        }
      }
    </style>
  </head>
  <body>
    <h1>Cálculo do Delta</h1>

    <div class="container">
        <!-- Linha de campos de entrada -->
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

        <!-- Linha com o botão para calcular o Delta -->
        <div class="row mt-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- Botão para acionar o cálculo -->
                <button onclick="calcularDelta();" class="btn btn-outline-info">Calcular</button>
            </div>
        </div>
       
        <!-- Área onde o resultado será exibido -->
        <p id="resultado"></p>

    </div>

    <!-- Script do Bootstrap para funcionamento de alguns componentes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Função para calcular o Delta
        function calcularDelta() {
            const campo = document.getElementById("resultado");  // Seleciona o elemento de resultado

            campo.innerHTML = "";  // Limpa qualquer conteúdo anterior
            campo.innerHTML = "Aguarde... Calculando...";  // Informa que está calculando

            // Obtém os valores dos campos de entrada
            const a = parseFloat(document.getElementById("a").value);  // Converte o valor de "a" para número
            const b = parseFloat(document.getElementById("b").value);  // Converte o valor de "b" para número
            const c = parseFloat(document.getElementById("c").value);  // Converte o valor de "c" para número

            // Calcula o Delta com a fórmula Δ = b² - 4ac
            const delta = (b * b) - (4 * a * c);

            // Exibe o resultado do cálculo no campo de resultado
            campo.innerHTML = "O resultado do cálculo do Delta é: " + delta;
        }
    </script>
  </body>
</html>
