<?php

class SHA512Util {
    public static function sign($signature) {
        $signature = hash('sha512', $signature);
        return $signature;
    }

}
