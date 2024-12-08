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

/* @bundles/ReportBundle/Tests/Controller/Api/data/post.json */
class __TwigTemplate_3e97eb6187fc8cd579597e9e2c000b1d extends Template
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
  \"name\": \"New Report\",
  \"description\": \"A new report\",
  \"system\": true,
  \"isScheduled\": false,
  \"source\": \"email.stats\",
  \"columns\": [
    \"es.date_sent\",
    \"es.date_read\",
    \"e.subject\",
    \"es.email_address\",
    \"e.id\"
  ],
  \"filters\": [
    {
      \"column\": \"e.is_published\",
      \"condition\": \"eq\",
      \"value\": \"1\"
    }
  ],
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
  \"scheduleUnit\": null,
  \"toAddress\": null,
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
        return "@bundles/ReportBundle/Tests/Controller/Api/data/post.json";
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
        return new Source("", "@bundles/ReportBundle/Tests/Controller/Api/data/post.json", "/app/docroot/app/bundles/ReportBundle/Tests/Controller/Api/data/post.json");
    }
}
