<?php

    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        include_once('config.php');

        $result = mysqli_query($conexao, "INSERT INTO usuariosalice(nome,email,mensagem)
        VALUES ('$nome','$email','$message')");

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>

    <!------------ ICONES ------------>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!------------ SWIPPER CSS ------------>
    <!------------ CSS ------------>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
    </head>

    <body>
  <!--=================== HEADER ===================-->

    <header class="header scroll-active" id="header">
        <nav class="nav container"> 
            <a href="#" class="nav__logo">Cuide-se</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid"> 
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate .nav__icon"></i>Inicio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link ">
                            <i class="uil uil-user .nav__icon"></i>Saúde mental
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#recommendation" class="nav__link ">
                            <i class="uil uil-file-alt .nav__icon"></i>Recomendações
                        </a>
                    </li>
                    
                   
                    <li class="nav__item">
                        <a href="#contact" class="nav__link ">
                            <i class="uil uil-message .nav__icon"></i>Depoimento
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>

        </nav>
    </header>
    <!------------ MAIN ------------>
    <main class="main scroll-active">
    <!--=================== HOME/INICIO ===================-->
    
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    

                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Olá, Bem Vindo(a)</h1>
                        <h3 class="home__subtitle">Cuide-se </h3>
                        <p class="description">Vamos conhecer mais sobre saúde mental?</p>
                        <a href="#contact" class="button button--flex">
                            Depoimentos<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Descendo na página</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>

            </div>
        </section>
        <!--=================== ABOUT/SOBRE ===================-->

        <section class="about section" id="about">
            <h2 class="section__title">Saúde mental</h2>
            <span class="section__subtitle">Breve leitura </span>
            <div class="about__container container grid">
                <img src="20220514161602_IMG_3022.png" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">
                        A saúde mental está relacionada aos nossos sentimentos, às interações sociais, à satisfação com a vida, entre outros pontos. Com isso, influencia o modo como pensamos, sentimos e agimos. <br>
                        A mente também é um conjunto de conhecimentos e habilidades que aprendemos durante a vida, portanto, ela também inclui a nossa capacidade de lidar com os desafios da vida cotidiana e dos eventos extraordinários. <br>
                        A Organização Mundial de Saúde (OMS) aponta que o conceito de saúde é bem mais abrangente que a simples ausência de doença: é um completo estado de bem-estar físico, mental e social e, dessa forma, merece atenção em todos as suas vertentes.<br>
                        Se você está em busca de medidas que sinalizem a promoção da saúde mental e a garantia dos direitos fundamentais associados ao bem-estar e à qualidade de vida, acompanhe as leituras.<br>
                        Abaixo temos um PDF (UFLA 2021) sobre saúde mental se quiser uma leitura mais a fundo sobre.
                    </p>


                    <div class="about__buttons">
                        <a download="" href="assets/CartilhaSaudeMentalUFLA.pdf" class="button button--flex">
                            Download/Baixar PDF<i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>


            </div>
        </section>


        
        <!--=================== RECOMENDAÇÃO  ===================-->

        
        <section class="recommendation section" id="recommendation">
            
            <section class="recommendation section" id="recommendation">
            <h2 class="section__title">Como melhorar?</h2>
            <span class="section__subtitle">Pequenos hábitos</span>

            <div class="recommendation__container container grid">
            
                <div class="recommendation__data">
                    <p class="recommendation__description">
                        <h4>
                            Pratique o auto conhecimento!
                            <span class="material-symbols-outlined">
                                self_improvement
                             </span>
                        </h4> <br>
                        Quando você se conhece e sabe o que quer para a sua vida, fica mais fácil tomar atitudes e decisões que te levem a realizar o seu 
                        propósito. <br><br>
                        <h4>
                            Faça exercícios físicos regularmente!
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </h4><br>

                        um corpo saudável é mais disposto, estimula a motivação, felicidade e até a produtividade. <br><br>
                        <h4>
                         Priorize seu sono!
                         <span class="material-symbols-outlined">
                            hotel
                         </span>
                        </h4> <br>
                        Mantenha o hábito de se deitar no mesmo horário, pois quando chega aquela hora da noite, seu cérebro entende que é hora de dormir. 
                        Lembre-se de dormir pelo menos de 7 a 8 horas por noite.<br><br>
                       <h4>
                        Mantenha contato com família e amigos! 
                        <span class="material-symbols-outlined">
                            phone_in_talk
                        </span>
                       </h4>
                        <br> 
                        Manter o contato com amigos e familiares pode ajudar a enfrentar esse período com mais carinho e alegria. <br><br>
                       <h4>
                        Organize uma rotina! 
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                       </h4>
                       <br>
                        Organizar a rotina diária é uma medida para contribuir para a produtividade, e permitir que seu corpo crie um ritmo equilibrado, 
                        que ajuda a evitar o desenvolvimento de doenças físicas e mentais. Além disso, organizando a sua rotina, é possível chegar ao final 
                        do dia com o trabalho cumprido e as metas atingidas, possibilitando mais satisfação pessoal e profissional.<br>
                        <h4>
                            Alimente-se bem!
                            <span class="material-symbols-outlined">
                                restaurant
                             </span>
                        </h4> <br>
                        Se alimentar bem é entender os alimentos - seus aromas, suas cores, seus sabores, suas texturas, descobrir como esses 
                        alimentos são preparados e combinados entre si e as dimensões culturais e sociais do hábito de comer. E, claro, sobre 
                        como todos esses aspectos influenciam a sua saúde e o seu bem-estar.

                    </p>
                </div>


            </div>
        </section>
        
        <!--=================== MEU CONTATO  ===================-->
            
        <section class="contact section" id="contact">
            <h2 class="section__title">Compartilhe</h2>
            <span class="section__subtitle">Se expresse</span>

            <div class="contact__container container">
            
                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Meu email</h3>
                            <span class="contact__subtitle">aliceisabelle523@gmail.com</span>
                            </div>
                        </div>    
                    </div>
                </div>

                <form action="index.php" method="POST" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Nome</label>
                            <input type="text" name="nome" id="nome" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" name="email" id="email" class="contact__input">
                        </div>
                    </div>
                    
                    <div class="contact__content">
                        <label for="" class="contact__label">Mensagem</label>
                        <textarea name="message" id="message" cols="0" rows="7" class="contact__input"></textarea>
                    </div>

                    <div class="submit__button">
                        <button type="buttonsubmit" class="buttonSubmit"> 
                            <input type="submit" name="submit">
                        </button>
                    </div>

                </form>
            </div>
        </section>
    </main>

    
    <!--=================== FOOTER  ===================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Cuide-se</h1>
                    <span class="footer__subtitle">Saúde mental</span>
                </div>
            
                <p class="footer__copy">&#169; Alice Isabelle. Todos os direitos reservados </p>
            </div>
        </div>
    </footer>




    <!------------ SCROLL TOP ------------>

<a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup__icon"></i>
</a>

    <!------------ MAIN JS ------------>

<script src="main.js"></script>

    </body>
</html>