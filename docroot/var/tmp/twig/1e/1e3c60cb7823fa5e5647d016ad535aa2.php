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

/* @bundles/ReportBundle/Tests/Controller/Api/data/put.json */
class __TwigTemplate_01f2bfa32360ec493e52b4b8a866f3f4 extends Template
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
  \"name\": \"Brand New Report\",
  \"description\": \"A new report\",
  \"system\": true,
  \"source\": \"email.stats\",
  \"columns\": [
    \"es.date_sent\",
    \"es.date_read\",
    \"e.subject\",
    \"es.email_address\",
    \"e.id\"
  ],
  \"filters\": [],
  \"tableOrder\": [
    {
      \"column\": \"es.date_sent\",
      \"direction\": \"ASC\"
    }
  ],
  \"graphs\": [
    \"mautic.email.graph.line.stats\",
    \"mautic.email.graph.pie.ignored.read.failed\",
    \"mautic.email.table.most.emails.read\",
    \"mautic.email.table.most.emails.sent\",
    \"mautic.email.table.most.emails.read.percent\",
    \"mautic.email.table.most.emails.failed\"
  ],
  \"groupBy\": null,
  \"settings\": [],
  \"isScheduled\": true,
  \"scheduleUnit\": \"DAILY\",
  \"toAddress\": \"test2@mailinator.com\",
  \"scheduleDay\": null,
  \"scheduleMonthFrequency\": null
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ReportBundle/Tests/Controller/Api/data/put.json";
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
        return new Source("", "@bundles/ReportBundle/Tests/Controller/Api/data/put.json", "/app/docroot/app/bundles/ReportBundle/Tests/Controller/Api/data/put.json");
    }
}
