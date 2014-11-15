<?php
/**
 * Utilisations de pipelines par Médiabox AnySurfer
 *
 * @plugin     Médiabox AnySurfer
 * @copyright  2014
 * @author     phenix
 * @licence    GNU/GPL
 * @package    SPIP\MediaboxAS\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

// Pipeline jquery UI
function mediaboxAS_jqueryui_plugins($scripts){
    $scripts[] = "jquery.ui.core";
    $scripts[] = "jquery.ui.widget";
    $scripts[] = "ui.ariaLightbox";

    return $scripts;
}

// Pipeline pour le Javascript SPIPer
function mediaboxAS_jquery_plugins($scripts) {
    $scripts[] = 'javascript/spip_lightbox_aria.js';
    return $scripts;
}


function mediaboxAS_insert_head_css($flux) {

    // Charger tout le css de jquery UI
    $flux .= "<link rel='stylesheet' type='text/css' media='all' href='".find_in_path('css/jquery.ui.all.css')."' />";

    // Injecter le css de la mediabox ARIA
    $flux .= "<link rel='stylesheet' type='text/css' media='all' href='".find_in_path('javascript/ui/css/style.css')."' />";

    return $flux;
}