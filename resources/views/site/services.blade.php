@extends('layouts.principal')

@section('content')
    <main class="main_services">
        <section id="servicos">
            <div class="container">
                <h2 id="h2_">
                    Serviços
                </h2>
            </div>
            <div class="container">
                <div class="servicos-grid">
                    <div class="servico">
                        <h3>Avaliação</h3>
                        <p>Avaliação profissional dedica em resolver totalmente o problema.</p>
                        <p> Gratis</p>
                       <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar uma avaliação com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Corte de Unhas</h3>
                        <p>Corte profissional e higiênico para prevenir infecções e manter a saúde das unhas dos pés.</p>
                        <p> R$80,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar um corte de unhas com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Tratamento de Calos e Calosidades</h3>
                        <p>Remoção segura e tratamento para aliviar o desconforto causado por calos e calosidades, utilizando técnicas não invasivas.</p>
                        <p> Entre R$100,00 e R$150,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar um tratamento de valos e calosidades com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Tratamento em pés da melhor idade</h3>
                        <p>Prevenção e cuidados com os pés da melhor idade, proporcionando um atendimento acolhedor e eficaz.</p>
                        <p> R$120,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar um tratamento em pés da melhor idade com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Tratamento de Unhas Encravadas</h3>
                        <p>Correção e tratamento de unhas encravadas com procedimentos seguros e eficazes, evitando cirurgias.</p>
                        <p> R$150,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar um tratamento de unhas encravadas com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Cuidados Preventivos</h3>
                        <p>Consultas regulares para prevenção de problemas nos pés, especialmente para diabéticos, atletas e idosos.</p>
                        <p> R$150,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar cuidados preventivos com você.') }}" class="btn">Agende sua consulta aqui</a>

                    </div>
                    <div class="servico">
                        <h3>Podologia Infantil</h3>
                        <p>Atendimento especializado para crianças, focando no desenvolvimento saudável dos pés e correção precoce de deformidades.</p>
                        <p> Entre R$120,00 e R$150,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar uma sessão de podologia infantil com você.') }}" class="btn">Agende sua consulta aqui</a>              
                    </div>
                    <div class="servico">
                        <h3>Massagem Podológica com reflexologia</h3>
                        <p>Massagem relaxante para aliviar tensão, melhorar a circulação e promover bem-estar nos pés.</p>
                        <p> R$100,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar uma massagem podológica com reflexologia com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Tratamento de Pé Diabético</h3>
                        <p>Cuidados específicos para pacientes diabéticos, incluindo avaliação de risco e prevenção de úlceras.</p>
                        <p> R$150,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar um tratamento de pé diabético com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                    <div class="servico">
                        <h3>Remoção de Verrugas Plantares</h3>
                        <p>Tratamento seguro para remoção de verrugas, utilizando crioterapia ou outros métodos não invasivos.</p>
                        <p> Entre R$100,00 e R$150,00</p>
                        <a href="https://wa.me/5515996448708?text={{ urlencode('Olá! meu nome é ' . $nome . '. Gostaria de marcar uma remoção de verruga plantar com você.') }}" class="btn">Agende sua consulta aqui</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection