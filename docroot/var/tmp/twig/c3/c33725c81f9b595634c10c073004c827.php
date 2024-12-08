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

/* @bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json */
class __TwigTemplate_140029647e9c94e280683777085f637d extends Template
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
        yield "{
    \"allowlist\": [
        {
            \"package\": \"koco\\/mautic-recaptcha-bundle\",
            \"display_name\": \"KocoCaptcha\",
            \"minimum_mautic_version\": \"4.1.0\",
            \"maximum_mautic_version\": null
        },
        {
            \"package\": \"maatoo\\/mautic-referrals-bundle\",
            \"minimum_mautic_version\": \"4.1.0\",
            \"maximum_mautic_version\": null
        }
    ]
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json", "/app/docroot/app/bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json");
    }
}
