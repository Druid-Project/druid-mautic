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

/* @bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv */
class __TwigTemplate_4a2977cf68ff328544e1c86c9d69ff2c extends Template
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
        yield "name,publicname,alias,category
Lead List 1 - Segment Category 1,Lead List 1,lead-list-1,1
Lead List 2 - Segment Category 2,Lead List 2,lead-list-2,2
Lead List 3 - Segment Category 2,Lead List 3,lead-list-3,2
Lead List 4 - Segment Category 1,Lead List 4,lead-list-4,1
Lead List 5 - Segment Category 1,Lead List 5,lead-list-5,1
Lead List 6 - Segment Category 1,Lead List 6,lead-list-6,1
Lead List 7 - Segment No Category ,Lead List 6,lead-list-6,";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv", "/app/docroot/app/bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv");
    }
}
