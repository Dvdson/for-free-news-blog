<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            font-family: Georgia, "Times New Roman", Times, serif;
            color: white;
            background-color: black;
        }

        .container {
            max-width: 90rem;
            margin: 2rem auto;
            padding: 0px 2rem;
        }

        .img-fluid {
            max-width: 100%;
        }

        .logo img {
            width: 70px;
            height: 70px;
            border-radius: 41px;
            outline: 4px solid red;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 1rem 3rem;
            align-items: center;
        }

        .items {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .items a:link {
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .items a:hover {
            color: red;
        }

        .active {
            color: red !important;
        }

        button {
            font-size: 2rem;
            padding: 0.6rem 1rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(to right, #c31432, #892211);
            border-radius: 10px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background: white;
            outline: 1px solid red;
            color: red;
            border: none;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: center;
            align-items: center;
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        .short-info {
            color: red;
            font-size: 1rem;
            margin-bottom: 0.9rem;
        }

        .hero-heading {
            font-size: 3rem;
            margin-bottom: 0.3rem;
        }

        .hero-sub-heading {
            font-size: 0.9rem;
            opacity: 0.7;
        }

        .users {
            display: flex;
            align-items: center;
            margin: 1rem 0px;
        }

        .user {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid red;
        }

        .learn-more {
            align-self: start;
            margin-top: 3rem;
        }

        /* media queries */

        @media only screen and (max-width: 800px) {
            .items {
                display: none;
            }

            .row {
                grid-template-columns: 1fr;
            }

            .learn-more {
                align-self: start;
                margin: 1rem 0px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img
                    src="https://images.unsplash.com/photo-1533794318766-897f4d50cb39?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTg0MDUyMDk&ixlib=rb-1.2.1&q=80">
            </div>

            <div class="other" onclick="cadastrar()">
                <button>Cadastrar Funcionário</button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="info">
                    <p class="short-info">#Faça sua propaganda aqui</p>
                    <h2 class="hero-heading">Uniasselvi - Graduação Presencial e EAD</h2>
                    <p class="hero-sub-heading">A UNIASSELVI é a maior instituição de ensino superior de Santa Catarina
                        e uma das maiores do Brasil, ofertando mais de 300 cursos de Graduação, Pós-graduação,
                        Profissionalizantes e Técnicos nas modalidades presencial e a distância. São mil polos de ensino
                        a distância em todos os estados e 10 unidades próprias de ensino presencial
                    </p>
                    <div class="users">
                        <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTg0MTM4Nzk&ixlib=rb-1.2.1&q=80"
                            class="img-fluid user">
                        <img src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTg0MTM4Nzk&ixlib=rb-1.2.1&q=80"
                            class="img-fluid user">
                        <img src="https://images.unsplash.com/photo-1522556189639-b150ed9c4330?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTg0MTM4Nzk&ixlib=rb-1.2.1&q=80"
                            class="img-fluid user">
                        <img src="https://images.unsplash.com/photo-1534614971-6be99a7a3ffd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTg0MTM4Nzk&ixlib=rb-1.2.1&q=80"
                            class="img-fluid user">
                        <p>4M+ users</p>
                    </div>
                    <button class="learn-more" onclick="uniasselvi()">
                        Descubra Mais</button>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1519326882834-04c334752f58?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTg0MDUxMzU&ixlib=rb-1.2.1&q=80"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->
    <script>
        function cadastrar() {
            window.location.href = 'cadastro.php';
        }
        function uniasselvi() {
            window.location.href = 'https://portal.uniasselvi.com.br/';
        }

    </script>
</body>

</html>