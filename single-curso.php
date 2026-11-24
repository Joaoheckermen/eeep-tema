<?php
if (!defined('ABSPATH')) exit;
get_header();

/*
* Divide o conteúdo do curso (escrito no editor do WordPress) em seções,
* usando os títulos <h2> como separadores. Assim o texto continua sendo
* editado em um único campo, e o tema decide onde cada parte aparece.
*/
if (!function_exists('eeep_dividir_secoes_curso')) {
    function eeep_dividir_secoes_curso($html) {
        $secoes = array('apresentacao' => '', 'perfil' => '', 'campo' => '', 'outras' => '');
        $partes = preg_split('/(?=<h2[\s>])/i', $html, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($partes as $parte) {
            if (!preg_match('/^<h2[\s>]/i', $parte)) {
                $secoes['outras'] .= $parte; // texto antes do primeiro <h2>
                continue;
            }
            preg_match('/<h2[^>]*>(.*?)<\/h2>/is', $parte, $m);
            $titulo = strtolower(remove_accents(wp_strip_all_tags(isset($m[1]) ? $m[1] : '')));

            if (strpos($titulo, 'apresent') !== false)                                  $chave = 'apresentacao';
            elseif (strpos($titulo, 'perfil') !== false)                                $chave = 'perfil';
            elseif (strpos($titulo, 'estrutura') !== false || strpos($titulo, 'modulo') !== false) $chave = 'modulos';
            elseif (strpos($titulo, 'campo') !== false)                                 $chave = 'campo';
            else                                                                        $chave = 'outras';

            $secoes[$chave] .= $parte;
        }
        return $secoes;
    }
}

// Dados da ficha técnica (iguais para os cursos atuais; edite aqui se mudar)
$ficha = array(
    'Duração do curso' => '3 anos',
    'Carga horária'    => '3.600 horas',
    'Modalidade'       => 'Integral (manhã e tarde)',
            'Titulação'        => 'Técnico de Nível Médio',
);

$url_cursos = home_url('/#cursos');
$url_edital = get_template_directory_uri() . '/pdf/edital-2026.pdf';

while (have_posts()) : the_post();
$secoes = eeep_dividir_secoes_curso(apply_filters('the_content', get_the_content()));
$resumo = get_the_excerpt();
?>

<article class="curso-single-page">
<div class="container">

<a href="<?php echo esc_url($url_cursos); ?>" class="voltar-link">Voltar</a>

<div class="curso-pagina">
<header class="curso-pagina-topo">
<h1><?php the_title(); ?></h1>
<?php if (!empty($resumo)) : ?>
<p class="curso-resumo"><?php echo esc_html($resumo); ?></p>
<?php endif; ?>
</header>

<div class="curso-grid">

<section class="curso-ficha" aria-labelledby="titulo-ficha">
<h2 id="titulo-ficha" class="screen-reader-text">Informações do curso</h2>
<dl>
<?php foreach ($ficha as $rotulo => $valor) : ?>
<div>
<dt><?php echo esc_html($rotulo); ?></dt>
<dd><?php echo esc_html($valor); ?></dd>
</div>
<?php endforeach; ?>
</dl>
</section>

<?php if ($secoes['modulos']) : ?>
<section class="curso-modulos">
<?php echo wp_kses_post($secoes['modulos']); ?>
</section>
<?php endif; ?>

<div class="curso-edital">
<a href="<?php echo esc_url($url_edital); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-pilula">
Edital de inscrição<span class="screen-reader-text"> (PDF, abre em nova aba)</span>
</a>
</div>

<?php if ($secoes['apresentacao']) : ?>
<section class="curso-bloco curso-apresentacao">
<?php echo wp_kses_post($secoes['apresentacao']); ?>
</section>
<?php endif; ?>

<?php if ($secoes['perfil']) : ?>
<section class="curso-bloco curso-perfil">
<?php echo wp_kses_post($secoes['perfil']); ?>
</section>
<?php endif; ?>

<?php if ($secoes['campo']) : ?>
<section class="curso-bloco curso-campo">
<?php echo wp_kses_post($secoes['campo']); ?>
</section>
<?php endif; ?>

<?php if ($secoes['outras']) : ?>
<section class="curso-bloco curso-outras">
<?php echo wp_kses_post($secoes['outras']); ?>
</section>
<?php endif; ?>

</div>
</div>

<div class="curso-rodape">
<a href="<?php echo esc_url($url_cursos); ?>" class="btn btn-secondary btn-pilula">Voltar</a>
</div>

</div>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
