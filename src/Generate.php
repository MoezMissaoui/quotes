<?php

namespace Moezmissaoui\Quotes;

use Illuminate\Support\Facades\Http;

class Generate
{
    // There is 3 modes [random,today,quotes]
    public function justDoIt(String $mode = null)
    {
        $mode = ($mode) ? $mode : 'random' ;
        $inspired_quotes = Http::get('https://zenquotes.io/api/'.$mode);
        if ($inspired_quotes->getStatusCode() == 200) {

            $quotes = [] ;
            foreach ($inspired_quotes->json() as $key => $inspired_quote) {
                array_push($quotes , ($inspired_quote['q'] ?? '') . ' -  ' . ($inspired_quote['a'] ?? '')) ;
            }
            return $quotes  ;
        }
        return ' Erreur:  ' .$inspired_quotes->getStatusCode() ;
    }

}
