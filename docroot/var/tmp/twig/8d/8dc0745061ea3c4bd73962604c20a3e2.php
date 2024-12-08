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

/* @bundles/CoreBundle/Tests/Functional/Helper/Chart/ChartQueryTest.php */
class __TwigTemplate_75fa23bc74e9c205f181be2c85e4398c extends Template
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
        yield "<?php

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Functional\\Helper\\Chart;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\Stat\\ChartQuery\\SegmentContactsLineChartQuery;

class ChartQueryTest extends MauticMysqlTestCase
{
    public function testSegmentContactsLineChartQuery(): void
    {
        \$lead = new Lead();
        \$lead->setEmail('test@test.com');

        // Create a segment
        \$segment = new LeadList();
        \$segment->setName('Test Segment A');
        \$segment->setPublicName('Test Segment A');
        \$segment->setAlias('test-segment-a');

        \$leadEventLogs = new LeadEventLog();
        \$leadEventLogs->setLead(\$lead);
        \$leadEventLogs->setBundle('lead');
        \$leadEventLogs->setObject('segment');
        \$leadEventLogs->setAction('added');
        \$leadEventLogs->setObjectId(\$segment->getId());
        \$leadEventLogs->setDateAdded(new \\DateTime('2023-01-31 23:49:59'));

        \$leadEventLogs = new LeadEventLog();
        \$leadEventLogs->setLead(\$lead);
        \$leadEventLogs->setBundle('lead');
        \$leadEventLogs->setObject('segment');
        \$leadEventLogs->setAction('added');
        \$leadEventLogs->setObjectId(\$segment->getId());
        \$leadEventLogs->setDateAdded(new \\DateTime('2023-01-30 23:49:59'));

        \$this->em->persist(\$lead);
        \$this->em->persist(\$segment);
        \$this->em->persist(\$leadEventLogs);

        \$this->em->flush();

        \$dateFrom = new \\DateTime('2023-01-27');
        \$dateTo   = new \\DateTime('2023-01-30');

        \$filter = '{\"leadlist_id\":{\"value\":\"'.\$segment->getId().'\",\"list_column_name\":\"t.lead_id\"},\"t.leadlist_id\":\"'.\$segment->getId().'\"}';
        \$query  = new SegmentContactsLineChartQuery(\$this->em->getConnection(), \$dateFrom, \$dateTo, json_decode(\$filter, true));

        // assume UTC 2023-01-30 23:49:59 is 2023-01-31 00:49:59 in UTC+1, then do not add it to graph
        \$this->assertEmpty(array_filter(\$query->getAddedEventLogStats()));
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Functional/Helper/Chart/ChartQueryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Helper/Chart/ChartQueryTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Helper/Chart/ChartQueryTest.php");
    }
}
