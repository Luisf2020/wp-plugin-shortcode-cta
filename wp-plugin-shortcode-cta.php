<?php
/**
 * Plugin Name: LZ CTA Shortcode
 * Description: Registra el shortcode [cta] con atributos y salida escapada.
 * Version: 1.0.0
 * Author: Luis Felipe Zuniga Leon
 * License: GPL-2.0-or-later
 */
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * [cta titulo="..." url="..." texto="..." ]
 */
function lz_cta_shortcode(array $atts): string
{
    $atts = shortcode_atts([
        'titulo' => 'Hablemos de tu proyecto',
        'texto' => 'Desarrollo web, automatizacion e IA aplicada.',
        'url' => home_url('/'),
        'texto_boton' => 'Contactar',
    ], $atts, 'cta');

    return sprintf(
        '<aside class="lz-cta"><h3>%s</h3><p>%s</p><a class="lz-cta__btn" href="%s">%s</a></aside>',
        esc_html($atts['titulo']),
        esc_html($atts['texto']),
        esc_url($atts['url']),
        esc_html($atts['texto_boton'])
    );
}
add_shortcode('cta', 'lz_cta_shortcode');

function lz_cta_styles(): void
{
    wp_register_style('lz-cta', false, [], '1.0.0');
    wp_enqueue_style('lz-cta');
    wp_add_inline_style('lz-cta', '.lz-cta{border:1px solid #e2e8f0;border-radius:12px;padding:1.5rem}');
}
add_action('wp_enqueue_scripts', 'lz_cta_styles');
