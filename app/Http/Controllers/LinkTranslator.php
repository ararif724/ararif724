<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkTranslator extends Controller
{
    private $links = [
        'linkedin' => 'https://www.linkedin.com/in/ararifdotme/',
        'github' => 'https://github.com/ararif724',
        'laravel-certificate' => 'https://exam.laravelcert.com/is/md-arifur-rahman-arif/certified-since/2023-07-29'
    ];

    public function go($linkId)
    {
        $link = $linkId;
        if (array_key_exists($linkId, $this->links)) {
            $link = $this->links[$linkId];
        }
        return view('redirect', ['link' => $link]);
    }
}
