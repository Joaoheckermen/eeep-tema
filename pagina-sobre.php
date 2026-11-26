<?php
/*
 * Página "Sobre" — conteúdo fixo no arquivo do tema (não depende do banco de dados).
 * É carregada pela URL eeep_pagina=sobre (regra registrada no functions.php).
 */
if (!defined('ABSPATH')) exit;
get_header();

$url_cursos = home_url('/#cursos');
?>

<article class="curso-single-page sobre-pagina">
    <div class="container">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="voltar-link">Voltar</a>

        <div class="curso-pagina">
            <header class="curso-pagina-topo">
                <div class="curso-titulo-bloco">
                    <h1>Sobre a escola</h1>
                    <p class="curso-resumo">EEEP Professor Antonio Valmir da Silva — Ensino Médio Integrado à Educação Profissional, em Caucaia/CE.</p>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/icons/ti2valmir.png'); ?>" alt="" class="curso-imagem">
            </header>

            <div class="curso-conteudo">

                <section class="curso-bloco curso-apresentacao">
                    <h2>Quem somos</h2>
                    <!-- EDITE AQUI, se quiser: missão, valores, ano de fundação, equipe etc. -->
                    <p>A <strong>EEEP Professor Antonio Valmir da Silva</strong> é uma escola estadual de educação profissional de Caucaia, no Ceará, vinculada à Secretaria da Educação do Estado (SEDUC). Oferece Ensino Médio Integrado à Educação Profissional, unindo a formação geral à formação técnica de nível médio.</p>
                </section>

                <section class="curso-bloco">
                    <h2 id="curso-bloco-espec">Nossa história</h2>

                    <p>Em um mundo em constante transformação, a educação vai além da transmissão de conhecimentos: é também uma ferramenta para desenvolver habilidades, ampliar perspectivas e preparar pessoas para os desafios e as oportunidades que surgem ao longo do caminho. É com esse propósito que a EEEP Professor Antonio Valmir da Silva desenvolve seu trabalho na formação de jovens.</p>

                    <p>A identidade da EEEP Professor Antonio Valmir da Silva também se constrói a partir da memória daquele que a nomeia. Conhecer sua trajetória é conhecer uma parte importante da história da instituição.</p>

                    <h3>Origem e Formação Acadêmica</h3>

                    <p>Antonio Valmir nasceu em 23 de abril de 1935 na localidade de Croatá, município de São Luís do Curu (CE), filho de Antônio Firmino de Freitas e Francisca Firmino da Silva. Mudou-se para Caucaia ainda jovem, entre 8 e 13 anos, quando seu pai foi transferido a trabalho pela Rede Ferroviária Federal (RFFSA).</p>

                    <p>Em Caucaia, iniciou a alfabetização com a professora particular Raimunda Danga e estudou no tradicional Patronato Santa Maria das Irmãs Cordimarianas. Preparou-se no Externato Maria Laura para ingressar no Liceu do Ceará, em Fortaleza, onde concluiu os cursos ginasial e científico.</p>

                    <p>Formou-se bacharel em Pedagogia pela antiga Faculdade Católica de Filosofia e complementou sua formação acadêmica na Universidade Estadual do Ceará (UECE).</p>

                    <h3>Carreira na Educação</h3>

                    <ul>
                        <li><strong>Colégio Luzardo Viana.</strong> Sua trajetória no magistério começou em 1960, por meio da Campanha Nacional de Escolas da Comunidade (CNEC), ano em que foi fundado o Colégio Luzardo Viana em Caucaia. Iniciou lecionando Desenho Geométrico e logo assumiu a direção da instituição, permanecendo à frente do colégio por 40 anos, até o fim de sua vida.</li>
                        <li><strong>Colégio Hermínio Barroso.</strong> Além do Luzardo Viana, atuou por vários anos como vice-diretor e diretor do Colégio Hermínio Barroso, consolidando sua liderança na rede de ensino local.</li>
                    </ul>
                </section>

                <section class="curso-bloco">
                    <h2>Nossos cursos técnicos</h2>
                    <ul class="sobre-cursos">
                        <li><a href="<?php echo esc_url(home_url('/curso/administracao/')); ?>">Técnico em Administração</a></li>
                        <li><a href="<?php echo esc_url(home_url('/curso/edificacoes/')); ?>">Técnico em Edificações</a></li>
                        <li><a href="<?php echo esc_url(home_url('/curso/eletromecanica/')); ?>">Técnico em Eletromecânica</a></li>
                        <li><a href="<?php echo esc_url(home_url('/curso/logistica/')); ?>">Técnico em Logística</a></li>
                        <li><a href="<?php echo esc_url(home_url('/curso/informatica/')); ?>">Técnico em Informática</a></li>
                    </ul>
                </section>

            </div>
        </div>

        <div class="curso-rodape">
            <a href="<?php echo esc_url($url_cursos); ?>" class="btn btn-secondary btn-pilula">Ver todos os cursos</a>
        </div>

    </div>
</article>

<?php get_footer(); ?>