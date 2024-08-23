
  <main>
    <section id="productos" class="products-section">
      <h2>Nuestros Productos</h2>
      <div class="products-container" id="products-container-1">
        <!-- Los productos se añadirán aquí dinámicamente -->
      </div>
      <div class="products-container" id="products-container-2">
        <!-- Los productos se añadirán aquí dinámicamente -->
      </div>
    </section>
  </main>
  <script src="js/scripts.js"></script>
</body>
</html>

<style>
    /* Estilos básicos para la página */

se{
    background-image: url("assets/img/bg/pop.png");
}


.products-section {
  padding: 20px;

}

.products-container {
  display: flex;
  overflow-x: auto;
  margin-bottom: 20px; /* Espacio entre las filas */

}

.product-card {
/*background-image:url("assets/img/bg/pop.png"); fondo de los productos   */
  border: 1px solid #ddd;
  border-radius: 5px;
  margin: 10px;
  padding: 10px;
  min-width: 200px;
  text-align: center;
}

.product-card img {
  max-width: 100%;
  height: auto;
  border-bottom: 1px solid #ddd;
  margin-bottom: 10px;

  
}

.product-card h3 {
  font-size: 1.2em;
  margin: 0.5em 0;
  
}


.product-card p {
  font-size: 0.9em;
  color: #555;
}

.product-card .price {
  font-size: 1.1em;
  color: #333;
  margin: 0.5em 0;
}

.product-card .btn-primary {
    
  padding: 10px 15px;
  background-color: green;
  color: white;
  text-decoration: none;
  border-radius: 5px;

}

</style>

<script>
    // Datos de productos (esto sería normalmente traído desde una base de datos)
const products = [
    {
    id: 1,
    name: 'Pastel de Chocolate',
    description: '',
    originalPrice: 'S/ 20.00',
    discountPrice: 'S/ 15.00',
    discountPercentage: '25% OFF',
    installments: 'en 12x S/ 1.25 sin interés',
    shipping: 'Llega gratis mañana',
    imageUrl: 'assets/img/product/product1.png'
  },

  {
    id: 2,
    name: 'Cupcakes de Vainilla',
    description: '',
    price: 'S/ 10.00',
    imageUrl: 'assets/img/product/product1.png'
  },
  {
    id: 3,
    name: 'Cupcakes de Fresa',
    description: '',
    price: 'S/ 12.00',
    imageUrl: 'assets/img/product/product1.png'
  },
  {
    id: 4,
    name: 'Cupcakes de Chocolate',
    description: '',
    price: 'S/ 14.00',
    imageUrl: 'assets/img/product/product1.png'
  },
  {
    id: 5,
    name: 'Cupcakes de Limón',
    description: '',
    price: 'S/ 10.00',
    imageUrl: 'assets/img/product/product1.png'
  },
  {
    id: 6,
    name: 'Cupcakes de Zanahoria',
    description: '',
    price: 'S/ 10.00',
    imageUrl: 'assets/img/product/product1.png'
  },
  {
    id: 6,
    name: 'Cupcakes de Zanahoria',
    description: '',
    price: 'S/ 10.00',
    imageUrl: 'assets/img/product/product1.png'
  },
  {
    id: 6,
    name: 'Cupcakes de Zanahoria',
    description: '',
    price: 'S/ 10.00',
    imageUrl: 'assets/img/product/product1.png'
  }
];

// Renderizar productos en la página
document.addEventListener('DOMContentLoaded', () => {
  const productsContainer1 = document.getElementById('products-container-1');
  const productsContainer2 = document.getElementById('products-container-2');

  // Primera fila de productos
  products.slice(0, 5).forEach(product => {
    const productElement = document.createElement('div');
    productElement.className = 'product-card';
    productElement.innerHTML = `
      <img src="${product.imageUrl}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>${product.description}</p>
      <p class="price">${product.price}</p>
      <a href="#" class="btn-primary">Agregar al Carrito</a>
    `;
    productsContainer1.appendChild(productElement);
  });

  // Segunda fila de productos
  products.slice(3).forEach(product => {
    const productElement = document.createElement('div');
    productElement.className = 'product-card';
    productElement.innerHTML = `
      <img src="${product.imageUrl}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>${product.description}</p>
      <p class="price">${product.price}</p>
      <a href="#" class="btn-primary">Agregar al Carrito</a>
    `;
    productsContainer2.appendChild(productElement);
  });
});

</script>