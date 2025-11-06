// ========================================
// DADOS DOS PRODUTOS
// ========================================
const produtos = [
  {
    id: 1,
    nome: "Vaso de Cerâmica Azul",
    categoria: "Cerâmica",
    preco: 100.0,
    descricao:
      "Vaso decorativo em cerâmica azul com padrões geométricos artesanais. Perfeito para decorar qualquer ambiente.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Ccircle cx=%22100%22 cy=%2280%22 r=%2240%22 fill=%224a90e2%22 opacity=%220.5%22/%3E%3C/svg%3E",
    estoque: 10,
  },
  {
    id: 2,
    nome: "Prato Decorativo",
    categoria: "Cerâmica",
    preco: 85.0,
    descricao:
      "Prato em cerâmica com pintura manual e acabamento artesanal. Ideal como peça de decoração.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Ccircle cx=%22100%22 cy=%22100%22 r=%2250%22 fill=%22%23c85a3a%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 15,
  },
  {
    id: 3,
    nome: "Caixa de Madeira",
    categoria: "Madeira",
    preco: 120.0,
    descricao:
      "Caixa artesanal em madeira maciça com acabamento natural. Ótima para armazenamento.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Crect x=%2260%22 y=%2250%22 width=%2280%22 height=%22100%22 fill=%228b5a3c%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 8,
  },
  {
    id: 4,
    nome: "Moldura de Madeira",
    categoria: "Madeira",
    preco: 65.0,
    descricao:
      "Moldura para fotos em madeira com entalhes artesanais. Realça qualquer fotografia.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Crect x=%2250%22 y=%2240%22 width=%22100%22 height=%22120%22 fill=%22none%22 stroke=%228b5a3c%22 stroke-width=%222%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 12,
  },
  {
    id: 5,
    nome: "Tapete Artesanal",
    categoria: "Têxtil",
    preco: 250.0,
    descricao:
      "Tapete tecido à mão com padrões tradicionais e cores naturais. Adiciona calor ao ambiente.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Crect x=%2270%22 y=%2260%22 width=%2260%22 height=%2280%22 fill=%22%23c85a3a%22 opacity=%220.2%22/%3E%3C/svg%3E",
    estoque: 5,
  },
  {
    id: 6,
    nome: "Almofada Decorativa",
    categoria: "Têxtil",
    preco: 55.0,
    descricao:
      "Almofada com padrões geométricos e enchimento premium. Conforto e estilo combinados.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Crect x=%2270%22 y=%2260%22 width=%2260%22 height=%2280%22 fill=%228b5a3c%22 opacity=%220.3%22 rx=%225%22/%3E%3C/svg%3E",
    estoque: 20,
  },
  {
    id: 7,
    nome: "Vaso de Vidro",
    categoria: "Vidro",
    preco: 95.0,
    descricao:
      "Vaso em vidro soprado com acabamento artesanal brilhante. Elegância em sua forma pura.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Ccircle cx=%22100%22 cy=%22100%22 r=%2250%22 fill=%22none%22 stroke=%228b5a3c%22 stroke-width=%222%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 7,
  },
  {
    id: 8,
    nome: "Luminária de Vidro",
    categoria: "Vidro",
    preco: 150.0,
    descricao:
      "Luminária artesanal em vidro com padrões geométricos. Cria uma atmosfera aconchegante.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Ccircle cx=%22100%22 cy=%2280%22 r=%2235%22 fill=%22%23c85a3a%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 6,
  },
  {
    id: 9,
    nome: "Candelabro de Metal",
    categoria: "Metal",
    preco: 180.0,
    descricao:
      "Candelabro em metal forjado com acabamento artesanal. Traz sofisticação para a decoração.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Ccircle cx=%22100%22 cy=%22100%22 r=%2240%22 fill=%238b5a3c%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 4,
  },
  {
    id: 10,
    nome: "Espelho com Moldura",
    categoria: "Metal",
    preco: 200.0,
    descricao:
      "Espelho decorativo com moldura em metal artesanal. Amplifica a luz e a sensação de espaço.",
    imagem:
      "data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23e8dfd6%22 width=%22200%22 height=%22200%22/%3E%3Crect x=%2250%22 y=%2240%22 width=%22100%22 height=%22120%22 fill=%22none%22 stroke=%238b5a3c%22 stroke-width=%222%22 opacity=%220.3%22/%3E%3C/svg%3E",
    estoque: 3,
  },
];

// VARIÁVEIS GLOBAIS

let carrinho = [];
let categoriaAtiva = null;
let produtoAtual = null;

// FUNÇÕES UTILITÁRIAS

/**
 * Formata um número como preço em reais
 * @param {number} preco - Valor a formatar
 * @returns {string} Preço formatado (ex: "R$ 85,00")
 */
function formatarPreco(preco) {
  return "R$ " + preco.toFixed(2).replace(".", ",");
}

/**
 * Renderiza os produtos na página
 * @param {string|null} filtro - Categoria para filtrar (null = todas)
 */
function renderizarProdutos(filtro = null) {
  const grid = document.getElementById("produtos-grid");
  grid.innerHTML = "";

  // Filtrar produtos se uma categoria foi selecionada
  const produtosFiltrados = filtro
    ? produtos.filter((p) => p.categoria === filtro)
    : produtos;

  // Criar card para cada produto
  produtosFiltrados.forEach((produto) => {
    const card = document.createElement("div");
    card.className = "produto-card";
    card.innerHTML = `
            <div class="produto-imagem">
                <img src="${produto.imagem}" alt="${produto.nome}">
            </div>
            <div class="produto-info">
                <h3>${produto.nome}</h3>
                <p class="produto-descricao">${produto.descricao.substring(
                  0,
                  80
                )}...</p>
                <div class="produto-footer">
                    <span class="preco">${formatarPreco(produto.preco)}</span>
                    <div class="produto-acoes">
                        <button class="btn btn-info" onclick="abrirDetalhes(${
                          produto.id
                        })">Ver</button>
                        <button class="btn btn-carrinho" onclick="adicionarRapido(${
                          produto.id
                        })">Carrinho</button>
                    </div>
                </div>
            </div>
        `;
    grid.appendChild(card);
  });
}

/**
 * Filtra produtos por categoria
 * @param {string|null} categoria - Categoria selecionada
 */
function filtrarCategoria(categoria) {
  categoriaAtiva = categoria;
  renderizarProdutos(categoria);

  // Atualizar classe ativo nos links
  document.querySelectorAll(".categoria-link").forEach((link) => {
    link.classList.remove("ativo");
  });
  event.target.classList.add("ativo");

  // Atualizar título
  const titulo = document.getElementById("titulo-produtos");
  titulo.textContent = categoria ? categoria : "Todos os Produtos";
}

// ========================================
// FUNÇÕES DO MODAL DE DETALHES
// ========================================

/**
 * Abre o modal com detalhes do produto
 * @param {number} id - ID do produto
 */
function abrirDetalhes(id) {
  produtoAtual = produtos.find((p) => p.id === id);

  // Preencher dados do modal
  document.getElementById("modal-nome").textContent = produtoAtual.nome;
  document.getElementById("modal-preco").textContent = formatarPreco(
    produtoAtual.preco
  );
  document.getElementById("modal-descricao").textContent =
    produtoAtual.descricao;
  document.getElementById("modal-img").src = produtoAtual.imagem;
  document.getElementById("modal-quantidade").value = 1;
  document.getElementById("modal-quantidade").max = produtoAtual.estoque;

  // Mostrar status de estoque
  const estoqueDiv = document.getElementById("modal-estoque");
  if (produtoAtual.estoque > 0) {
    estoqueDiv.innerHTML = `<span class="em-estoque">Em estoque (${produtoAtual.estoque} disponível)</span>`;
  } else {
    estoqueDiv.innerHTML = `<span class="fora-estoque">Fora de estoque</span>`;
  }

  // Exibir modal
  document.getElementById("modal-detalhes").style.display = "block";
}

/**
 * Fecha o modal de detalhes
 */
function fecharModal() {
  document.getElementById("modal-detalhes").style.display = "none";
}

/**
 * Adiciona produto ao carrinho (do modal)
 */
function adicionarAoCarrinho() {
  const quantidade = parseInt(
    document.getElementById("modal-quantidade").value
  );

  // Verificar se produto já está no carrinho
  const itemExistente = carrinho.find((item) => item.id === produtoAtual.id);

  if (itemExistente) {
    itemExistente.quantidade += quantidade;
  } else {
    carrinho.push({
      id: produtoAtual.id,
      nome: produtoAtual.nome,
      preco: produtoAtual.preco,
      quantidade: quantidade,
      imagem: produtoAtual.imagem,
    });
  }

  atualizarBadge();
  fecharModal();
  alert("Produto adicionado ao carrinho!");
}

/**
 * Adiciona produto ao carrinho (botão rápido)
 * @param {number} id - ID do produto
 */
function adicionarRapido(id) {
  const produto = produtos.find((p) => p.id === id);
  const itemExistente = carrinho.find((item) => item.id === id);

  if (itemExistente) {
    itemExistente.quantidade += 1;
  } else {
    carrinho.push({
      id: produto.id,
      nome: produto.nome,
      preco: produto.preco,
      quantidade: 1,
      imagem: produto.imagem,
    });
  }

  atualizarBadge();
}

// ========================================
// FUNÇÕES DO CARRINHO
// ========================================

/**
 * Atualiza o badge do carrinho com a quantidade total
 */
function atualizarBadge() {
  const total = carrinho.reduce((sum, item) => sum + item.quantidade, 0);
  document.getElementById("badge-carrinho").textContent = total;
}

/**
 * Abre o modal do carrinho
 */
function abrirCarrinho() {
  const conteudo = document.getElementById("carrinho-conteudo");

  if (carrinho.length === 0) {
    conteudo.innerHTML =
      '<div class="carrinho-vazio"><p>Seu carrinho está vazio</p></div>';
  } else {
    let html = '<div class="carrinho-itens">';
    let total = 0;

    // Renderizar cada item do carrinho
    carrinho.forEach((item) => {
      const subtotal = item.preco * item.quantidade;
      total += subtotal;
      html += `
                <div class="carrinho-item">
                    <div class="carrinho-item-info">
                        <div class="carrinho-item-nome">${item.nome}</div>
                        <div class="carrinho-item-preco">${formatarPreco(
                          item.preco
                        )}</div>
                    </div>
                    <div class="carrinho-item-quantidade">
                        <button onclick="diminuirQuantidade(${
                          item.id
                        })">-</button>
                        <span>${item.quantidade}</span>
                        <button onclick="aumentarQuantidade(${
                          item.id
                        })">+</button>
                    </div>
                    <div>${formatarPreco(subtotal)}</div>
                    <button class="carrinho-item-remover" onclick="removerDoCarrinho(${
                      item.id
                    })">Remover</button>
                </div>
            `;
    });

    html += "</div>";
    html += `
            <div class="carrinho-resumo">
                <div class="resumo-linha">
                    <span>Subtotal:</span>
                    <span>${formatarPreco(total)}</span>
                </div>
                <div class="resumo-linha">
                    <span>Frete:</span>
                    <span>Grátis</span>
                </div>
                <div class="resumo-total">
                    <span>Total:</span>
                    <span>${formatarPreco(total)}</span>
                </div>
            </div>
            <div class="carrinho-acoes">
                <button class="btn btn-carrinho" onclick="finalizarCompra()">Finalizar Compra</button>
                <button class="btn btn-info" onclick="fecharCarrinho()">Continuar Comprando</button>
            </div>
        `;

    conteudo.innerHTML = html;
  }

  document.getElementById("modal-carrinho").style.display = "block";
}

/**
 * Fecha o modal do carrinho
 */
function fecharCarrinho() {
  document.getElementById("modal-carrinho").style.display = "none";
}

/**
 * Aumenta a quantidade de um item no carrinho
 * @param {number} id - ID do produto
 */
function aumentarQuantidade(id) {
  const item = carrinho.find((i) => i.id === id);
  if (item) item.quantidade++;
  atualizarBadge();
  abrirCarrinho();
}

/**
 * Diminui a quantidade de um item no carrinho
 * @param {number} id - ID do produto
 */
function diminuirQuantidade(id) {
  const item = carrinho.find((i) => i.id === id);
  if (item && item.quantidade > 1) item.quantidade--;
  atualizarBadge();
  abrirCarrinho();
}

/**
 * Remove um item do carrinho
 * @param {number} id - ID do produto
 */
function removerDoCarrinho(id) {
  carrinho = carrinho.filter((item) => item.id !== id);
  atualizarBadge();
  abrirCarrinho();
}

/**
 * Finaliza a compra
 */
function finalizarCompra() {
  alert("Compra finalizada com sucesso! Obrigado pela compra.");
  carrinho = [];
  atualizarBadge();
  fecharCarrinho();
}

// ========================================
// EVENTOS GLOBAIS
// ========================================

/**
 * Fecha modal ao clicar fora dele
 */
window.onclick = function (event) {
  const modal = document.getElementById("modal-detalhes");
  const modalCarrinho = document.getElementById("modal-carrinho");

  if (event.target === modal) {
    modal.style.display = "none";
  }
  if (event.target === modalCarrinho) {
    modalCarrinho.style.display = "none";
  }
};

// ========================================
// INICIALIZAÇÃO
// ========================================

/**
 * Renderiza produtos ao carregar a página
 */
document.addEventListener("DOMContentLoaded", function () {
  renderizarProdutos();
});
