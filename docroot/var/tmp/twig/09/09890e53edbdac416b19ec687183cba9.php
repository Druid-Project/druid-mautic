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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip */
class __TwigTemplate_c68ec4a6bd1052c6a5f70a94af5c5f24 extends Template
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
        yield "PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000update/UT\t\000ÆGŠ^ÈGŠ^ux\000õ\000\000\000\000\000PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000update/test.txtUT\t\000ÆGŠ^ÆGŠ^ux\000õ\000\000\000\000\000PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000íA\000\000\000\000update/UT\000ÆGŠ^ux\000õ\000\000\000\000\000PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000¤A\000\000\000update/test.txtUT\000ÆGŠ^ux\000õ\000\000\000\000\000PK\000\000\000\000\000\000¢\000\000\000Š\000\000\000\000\000";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip");
    }
}
