<?php declare(strict_types=1);

namespace Lmc\CodingStandard\Fixer;

use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;

class FooFixer
{
    private function fixFunction(Tokens $tokens): void
    {
        $tokensToInsert = [];
        $tokensToInsert[] = new Token(',');

        $tokens->insertAt(333, $tokensToInsert);
    }
}
