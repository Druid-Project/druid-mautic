<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @themes/attract/assets/icon3.png */
class __TwigTemplate_eb8d878b0559c667da450170fb69e4f7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "‰PNG

\000\000\000
IHDR\000\000\000 \000\000\000 \000\000\000szzô\000\000\000sRGB\000®Îé\000\000\000ÝIDATXGí–±
Â0E_†`‰,AOA…‚˜±
„†’–%X‚!@Ù’lp°¥ tW%Òùîûß—ÿ5LÍÄý1\000)–À\tª1tÀy8ò€ÐUÖÇØ|àRdîÎ÷À:ÀX¹äR¡Š~…j¾°ê‹‡
/œ}ü\tèg\000l=­ÃnÙwÉKœa}ibÎWó‘úúE5#Zß\000¹Ä¦”hSO‘
€1`ü?ŸìX6*;Uømh¯Þ¾ý
¦Ùº·vlQÍÅcT­ÒwT³X²x\000Œ·‡!¡[ªÌ\000\000\000\000IEND®B`‚";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon3.png";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/attract/assets/icon3.png", "/app/docroot/themes/attract/assets/icon3.png");
    }
}
