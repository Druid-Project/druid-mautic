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

/* @bundles/ApiBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_3cd27017cbf4e0818594b794a2dea658 extends Template
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
        yield "mautic.api.client.error.notfound=\"Client not found with an ID of <strong>%id%</strong>.\"
mautic.api.client.notice.created=\"<a href='%url%' data-toggle='ajax'><strong>%name%</strong></a> has been created.\"
mautic.api.client.notice.revoked=\"API access has been revoked from the application, %name%\"
mautic.api.call.permissionempty=\"At least one permission must be submitted.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ApiBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/ApiBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/ApiBundle/Translations/en_US/flashes.ini");
    }
}
