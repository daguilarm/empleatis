<?php

namespace App\Http\Middleware\Custom;

use RenatoMarinho\LaravelPageSpeed\Middleware\PageSpeed;

class HtmlMinify extends PageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            // strip whitespaces after tags, except space
            '/\>[^\S ]+/s' => '>',
            // strip whitespaces before tags, except space
            '/[^\S ]+\</s' => '<',
            // Removed general whitespaces
            '/ {2,}/' => ' ',
            //remove leading and trailing spaces
            '/^([\t ])+/m' => '',
            '/([\t ])+$/m' => '',
            // remove JS line comments (simple only); do NOT remove lines containing URL (e.g. 'src="http://server.com/"')!!!
            '~//[a-zA-Z0-9 ]+$~m' => '',
            //remove empty lines (sequence of line-end and white-space characters)
            '/[\r\n]+([\t ]?[\r\n]+)+/s' => "\n",
            //remove empty lines (between HTML tags); cannot remove just any line-end characters because in inline JS they can matter!
            '/\>[\r\n\t ]+\</s' => '><',
            //remove "empty" lines containing only JS's block end character; join with next line (e.g. "}\n}\n</script>" --> "}}</script>"
            '/}[\r\n\t ]+/s' => '}',
            '/}[\r\n\t ]+,[\r\n\t ]+/s' => '},',
            //remove new-line after JS's function or condition start; join with next line
            '/\)[\r\n\t ]?{[\r\n\t ]+/s' => '){',
            '/,[\r\n\t ]?{[\r\n\t ]+/s' => ',{',
            //remove new-line after JS's line end (only most obvious and safe cases)
            '/\),[\r\n\t ]+/s' => '),',
            '/(\x20+|\t)/' => ' ', // Delete multispace (Without \n)
        ];

        return preg_replace(array_keys($replace), array_values($replace), $buffer);
    }
}
