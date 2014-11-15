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