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

/* @bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png */
class __TwigTemplate_da6fb45ef40d1f8f3fd31430d9804fe7 extends Template
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
        yield "PNG

\000\000\000
IHDR\000\000\000h\000\000\000J\000\000\000`¦á®\000\000\000ÌPLTEÿÿÿ\000\000\000FFFFFFFFFFFFtttUUUFFF2Ï \000\000\000BtRNS\000\000þð00ð`` ýPpóà óÐü@Ï°õÀûù`¡EúâÝÜÛ!)Øfï©ßDJæ~Í§p\000\000\tIDATx^íÕ×nã0a¡ä¢b[»S6ÉöÞ{½ÿ;­âE°ÂÂÂ¹àÿWú\000b48#ÃQÄ
#U/ÅF&5¼Ãz)vG{©= 8`>ç:¼Dv\"X)8`Bçgãî@ü«ã¼aL`#ý°*UK½fÚ6ë¶ª[½TZv@6e\000~&°öÎÿòf9pôÃÒÍ¢); ÚtòP TWÙÂáZÐm=´í--´ì2mËú@vÖènýÃAW2¥1¥úa]7sêzØ±^zÕ8Vò8
j/%îH/µL§\\'ÈN+LÉôàLÜuüaà7ÿå¯ þRe=:>B§N:¦¼¨TDVE6U~ÎÐ¹¨HºX¤:çAª\\Ý|xððÏã½¨d,(7*ûghzñt#brTìáÐë';Ñ­\$}ö®³kÑ©J¶©
J_èÞ\t½éXW÷wuÊ»÷p]^§²\"AÊÕÇOnè.ãÍÅ¥u¾|ÝîsÚ
Ý·ï?~þú½Uóª¤¥ª¶1óê>H¤oe¡ªÈÇN\"A!8
©\"CA\"BA\"C¡Juþô<¼Ìa+\000\000\000\000IEND®B`";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png");
    }
}
