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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/PartialObjectReportBuilderTest.php */
class __TwigTemplate_8ce1765c26876d1cff94dec24ce65e89 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange\\Internal\\ReportBuilder;

use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectFindEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Helper\\FieldHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Company as InternalCompany;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\FieldBuilder;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\PartialObjectReportBuilder;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class PartialObjectReportBuilderTest extends TestCase
{
    private const INTEGRATION_NAME = 'Test';

    /**
     * @var FieldChangeRepository|MockObject
     */
    private MockObject \$fieldChangeRepository;

    /**
     * @var FieldHelper|MockObject
     */
    private MockObject \$fieldHelper;

    /**
     * @var EventDispatcherInterface|MockObject
     */
    private MockObject \$dispatcher;

    /**
     * @var FieldBuilder|MockObject
     */
    private MockObject \$fieldBuilder;

    /**
     * @var ObjectProvider|MockObject
     */
    private MockObject \$objectProvider;

    private PartialObjectReportBuilder \$reportBuilder;

    protected function setUp(): void
    {
        \$this->fieldChangeRepository = \$this->createMock(FieldChangeRepository::class);
        \$this->fieldHelper           = \$this->getMockBuilder(FieldHelper::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getFieldChangeObject', 'getFieldObjectName'])
            ->getMock();
        \$this->dispatcher     = \$this->createMock(EventDispatcherInterface::class);
        \$this->fieldBuilder   = \$this->createMock(FieldBuilder::class);
        \$this->objectProvider = \$this->createMock(ObjectProvider::class);
        \$this->reportBuilder  = new PartialObjectReportBuilder(
            \$this->fieldChangeRepository,
            \$this->fieldHelper,
            \$this->fieldBuilder,
            \$this->objectProvider,
            \$this->dispatcher
        );
    }

    public function testTrackedContactChanges(): void
    {
        \$requestDAO    = new RequestDAO(self::INTEGRATION_NAME, 1, new InputOptionsDAO(['integration' => self::INTEGRATION_NAME]));
        \$fromDateTime  = new \\DateTimeImmutable('2018-10-08 00:00:00');
        \$toDateTime    = new \\DateTimeImmutable('2018-10-08 00:01:00');
        \$requestObject = new ObjectDAO(Contact::NAME, \$fromDateTime, \$toDateTime);
        \$requestObject->addField('email');
        \$requestObject->addField('firstname');
        \$requestDAO->addObject(\$requestObject);

        \$this->fieldBuilder->expects(\$this->once())
            ->method('buildObjectField')
            ->with('email', \$this->anything(), \$requestObject, self::INTEGRATION_NAME)
            ->willReturn(
                new FieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com'))
            );

        \$fieldChange = [
            'object_type'  => Lead::class,
            'object_id'    => 1,
            'modified_at'  => '2018-10-08 00:30:00',
            'column_name'  => 'firstname',
            'column_type'  => EncodedValueDAO::STRING_TYPE,
            'column_value' => 'Bob',
        ];

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldChangeObject')
            ->with(\$fieldChange)
            ->willReturn(
                new FieldDAO('firstname', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob'))
            );

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldObjectName')
            ->with(Contact::NAME)
            ->willReturn(Lead::class);

        // Find and return tracked changes
        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('findChangesBefore')
            ->with(
                'Test',
                Lead::class,
                \$toDateTime,
                0
            )
            ->willReturn([\$fieldChange]);

        \$internalObject = new Contact();

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByEntityName')
            ->with(Lead::class)
            ->willReturn(\$internalObject);

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByName')
            ->with(Contact::NAME)
            ->willReturn(\$internalObject);

        // Find the complete object
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (InternalObjectFindEvent \$event) use (\$internalObject) {
                    \$this->assertSame(\$internalObject, \$event->getObject());
                    \$this->assertSame([1], \$event->getIds());

                    // Mock a subscriber:
                    \$event->setFoundObjects([
                        [
                            'id'        => 1,
                            'email'     => 'test@test.com',
                            'firstname' => 'Bob and Cat',
                        ],
                    ]);

                    return true;
                }),
                IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS
            );

        \$report  = \$this->reportBuilder->buildReport(\$requestDAO);
        \$objects = \$report->getObjects(Contact::NAME);

        \$this->assertTrue(isset(\$objects[1]));
        \$this->assertEquals('test@test.com', \$objects[1]->getField('email')->getValue()->getNormalizedValue());
        \$this->assertEquals('Bob', \$objects[1]->getField('firstname')->getValue()->getNormalizedValue());
    }

    public function testTrackedCompanyChanges(): void
    {
        \$requestDAO    = new RequestDAO(self::INTEGRATION_NAME, 1, new InputOptionsDAO(['integration' => self::INTEGRATION_NAME]));
        \$fromDateTime  = new \\DateTimeImmutable('2018-10-08 00:00:00');
        \$toDateTime    = new \\DateTimeImmutable('2018-10-08 00:01:00');
        \$requestObject = new ObjectDAO(MauticSyncDataExchange::OBJECT_COMPANY, \$fromDateTime, \$toDateTime);
        \$requestObject->addField('email');
        \$requestObject->addField('companyname');
        \$requestDAO->addObject(\$requestObject);

        \$this->fieldBuilder->expects(\$this->once())
            ->method('buildObjectField')
            ->with('email', \$this->anything(), \$requestObject, self::INTEGRATION_NAME)
            ->willReturn(
                new FieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com'))
            );

        \$fieldChange = [
            'object_type'  => Company::class,
            'object_id'    => 1,
            'modified_at'  => '2018-10-08 00:30:00',
            'column_name'  => 'firstname',
            'column_type'  => EncodedValueDAO::STRING_TYPE,
            'column_value' => 'Bob',
        ];

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldChangeObject')
            ->with(\$fieldChange)
            ->willReturn(
                new FieldDAO('companyname', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob and Cat'))
            );

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldObjectName')
            ->with(InternalCompany::NAME)
            ->willReturn(Company::class);

        // Find and return tracked changes
        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('findChangesBefore')
            ->with(
                'Test',
                Company::class,
                \$toDateTime,
                0
            )
            ->willReturn([\$fieldChange]);

        \$internalObject = new InternalCompany();

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByEntityName')
            ->with(Company::class)
            ->willReturn(\$internalObject);

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByName')
            ->with(InternalCompany::NAME)
            ->willReturn(\$internalObject);

        // Find the complete object
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (InternalObjectFindEvent \$event) use (\$internalObject) {
                    \$this->assertSame([1], \$event->getIds());
                    \$this->assertSame(\$internalObject, \$event->getObject());

                    // Mock a subscriber:
                    \$event->setFoundObjects([
                        [
                            'id'          => 1,
                            'email'       => 'test@test.com',
                            'companyname' => 'Bob and Cat',
                        ],
                    ]);

                    return true;
                }),
                IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS
            );

        \$report  = \$this->reportBuilder->buildReport(\$requestDAO);
        \$objects = \$report->getObjects(InternalCompany::NAME);

        \$this->assertTrue(isset(\$objects[1]));
        \$this->assertEquals('test@test.com', \$objects[1]->getField('email')->getValue()->getNormalizedValue());
        \$this->assertEquals('Bob and Cat', \$objects[1]->getField('companyname')->getValue()->getNormalizedValue());
    }

    public function testTrackedContactChangesThrowsObjectNotFoundException(): void
    {
        \$requestDAO    = new RequestDAO(self::INTEGRATION_NAME, 1, new InputOptionsDAO(['integration' => self::INTEGRATION_NAME]));
        \$fromDateTime  = new \\DateTimeImmutable('2018-10-08 00:00:00');
        \$toDateTime    = new \\DateTimeImmutable('2018-10-08 00:01:00');
        \$requestObject = new ObjectDAO(Contact::NAME, \$fromDateTime, \$toDateTime);
        \$requestObject->addField('email');
        \$requestObject->addField('firstname');
        \$requestDAO->addObject(\$requestObject);

        \$fieldChange = [
            'object_type'  => Lead::class,
            'object_id'    => 1,
            'modified_at'  => '2018-10-08 00:30:00',
            'column_name'  => 'firstname',
            'column_type'  => EncodedValueDAO::STRING_TYPE,
            'column_value' => 'Bob',
        ];

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldObjectName')
            ->with(Contact::NAME)
            ->willReturn(Lead::class);

        // Find and return tracked changes
        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('findChangesBefore')
            ->with(
                'Test',
                Lead::class,
                \$toDateTime,
                0
            )
            ->willReturn([\$fieldChange]);

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByEntityName')
            ->with(Lead::class)
            ->willThrowException(new ObjectNotFoundException(Contact::NAME));

        \$report  = \$this->reportBuilder->buildReport(\$requestDAO);
        \$objects = \$report->getObjects(Contact::NAME);

        \$this->assertEmpty(\$objects);
    }

    public function testTrackedContactChangesFieldNotFoundException(): void
    {
        \$exception = new FieldNotFoundException('email', 'company');
        \$this->expectExceptionObject(\$exception);

        \$requestDAO    = new RequestDAO(self::INTEGRATION_NAME, 1, new InputOptionsDAO(['integration' => self::INTEGRATION_NAME]));
        \$fromDateTime  = new \\DateTimeImmutable('2018-10-08 00:00:00');
        \$toDateTime    = new \\DateTimeImmutable('2018-10-08 00:01:00');
        \$requestObject = new ObjectDAO(MauticSyncDataExchange::OBJECT_COMPANY, \$fromDateTime, \$toDateTime);
        \$requestObject->addField('email');
        \$requestObject->addField('companyname');
        \$requestDAO->addObject(\$requestObject);

        \$this->fieldBuilder->expects(\$this->once())
            ->method('buildObjectField')
            ->with('email', \$this->anything(), \$requestObject, self::INTEGRATION_NAME)
            ->willThrowException(new FieldNotFoundException('email', \$requestObject->getObject()));

        \$fieldChange = [
            'object_type'  => Company::class,
            'object_id'    => 1,
            'modified_at'  => '2018-10-08 00:30:00',
            'column_name'  => 'firstname',
            'column_type'  => EncodedValueDAO::STRING_TYPE,
            'column_value' => 'Bob',
        ];

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldChangeObject')
            ->with(\$fieldChange)
            ->willReturn(
                new FieldDAO('companyname', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob and Cat'))
            );

        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldObjectName')
            ->with(InternalCompany::NAME)
            ->willReturn(Company::class);

        // Find and return tracked changes
        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('findChangesBefore')
            ->with(
                'Test',
                Company::class,
                \$toDateTime,
                0
            )
            ->willReturn([\$fieldChange]);

        \$internalObject = new InternalCompany();

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByEntityName')
            ->with(Company::class)
            ->willReturn(\$internalObject);

        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByName')
            ->with(InternalCompany::NAME)
            ->willReturn(\$internalObject);

        // Find the complete object
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (InternalObjectFindEvent \$event) use (\$internalObject) {
                    \$this->assertSame([1], \$event->getIds());
                    \$this->assertSame(\$internalObject, \$event->getObject());

                    // Mock a subscriber:
                    \$event->setFoundObjects([
                        [
                            'id'          => 1,
                            'email'       => 'test@test.com',
                            'companyname' => 'Bob and Cat',
                        ],
                    ]);

                    return true;
                }),
                IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS
            );

        \$report  = \$this->reportBuilder->buildReport(\$requestDAO);
        \$objects = \$report->getObjects(InternalCompany::NAME);

        \$this->assertTrue(isset(\$objects[1]));
        // trying to access non-existent object
        \$objects[1]->getField('email');
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/PartialObjectReportBuilderTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/PartialObjectReportBuilderTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/PartialObjectReportBuilderTest.php");
    }
}
