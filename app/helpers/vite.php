<?php


if(!function_exists('mix')){
    function mix($path)
    {
        $manifestPath = __DIR__ . '/../../public/build/.vite/manifest.json';

        if(!file_exists($manifestPath)){
            return $path;
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if(isset($manifest[$path])){
            return '/build/' . $manifest[$path]['file'];
        }

        return $path;
    }
}
