<?php

// helper para plataformas mobile.
if (!function_exists('isMobile')) {
    function isMobile()
    {
        return preg_match(
            '/(android|bb\d+|meego|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.browser|up\.link|vodafone|wap|windows ce|xda|xiino)/i',
            request()->header('User-Agent')
        );
    }
}
