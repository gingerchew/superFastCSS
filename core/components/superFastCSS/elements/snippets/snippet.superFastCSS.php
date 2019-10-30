<?php

$defaultSFCSSCorePath = $modx->getOption('core_path') . 'components/superFastCSS';

$SFCSSCorePath = $modx->getOption('sfcss.core_path', null, $defaultSFCSSCorePath);

$sfcss = $modx->getService('sfcss','superFastCSS',$SFCSSCorePath.'model/superFastCSS/',$scriptProperties);

?>