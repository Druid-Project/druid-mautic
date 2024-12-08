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

/* @bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php */
class __TwigTemplate_cd2972b0b47f053812ff4c78d3ce9a09 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\Sync\\Notification;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Notifier;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncService\\TestExamples\\Integration\\ExampleIntegration;
use Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncService\\TestExamples\\Sync\\SyncDataExchange\\ExampleSyncDataExchange;
use Mautic\\LeadBundle\\DataFixtures\\ORM\\LoadLeadData;
use Mautic\\LeadBundle\\Entity\\Lead;

class NotifierTest extends MauticMysqlTestCase
{
    public function testNotifications(): void
    {
        \$this->installDatabaseFixtures([LoadLeadData::class]);

        \$leadRepository = \$this->em->getRepository(Lead::class);
        /** @var Lead[] \$leads */
        \$leads = \$leadRepository->findBy([], [], 2);

        /** @var SyncIntegrationsHelper \$syncIntegrationsHelper */
        \$syncIntegrationsHelper = static::getContainer()->get('mautic.integrations.helper.sync_integrations');
        \$syncIntegrationsHelper->addIntegration(new ExampleIntegration(new ExampleSyncDataExchange()));

        /** @var Notifier \$notifier */
        \$notifier = static::getContainer()->get('mautic.integrations.sync.notifier');

        \$contactNotification = new NotificationDAO(
            new ObjectChangeDAO(
                ExampleIntegration::NAME,
                'Foo',
                1,
                Contact::NAME,
                (int) \$leads[0]->getId()
            ),
            'This is the message'
        );
        \$companyNotification = new NotificationDAO(
            new ObjectChangeDAO(
                ExampleIntegration::NAME,
                'Bar',
                2,
                MauticSyncDataExchange::OBJECT_COMPANY,
                (int) \$leads[1]->getId()
            ),
            'This is the message'
        );

        \$notifier->noteMauticSyncIssue([\$contactNotification, \$companyNotification]);
        \$notifier->finalizeNotifications();

        // Check audit log
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'audit_log')
            ->where(
                \$qb->expr()->eq('bundle', \$qb->expr()->literal(ExampleIntegration::NAME))
            );

        \$this->assertCount(2, \$qb->executeQuery()->fetchAllAssociative());

        // Contact event log
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'lead_event_log')
            ->where(
                \$qb->expr()->and(
                    \$qb->expr()->eq('bundle', \$qb->expr()->literal('integrations')),
                    \$qb->expr()->eq('object', \$qb->expr()->literal(ExampleIntegration::NAME))
                )
            );
        \$this->assertCount(1, \$qb->executeQuery()->fetchAllAssociative());

        // User notifications
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'notifications')
            ->where(
                \$qb->expr()->eq('icon_class', \$qb->expr()->literal('fa-refresh'))
            );
        \$this->assertCount(2, \$qb->executeQuery()->fetchAllAssociative());
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
        return "@bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php");
    }
}
