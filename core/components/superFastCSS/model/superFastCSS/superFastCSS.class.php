<?php

class superFastCSS {
    public $modx;
    public $config = array();
    public function __construct(modX &$modx, array $config = array()) {
        $this->modx =& $modx;
        $basePath = $this->modx->getOption('sfcss.core_path', $config, $this->modx->getOption('core_path') . 'components/superFastCSS');
        $assetsUrl = $this->modx->getOption('sfcss.assets_url', $config, $this->modx->getOption('assets_url') . 'components/superFastCSS');
        $this->config = array_merge(array(
            'basePath' => $basePath,
            'corePath' => $basePath,
            'modelPath' => $basePath . 'model/',
            'processorsPath' => $basePath . 'processors/',
            'templatesPath' => $basePath . 'templates/',
            'chunksPath' => $basePath . 'elements/chunks/',
            'jsUrl' => $basePath . 'js/',
            'cssUrl' => $basePath . 'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl . 'connector.php',
        ), $config);
    }
}