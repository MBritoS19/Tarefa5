<?php
class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;
    public $compra;

    // Construtor para inicializar os atributos
    public function __construct($nome, $descricao, $valor, $imagem, $compra)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $valor = (float) $valor; // "5.3" -> 5.3
        $this->valor = $valor;
        $this->imagem = $imagem;
        $this->compra = $compra;
    }

    // Método para exibir as informações do produto
    public function exibirInformacoes() {
      echo '
      <div class="card text-center" style="width: 18rem; margin-bottom: 20px; border-radius: 10px;">
          <div style="background-color: #3b5998; border-radius: 10px 10px 0 0;">
              <img src="' . $this->imagem . '" class="card-img-top" alt="' . $this->nome . '" style="height: 200px; object-fit: cover;">
          </div>
          <div class="card-body">
              <h5 class="card-title">' . $this->nome . '</h5>
              <p class="card-text">' . $this->descricao . '</p>
              <p class="card-text"><strong>A partir de:</strong><br> R$' . number_format($this->valor, 2, ',', '.') . ' <br>à vista</p>
              <a href="' . $this->compra . '" class="btn btn-success" target="_blank">Pegar promoção <i class="fas fa-external-link-alt"></i></a>
          </div>
      </div>';
  }
}

// $teste = new Produto("Teste", "vamos testar", 2.50, "https://faculdadeimes.org.br/wp-content/uploads/2023/06/36-atencao-area-de-teste.jpg", "https://www.drogasil.com.br/teste-de-gravidez-99-99-precisao-gravtest-easy-cimed-930657.html?srsltid=AfmBOor4IzweHsjTdAi1pKHCpqZ_-rnkkkaa7u7nrh7oj9r5eIITQD0d8g0");
// $teste->exibirInformacoes();
