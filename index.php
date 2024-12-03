<?php
if(isset($_POST["submit"]));
{
  //  print_r('Nome: ' . $_POST["name"]);
   // print_r('<br>');
  //  print_r('Email: '. $_POST["email"]);
   // print_r('<br>');
   // print_r('Senha: ' . $_POST['password']);


   include_once('config.php');

    $Nome = $_POST["name"];
    $Email = $_POST["email"];
    $Senha = $_POST['password'];

    $result = mysqli_query ($conexao, "INSERT INTO cadastro_ets(Nome,Email,senha) VALUES ($Nome, $Email, $Senha)");

}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTech Solutions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>

        <nav>
            <div class="logo">EasyTech</div>
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#serviços">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contatos">Contatos</a></li>
            </ul>
            
            <div class="social-icons">
                <a href="www.linkedin.com"><i class='bx bxl-linkedin-square' ></i></a>
                <a href="https://www.instagram.com/easytechsolutionsbr?igsh=OWpnb3lhaTdsYmtn"><i class='bx bxl-instagram-alt' ></i></a>
            </div>

            <div class="user-icon">
                <button id="login-btn">Cadastro</button>
            </div>
        </nav>
    </header>
    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Cadastro</h2>
            
            <form id="login-form" action="index.php"  method="POST">
                <label for="name">Nome Completo:</label>
                <input type="text" id="name " name="name" required>

                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <main>
        <section class="hero">
            <h2>Easy Tech Solutions</h2>
            <p>Soluções fáceis e inovadoras para o seu negócio</p>
            <p class="subtext">
                Do desenvolvimento de software personalizado a soluções de TI personalizadas, atendemos
                empresas que precisam de processos específicos orientados por tecnologia.
            </p>
            <div class="buttons">
                <a href="#sobre" class="btn white-btn">Sobre nós</a>
                <a href="#serviços" class="btn green-btn">Serviços</a>
            </div>
        </section>
        <section class="services" id="serviços"> 
            <h2>SERVIÇOS QUE A EASY TECH OFERECE:</h2>
            <div class="service-container">
                <div class="service-item">
                    <h3>Desenvolvimento de software sob medida</h3>
                    <p>Aproveitando nossa experiência e conhecimento do setor, criamos soluções de software personalizadas que se alinham aos seus requisitos de negócios exclusivos, garantindo desempenho e eficiência ideais.</p>
                </div>
                <div class="service-item">
                    <h3>Suporte de TI personalizado</h3>
                    <p>Nossos profissionais de TI qualificados oferecem suporte personalizado em todas as etapas, desde a configuração do sistema até a manutenção contínua, garantindo uma experiência de TI tranquila e sem complicações para sua empresa.</p>
                </div>
                <div class="service-item">
                    <h3>Consultoria de tecnologia</h3>
                    <p>Oferecemos consultorias estratégicas de tecnologia para ajudá-lo a navegar no cenário de TI em constante evolução, fornecendo insights e recomendações para aprimorar os recursos tecnológicos e a competitividade de sua empresa.</p>
                </div>
                <div class="service-item">
                    <h3>Soluções de infraestrutura</h3>
                    <p>A Easy Tech Solutions é especializada em soluções abrangentes de segurança de TI, protegendo seus ativos digitais e integridade de dados. Confie em nós para fortalecer sua infraestrutura de TI e proteger sua empresa contra ameaças cibernéticas.</p>
                </div>
            </div>
            <div class="contact-button">
                <a href="#contatos" class="btn green-btn">Contate-nos</a>
            </div>
        </section>

        <section id="sobre" class="about-section">
            <h2>Sobre nós</h2>
            <p>Na Easy Tech Solutions, somos especializados em fornecer soluções de TI personalizadas para conectar empresas com a tecnologia de que precisam. Seja experiência de usuário sob medida, otimização da infraestrutura de TI ou aprimoramento da mídia de segurança, nossa equipe dedicada ajuda a integração perfeita da tecnologia nas operações do seu negócio. Alavancamos o futuro da TI com a Easy Tech Solutions.</p>
        </section>
        
        <section id="funcionarios" class="team-section">
            <h2>Funcionários</h2>
            <div class="team-container">
                <div class="team-member">
                    <img src="assets/sid.png" alt="Avatar" class ="team-avatar">
                    <h3>Cauã Guedes</h3>
                    <p class="role">Gerente</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/gabriel.png" alt="Avatar" class="team-avatar">
                    <h3>Gabriel Pinto</h3>
                    <p class="role">Sub-Gerente</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/jota.png" alt="Avatar" class="team-avatar">
                    <h3>Juan Vieira</h3>
                    <p class="role">CEO</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/yan.png" alt="Avatar" class="team-avatar">
                    <h3>Yan Gonçalves</h3>
                    <p class="role">CEO</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/paulo.png" alt="Avatar" class="team-avatar">
                    <h3>Paulo Kodash</h3>
                    <p class="role">Redator</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/caio.png" alt="Avatar" class="team-avatar">
                    <h3>Caio Soares</h3>
                    <p class="role">Programador</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/mat.png" alt="Avatar" class="team-avatar">
                    <h3>Matheus dos Santos</h3>
                    <p class="role">Analista</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/Leo.png" alt="Avatar" class="team-avatar">
                    <h3>Leonardo dos Santos</h3>
                    <p class="role">Programador</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/luis.png" alt= "Avatar" class= "team-avatar"> 
                <h3>Luis Henrique Bitencourt Wayand </h3>
                    <p class="role">Redator</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/red.png" alt="Avatar" class="team-avatar">
                    <h3>Luis Felipe dos Santos Maia</h3>
                    <p class="role">Analista</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
                <div class="team-member">
                    <img src="assets/adler.png" alt="Avatar" class="team-avatar">
                    <h3>Adler Sales</h3>
                    <p class="role">Analista</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis velit ut velit hendrerit.</p>
                </div>
            </div>
        </section>
        <section id="contatos" class="contact-section">
            <h2>Contate-nos</h2>
            <p>Entre em contato conosco para saber mais sobre nossas soluções personalizadas.</p>
            <form class="contact-form">
                <div class="form-row">
                    <div class="form-group-left">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Seu email" required>
                        </div>
                    </div>
                    <div class="form-group-right">
                        <div class="form-group">
                            <label for="assunto">Assunto:</label>
                            <input type="text" id="assunto" name="assunto" placeholder="Assunto da mensagem" required>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem:</label>
                            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn green-btn">Enviar Mensagem</button>
            </form>
        </section>        
        
    </main>

    <footer class="footer">
        <div class="imgs">
            <img src="assets/ets.png" alt="">
        </div>
        <div class="contatos">
            <div class="email">
                <h3>E-mail:</h3>
                <br>
                <p>suporteETSolutions@gmail.com</p>
            </div>
            <div class="central-atendimento">
                <h3>Central de atendimento:</h3>
                <br>
                <p>+55 21 97550-7688</p>
            </div>
            <br>
            <p>Rio de Janeiro, RJ, Realengo - 21715-080</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>