<?php
/**
 * loadPolyfill
 *
 * Creates a local copy of Filament Groups rel="preload" polyfill
 */
$modx->getService('fileHandler','modFileHandler');
$file = $modx->fileHandler->make('/assests/js/polyfill/');
if (!$file->create('cssrelpreload.min.js')) {
   return $modx->log(modX::LOG_LEVEL_DEBUG, 'loadPolyfill was unable to create file preload.js');
}

file_put_contents($file->getPath(), 'https://cdnjs.cloudflare.com/ajax/libs/loadCSS/2.1.0/cssrelpreload.min.js');

return $modx->log(modX::LOG_LEVEL_DEBUG, 'loadPolyfill created file preload.js');