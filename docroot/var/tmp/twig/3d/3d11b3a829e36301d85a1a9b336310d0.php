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

/* @themes/creative/assets/layout-line.png */
class __TwigTemplate_46b9846b1cf8677dc7aaa6502677f795 extends Template
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
IHDR\000\000\000H\000\000\000H\000\000\000Uí³G\000\000\000sRGB\000®Îé\000\000ÄIDATx^í›ÑJÃ@Egı†1¿èƒØ¾R_D|°-ˆßhª4ÿ°R1™›ØM8}ÍîvçæÜ™İM’Œß \t}†@ ‡B -‰@A¦\000iú…sPµ:l,åk3»Ôşòì½?S¶·ã¾yŠÌ\$\$Pµn÷fvp6m’=vÛæÁ›oT £™UŞ`3»~èvMãÍ9*Pöšãõn×¸ñ»
NWë†@ Ç}E-ÁzÊü%‹!Ğ÷íWî\000• À„)‹±Ãb\"Z‚•ŒÅ°XÿN ²L‘*Á>ÊÈQH1˜APáEÕBøé­,ö”¾R™G ‚;
”¾´”­†BÒ‚ èŒ›UªUÌÈAä rëÊü„\\õ‡Şî ŠQÅ¨bŞq£ÌSæ]Pæ)óšM ‚ È[ô¾«YÍc1,†Å–i17ªÂDò—»
:î(<~wzô¯¿|,àSÌßr÷A]½nŸ³ÙËìœŒùIæ)îzÕŞç»±lõœtøc®ï–Òk·½z‰ÄJÒ‘–ÚÆ8Q\\*‘¸ ‚\"œô· ‚ MÒôûw^áX›RYÖ\000\000\000\000IEND®B`‚";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/creative/assets/layout-line.png";
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
        return new Source("", "@themes/creative/assets/layout-line.png", "/app/docroot/themes/creative/assets/layout-line.png");
    }
}
