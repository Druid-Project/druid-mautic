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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Internal/MauticSyncProcessTest.php */
class __TwigTemplate_e35ea8fae77086d303f10978bc40cba0 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncProcess\\Direction\\Internal;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\FieldDAO as OrderFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO as ReportFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO as ReportObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO as RequestObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Company;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Internal\\MauticSyncProcess;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Internal\\ObjectChangeGenerator;
use PHPUnit\\Framework\\TestCase;

class MauticSyncProcessTest extends TestCase
{
    private const INTEGRATION_NAME = 'Test';

    /**
     * @var SyncDateHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$syncDateHelper;

    /**
     * @var ObjectChangeGenerator|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$objectChangeGenerator;

    /**
     * @var MauticSyncDataExchange|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$syncDataExchange;

    /**
     * @var InputOptionsDAO
     */
    private \$inputOptionsDAO;

    /**
     * @var MauticSyncProcess
     */
    private \$mauticSyncProcess;

    protected function setUp(): void
    {
        \$this->syncDateHelper        = \$this->createMock(SyncDateHelper::class);
        \$this->objectChangeGenerator = \$this->createMock(ObjectChangeGenerator::class);
        \$this->syncDataExchange      = \$this->createMock(MauticSyncDataExchange::class);
        \$this->inputOptionsDAO       = new InputOptionsDAO(['integration' => self::INTEGRATION_NAME]);
        \$this->mauticSyncProcess     = new MauticSyncProcess(\$this->syncDateHelper, \$this->objectChangeGenerator);
    }

    public function testThatMauticGetSyncReportIsCalledBasedOnRequest(): void
    {
        \$objectName    = 'Contact';
        \$mappingManual = new MappingManualDAO(self::INTEGRATION_NAME);
        \$objectMapping = new ObjectMappingDAO(Contact::NAME, \$objectName);
        \$objectMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$objectMapping->addFieldMapping('firstname', 'first_name');
        \$mappingManual->addObjectMapping(\$objectMapping);

        \$fromSyncDateTime = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->once())
            ->method('getSyncFromDateTime')
            ->with(MauticSyncDataExchange::NAME, Contact::NAME)
            ->willReturn(\$fromSyncDateTime);

        \$toSyncDateTime   = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->once())
            ->method('getSyncToDateTime')
            ->willReturn(\$toSyncDateTime);

        // SyncDateExchangeInterface::getSyncReport should sync because an object was added to the report
        \$this->syncDataExchange->expects(\$this->once())
            ->method('getSyncReport')
            ->willReturnCallback(
                function (RequestDAO \$requestDAO) {
                    \$requestObjects = \$requestDAO->getObjects();
                    \$this->assertCount(1, \$requestObjects);

                    /** @var RequestObjectDAO \$requestObject */
                    \$requestObject = \$requestObjects[0];
                    \$this->assertEquals(['email'], \$requestObject->getRequiredFields());
                    \$this->assertEquals(['email', 'firstname'], \$requestObject->getFields());
                    \$this->assertEquals(Contact::NAME, \$requestObject->getObject());

                    return new ReportDAO(self::INTEGRATION_NAME);
                }
            );

        \$this->createMauticSyncProcess(\$mappingManual)->getSyncReport(1);
    }

    public function testThatMauticGetSyncReportIsNotCalledBasedOnRequest(): void
    {
        \$objectName    = 'Contact';
        \$mappingManual = new MappingManualDAO(self::INTEGRATION_NAME);

        \$this->syncDateHelper->expects(\$this->never())
            ->method('getSyncFromDateTime')
            ->with(self::INTEGRATION_NAME, \$objectName);

        // SyncDateExchangeInterface::getSyncReport should sync because an object was added to the report
        \$this->syncDataExchange->expects(\$this->never())
            ->method('getSyncReport');

        \$report = \$this->createMauticSyncProcess(\$mappingManual)->getSyncReport(1);

        \$this->assertEquals(MauticSyncDataExchange::NAME, \$report->getIntegration());
    }

    public function testOrderIsBuiltBasedOnMapping(): void
    {
        \$objectName    = 'Contact';
        \$mappingManual = new MappingManualDAO(self::INTEGRATION_NAME);
        \$objectMapping = new ObjectMappingDAO(Contact::NAME, \$objectName);
        \$objectMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$objectMapping->addFieldMapping('firstname', 'first_name');
        \$mappingManual->addObjectMapping(\$objectMapping);

        \$toSyncDateTime = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->once())
            ->method('getSyncDateTime')
            ->willReturn(\$toSyncDateTime);

        \$syncReport = new ReportDAO(self::INTEGRATION_NAME);
        \$objectDAO  = new ReportObjectDAO(\$objectName, 2);
        \$objectDAO->addField(new ReportFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com')));
        \$objectDAO->addField(new ReportFieldDAO('first_name', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));
        \$syncReport->addObject(\$objectDAO);

        // Search for an internal object
        \$this->syncDataExchange->expects(\$this->once())
            ->method('getConflictedInternalObject')
            ->with(\$mappingManual, Contact::NAME, \$objectDAO)
            ->willReturn(
                new ReportObjectDAO(Contact::NAME, 1)
            );

        \$objectChangeDAO = new ObjectChangeDAO(MauticSyncDataExchange::NAME, Contact::NAME, 1, \$objectName, 2);
        \$objectChangeDAO->addField(new OrderFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com')));
        \$objectChangeDAO->addField(new OrderFieldDAO('firstname', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));
        \$this->objectChangeGenerator->expects(\$this->once())
            ->method('getSyncObjectChange')
            ->willReturn(\$objectChangeDAO);

        \$syncOrder = \$this->createMauticSyncProcess(\$mappingManual)->getSyncOrder(\$syncReport);

        // The change should have been added to the order as an identified object
        \$this->assertEquals([Contact::NAME => [1 => \$objectChangeDAO]], \$syncOrder->getIdentifiedObjects());
    }

    private function createMauticSyncProcess(MappingManualDAO \$mappingManualDAO): MauticSyncProcess
    {
        \$this->mauticSyncProcess->setupSync(\$this->inputOptionsDAO, \$mappingManualDAO, \$this->syncDataExchange);

        return \$this->mauticSyncProcess;
    }

    public function testThatItDoesntSyncOtherEntityTypesWhenIDsForSomeEntityAreSpecified(): void
    {
        \$mappingManual         = new MappingManualDAO(self::INTEGRATION_NAME);
        \$this->inputOptionsDAO = new InputOptionsDAO([
            'integration'      => self::INTEGRATION_NAME,
            'mautic-object-id' => ['contact:1'],
        ]);

        \$contactMapping = new ObjectMappingDAO(Contact::NAME, 'Contact');
        \$contactMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$mappingManual->addObjectMapping(\$contactMapping);

        \$leadMapping = new ObjectMappingDAO(Contact::NAME, 'Lead');
        \$leadMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$mappingManual->addObjectMapping(\$leadMapping);

        \$companyMapping = new ObjectMappingDAO(Company::NAME, 'Account');
        \$companyMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$mappingManual->addObjectMapping(\$companyMapping);

        \$fromSyncDateTime = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->once())
            ->method('getSyncFromDateTime')
            ->with(MauticSyncDataExchange::NAME, Contact::NAME)
            ->willReturn(\$fromSyncDateTime);

        \$toSyncDateTime   = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->once())
            ->method('getSyncToDateTime')
            ->willReturn(\$toSyncDateTime);

        \$this->syncDataExchange->expects(\$this->once())
            ->method('getSyncReport')
            ->willReturnCallback(
                function (RequestDAO \$requestDAO): ReportDAO {
                    \$requestObjects = \$requestDAO->getObjects();
                    \$this->assertCount(1, \$requestObjects);

                    /** @var ObjectDAO \$requestObject */
                    \$requestObject = \$requestObjects[0];
                    \$this->assertEquals(['email'], \$requestObject->getRequiredFields());
                    \$this->assertEquals(Contact::NAME, \$requestObject->getObject());

                    return new ReportDAO(self::INTEGRATION_NAME);
                }
            );

        \$syncReport = \$this->createMauticSyncProcess(\$mappingManual)->getSyncReport(1);
        \$this->assertEquals(self::INTEGRATION_NAME, \$syncReport->getIntegration());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Internal/MauticSyncProcessTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Internal/MauticSyncProcessTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Internal/MauticSyncProcessTest.php");
    }
}
