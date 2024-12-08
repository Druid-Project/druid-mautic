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

/* @themes/attract/assets/icon2.png */
class __TwigTemplate_2cfac687b8c78d9221391f5ac005b328 extends Template
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
IHDR\000\000\000 \000\000\000 \000\000\000szzô\000\000\000sRGB\000®Îé\000\000¶IDATXGíÖ1kA†á'(X)‚ø(†…Á\"•Æ”*IBš\"Xˆ  ˆ¥…†”±´l¬¬lhc%\"ZÍ=0+ã²»w3Ş‹;Í½ìÎœïïœ3;öyLê_Ås¼/\\ÿ{Y)À:fğ7ñ©äo\000.\$Ñ¯¸ƒ{ø¶[Q\000Tšp¿?û‚”<ÁlæÀ‘Lğ
Vğ¬D)ÀS\\LÇqó8‰¾Ä\"^wŒ Šq÷q6ü…pëZ[Ç”DTEX15œÉ@¾ãAê˜Ï¹#M\000·q;¬Ëk )F¤b!¥æXçÛ¶ñ8µ×VH—ùôÃ¸eJ/ş\000n¢€jÄÿM¬âEö¼/@µ¤uş0€|7¯Rn7RaµÕ@SæŠ\000Şrx'jß
lıSM–¶ÔMkÍt9½>‡¨ê%œCÓü>Tä@,ªN»ØØd*¦ËˆâªÆ?¨CüJ:åN¶¸RÏD‘‘‚KgAìü|ê’aÇ~Q
ÔS0L¤ë}‘c€±câ>÷»QŒ)ÄÕ-Æ®>Ç£¯Çøÿöb×­1û|Éöh°¿©d!u1¿\000\000\000\000IEND®B`‚";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon2.png";
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
        return new Source("", "@themes/attract/assets/icon2.png", "/app/docroot/themes/attract/assets/icon2.png");
    }
}
