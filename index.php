<?php 
    require_once 'includes/head.php';
    require_once 'includes/header.php';


?>
    <main>
        <section id='formSection' class='banner bgImg'>
            <div class='centerInfo'>
                <h1 class='title'>Buscando informação segura e atualizada para realizar as suas importações?</h1>
                <p class="description">Evite perda de tempo, dinheiro e multas! Faça suas importações utilizando o nosso sistema TECWEB com informações claras e objetivas.</p>
                <p class='buttonDescription'> Aproveite! Cadastre-se agora para uma demonstração grátis e sem compromisso.</p>
                <div class='formSection'>
                    <form id='form' method="post" action="./process_form.php">
                        <label for="name">Nome <span class='requiredMark'>*</span></label>
                        <input type='text' name="name" placeholder="Nome" required>
                        <div class="row">
                            <div class="col">
                                <label for="email">E-mail <span class='requiredMark'>*</span> </label>
                                <input type='email' name="email" placeholder="E-mail" required>
                            </div>
                            <div class="col">
                                <label for="name">Telefone <span class='requiredMark'>*</span> </label>
                                <input type='text' name="phone" placeholder="Telefone" required>
                            </div>
                        </div>
                        <button type="submit" class='btnLink' name='sendBtn'> 
                            <div class="btn">Quero uma demonstração grátis</div>
                        </button>
                    </form>
                </div>
            </div>
        </section>
        
        <section class='whiteBg content'>
            <div class="row limiter">
                <div class="col colImg">
                    <img class='img' src="./images/Aproveite-todo-o-potencial-do-comercio-exterior-com-a-InfoConsult.jpg" alt="Mulher executiva digitando no computador">
                </div>
                <div class="col colContentRight">
                    <h3 class='upperTitle'>Sobre nós</h3>
                    <h2>O que é o sistema TECWEB?</h2>
                    <p>É o Sistema com um extenso banco de dados atualizado onde o usuário pode pesquisar as alíquotas do Imposto de Importação, IPI, ICMS, NCM, entre outros, assim como consultar a legislação de comércio exterior e efetuar estimativas de cálculo de importação.</p>
                    <p>O objetivo é evitar prejuízos de importação com cálculos errados, com multas e até mesmo perda de tempo, a TECWEB tem tudo o que você precisa para importar de maneira segura sem precisar fazer dezenas de pesquisas na internet que podem estar erradas ou desatualizadas.</p>
                    <p>Veja você mesmo como é fácil utilizar, fale conosco agora para uma demonstração grátis e sem compromisso.</p>
                    <a class='btnLink' href='#formSection'> <div class="btn">Quero uma demonstração grátis</div></a>
                </div>
            </div>
        </section>
        <section class="greenBg">
            <div class="row limiter mobileReverse">
                <div class="col">
                    <h2 class='h3'>Por que escolher o sistema TECWEB?</h2>
                    <ul class="iconList">
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>Consultoria de dúvidas ilimitadas;</span>
                        </li>
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>Informações claras e objetivas, sem enrolação;</span>
                        </li>
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>NCM Atualizadas diariamente de acordo com o Diário Oficial da União (DOU);</span>
                        </li>
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>Interface simples e de fácil manuseio;</span>
                        </li>
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>Acesso rápido de qualquer lugar utilizando um dispositivo com internet;</span>
                        </li>
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>Ideal para importadores e despachantes;</span>
                        </li>
                        <li>
                            <span class="icon material-symbols-outlined">done</span>
                            <span>Quem utiliza recomenda</span>
                        </li>
                    </ul>
                    <a class='btnLink' href='#formSection'> <div class="btn">Quero uma demonstração grátis</div></a>
                </div>
                <div class="col colImg">
                    <img class='img' src="./images/Torne-se-um-especialista-em-comercio-exterior-com-a-InfoConsult.jpg" alt="Mulher e homem executivos com tablet">
                </div>
            </div>
        </section>
    </main>
<?php 
    require_once 'includes/footer.php';
?>