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

/* @bundles/LeadBundle/Tests/Entity/ContactExportSchedulerTest.php */
class __TwigTemplate_8d33b8f0c82fd6d233d612019b182f4a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\ContactExportScheduler;
use PHPUnit\\Framework\\Assert;

class ContactExportSchedulerTest extends MauticMysqlTestCase
{
    private string \$previousTimeZone;

    protected function setUp(): void
    {
        \$this->previousTimeZone = date_default_timezone_get();
        parent::setUp();
    }

    protected function beforeTearDown(): void
    {
        date_default_timezone_set(\$this->previousTimeZone);
    }

    public function testScheduledDateTimeIsPersistedAndHydratedProperly(): void
    {
        \$timezone = 'Asia/Taipei';
        date_default_timezone_set(\$timezone);

        \$exportScheduler = new ContactExportScheduler();
        \$exportScheduler->setScheduledDateTime(new \\DateTimeImmutable());
        \$this->em->persist(\$exportScheduler);
        \$this->em->flush();

        \$id        = \$exportScheduler->getId();
        \$localDate = \$exportScheduler->getScheduledDateTime()->format(DateTimeHelper::FORMAT_DB);
        \$utcDate   = \$this->convertDateTimezone(\$localDate, \$timezone, 'UTC');
        Assert::assertSame(\$timezone, \$exportScheduler->getScheduledDateTime()->getTimezone()->getName(), sprintf('Timezone should be %s.', \$timezone));
        Assert::assertSame(\$utcDate, \$this->fetchScheduledDate(\$id), 'Database value should be converted to UTC.');

        \$this->em->clear();

        \$timezone = 'America/Cayman';
        date_default_timezone_set(\$timezone);

        \$exportScheduler = \$this->em->find(ContactExportScheduler::class, \$id);
        \$localDate       = \$this->convertDateTimezone(\$this->fetchScheduledDate(\$id), 'UTC', \$timezone);
        Assert::assertSame(\$timezone, \$exportScheduler->getScheduledDateTime()->getTimezone()->getName(), sprintf('Timezone should be %s.', \$timezone));
        Assert::assertSame(\$localDate, \$exportScheduler->getScheduledDateTime()->format(DateTimeHelper::FORMAT_DB), sprintf('PHP value should be converted to %s.', \$timezone));
    }

    private function convertDateTimezone(string \$date, string \$timezoneFrom, string \$timezoneTo): string
    {
        return (new \\DateTimeImmutable(\$date, new \\DateTimeZone(\$timezoneFrom)))
            ->setTimezone(new \\DateTimeZone(\$timezoneTo))
            ->format(DateTimeHelper::FORMAT_DB);
    }

    private function fetchScheduledDate(int \$id): string
    {
        \$tablePrefix   = self::getContainer()->getParameter('mautic.db_table_prefix');
        \$connection    = \$this->em->getConnection();
        \$query         = sprintf('SELECT scheduled_datetime FROM %scontact_export_scheduler WHERE id = :id', \$tablePrefix);

        return \$connection->executeQuery(\$query, ['id' => \$id])
            ->fetchOne();
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
        return "@bundles/LeadBundle/Tests/Entity/ContactExportSchedulerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/ContactExportSchedulerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/ContactExportSchedulerTest.php");
    }
}
