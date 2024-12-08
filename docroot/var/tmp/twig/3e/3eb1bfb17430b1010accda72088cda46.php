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

/* @themes/attract/assets/icon4.png */
class __TwigTemplate_f130c4ef75f6436e36c30b50fa2aa4cf extends Template
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
IHDR\000\000\000 \000\000\000 \000\000\000szzô\000\000\000sRGB\000®Îé\000\000<IDATXGí–Í‘Â0…?Š€\"h€#P7ZJáÈÏÐ»Mìq€\00012#‡Øq2¾Ä—ä`ÉÏOOOîyu2ŸOÀÇÀXÖXš`\000\\}9}\000n5îRM€S,€ð—\000¦ô5~c\000æ\t\000\$v§ñò/ù>Ö·d°
yŒõÈŠÐ.9d%—@Ø˜j²Pï¨µÙøX·7¬ÊsÛƒ)\"l€¡ôsO¯ùc„åD&~!¾Q´\$^|¡2>
‰L-ÔPh\t²\000ˆ)ísW¢óCpe@Ñ¹j#\"´Vë†™uÒä”µaã\000b4ÐY\000”
£¢aã°ñ­ƒº@æüªäËždöÉe­Øo­ø÷…|ß&SÕá3\tÝÞWÛZWÊ ÊM’cBŸWÉ%hÜ©»!·'ç˜\000\000\000\000IEND®B`‚";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon4.png";
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
        return new Source("", "@themes/attract/assets/icon4.png", "/app/docroot/themes/attract/assets/icon4.png");
    }
}
