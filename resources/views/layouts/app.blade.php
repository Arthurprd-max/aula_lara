<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite([
    'resources/css/app.css',
    'resources/js/app.js'

    ])
</head>

<body>

    <nav class="navbar" style="background-color: #000; padding: 10px 0;">
        <div class="container">
            <a class="navbar-brand" href="/" style="display: flex; gap: 10px;">
                <img src="https://png.pngtree.com/png-vector/20250826/ourmid/pngtree-cartoon-restaurant-building-dome-design-cute-eatery-illustration-on-transparent-background-png-image_17217449.webp"
                    alt="Logo do restaurante" width="40" height="30" style="object-fit: contain;">
                <span style="color: white; font-weight: bold;">Cardápio Digital</span>
            </a>
        </div>
    </nav>


    <div style="text-align: center;">
        <img src="https://png.pngtree.com/png-vector/20250826/ourmid/pngtree-cartoon-restaurant-building-dome-design-cute-eatery-illustration-on-transparent-background-png-image_17217449.webp"
            alt="Logo do restaurante" style="width: 300px; height: 300px;  object-fit: cover;">
    </div>


    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">

        <div class="card" style="width: 18rem;">
            <img src="https://blog-parceiros.ifood.com.br/wp-content/uploads/2025/04/pratos-de-comida-chique.jpg.webp"
                class="card-img-top" alt="Logo do restaurante">


            <div class="card-body">
                <p class="card-text">
                    Além de ser visualmente atrativo, o carpaccio é uma excelente opção para quem busca um início de
                    refeição equilibrado e saboroso
                </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text">

                    Para surpreender você com as mais variadas possibilidades gastronômicas da cena bauruense, a
                    categoria “Prato Principal” oferece receitas únicas e sublimes. Pratos com referência da cozinha
                    francesa, italiana, oriental, mexicana e contemporânea com leve toque de brasilidade para agradar e
                    proporcionar um momento exclusivo no seu paladar.
                </p>
            </div>

            <img src="https://socialbauru.com.br/wp-content/uploads/2024/05/capa-categoria-prato-principal.png"
                class="card-img-bottom" alt="Logo do restaurante">
        </div>

    </div>

    @yield('conteudo')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>