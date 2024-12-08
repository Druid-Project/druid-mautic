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

/* @bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php */
class __TwigTemplate_f9255aa3e3086dadf5b04a62293fe7b4 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Functional\\Entity;

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class LeadEventLogRepositoryTest extends MauticMysqlTestCase
{
    public function testThatRemoveEventLogsMethodRemovesLogs(): void
    {
        \$eventId    = random_int(200, 2000);
        \$connection = \$this->em->getConnection();

        \$leadEventLogRepository = \$this->em->getRepository(LeadEventLog::class);
        \\assert(\$leadEventLogRepository instanceof LeadEventLogRepository);

        \$insertStatement = \$connection->prepare('INSERT INTO `'.MAUTIC_TABLE_PREFIX.'campaign_lead_event_log` (`event_id`, `lead_id`, `rotation`, `is_scheduled`, `system_triggered`) VALUES (?, ?, ?, ?, ?);');

        \$connection->executeQuery('SET FOREIGN_KEY_CHECKS=0;');
        foreach (\$this->getLeadCampaignEventData(\$eventId) as \$row) {
            \$insertStatement->executeQuery(\$row);
        }
        \$connection->executeQuery('SET FOREIGN_KEY_CHECKS=1;');

        Assert::assertCount(3, \$leadEventLogRepository->findAll());

        \$leadEventLogRepository->removeEventLogs([(string) \$eventId]);

        Assert::assertCount(0, \$leadEventLogRepository->findAll());
    }

    private function getLeadCampaignEventData(int \$eventId): array
    {
        return [
            [\$eventId, 100, 200, 1, 1],
            [\$eventId, 101, 201, 1, 1],
            [\$eventId, 102, 202, 1, 1],
        ];
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
        return "@bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Functional/Entity/LeadEventLogRepositoryTest.php");
    }
}
