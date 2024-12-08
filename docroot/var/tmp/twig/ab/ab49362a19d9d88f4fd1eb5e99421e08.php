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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/IntegrationSyncProcessTest.php */
class __TwigTemplate_de0b46dca5dd052c21ccb5b6a526f0d2 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncProcess\\Direction\\Integration;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\FieldDAO as OrderFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO as ReportFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO as ReportObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO as RequestObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Company;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\SyncDataExchangeInterface;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Integration\\IntegrationSyncProcess;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Integration\\ObjectChangeGenerator;
use PHPUnit\\Framework\\TestCase;

class IntegrationSyncProcessTest extends TestCase
{
    private const INTEGRATION_NAME = 'Test';

    /**
     * @var SyncDateHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$syncDateHelper;

    /**
     * @var MappingHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$mappingHelper;

    /**
     * @var ObjectChangeGenerator|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$objectChangeGenerator;

    /**
     * @var SyncDataExchangeInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$syncDataExchange;

    /**
     * @var InputOptionsDAO
     */
    private \$inputOptionsDAO;

    /**
     * @var IntegrationSyncProcess
     */
    private \$integrationSyncProcess;

    protected function setUp(): void
    {
        \$this->syncDateHelper         = \$this->createMock(SyncDateHelper::class);
        \$this->mappingHelper          = \$this->createMock(MappingHelper::class);
        \$this->objectChangeGenerator  = \$this->createMock(ObjectChangeGenerator::class);
        \$this->syncDataExchange       = \$this->createMock(SyncDataExchangeInterface::class);
        \$this->inputOptionsDAO        = new InputOptionsDAO(['integration' => self::INTEGRATION_NAME]);
        \$this->integrationSyncProcess = new IntegrationSyncProcess(\$this->syncDateHelper, \$this->mappingHelper, \$this->objectChangeGenerator);
    }

    public function testThatIntegrationGetSyncReportIsCalledBasedOnRequest(): void
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
            ->with(self::INTEGRATION_NAME, \$objectName)
            ->willReturn(\$fromSyncDateTime);

        \$toSyncDateTime   = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->once())
            ->method('getSyncToDateTime')
            ->willReturn(\$toSyncDateTime);

        // SyncDateExchangeInterface::getSyncReport should sync because an object was added to the report
        \$this->syncDataExchange->expects(\$this->once())
            ->method('getSyncReport')
            ->willReturnCallback(
                function (RequestDAO \$requestDAO) use (\$objectName) {
                    \$requestObjects = \$requestDAO->getObjects();
                    \$this->assertCount(1, \$requestObjects);

                    /** @var RequestObjectDAO \$requestObject */
                    \$requestObject = \$requestObjects[0];
                    \$this->assertEquals(['email'], \$requestObject->getRequiredFields());
                    \$this->assertEquals(['email', 'first_name'], \$requestObject->getFields());
                    \$this->assertEquals(\$objectName, \$requestObject->getObject());

                    return new ReportDAO(self::INTEGRATION_NAME);
                }
            );

        \$this->getSyncProcess(\$mappingManual)->getSyncReport(1);
    }

    public function testThatIntegrationGetSyncReportIsNotCalledBasedOnRequest(): void
    {
        \$objectName    = 'Contact';
        \$mappingManual = new MappingManualDAO(self::INTEGRATION_NAME);

        \$this->syncDateHelper->expects(\$this->never())
            ->method('getSyncFromDateTime')
            ->with(self::INTEGRATION_NAME, \$objectName);

        // SyncDateExchangeInterface::getSyncReport should sync because an object was added to the report
        \$this->syncDataExchange->expects(\$this->never())
            ->method('getSyncReport');

        \$report = \$this->getSyncProcess(\$mappingManual)->getSyncReport(1);

        \$this->assertEquals(self::INTEGRATION_NAME, \$report->getIntegration());
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

        \$syncReport = new ReportDAO(MauticSyncDataExchange::NAME);
        \$objectDAO  = new ReportObjectDAO(Contact::NAME, 1);
        \$objectDAO->addField(new ReportFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com')));
        \$objectDAO->addField(new ReportFieldDAO('firstname', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));
        \$syncReport->addObject(\$objectDAO);

        // It should search for an integration object mapped to an internal object
        \$this->mappingHelper->expects(\$this->once())
            ->method('findIntegrationObject')
            ->with(self::INTEGRATION_NAME, \$objectName, \$objectDAO)
            ->willReturn(
                new ReportObjectDAO(\$objectName, 2)
            );

        \$objectChangeDAO = new ObjectChangeDAO(self::INTEGRATION_NAME, \$objectName, 2, Contact::NAME, 1);
        \$objectChangeDAO->addField(new OrderFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com')));
        \$objectChangeDAO->addField(new OrderFieldDAO('first_name', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));
        \$this->objectChangeGenerator->expects(\$this->once())
            ->method('getSyncObjectChange')
            ->willReturn(\$objectChangeDAO);

        \$syncOrder = \$this->getSyncProcess(\$mappingManual)->getSyncOrder(\$syncReport);

        // The change should have been added to the order as an identified object
        \$this->assertEquals([\$objectName => [2 => \$objectChangeDAO]], \$syncOrder->getIdentifiedObjects());
    }

    private function getSyncProcess(MappingManualDAO \$mappingManualDAO): IntegrationSyncProcess
    {
        \$this->integrationSyncProcess->setupSync(\$this->inputOptionsDAO, \$mappingManualDAO, \$this->syncDataExchange);

        return \$this->integrationSyncProcess;
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
        \$this->syncDateHelper->expects(\$this->exactly(2))
            ->method('getSyncFromDateTime')
            ->withConsecutive([self::INTEGRATION_NAME, 'Contact'], [self::INTEGRATION_NAME, 'Lead'])
            ->willReturn(\$fromSyncDateTime);

        \$toSyncDateTime   = new \\DateTimeImmutable();
        \$this->syncDateHelper->expects(\$this->exactly(2))
            ->method('getSyncToDateTime')
            ->willReturn(\$toSyncDateTime);

        // SyncDateExchangeInterface::getSyncReport should sync because an object was added to the report
        \$this->syncDataExchange->expects(\$this->once())
            ->method('getSyncReport')
            ->willReturnCallback(
                function (RequestDAO \$requestDAO): ReportDAO {
                    \$requestObjects = \$requestDAO->getObjects();
                    \$this->assertCount(2, \$requestObjects);

                    /** @var RequestObjectDAO \$requestObject */
                    \$requestObject = \$requestObjects[0];
                    \$this->assertEquals(['email'], \$requestObject->getRequiredFields());
                    \$this->assertEquals(['email'], \$requestObject->getFields());
                    \$this->assertEquals('Contact', \$requestObject->getObject());

                    return new ReportDAO(self::INTEGRATION_NAME);
                }
            );

        \$syncReport = \$this->getSyncProcess(\$mappingManual)->getSyncReport(1);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/IntegrationSyncProcessTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/IntegrationSyncProcessTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/IntegrationSyncProcessTest.php");
    }
}
