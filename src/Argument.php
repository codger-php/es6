<?php

namespace Codger\Es6;

use Codger\Javascript;
use Twig_Environment;

class Argument extends Javascript\Argument
{
    use Doccomment;

    /**
     * @param Twig_Environment $twig
     */
    public function __construct(Twig_Environment $twig, string $name = null, string $default = null, bool $variadic = false)
    {
        parent::__construct($twig, $name);
        $this->set('default', $variadic);
        $this->set('variadic', $variadic);
    }

    /**
     * Mark the argument as variadic (or not).
     *
     * @param bool $variadic Defaults to `true`
     * @return Codger\Es6\Argument Itself
     */
    public function isVariadic(bool $variadic = true) : Argument
    {
        return $this->set('variadic', $variadic);
    }
}

