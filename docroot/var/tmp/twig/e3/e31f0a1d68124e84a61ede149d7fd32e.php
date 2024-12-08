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

/* @bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv */
class __TwigTemplate_1e76c800f429158fd446d8537b6ce084 extends Template
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
        yield "categoryname,categorybundle,categoryalias,published
Segment Test Category 1,segment,segment-test-category-1,1
Segment Test Category 2,segment,segment-test-category-2,1
Form Test Category 1,form,segment-form-category-1,1
Form Test Category 2,form,segment-form-category-2,1
Asset Test Category 1,asset,segment-asset-category-1,1
Asset Test Category 2,asset,segment-asset-category-2,1
Email Test Category 1,email,segment-email-category-1,1
Email Test Category 2,email,segment-email-category-2,1";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv", "/app/docroot/app/bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv");
    }
}
