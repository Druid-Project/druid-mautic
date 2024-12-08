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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/RelationsHelperTest.php */
class __TwigTemplate_fea2307ddfba9a800355516043477e83 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\Helper;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\RelationsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\RelationDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\ReferenceValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\RelationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use PHPUnit\\Framework\\TestCase;

class RelationsHelperTest extends TestCase
{
    /**
     * @var MappingHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$mappingHelper;

    private RelationsHelper \$relationsHelper;

    /**
     * @var ReportDAO|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$syncReport;

    /**
     * @var MappingManualDAO|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$mappingManual;

    protected function setUp(): void
    {
        \$this->mappingHelper   = \$this->createMock(MappingHelper::class);
        \$this->relationsHelper = new RelationsHelper(\$this->mappingHelper);
        \$this->syncReport      = \$this->createMock(ReportDAO::class);
        \$this->mappingManual   = \$this->createMock(MappingManualDAO::class);
    }

    public function testProcessRelationsWithUnsychronisedObjects(): void
    {
        \$integrationObjectId    = 'IntegrationId-123';
        \$integrationRelObjectId = 'IntegrationId-456';
        \$relObjectName          = 'Account';

        \$relationObject = new RelationDAO(
            'Contact',
            'AccountId',
            \$relObjectName,
            \$integrationObjectId,
            \$integrationRelObjectId
        );

        \$relationsObject = new RelationsDAO();
        \$relationsObject->addRelation(\$relationObject);

        \$this->syncReport->expects(\$this->once())
            ->method('getRelations')
            ->willReturn(\$relationsObject);

        \$this->mappingManual->expects(\$this->any())
            ->method('getMappedInternalObjectsNames')
            ->willReturn(['company']);

        \$internalObject = new ObjectDAO('company', null);

        \$this->mappingHelper->expects(\$this->once())
            ->method('findMauticObject')
            ->willReturn(\$internalObject);

        \$this->relationsHelper->processRelations(\$this->mappingManual, \$this->syncReport);

        \$objectsToSynchronize = \$this->relationsHelper->getObjectsToSynchronize();

        \$this->assertCount(1, \$objectsToSynchronize);

        \$this->assertEquals(\$objectsToSynchronize[0]->getObjectId(), \$integrationRelObjectId);
        \$this->assertEquals(\$objectsToSynchronize[0]->getObject(), \$relObjectName);
    }

    public function testProcessRelationsWithSychronisedObjects(): void
    {
        \$integrationObjectId    = 'IntegrationId-123';
        \$integrationRelObjectId = 'IntegrationId-456';
        \$internalRelObjectId    = 13;
        \$relObjectName          = 'Account';
        \$relFieldName           = 'AccountId';

        \$referenceVlaue  = new ReferenceValueDAO();
        \$normalizedValue = new NormalizedValueDAO(NormalizedValueDAO::REFERENCE_TYPE, \$integrationRelObjectId, \$referenceVlaue);

        \$fieldDao  = new FieldDAO('AccountId', \$normalizedValue);
        \$objectDao = new ObjectDAO('Contact', 1);
        \$objectDao->addField(\$fieldDao);

        \$relationObject = new RelationDAO(
            'Contact',
            \$relFieldName,
            \$relObjectName,
            \$integrationObjectId,
            \$integrationRelObjectId
        );

        \$relationsObject = new RelationsDAO();
        \$relationsObject->addRelation(\$relationObject);

        \$this->syncReport->expects(\$this->once())
            ->method('getRelations')
            ->willReturn(\$relationsObject);

        \$this->syncReport->expects(\$this->once())
            ->method('getObject')
            ->willReturn(\$objectDao);

        \$this->mappingManual->expects(\$this->any())
            ->method('getMappedInternalObjectsNames')
            ->willReturn(['company']);

        \$internalObject = new ObjectDAO(MauticSyncDataExchange::OBJECT_COMPANY, \$internalRelObjectId);

        \$this->mappingHelper->expects(\$this->once())
            ->method('findMauticObject')
            ->willReturn(\$internalObject);

        \$this->relationsHelper->processRelations(\$this->mappingManual, \$this->syncReport);

        \$objectsToSynchronize = \$this->relationsHelper->getObjectsToSynchronize();

        \$this->assertCount(0, \$objectsToSynchronize);
        \$this->assertEquals(\$internalRelObjectId, \$objectDao->getField(\$relFieldName)->getValue()->getNormalizedValue()->getValue());
        \$this->assertEquals(MauticSyncDataExchange::OBJECT_COMPANY, \$objectDao->getField(\$relFieldName)->getValue()->getNormalizedValue()->getType());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/RelationsHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/RelationsHelperTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/Helper/RelationsHelperTest.php");
    }
}
