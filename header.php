<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>?v=<?php echo time(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary-content">Ir para o conteúdo principal</a>

<div class="top-accessibility-bar">
    <div class="container accessibility-flex">
        <span class="accessibility-title">Acessibilidade:</span>
        <div class="accessibility-buttons" role="group" aria-label="Ferramentas de acessibilidade">

            <button type="button" class="a11y-btn" onclick="alterarFonte(1)" aria-label="Aumentar fonte" title="Aumentar fonte">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M3 20 8.5 6 14 20M5.2 15h6.6"/>
                    <path d="M18 5v6M15 8h6"/>
                </svg>
            </button>

            <button type="button" class="a11y-btn" onclick="alterarFonte(-1)" aria-label="Diminuir fonte" title="Diminuir fonte">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M3 20 8.5 6 14 20M5.2 15h6.6"/>
                    <path d="M15 8h6"/>
                </svg>
            </button>

            <button type="button" class="a11y-btn" onclick="resetarFonte()" aria-label="Restaurar tamanho da fonte" title="Restaurar tamanho da fonte">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M5 20 12 4l7 16M8 14h8"/>
                </svg>
            </button>

            <button type="button" class="a11y-btn a11y-btn-contraste" onclick="alternarAltoContraste()" aria-label="Alternar alto contraste" title="Alto contraste">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 3a9 9 0 0 1 0 18z" fill="currentColor"/>
                </svg>
            </button>

        </div>
    </div>
</div>

<header class="site-header">
    <div class="container header-flex">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/icons/ti2valmir.png'); ?>" alt="E.E.E.P. Professor Antônio Valmir da Silva" class="site-logo">
                <span class="site-title-text">E.E.E.P. Prof. Antônio Valmir da Silva</span>
            </a>
        </div>

        <nav class="main-navigation" aria-label="Menu Principal">
            <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Abrir Menu de Navegação">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
            <ul id="primary-menu" class="nav-menu">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Início</a></li>
                <li><a href="<?php echo esc_url(home_url('/#cursos')); ?>">Cursos</a></li>
                <li><a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/edital-2026.pdf'); ?>" target="_blank" rel="noopener">Edital 2026</a></li>
                <li><a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/resultado-2025.pdf'); ?>" target="_blank" rel="noopener">Resultado 2025</a></li>
                <li><a href="<?php echo esc_url(home_url('/?p=16')); ?>" target="_blank" rel="noopener">Sobre nós</a></li>
            </ul>
        </nav>
    </div>
</header>
<main id="primary-content">
