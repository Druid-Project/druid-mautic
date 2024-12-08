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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip */
class __TwigTemplate_a81146ca8d3fb28f8b8afa8aed4b3ca0 extends Template
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
        yield "PK\000\000\000\0007EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/PK\000\000\000\0007EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/CampaignBundle/PK
\000\000\000\000\"EäNÊUµ¨\000\000\000\000\000\000\000\000\000es/CampaignBundle/flashes.initest.string=\"test string\"PK
\000\000\000\000EäN®·9\000\000\000\000\000\000\000\000\000es/CampaignBundle/messages.initest.string=\"Test String\"PK\000\000\000\000*EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/CoreBundle/PK
\000\000\000\000\"EäNÊUµ¨\000\000\000\000\000\000\000\000\000es/CoreBundle/flashes.initest.string=\"test string\"PK
\000\000\000\000EäN®·9\000\000\000\000\000\000\000\000\000es/CoreBundle/messages.initest.string=\"Test String\"PK
\000\000\000\000*EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/CoreBundle/random.txtPK\000\000\000\000ºDäN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/RandomFolder/PK
\000\000\000\000¬DäNî¬·’>\000\000\000>\000\000\000\000\000\000es/config.json{\"name\":\"Spanish\",\"locale\":\"es\",\"author\":\"Mautic Translators\"}PK
\000\000\000\000úDäN¸wJŸ\000\000\000\000\000\000
\000\000\000es/config.php<?php 
// this is a testPK
\000\000\000\000EäNé
½\000\000\000\000\000\000
\000\000\000es/random.txt// Random filePK?\000\000\000\0007EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000€íA\000\000\000\000es/
\000 \000\000\000\000\000\000\000\000Éê8n2Õ\000¢ÆÉx2Õ\000Éê8n2ÕPK?\000\000\000\0007EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000€íA!\000\000\000es/CampaignBundle/
\000 \000\000\000\000\000\000\000\000Éê8n2Õ€šÛAn2Õ\000Éê8n2ÕPK?
\000\000\000\000\"EäNÊUµ¨\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 €¤Q\000\000\000es/CampaignBundle/flashes.ini
\000 \000\000\000\000\000\000\000€In2Õ€šÛAn2Õ\000Éê8n2ÕPK?
\000\000\000\000EäN®·9\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 €¤¥\000\000\000es/CampaignBundle/messages.ini
\000 \000\000\000\000\000\000\000€s\"n2Õ€šÛAn2Õ\000Éê8n2ÕPK?\000\000\000\000*EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000€íAú\000\000\000es/CoreBundle/
\000 \000\000\000\000\000\000\000\000€k)n2Õ€šÛAn2Õ\000€k)n2ÕPK?
\000\000\000\000\"EäNÊUµ¨\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 €¤&\000\000es/CoreBundle/flashes.ini
\000 \000\000\000\000\000\000\000€In2Õ€šÛAn2Õ€In2ÕPK?
\000\000\000\000EäN®·9\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 €¤v\000\000es/CoreBundle/messages.ini
\000 \000\000\000\000\000\000\000€s\"n2Õ€šÛAn2Õ€s\"n2ÕPK?
\000\000\000\000*EäN\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 €¤Ç\000\000es/CoreBundle/random.txt
\000 \000\000\000\000\000\000\000\000€k)n2Õ\000€k)n2Õ€*n2ÕPK?\000\000\000\000ºDäN\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000€íAý\000\000es/RandomFolder/
\000 \000\000\000\000\000\000\000\0008q­m2Õ€šÛAn2Õ\000e¢®m2ÕPK?
\000\000\000\000¬DäNî¬·’>\000\000\000>\000\000\000\000\$\000\000\000\000\000\000\000 €¤+\000\000es/config.json
\000 \000\000\000\000\000\000\000€+(œm2Õ\000¢ÆÉx2Õ€+(œm2ÕPK?
\000\000\000\000úDäN¸wJŸ\000\000\000\000\000\000
\000\$\000\000\000\000\000\000\000 €¤•\000\000es/config.php
\000 \000\000\000\000\000\000\000€-_ôm2Õ€šÛAn2Õ€-_ôm2ÕPK?
\000\000\000\000EäNé
½\000\000\000\000\000\000
\000\$\000\000\000\000\000\000\000 €¤Ø\000\000es/random.txt
\000 \000\000\000\000\000\000\000\000u\000n2Õ€šÛAn2Õ\000u\000n2ÕPK\000\000\000\000\000\000¹\000\000\000\000\000\000";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip");
    }
}
