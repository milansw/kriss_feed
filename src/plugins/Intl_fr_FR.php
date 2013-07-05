<?php
if (!class_exists('Intl_fr_FR')) {
    class Intl_fr_FR {
        public static function init(&$messages) {
            $messages['fr_FR'] = unserialize(gzinflate(base64_decode("
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")));
        }
    }
    Intl::addLang('fr_FR', 'Français (France)', 'flag-fr');
}
