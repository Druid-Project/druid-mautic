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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderResultsDAOTest.php */
class __TwigTemplate_1829c0739ae5ea8af9df4c465b529ba6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO\\Sync\\Order;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\RemappedObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderResultsDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class OrderResultsDAOTest extends TestCase
{
    public function testObjectsOrganizedByObjectName(): void
    {
        \$newObjectMapping1 = new ObjectMapping();
        \$newObjectMapping1->setIntegrationObjectName('foo');
        \$newObjectMapping1->setIntegrationObjectId('abc');
        \$newObjectMapping2 = new ObjectMapping();
        \$newObjectMapping2->setIntegrationObjectName('bar');
        \$newObjectMapping2->setIntegrationObjectId('efg');
        \$newObjectMappings = [\$newObjectMapping1, \$newObjectMapping2];

        \$updatedObjectMapping1 = new ObjectMapping();
        \$updatedObjectMapping1->setIntegrationObjectName('foo');
        \$updatedObjectMapping1->setIntegrationObjectId('hij');
        \$updatedObjectMapping2 = new ObjectMapping();
        \$updatedObjectMapping2->setIntegrationObjectName('bar');
        \$updatedObjectMapping1->setIntegrationObjectId('klm');
        \$updatedObjectMappings = [\$updatedObjectMapping1, \$updatedObjectMapping2];

        \$remappedObjects = [
            new RemappedObjectDAO('foobar', 'oldfoo', 'oldfoo1', 'foo', 'foo1'),
            new RemappedObjectDAO('foobar', 'oldbar', 'oldbar1', 'bar', 'bar1'),
        ];

        \$deletedObjects = [
            new ObjectChangeDAO('foobar', 'foo', 'foo1', 'contact', 1),
            new ObjectChangeDAO('foobar', 'bar', 'bar1', 'company', 1),
        ];

        \$orderResults = new OrderResultsDAO(\$newObjectMappings, \$updatedObjectMappings, \$remappedObjects, \$deletedObjects);

        \$fooNewObjectMappings = \$orderResults->getNewObjectMappings('foo');
        Assert::assertCount(1, \$fooNewObjectMappings);
        Assert::assertEquals('abc', \$fooNewObjectMappings[0]->getIntegrationObjectId());

        \$barNewObjectMappings = \$orderResults->getNewObjectMappings('bar');
        Assert::assertCount(1, \$barNewObjectMappings);
        Assert::assertEquals('efg', \$barNewObjectMappings[0]->getIntegrationObjectId());

        \$fooRemappedObjects = \$orderResults->getRemappedObjects('foo');
        Assert::assertCount(1, \$fooRemappedObjects);
        Assert::assertEquals('foo1', \$fooRemappedObjects[0]->getNewObjectId());

        \$barRemappedObjects = \$orderResults->getRemappedObjects('bar');
        Assert::assertCount(1, \$barRemappedObjects);
        Assert::assertEquals('bar1', \$barRemappedObjects[0]->getNewObjectId());

        \$fooDeletedObjects = \$orderResults->getDeletedObjects('foo');
        Assert::assertCount(1, \$fooDeletedObjects);
        Assert::assertEquals('foo1', \$fooDeletedObjects[0]->getObjectId());

        \$barDeletedObjects = \$orderResults->getDeletedObjects('bar');
        Assert::assertCount(1, \$barDeletedObjects);
        Assert::assertEquals('bar1', \$barDeletedObjects[0]->getObjectId());
    }

    public function testExceptionThrownIfObjectNotFoundForNewObjectMappings(): void
    {
        \$this->expectException(ObjectNotFoundException::class);

        \$orderResults = new OrderResultsDAO([], [], [], []);
        \$orderResults->getNewObjectMappings('foo');
    }

    public function testExceptionThrownIfObjectNotFoundForUpdatedObjectMappings(): void
    {
        \$this->expectException(ObjectNotFoundException::class);

        \$orderResults = new OrderResultsDAO([], [], [], []);
        \$orderResults->getUpdatedObjectMappings('foo');
    }

    public function testExceptionThrownIfObjectNotFoundForRemappedObjects(): void
    {
        \$this->expectException(ObjectNotFoundException::class);

        \$orderResults = new OrderResultsDAO([], [], [], []);
        \$orderResults->getRemappedObjects('foo');
    }

    public function testExceptionThrownIfObjectNotFoundForDeletedObjects(): void
    {
        \$this->expectException(ObjectNotFoundException::class);

        \$orderResults = new OrderResultsDAO([], [], [], []);
        \$orderResults->getDeletedObjects('foo');
    }

    public function testGetObjectMappingsReturnsMergedNewAndUpdated(): void
    {
        \$newObjectMapping = new ObjectMapping();
        \$newObjectMapping->setIntegrationObjectName('foo');
        \$newObjectMapping->setIntegrationObjectId('abc');

        \$updatedObjectMapping = new ObjectMapping();
        \$updatedObjectMapping->setIntegrationObjectName('foo');
        \$updatedObjectMapping->setIntegrationObjectId('hij');

        \$orderResults = new OrderResultsDAO([\$newObjectMapping], [\$updatedObjectMapping], [], []);

        \$objectMappings = \$orderResults->getObjectMappings('foo');
        Assert::assertCount(2, \$objectMappings);
        Assert::assertEquals('abc', \$objectMappings[0]->getIntegrationObjectId());
        Assert::assertEquals('hij', \$objectMappings[1]->getIntegrationObjectId());

        \$objectMappings = \$orderResults->getObjectMappings('bar');
        Assert::assertEmpty(\$objectMappings);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderResultsDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderResultsDAOTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderResultsDAOTest.php");
    }
}
