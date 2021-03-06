<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eva Energia</title>
    <link rel="icon" type="image/png" href="dist/img/ms-icon-150x150.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="dist/css/app.css?v=20210118v1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="dist/lib/jquery.mask.js"></script>
    <script type="text/javascript" src="dist/js/app.js?v=20210118v1"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/f9040905d9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="Header_Site">
        <div class="container flex container_Menu">
            <div class="Header_Site_Logo">
                <a href="#" target="_blank">
                    <img src="dist/img/Logo_Eva.png" alt="Eva Energia">
                </a>
                <img src="dist/img/Nuvem_Header.png" alt="">
            </div>
            <div class="Header_Site_Menu">
                <ul class="flex">
                    <a href="#ComoFunciona" class="link-scroll">
                        <li>Como functiona</li>
                    </a>
                    <a href="#Section_Vantagens" class="link-scroll">
                        <li>Vantagens & Sustentabilidade</li>
                    </a>
                    <a href="#CalculeSuaEconomia" class="link-scroll">
                        <li>Calcule sua economia</li>
                    </a>
                    <a href="#Faq" class="link-scroll">
                        <li>FAQ</li>
                    </a>
                </ul>
            </div>
            <div class="Header_Site_Btn">
                <a href="#Solicitar_Proposta" class="link-scroll">
                    <button class="Btn_Default">Quero uma Proposta</button>
                </a>
            </div>
        </div>
        <div class="container flex Header_Container_Mobile">
            <div class="Header_Container_Menu flex">
                <div class="Header_Site_Logo">
                    <a href="#" target="_blank">
                        <img src="dist/img/Logo_Eva.png" alt="Eva Energia">
                    </a>
                </div>
                <div class="Header_Site_Btn">
                    <i class="fas fa-bars" id="Btn-mobile"></i>
                </div>
            </div>
            <div class="Header_Container_SubMenu flex" id="Menu_Mobile">
                <div class="Header_Site_Menu">
                    <ul class="flex">
                        <a href="#ComoFunciona" class="link-scroll">
                            <li>Como functiona</li>
                        </a>
                        <a href="#Section_Vantagens" class="link-scroll">
                            <li>Vantagens & Sustentabilidade</li>
                        </a>
                        <a href="#CalculeSuaEconomia" class="link-scroll">
                            <li>Calcule sua economia</li>
                        </a>
                        <a href="#Faq" class="link-scroll">
                            <li>FAQ</li>
                        </a>
                    </ul>
                </div>
                <div class="Header_Site_Btn">
                    <a href="#Solicitar_Proposta" class="link-scroll">
                        <button class="Btn_Default">Quero uma Proposta</button>
                    </a>
                </div>
            </div>
        </div>
        <section class="Saiba_Mais" id="ComoFunciona">
            <div class="container">
                <h5 class="subtitle">Eva energia</h5>
                <h3 class="title">Economize na sua conta de luz e ajude o planeta sem investir nada</h3>
                <div class="Saiba_Mais_Content flex">
                    <button class="Btn_Default" id="OpenModal">Quero saber mais</button>
                    <a href="#CalculeSuaEconomia" class="link-scroll">Calcular desconto</a>
                    <img src="dist/img/Estrela_Eva" alt="">
                </div>
                <div class="Como_Funciona">
                    <div class="Como_Funciona_Content">
                        <h5 class="subtitle">Como funciona</h5>
                        <h3 class="title">Veja tudo o que você precisa saber para tomar a decisão mais fácil da sua vida para sua empresa</h3>
                        <img src="dist/img/Estrela_Eva" alt="">
                    </div>
                    <div class="Como_Funciona_Video">
                        <img src="dist/img/Btn_Play.png" alt="">
                        <img src="dist/img/Nuvens_Video" alt="">
                    </div>
                </div>
            </div>
            <div class="Banner_Fazenda">
                <img src="dist/img/Grupo_Farm.png" alt="">
            </div>
        </section>
    </header>
    <section class="Section_CalculeSuaEconomia" id="CalculeSuaEconomia">
        <div class="Bg_Color"></div>
        <div class="container">
            <h5 class="subtitle">Calcule a sua economia</h5>
            <h3 class="title">Preencha os dados e descubra o quanto sua empresa consegue economizar</h3>
            <form class="Section_CalculeSuaEconomia_Form flex">
                <div class="Section_CalculeSuaEconomia_Form_Campos flex Campo_UltimaConta">
                    <label for="CEvalor" class="subtitle">Última conta (R$)</label>
                    <input type="text" id="CEvalor" maxlength="20" required>
                </div>
                <div class="Section_CalculeSuaEconomia_Form_Campos flex Campo_Nome">
                    <label for="CEnome" class="subtitle">Nome</label>
                    <input type="text" id="CEnome" required>
                </div>
                <div class="Section_CalculeSuaEconomia_Form_Campos flex Campo_Email">
                    <label for="CEemail" class="subtitle">Email</label>
                    <input type="email" id="CEemail" required>
                </div>
                <div class="Section_CalculeSuaEconomia_Form_Campos flex Campo_Telefone">
                    <label for="CEtelefone" class="subtitle">Telefone</label>
                    <input type="text" id="CEtelefone" required>
                </div>
                <button class="Btn_Default">Calcular Desconto</button>
            </form>
        </div>
    </section>
    <section class="Section_Vantagens" id="Section_Vantagens">
        <div class="container">
            <h5 class="subtitle">Bom para todo mundo</h5>
            <h3 class="title">Vantagens & Sustentabilidade</h3>
            <div class="Section_Vantagens_Box grid">
                <div class="Section_Vantagens_Box_Item flex">
                    <p>Consume energia limpa e renovável</p>
                    <img src="dist/img/Grid-Item-1.png" alt="">
                </div>
                <div class="Section_Vantagens_Box_Item flex">
                    <p>Economize, pelo menos, 1 conta de luz ao ano</p>
                    <img src="dist/img/Grid-Item-2.png" alt="">
                </div>
                <div class="Section_Vantagens_Box_Item flex">
                    <p>Não precisa fazer obra e nenhum tipo de instalação</p>
                    <img src="dist/img/Grid-Item-3.png" alt="">
                </div>
                <div class="Section_Vantagens_Box_Item flex">
                    <p>Não é necessário fazer nenhum tipo de investimento</p>
                    <img src="dist/img/Grid-Item-4.png" alt="">
                </div>
                <div class="Section_Vantagens_Box_Item flex">
                    <p>Você faz a sua parte para cuidar do meio ambiente</p>
                    <img src="dist/img/Grid-Item-5.png" alt="">
                </div>
                <div class="Section_Vantagens_Box_Item flex">
                    <p>O desconto já começa no momento em que você assina o contrato</p>
                    <img src="dist/img/Grid-Item-6.png" alt="">
                </div>
            </div>
            <img src="dist/img/Ilustra_Predio.png" alt="" data-aos="fade-right">
        </div>
    </section>
    <section class="Section_Solicitar_Proposta" id="Solicitar_Proposta">
        <div class="container">
            <h3 class="title">Solicite uma proposta</h3>
            <form class="Solicitar_Proposta_Form flex" id="Solicitar_Proposta_Form">
                <div class="Solicitar_Proposta_Form_Campos">
                    <label for="SPnome">Nome</label>
                    <input type="text" id="SPnome" name="SPnome" minlength="2" pattern="[a-z\s]+$" required>
                </div>
                <div class="Solicitar_Proposta_Form_Campos">
                    <label for="SPempresa">Empresa</label>
                    <input type="text" id="SPempresa" name="SPempresa" required>
                </div>
                <div class="Solicitar_Proposta_Form_Campos">
                    <label for="SPemail">Email</label>
                    <input type="text" id="SPemail" name="SPemail" required>
                </div>
                <div class="Solicitar_Proposta_Form_Campos">
                    <label for="SPcargo">Cargo</label>
                    <input type="text" id="SPcargo" name="SPcargo" required>
                </div>
                <div class="Solicitar_Proposta_Form_Campos">
                    <label for="SPtelefone">Telefone</label>
                    <input type="text" id="SPtelefone" name="SPcargo" required>
                </div>
                <div class="Solicitar_Proposta_Form_Campos">
                    <label for="SPcnpj">Cnpj</label>
                    <input type="text" id="SPcnpj" name="SPcnpj" required>
                </div>
                <div class="Solicitar_Proposta_Form_Anexo flex">
                    <p class="subtitle">Envie a última conta de energia da sua empresa</p>
                    <input type="file" id="File_Anexo"required>
                    <label for="File_Anexo" class="Btn_Default" >Anexar arquivo</label>
                </div>
                <button class="Btn_Default" name="SPenvio">Enviar Informações</button>
            </form>
        </div>
    </section>
    <section class="Section_Duvidas" id="Faq">
        <div class="container">
            <h3 class="title">Dúvidas frequentes</h3>
            <div class="Section_Duvidas_Box flex">
            <div class="Section_Duvidas_Box_Item flex">
                <h4>1- Existe algum pré requisito para contratar os serviços da Eva Energia?</h4>
                <i class="fas fa-chevron-down"></i>
                <p class="OpenText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quo officia quaerat ratione nihil,
                     minus vel provident maxime rem porro error nobis eum numquam quas possimus nostrum illo suscipit?</p>
            </div>
            <div class="Section_Duvidas_Box_Item flex">
                <h4>2- Quais são as áreas que vocês atuam?</h4>
                <i class="fas fa-chevron-down"></i>
                <p class="OpenText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quo officia quaerat ratione nihil,
                     minus vel provident maxime rem porro error nobis eum numquam quas possimus nostrum illo suscipit?</p>
            </div>
            <div class="Section_Duvidas_Box_Item flex">
                <h4>3- É preciso fazer alguma instalação especial?</h4>
                <i class="fas fa-chevron-down"></i>
                <p class="OpenText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quo officia quaerat ratione nihil,
                     minus vel provident maxime rem porro error nobis eum numquam quas possimus nostrum illo suscipit?</p>
            </div>
            <div class="Section_Duvidas_Box_Item flex">
                <h4>4- Existe algum investimento inicial na assinatura do contrato?</h4>
                <i class="fas fa-chevron-down"></i>
                <p class="OpenText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quo officia quaerat ratione nihil,
                     minus vel provident maxime rem porro error nobis eum numquam quas possimus nostrum illo suscipit?</p>
            </div>
            <div class="Section_Duvidas_Box_Item flex">
                <h4>5- Qual o tempo mínimo de contrato?</h4>
                <i class="fas fa-chevron-down"></i>
                <p class="OpenText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quo officia quaerat ratione nihil,
                     minus vel provident maxime rem porro error nobis eum numquam quas possimus nostrum illo suscipit?</p>
            </div>
            <div class="Section_Duvidas_Box_Item flex">
                <h4>6- Quem irá prover minha energia?</h4>
                <i class="fas fa-chevron-down"></i>
                <p class="OpenText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quo officia quaerat ratione nihil,
                     minus vel provident maxime rem porro error nobis eum numquam quas possimus nostrum illo suscipit?</p>
            </div>
        </div>
    </section>
    <footer class="Footer_Site">
        <div class="container flex">
            <div class="Footer_Site_Ilustracao">
                <img src="dist/img/Ilustracao_Footer.png" alt="">
            </div>
            <div class="Footer_Site_Content flex">
                <p>®2020 eva energia - todos os direitos reservados</p>
                <div class="Footer_Site_Content_RedesSocias flex">
                    <a href="#">
                        <i class="fab fa-instagram instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in linkedin"></i>            
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter twitter"></i>            
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div class="Modal_SaibaMais">
        <div class="Modal_SaibaMais_Box">
            <h3>Agora pense o que você poderia fazer com todo esse <span>dinheiro sobrando</span> </h3>
            <p id="CloseModal" class="closeBtn">[ x ]</p>
            <div class="Modal_SaibaMais_Box_Container flex">
                <div class="Modal_SaibaMais_Box_Container_Content flex">
                    <div class="Modal_SaibaMais_Box_Container_Content_Item">
                        <p class="subtitle">Economizar</p>
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Content_Item second_item">
                        <p class="subtitle">Contratar Mais</p>
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Content_Item three_item">
                        <p class="subtitle">Expandir o negócio</p>
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Content_Item four_item">
                        <p class="subtitle">Aumentar a presença</p>
                    </div>
                </div>
                <div class="Modal_SaibaMais_Box_Container_Icon flex">
                    <div class="Modal_SaibaMais_Box_Container_Icon_Item flex">
                        <img src="dist/img/Coin_Modal.png" alt="">
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Icon_Item flex">
                        <img src="dist/img/Pessoas_Modal.png" alt="">
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Icon_Item flex">
                        <img src="dist/img/Comercio_Modal.png" alt="">
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Icon_Item flex">
                        <img src="dist/img/Mundo_Modal.png" alt="">
                    </div>
                </div>
                <div class="Modal_SaibaMais_Box_Container_Valores flex">
                    <div class="Modal_SaibaMais_Box_Container_Valores_Item flex">
                        <h3>1 Mês</h3>
                        <h2>R$500,00</h2>
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Valores_Item flex">
                        <h3>1 Ano</h3>
                        <h2>R$500,00</h2>
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Valores_Item flex">
                        <h3>3 Anos</h3>
                        <h2>R$18.000,00</h2>
                    </div>
                    <div class="Modal_SaibaMais_Box_Container_Valores_Item valores_fiveYears flex">
                        <h3>5 Anos</h3>
                        <h2>R$30.000,00</h2>
                    </div>
                </div>
                <div class="Modal_SaibaMais_Box_Container_TemMais flex">
                    <h5>e tem mais</h5>
                    <p>Com a EVA energia além de economizar, você ainda ajuda a preservar <span>50</span> árvores. </p>
                    <img src="dist/img/Arvores_Modal" alt="">
                </div>
            </div>
            <a href="#Solicitar_Proposta" class="link-scroll">
                <button class="Btn_Default" id="Btn_Modal">Solicitar um proposta</button>
            </a>
        </div>
    </div>
</body>

</html>