<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<script>

// add classes for mobile navigation toggling
var CSbody = document.querySelector("body");
    const CSnavbarMenu = document.querySelector("#cs-navigation");
    const CShamburgerMenu = document.querySelector("#cs-navigation .cs-toggle");

    CShamburgerMenu.addEventListener('click', function() {
        CShamburgerMenu.classList.toggle("cs-active");
        CSnavbarMenu.classList.toggle("cs-active");
        CSbody.classList.toggle("cs-open");
        // run the function to check the aria-expanded value
        ariaExpanded();
    });

    // checks the value of aria expanded on the cs-ul and changes it accordingly whether it is expanded or not 
    function ariaExpanded() {
        const csUL = document.querySelector('#cs-expanded');
        const csExpanded = csUL.getAttribute('aria-expanded');

        if (csExpanded === 'false') {
            csUL.setAttribute('aria-expanded', 'true');
        } else {
            csUL.setAttribute('aria-expanded', 'false');
        }
    }

    // mobile nav toggle code
    const dropDowns = Array.from(document.querySelectorAll('#cs-navigation .cs-dropdown'));
        for (const item of dropDowns) {
            const onClick = () => {
            item.classList.toggle('cs-active')
        }
        item.addEventListener('click', onClick)
        }
                                


</script>


    <!-- ============================================ -->
<!--                 Navigation                   -->
<!-- ============================================ -->

<header id="cs-navigation" style="background-color: rgba(0, 0, 0, 0.823);">
    <div class="cs-container" >
        <!--Nav Logo-->
        <a href="" class="cs-logo" aria-label="back to home">
            <img src="https://static.wixstatic.com/media/ff549a_47982084d1744586a6c2d7e9cb6cfa46~mv2.png/v1/crop/x_300,y_319,w_1300,h_340/fill/w_436,h_114,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/1.png" alt="logo" width="210" height="29" aria-hidden="true" decoding="async">
        </a>
        <!--Navigation List-->
        <nav class="cs-nav" role="navigation">
            <!--Mobile Nav Toggle-->
            <button class="cs-toggle" aria-label="mobile menu toggle">
                <div class="cs-box" aria-hidden="true">
                    <span class="cs-line cs-line1" aria-hidden="true"></span>
                    <span class="cs-line cs-line2" aria-hidden="true"></span>
                    <span class="cs-line cs-line3" aria-hidden="true"></span>
                </div>
            </button>
            <!-- We need a wrapper div so we can set a fixed height on the cs-ul in case the nav list gets too long from too many dropdowns being opened and needs to have an overflow scroll. This wrapper acts as the background so it can go the full height of the screen and not cut off any overflowing nav items while the cs-ul stops short of the bottom of the screen, which keeps all nav items in view no matter how mnay there are-->
            <div class="cs-ul-wrapper">
                <ul id="cs-expanded" class="cs-ul" aria-expanded="false">
                    <li class="cs-li">
                        <a href="" class="cs-li-link cs-active" style="color: white;">
                            Início
                        </a>
                    </li>
                    <li class="cs-li">
                        <a href="" class="cs-li-link" style="color: white;">
                            Serviços
                        </a>
                    </li>
                    <li class="cs-li">
                        <a href="" class="cs-li-link" style="color: white;">
                            Sobre
                        </a>
                    </li>
                    <li class="cs-li">
                        <a href="" class="cs-li-link" style="color: white;">
                            Contato
                        </a>
                    </li>
                    <!--Copy and paste this cs-dropdown list item and replace any .cs-li with this cs-dropdown group to make a new dropdown and it will work-->
                    
                    <!-- <li class="cs-li">
                        <a href="" class="cs-li-link">
                            FAQ
                        </a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <a href="" class="cs-button-solid cs-nav-button">Entre em contato</a>
        <!--Dark Mode toggle, uncomment button code if you want to enable a dark mode toggle-->
        <!-- <button id="dark-mode-toggle" aria-label="dark mode toggle">
            <svg class="cs-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve"><path d="M459.782 347.328c-4.288-5.28-11.488-7.232-17.824-4.96-17.76 6.368-37.024 9.632-57.312 9.632-97.056 0-176-78.976-176-176 0-58.4 28.832-112.768 77.12-145.472 5.472-3.712 8.096-10.4 6.624-16.832S285.638 2.4 279.078 1.44C271.59.352 264.134 0 256.646 0c-132.352 0-240 107.648-240 240s107.648 240 240 240c84 0 160.416-42.688 204.352-114.176 3.552-5.792 3.04-13.184-1.216-18.496z"/></svg>
            <img class="cs-sun" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fsun.svg" decoding="async" alt="moon" width="15" height="15">
        </button> -->
    </div>
</header>
                                









    <!-- ============================================ -->
<!--                    Hero                      -->
<!-- ============================================ -->

<section id="hero-1203">
    <div class="cs-container">
        <div class="cs-content">
            <span class="cs-topper">Bem vindo a Aliest</span>
            <h1 class="cs-title">Soluções Especializadas para Desafios Tecnológicos</h1>
            <p class="cs-text">
                Profissionais experientes da Aliest oferecem serviços completos para impulsionar a inovação e garantir o crescimento sustentável do seu negócio.
            </p>
            <a href="" class="cs-button-solid">Entre em Contato</a>
        </div>
        <!--To make your own background crops of people use https://www.remove.bg/-->
        <picture class="cs-picture">
            <source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/accountant.png">
            <source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/accountant.png">
            <img aria-hidden="true" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/accountant.png" alt="accountant" width="886" height="842">
        </picture>
    </div>
    <!--Floating Arrow-->
    <img class="cs-floater" aria-hidden="true" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/arrow-graph-full.svg" alt="accountant" width="1465" height="950">
</section>



<!-- ============================================ -->
<!--                 Side By Side                 -->
<!-- ============================================ -->

<section id="sbs-1308">
    <div class="cs-container">
        <!-- Left Image Section -->
        <div class="cs-image-group">
            <!--Floating Box-->
            <div class="cs-box">
                <span class="cs-desc">Contabilidade e suporte para o seu negócio
                    </span>
            </div>
            <!--Image-->
            <picture class="cs-picture">
                <source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/tax1.jpg">
                <source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/tax1.jpg">
                <img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/tax1.jpg" alt="meeting" width="630" height="630" aria-hidden="true">
            </picture>
        </div>
        <!-- Right Content Section-->
        <div class="cs-content">
            <span class="cs-topper">Sobre nós</span>
            <h2 class="cs-title">Obtenha Ajuda em Finanças</h2>
            <p class="cs-text">
                Na nova era da tecnologia, olhamos para o futuro com confiança e orgulho pela nossa empresa e pelos nossos negócios. Considerar todos os fatores de mudança oferece a base e o orgulho necessários para transformar seu site em uma plataforma verdadeiramente profissional na era digital.
            </p>
            <a class="cs-button-solid" aria-label="learn more about our programs" href="">Saiba Mais</a>
            <ul class="cs-ul">
                <li class="cs-item">
                    <span class="cs-number">150 +</span>
                    <h3 class="cs-h3">Equipe em três continentes</h3>
                </li>
                <li class="cs-item">
                    <span class="cs-number">700 +</span>
                    <h3 class="cs-h3">Projetos de consultoria</h3>
                </li>
                <li class="cs-item">
                    <span class="cs-number">180 +</span>
                    <h3 class="cs-h3">Membros da comunidade de aprendizado</h3>
                </li>
            </ul>
        </div>
    </div>
</section>
         




<!-- ============================================ -->
<!--                 Why Choose Us                -->
<!-- ============================================ -->

<section id="why-choose-1662">
    <div class="cs-container">
        <div class="cs-content">
            <span class="cs-topper">Por que escolher a gente</span>
            <h2 class="cs-title">Faça seu negócio crescer com a Aliest</h2>
        </div>
        <div class="cs-wrapper">
            <ul class="cs-card-group">
                <li class="cs-item">
                    <span class="cs-item-number">01</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Excelência em resultados comprovados
                        </h3>
                        <p class="cs-item-text">
                            Oferecemos soluções personalizadas e de alta qualidade, focadas no sucesso do seu negócio.
                        </p>
                    </div>
                </li>
                <li class="cs-item">
                    <span class="cs-item-number">02</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Compromisso com a inovação
                        </h3>
                        <p class="cs-item-text">
                            Estamos sempre à frente, trazendo as últimas tendências para garantir um diferencial competitivo.
                        </p>
                    </div>
                </li>
                <li class="cs-item">
                    <span class="cs-item-number">03</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Especialistas dedicados
                        </h3>
                        <p class="cs-item-text">
                            Nossa equipe é formada por profissionais experientes, prontos para atender suas necessidades.
                        </p>
                    </div>
                </li>
                <li class="cs-item">
                    <span class="cs-item-number">04</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Abordagem orientada para resultados
                        </h3>
                        <p class="cs-item-text">
                            Estratégias criadas para impactar positivamente os seus objetivos empresariais.
                        </p>
                    </div>
                </li>
            </ul>
            <ul class="cs-card-group">
                <li class="cs-item">
                    <span class="cs-item-number">05</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Transparência e confiança
                        </h3>
                        <p class="cs-item-text">
                            Estabelecemos uma parceria sólida com nossos clientes, baseada em confiança e resultados reais.
                        </p>
                    </div>
                </li>
                <li class="cs-item">
                    <span class="cs-item-number">06</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Apoio completo e contínuo
                        </h3>
                        <p class="cs-item-text">
                            Estamos com você em cada etapa, garantindo suporte e inovação contínuos.
                        </p>
                    </div>
                </li>
                <li class="cs-item">
                    <span class="cs-item-number">07</span>
                    <div class="cs-item-wrapper">
                        <h3 class="cs-h3">
                            Soluções sob medida
                        </h3>
                        <p class="cs-item-text">
                            Adaptamos nossas propostas às suas necessidades específicas para oferecer a máxima eficácia.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <!---SVG Graphic-->
        <img class="cs-floater" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/diagnol-ovals.svg" alt="graphic" loading="lazy" decoding="async" height="710" aria-hidden="true" width="690">
    </div>
</section>
                                
                                




    <!-- ============================================ -->
<!--                   Reviews                    -->
<!-- ============================================ -->

<section id="reviews-1672">
    <div class="cs-container">
        <div class="cs-content">
            <span class="cs-topper">Depoimentos</span>
            <h2 class="cs-title">Avaliações de Nossos Clientes</h2>
        </div>
        <ul class="cs-card-group">
            <li class="cs-item">
                <div class="cs-flex-group">
                    <picture class="cs-picture">
                        <img class="cs-profile" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/MISC/ecomm-headshot1.jpeg" decoding="async" alt="profile" width="50" height="50" aria-hidden="true" loading="lazy">
                    </picture>
                    <span class="cs-name">
                        Ana Carolina Silva
                        <span class="cs-job">Fundadora da VidaCore</span>
                    </span>
                </div>
                <div class="wrapper">
                    <img class="cs-item-stars" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/yellow-stars.svg" alt="stars" width="96" height="16">
                    <p class="cs-review">
                        A Aliest revolucionou nossa estratégia de negócios. Seus consultores especializados forneceram ideias inovadoras que nos impulsionaram para o sucesso. A dedicação e as soluções criativas são realmente notáveis.
                    </p>
                </div>
                <!--Quote Icon-->
                <img class="cs-quote" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/gray-quote.svg" decoding="async" alt="quote icon" width="120" height="99">
            </li>
            <li class="cs-item">
                <div class="cs-flex-group">
                    <picture class="cs-picture">
                        <img class="cs-profile" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/review2.png" decoding="async" alt="profile" width="50" height="50" aria-hidden="true" loading="lazy">
                    </picture>
                    <span class="cs-name">
                        Roberto Costa
                        <span class="cs-job">CEO da InnovateTech</span>
                    </span>
                </div>
                <div class="wrapper">
                    <img class="cs-item-stars" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/yellow-stars.svg" alt="stars" width="96" height="16">
                    <p class="cs-review">
                        A Aliest transformou nossa abordagem empresarial. O conhecimento e a experiência da equipe ajudaram a redefinir nossa estratégia e alcançar novos patamares. Seu trabalho é exemplar e essencial para o crescimento.
                    </p>
                </div>
                <!--Quote Icon-->
                <img class="cs-quote" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/gray-quote.svg" decoding="async" alt="quote icon" width="120" height="99">
            </li>
            <li class="cs-item">
                <div class="cs-flex-group">
                    <picture class="cs-picture">
                        <img class="cs-profile" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/MISC/ecomm-headshot2.jpeg" decoding="async" alt="profile" width="50" height="50" aria-hidden="true" loading="lazy">
                    </picture>
                    <span class="cs-name">
                        Mariana Torres
                        <span class="cs-job">Diretora de Operações da GreenFuture</span>
                    </span>
                </div>
                <div class="wrapper">
                    <img class="cs-item-stars" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/yellow-stars.svg" alt="stars" width="96" height="16">
                    <p class="cs-review">
                        A Aliest é uma parceira estratégica inestimável. Suas soluções personalizadas e compromisso com a excelência garantiram um salto significativo em nossos resultados. Altamente recomendados.
                    </p>
                </div>
                <!--Quote Icon-->
                <img class="cs-quote" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/gray-quote.svg" decoding="async" alt="quote icon" width="120" height="99">
            </li>
        </ul>
    </div>
</section>
                                


    <section id="cs-contact-490">
        <div class="cs-container">
            <!-- Contact Info -->
            <div class="cs-content">
                <span class="cs-topper">Fale com a gente</span>
                <h2 class="cs-title">Informações de Contato</h2>
                <!-- <p class="cs-text">
                    Justo eget magna fermentum iaculis eu non diam phasellus vestibulum. Eu volutpat odio facilisis mauris sit amet massa. Sit amet est placerat in egestas
                </p> -->
                <!--Nome-->
                <span class="cs-header">Nome</span>
                <a href="" class="cs-link">
                    GABRIEL EDUARDO PEREIRA ALIEST
                </a>
                <!--Razão social-->
                <span class="cs-header">Razão social</span>
                <a href="" class="cs-link">
                    61.268.757 GABRIEL EDUARDO PEREIRA ALIEST

                </a>
                <!--cnpj-->
                <span class="cs-header">CNPJ</span>
                <a href="" class="cs-link">
                    61.268.757/0001-55
                </a>
                
                <!--Address-->
                <span class="cs-header">Endereço</span>
                <a href="" class="cs-link">
                    RUA CEL DULCÍDIO, 880 - BATEL, Curitiba - PR, 80420-170
                </a>
                <!--Email-->
                <span class="cs-header">Email</span>
                <a href="mailto:GUSTAVOHENRIQUEALIEST@GMAIL.COM" class="cs-link">GABRIELEDUARDO@OUTLOOK.COM</a>
                <!--Phone-->
                <span class="cs-header">Phone</span>
                <a href="tel:(41) 9555-6724" class="cs-link">(41) 8813-3200</a>
    
                <!--Social Buttons-->
                <div class="cs-social">
                    <a class="cs-social-link" aria-label="visit google profile" href="">
                        <img class="cs-social-img" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Social/google.svg" alt="google" width="11" height="11">
                    </a>
                    <a class="cs-social-link" aria-label="visit facebook profile" href="">
                        <img class="cs-social-img" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Social/Facebook.svg" alt="facebook" width="6" height="11">
                    </a>
                    <a class="cs-social-link" aria-label="visit instagram profile" href="">
                        <img class="cs-social-img" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Social/instagram.svg" alt="instagram" width="11" height="11">
                    </a>
                </div>
            </div>
            <!-- Form -->
            <form id="cs-form-490" name="Contact Form" method="post">
                <label class="cs-label">
                    Nome
                    <input class="cs-input" required type="text" id="name-490" name="name" placeholder="Lucas/Lucas Siqueira">
                </label>
                <label class="cs-label">
                    Email
                    <input class="cs-input" required type="text" id="email-490" name="email" placeholder="seuemail@aliest.com">
                </label>
                <label class="cs-label">
                    Telefone
                    <input class="cs-input" required type="text" id="phone-490" name="phone" placeholder="+55 (XX) XXXX-XXXX">
                </label>
                <label class="cs-label">
                    Como nos encontrou?
                    <input class="cs-input" type="text" id="find-490" name="find-us" placeholder="Redes sociais, familia, amigos...">
                </label>
                <label class="cs-label-message">
                    Mensagem
                    <textarea class="cs-input" required name="Message" id="message-490" placeholder="Olá, estou interessado em..."></textarea>
                </label>
                <button class="cs-button-solid" type="submit">Enviar mensagem</button>
            </form>
        </div>
    </section>





    
</body>
</html>