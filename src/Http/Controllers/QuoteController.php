<?php

namespace Moezmissaoui\Quotes\Http\Controllers;

use Moezmissaoui\Quotes\Generate;

class QuoteController
{
    public function __invoke(Generate $generate, String $mode = null)
    {
        if ($this->validate_mode($mode)) {
            $quotes = $generate->justDoIt($mode);
            return view('QuoteBlades::index', compact('quotes'));
        }
        return "The inspiration mode can only be these 3 possibilities : ['random', 'quotes', 'today']";
    }

    private function validate_mode(String $mode = null){
        if (($mode) && !in_array($mode, ['random', 'quotes', 'today']) ) {
            return false ;
        }
        return true ;
    }
}

