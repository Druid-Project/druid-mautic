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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/update/update.zip */
class __TwigTemplate_e382c3923e5e90677816f988c6f24b8d extends Template
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
        yield "PK\000\000\000\000\0008hVP\000\000\000\000\000\000\000\000\000\000\000\000\000 \000app/UT
\000zQ^zQ^zQ^ux\000õ\000\000\000\000\000PK\000\000\0008hVP\000\000\000\000\000\000\000\000¸\000\000\000\000 \000app/metadata.jsonUT
\000zQ^zQ^zQ^ux\000õ\000\000\000\000\000«æRPP*K-*ÎÌÏS²RP24Ğ3Ğ3TÒ\t—\$&eæd–T‚\$@œœTˆDnf^fnin|AFA<’^S=3=KK¨’Ä
lJÌõŒJ ¦ä&––d&#«2ºÁ\000¢(1//¿4/9575¯\$¾´(\$­ÄUË\000PKxür\000\000\000¸\000\000\000PK\000\000\0008hVP\000\000\000\000\000\000\000\000Ú\000\000\000 \000__MACOSX/app/._metadata.jsonUT
\000zQ^zQ^­zQ^ux\000õ\000\000\000\000\000c`cg`b`ğMLVğVˆP€'100®\000Ò@>ã-d À€8†„AX Œ@Æ\"4%,Pq~ñäü\\½Ä‚‚œT½ÔŠ×¼äü”Ì¼tˆ~wˆ=R59‰Å%¥Å©))‰%©ÊÁP{Â„ƒ
B]njI\"PM¢U|¶¯‹gIjnhqjQHbz1X}#ˆd`0Ç¢¨Ü'1)5'>·¬¢Ä\$·85)±²,Û¤*·,Ï8·8)Ñ\$%¨¹´\$M×ÂÚĞØÄÈĞÜÒÂdnU`Èà.“|aT“Y\\b`°€ê@F¨Ça4p~Zæ_©zéç\$ï½ÚŠG—„Nú¾éÏöò×ª™§D¯¤‰Î}»şæ¦Ş‘7‹ÓÜµ³¬×N»öè¨Õ½3³äÕtŸß}öçƒ@‘cá±S™?f˜\\~òı²ÈÃ_¶‹®G%&\000PKí2yBM\000\000Ú\000\000PK\000\000\000\000\0008hVP\000\000\000\000\000\000\000\000\000\000\000\000\000 \000\000\000\000\000\000\000\000\000íA\000\000\000\000app/UT
\000zQ^zQ^zQ^ux\000õ\000\000\000\000\000PK\000\000\0008hVPxür\000\000\000¸\000\000\000\000 \000\000\000\000\000\000\000\000\000¤B\000\000\000app/metadata.jsonUT
\000zQ^zQ^zQ^ux\000õ\000\000\000\000\000PK\000\000\0008hVPí2yBM\000\000Ú\000\000\000 \000\000\000\000\000\000\000\000\000¤\000\000__MACOSX/app/._metadata.jsonUT
\000zQ^zQ^­zQ^ux\000õ\000\000\000\000\000PK\000\000\000\000\000\000\000\000Ê\000\000\000\000";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/update/update.zip";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/update/update.zip", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/update/update.zip");
    }
}
