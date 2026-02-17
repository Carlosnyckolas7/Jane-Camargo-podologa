<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jane Camargo Podóloga</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Garamond&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <div class="container">
            <h1>Jane Camargo Podologia</h1>
        </div>
    </header>

    <main>
        <section id="hero">
            <div class="container_main">
                <h2>Cuidado Especializado para Seus Pés</h2>
                <p>Tratamentos profissionais de podologia para manter seus pés saudáveis e confortáveis.</p>
                <a href="/services" class="btn">Veja meus serviços</a>
            </div>
        </section>

        <section id="sobre-breve">
            <div class="container_main">
                <h2 id="h2_">Sobre Jane</h2>
                <p class="sobre">Com 16 anos de experiência na área da podologia, ela dedica sua carreira ao cuidado, bem-estar e saúde dos pés de seus pacientes.Ao longo dos anos, construiu uma trajetória marcada por profissionalismo, atenção aos detalhes e compromisso com a qualidade em cada atendimento.

                    Seu trabalho vai além do cuidado estético: é focado na prevenção, tratamento e orientação personalizada, sempre priorizando conforto, segurança e resultados eficazes. Com atendimento humanizado e olhar cuidadoso, ela transforma cada consulta em uma experiência de confiança e acolhimento.

                    Cuidar dos pés é cuidar da saúde — e essa é a missão que guia seu trabalho todos os dias.</p>
                <a href="/about" class="btn">Saiba Mais</a>
            </div>
            <div class="sobre-img">
                <img src="{{ asset('img/jane.jpeg') }}" alt="Jane-foto" height="500" width="250px">
            </div>
        </section>

        <section id="contato">
            <div class="container_main">
                <h2 id="h2_">Entre em Contato</h2>
                <h3>Clique na imagem a baixo para ser redirecionado(a) para o whatsapp</h3>
                <a href="https://wa.me/5515996448708?text=Olá!%20Gostaria%20de%20marcar%20uma%20consulta%20com%20você.%20Obrigada!"><img src="{{ asset('img/whatsapp-icon-transparent-social-media-logo-free-png.webp') }}" alt="whatsapp" height="100px" width="100px"></a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container_footer">
            <p>&copy; 2026 Jane Podóloga.</p>
        </div>
    </footer>
</body>
</html>