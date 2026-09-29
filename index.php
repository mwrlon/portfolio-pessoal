<?php

date_default_timezone_set('America/Sao_Paulo');

$dataAtual = date('d/m/Y');
$horaAtual = date('H:i:s');

$diaSemana = [
    'Sunday' => 'Domingo',
    'Monday' => 'Segunda-feira',
    'Tuesday' => 'Terça-feira',
    'Wednesday' => 'Quarta-feira',
    'Thursday' => 'Quinta-feira',
    'Friday' => 'Sexta-feira',
    'Saturday' => 'Sábado'
];

$diaAtual = $diaSemana[date('l')];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Marlon Miranda | Desenvolvedor</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {
            --background: #08090b;
            --background-secondary: #101216;
            --card: #14171d;

            --text: #f5f5f5;
            --text-secondary: #9ca3af;

            --primary: #62e6a7;
            --primary-dark: #36b87b;

            --border: #252932;

            --max-width: 1150px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* =========================
           HEADER
        ========================= */

        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;

            background: rgba(8, 9, 11, 0.8);
            backdrop-filter: blur(15px);

            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .navbar {
            max-width: var(--max-width);
            height: 75px;

            margin: auto;
            padding: 0 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-links {
            list-style: none;

            display: flex;
            gap: 35px;
        }

        .nav-links a {
            color: var(--text-secondary);
            font-size: 14px;

            transition: 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .menu-btn {
            display: none;

            border: none;
            background: transparent;
            color: white;

            font-size: 25px;
            cursor: pointer;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 100vh;

            max-width: var(--max-width);
            margin: auto;

            padding: 150px 25px 80px;

            display: grid;
            grid-template-columns: 1.1fr 0.9fr;

            align-items: center;

            gap: 80px;
        }

        .hero-tag {
            color: var(--primary);

            font-size: 14px;
            font-weight: 600;

            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(45px, 6vw, 78px);

            line-height: 1.05;

            letter-spacing: -3px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-description {
            max-width: 600px;

            color: var(--text-secondary);

            margin-top: 30px;

            font-size: 17px;
        }

        .hero-description strong {
            color: white;
        }

        .hero-buttons {
            display: flex;

            gap: 15px;

            margin-top: 35px;
        }

        .btn {
            padding: 13px 22px;

            border-radius: 8px;

            font-size: 14px;
            font-weight: 600;

            transition: 0.3s;
        }

        .btn.primary {
            background: var(--primary);

            color: #06130c;
        }

        .btn.primary:hover {
            background: #82f2bd;

            transform: translateY(-2px);
        }

        .btn.secondary {
            border: 1px solid var(--border);

            color: var(--text);
        }

        .btn.secondary:hover {
            border-color: var(--primary);

            color: var(--primary);
        }


        /* =========================
           CODE WINDOW
        ========================= */

        .hero-card {
            display: flex;

            justify-content: center;
        }

        .code-window {
            width: 100%;

            max-width: 500px;

            background: #0d0f13;

            border: 1px solid var(--border);

            border-radius: 14px;

            overflow: hidden;

            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.4);
        }

        .window-top {
            height: 40px;

            display: flex;

            align-items: center;

            gap: 7px;

            padding: 0 15px;

            border-bottom: 1px solid var(--border);
        }

        .window-top span {
            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #444;
        }

        pre {
            padding: 30px;

            overflow-x: auto;

            color: #d1d5db;

            font-family: monospace;

            font-size: 14px;

            line-height: 1.8;
        }

        .purple {
            color: #c084fc;
        }

        .green {
            color: var(--primary);
        }


        /* =========================
           SEÇÕES
        ========================= */

        .section {
            max-width: var(--max-width);

            margin: auto;

            padding: 120px 25px;
        }

        .section-title {
            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 60px;
        }

        .section-title span {
            color: var(--primary);

            font-family: monospace;
        }

        .section-title h2 {
            font-size: 38px;
        }


        /* =========================
           SOBRE
        ========================= */

        .about {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 80px;
        }

        .about-text p {
            color: var(--text-secondary);

            margin-bottom: 20px;

            font-size: 16px;
        }

        .about-stats {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px;
        }

        .stat {
            background: var(--background-secondary);

            border: 1px solid var(--border);

            padding: 30px;

            border-radius: 10px;
        }

        .stat strong {
            display: block;

            color: var(--primary);

            font-size: 30px;
        }

        .stat span {
            color: var(--text-secondary);

            font-size: 13px;
        }


        /* =========================
           HABILIDADES
        ========================= */

        .skills-section {
            max-width: none;

            background: var(--background-secondary);
        }

        .skills-section > * {
            max-width: var(--max-width);

            margin-left: auto;

            margin-right: auto;
        }

        .skills-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .skill-card {
            background: var(--card);

            border: 1px solid var(--border);

            padding: 30px;

            border-radius: 12px;

            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-5px);

            border-color: var(--primary);
        }

        .skill-icon {
            width: 45px;
            height: 45px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: rgba(98, 230, 167, 0.1);

            color: var(--primary);

            border-radius: 8px;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 20px;
        }

        .skill-card h3 {
            margin-bottom: 10px;
        }

        .skill-card p {
            color: var(--text-secondary);

            font-size: 14px;
        }


        /* =========================
           PROJETOS
        ========================= */

        .projects {
            display: flex;

            flex-direction: column;

            gap: 20px;
        }

        .project {
            display: grid;

            grid-template-columns: 100px 1fr;

            gap: 30px;

            padding: 40px;

            background: var(--background-secondary);

            border: 1px solid var(--border);

            border-radius: 12px;

            transition: 0.3s;
        }

        .project:hover {
            border-color: var(--primary);
        }

        .project-number {
            color: var(--primary);

            font-family: monospace;

            font-size: 18px;
        }

        .project-content > span {
            color: var(--text-secondary);

            font-size: 12px;
        }

        .project h3 {
            font-size: 25px;

            margin: 8px 0 12px;
        }

        .project p {
            color: var(--text-secondary);

            max-width: 750px;
        }

        .technologies {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;

            margin-top: 20px;
        }

        .technologies span {
            padding: 5px 10px;

            border-radius: 5px;

            background: #1c2027;

            color: var(--text-secondary);

            font-size: 11px;
        }


        /* =========================
           OBJETIVOS
        ========================= */

        .objective {
            max-width: none;

            background:
                radial-gradient(
                    circle at center,
                    rgba(98, 230, 167, 0.08),
                    transparent 50%
                );
        }

        .objective-content {
            max-width: 800px;

            margin: auto;

            text-align: center;
        }

        .objective-content > span {
            color: var(--primary);

            font-size: 14px;
        }

        .objective h2 {
            font-size: clamp(35px, 5vw, 60px);

            line-height: 1.1;

            margin: 20px 0;
        }

        .objective p {
            color: var(--text-secondary);

            margin-bottom: 30px;
        }


        /* =========================
           CONTATO
        ========================= */

        .contact-content {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 80px;
        }

        .contact-content h3 {
            font-size: 30px;

            margin-bottom: 15px;
        }

        .contact-content p {
            color: var(--text-secondary);
        }

        .contact-links {
            display: flex;

            flex-direction: column;

            gap: 15px;
        }

        .contact-links a {
            padding: 18px;

            border: 1px solid var(--border);

            border-radius: 8px;

            color: var(--text-secondary);

            transition: 0.3s;
        }

        .contact-links a:hover {
            color: var(--primary);

            border-color: var(--primary);
        }


        /* =========================
           DATA E HORA
        ========================= */

        .current-time {
            max-width: none;

            background: var(--background-secondary);

            border-top: 1px solid var(--border);

            border-bottom: 1px solid var(--border);
        }

        .time-content {
            max-width: var(--max-width);

            margin: auto;

            padding: 100px 25px;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 70px;

            align-items: center;
        }

        .time-info span {
            color: var(--primary);

            font-size: 14px;

            font-weight: 600;
        }

        .time-info h2 {
            font-size: 42px;

            line-height: 1.1;

            margin: 15px 0;
        }

        .time-info p {
            color: var(--text-secondary);
        }

        .clock {
            margin-top: 30px;

            font-family: monospace;

            font-size: 48px;

            color: var(--primary);

            letter-spacing: 3px;
        }

        .date {
            color: var(--text-secondary);

            font-size: 18px;
        }


        /* =========================
           GIF
        ========================= */

        .gif-card {
            text-align: center;

            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 15px;

            padding: 25px;
        }

        .gif-card img {
            width: 100%;

            max-width: 400px;

            height: 280px;

            object-fit: cover;

            border-radius: 10px;
        }

        .gif-card p {
            margin-top: 15px;

            color: var(--text-secondary);

            font-size: 14px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            max-width: var(--max-width);

            margin: auto;

            padding: 30px 25px;

            border-top: 1px solid var(--border);

            display: flex;

            justify-content: space-between;

            color: #666;

            font-size: 12px;
        }


        /* =========================
           ANIMAÇÃO
        ========================= */

        .reveal {
            opacity: 0;

            transform: translateY(30px);

            transition: 0.7s ease;
        }

        .reveal.visible {
            opacity: 1;

            transform: translateY(0);
        }


        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 800px) {

            .nav-links {
                position: absolute;

                top: 75px;

                left: 0;

                width: 100%;

                padding: 25px;

                background: var(--background);

                display: none;

                flex-direction: column;

                gap: 20px;

                border-bottom: 1px solid var(--border);
            }

            .nav-links.active {
                display: flex;
            }

            .menu-btn {
                display: block;
            }

            .hero {
                grid-template-columns: 1fr;

                gap: 50px;

                padding-top: 130px;
            }

            .hero h1 {
                letter-spacing: -2px;
            }

            .about {
                grid-template-columns: 1fr;

                gap: 40px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .project {
                grid-template-columns: 1fr;

                gap: 15px;
            }

            .contact-content {
                grid-template-columns: 1fr;

                gap: 40px;
            }

            .time-content {
                grid-template-columns: 1fr;
            }

            footer {
                flex-direction: column;

                gap: 10px;
            }
        }

        @media (max-width: 500px) {

            .hero-buttons {
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }

            .about-stats {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 80px 20px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .clock {
                font-size: 34px;
            }
        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <nav class="navbar">

        <a href="#inicio" class="logo">
            M<span>.</span>
        </a>

        <ul class="nav-links">

            <li>
                <a href="#inicio">
                    Início
                </a>
            </li>

            <li>
                <a href="#sobre">
                    Sobre mim
                </a>
            </li>

            <li>
                <a href="#habilidades">
                    Habilidades
                </a>
            </li>

            <li>
                <a href="#projetos">
                    Projetos
                </a>
            </li>

            <li>
                <a href="#contato">
                    Contato
                </a>
            </li>

        </ul>

        <button
            class="menu-btn"
            id="menuBtn"
        >
            ☰
        </button>

    </nav>

</header>


<main>


<!-- =========================
     HERO
========================= -->

<section
    class="hero"
    id="inicio"
>

    <div class="hero-content reveal">

        <p class="hero-tag">
            DESENVOLVEDOR EM FORMAÇÃO
        </p>

        <h1>
            Transformando ideias em
            <span>soluções digitais.</span>
        </h1>

        <p class="hero-description">

            Olá, eu sou
            <strong>Marlon Miranda Junior</strong>.

            Sou estudante de Desenvolvimento de Sistemas e
            apaixonado por tecnologia, programação e criação
            de aplicações web.

        </p>

        <div class="hero-buttons">

            <a
                href="#projetos"
                class="btn primary"
            >
                Ver meus projetos
            </a>

            <a
                href="#contato"
                class="btn secondary"
            >
                Entre em contato
            </a>

        </div>

    </div>


    <div class="hero-card reveal">

        <div class="code-window">

            <div class="window-top">

                <span></span>
                <span></span>
                <span></span>

            </div>

            <pre><code><span class="purple">const</span> desenvolvedor = {
    nome: <span class="green">"Marlon"</span>,
    foco: <span class="green">"Desenvolvimento Web"</span>,
    backend: <span class="green">"Node.js"</span>,
    banco: <span class="green">"MySQL"</span>,
    aprendendo: <span class="green">"Sempre"</span>
};</code></pre>

        </div>

    </div>

</section>


<!-- =========================
     SOBRE
========================= -->

<section
    class="section reveal"
    id="sobre"
>

    <div class="section-title">

        <span>
            01
        </span>

        <h2>
            Sobre mim
        </h2>

    </div>


    <div class="about">

        <div class="about-text">

            <p>
                Sou estudante do Ensino Médio e do curso Técnico
                em Desenvolvimento de Sistemas. Minha trajetória
                na programação começou pela curiosidade de entender
                como sistemas e aplicações funcionam.
            </p>

            <p>
                Com o tempo, comecei a desenvolver meus próprios
                projetos, trabalhando principalmente com aplicações
                web, APIs, bancos de dados e autenticação de usuários.
            </p>

            <p>
                Gosto de transformar problemas em soluções utilizando
                lógica, código e criatividade. Também busco constantemente
                aprender novas tecnologias e melhorar a forma como
                desenvolvo meus projetos.
            </p>

        </div>


        <div class="about-stats">

            <div class="stat">

                <strong>
                    Web
                </strong>

                <span>
                    Desenvolvimento
                </span>

            </div>


            <div class="stat">

                <strong>
                    API
                </strong>

                <span>
                    Back-end
                </span>

            </div>


            <div class="stat">

                <strong>
                    SQL
                </strong>

                <span>
                    Banco de dados
                </span>

            </div>


            <div class="stat">

                <strong>
                    ∞
                </strong>

                <span>
                    Vontade de aprender
                </span>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     HABILIDADES
========================= -->

<section
    class="section skills-section reveal"
    id="habilidades"
>

    <div class="section-title">

        <span>
            02
        </span>

        <h2>
            Habilidades
        </h2>

    </div>


    <div class="skills-grid">


        <article class="skill-card">

            <div class="skill-icon">
                JS
            </div>

            <h3>
                JavaScript
            </h3>

            <p>
                Desenvolvimento de aplicações e lógica
                de programação.
            </p>

        </article>


        <article class="skill-card">

            <div class="skill-icon">
                N
            </div>

            <h3>
                Node.js
            </h3>

            <p>
                Criação de APIs e aplicações back-end
                utilizando JavaScript.
            </p>

        </article>


        <article class="skill-card">

            <div class="skill-icon">
                EX
            </div>

            <h3>
                Express
            </h3>

            <p>
                Desenvolvimento de APIs REST e organização
                de aplicações.
            </p>

        </article>


        <article class="skill-card">

            <div class="skill-icon">
                DB
            </div>

            <h3>
                MySQL
            </h3>

            <p>
                Modelagem, consultas SQL, relacionamentos
                e bancos de dados.
            </p>

        </article>


        <article class="skill-card">

            <div class="skill-icon">
                KN
            </div>

            <h3>
                Knex
            </h3>

            <p>
                Integração entre aplicações Node.js
                e bancos de dados.
            </p>

        </article>


        <article class="skill-card">

            <div class="skill-icon">
                TW
            </div>

            <h3>
                TailwindCSS
            </h3>

            <p>
                Criação de interfaces modernas,
                responsivas e organizadas.
            </p>

        </article>

    </div>

</section>


<!-- =========================
     PROJETOS
========================= -->

<section
    class="section reveal"
    id="projetos"
>

    <div class="section-title">

        <span>
            03
        </span>

        <h2>
            Projetos
        </h2>

    </div>


    <div class="projects">


        <article class="project">

            <div class="project-number">
                01
            </div>

            <div class="project-content">

                <span>
                    WEB APPLICATION
                </span>

                <h3>
                    Wedding Pass
                </h3>

                <p>
                    Sistema de gerenciamento de convidados para
                    eventos, desenvolvido com interface responsiva,
                    autenticação de usuários e integração com
                    banco de dados.
                </p>

                <div class="technologies">

                    <span>
                        Node.js
                    </span>

                    <span>
                        Express
                    </span>

                    <span>
                        MySQL
                    </span>

                    <span>
                        JWT
                    </span>

                    <span>
                        Tailwind
                    </span>

                </div>

            </div>

        </article>


        <article class="project">

            <div class="project-number">
                02
            </div>

            <div class="project-content">

                <span>
                    BUSINESS APPLICATION
                </span>

                <h3>
                    OrçaFácil
                </h3>

                <p>
                    Projeto voltado para facilitar a criação e
                    gerenciamento de orçamentos para pequenos
                    vendedores e prestadores de serviços.
                </p>

                <div class="technologies">

                    <span>
                        HTML
                    </span>

                    <span>
                        CSS
                    </span>

                    <span>
                        JavaScript
                    </span>

                    <span>
                        Tailwind
                    </span>

                </div>

            </div>

        </article>


        <article class="project">

            <div class="project-number">
                03
            </div>

            <div class="project-content">

                <span>
                    BACKEND
                </span>

                <h3>
                    APIs REST
                </h3>

                <p>
                    Desenvolvimento de APIs utilizando Node.js,
                    Express, autenticação JWT, bcrypt e integração
                    com bancos de dados relacionais.
                </p>

                <div class="technologies">

                    <span>
                        Node.js
                    </span>

                    <span>
                        Express
                    </span>

                    <span>
                        JWT
                    </span>

                    <span>
                        bcrypt
                    </span>

                    <span>
                        MySQL
                    </span>

                </div>

            </div>

        </article>

    </div>

</section>


<!-- =========================
     OBJETIVOS
========================= -->

<section class="section objective reveal">

    <div class="objective-content">

        <span>
            O PRÓXIMO PASSO
        </span>

        <h2>
            Quero transformar conhecimento
            em experiência.
        </h2>

        <p>
            Meu objetivo é continuar evoluindo como desenvolvedor,
            participar de projetos reais e aprender com pessoas
            experientes na área de tecnologia.
        </p>

        <a
            href="#contato"
            class="btn primary"
        >
            Vamos conversar
        </a>

    </div>

</section>


<!-- =========================
     CONTATO
========================= -->

<section
    class="section contact reveal"
    id="contato"
>

    <div class="section-title">

        <span>
            04
        </span>

        <h2>
            Contato
        </h2>

    </div>


    <div class="contact-content">

        <div>

            <h3>
                Vamos criar algo juntos?
            </h3>

            <p>
                Estou sempre aberto a novas oportunidades,
                projetos e experiências que possam contribuir
                para meu crescimento profissional.
            </p>

        </div>


        <div class="contact-links">

            <a href="mailto:seuemail@email.com">
                📧 Email
            </a>

            <a
                href="https://github.com/mwrlon"
                target="_blank"
            >
                💻 GitHub
            </a>

            <a
                href="#"
                target="_blank"
            >
                💼 LinkedIn
            </a>

        </div>

    </div>

</section>


<!-- =========================
     DATA, HORA E GIF
========================= -->

<section class="current-time">

    <div class="time-content">


        <div class="time-info">

            <span>
                ENQUANTO VOCÊ ESTÁ AQUI...
            </span>

            <h2>
                Este é o momento atual.
            </h2>

            <p>
                Informações geradas diretamente pelo PHP,
                utilizando o horário do servidor.
            </p>


            <div class="date">

                <?php echo $diaAtual; ?>,
                <?php echo $dataAtual; ?>

            </div>


            <div
                class="clock"
                id="clock"
            >
                <?php echo $horaAtual; ?>
            </div>

        </div>


        <div class="gif-card">

            <img
                src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExd2V6eG9vY3h4NnR4dGZxM2xqZW9yOXBqY3F3cW1tN3V2dG5mZSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/3o7aD2saalBwwftBIY/giphy.gif"
                alt="GIF engraçado"
            >

            <p>
                Eu depois de finalmente fazer o código funcionar
                sem saber exatamente por quê.
            </p>

        </div>

    </div>

</section>


</main>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        © <?php echo date('Y'); ?>
        Marlon Miranda Junior
    </p>

    <p>
        Desenvolvido com código e curiosidade.
    </p>

</footer>


<script>

    /* =========================
       MENU MOBILE
    ========================= */

    const menuBtn = document.getElementById("menuBtn");

    const navLinks = document.querySelector(".nav-links");


    menuBtn.addEventListener("click", function () {

        navLinks.classList.toggle("active");


        if (navLinks.classList.contains("active")) {

            menuBtn.textContent = "✕";

        } else {

            menuBtn.textContent = "☰";

        }

    });


    /* =========================
       FECHAR MENU
    ========================= */

    document.querySelectorAll(".nav-links a").forEach(function (link) {

        link.addEventListener("click", function () {

            navLinks.classList.remove("active");

            menuBtn.textContent = "☰";

        });

    });


    /* =========================
       ANIMAÇÃO
    ========================= */

    const elements = document.querySelectorAll(".reveal");


    const observer = new IntersectionObserver(

        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("visible");

                }

            });

        },

        {
            threshold: 0.15
        }

    );


    elements.forEach(function (element) {

        observer.observe(element);

    });


    /* =========================
       RELÓGIO
    ========================= */

    function atualizarRelogio() {

        const agora = new Date();


        const horas = String(
            agora.getHours()
        ).padStart(2, "0");


        const minutos = String(
            agora.getMinutes()
        ).padStart(2, "0");


        const segundos = String(
            agora.getSeconds()
        ).padStart(2, "0");


        const horario =
            horas + ":" +
            minutos + ":" +
            segundos;


        document.getElementById("clock").textContent =
            horario;

    }


    setInterval(atualizarRelogio, 1000);


</script>

</body>
</html>