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

/* @bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php */
class __TwigTemplate_2443c9f718bed9a06e5cd1a6e484b638 extends Template
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

namespace Mautic\\ApiBundle\\Tests\\Helper;

use Mautic\\ApiBundle\\Helper\\BatchIdToEntityHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class BatchIdToEntityHelperTest extends TestCase
{
    public function testIdsAreExtractedFromIdKeyArray(): void
    {
        \$parameters = ['ids' => [1, 2, 3]];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());

        \$parameters = ['ids' => [1 => 1, 2 => 2, 3 => 3]];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testIdsAreExtractedFromIdKeyCSVString(): void
    {
        \$parameters = ['ids' => '1,2,3'];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testIdIsExtractedFromIdKeyWithNumericValue(): void
    {
        \$parameters = ['ids' => '12'];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([12], \$helper->getIds());
    }

    public function testErrorSetForIdKeyThatsNotRecognized(): void
    {
        \$parameters = ['ids' => 'foo'];

        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([], \$helper->getIds());
        \$this->assertTrue(\$helper->hasErrors());
        \$this->assertEquals(['mautic.api.call.id_missing'], \$helper->getErrors());
    }

    public function testIdsAreExtractedFromSimpleArray(): void
    {
        \$parameters = [1, 2, 3];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());

        \$parameters = [1 => 1, 2 => 2, 3 => 3];
        \$helper     = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testIdsAreExtractedFromAssociativeArray(): void
    {
        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['id' => 2, 'foo' => 'bar'],
            ['id' => 3, 'foo' => 'bar'],
        ];
        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());

        \$parameters = [
            1 => ['id' => 1, 'foo' => 'bar'],
            2 => ['id' => 2, 'foo' => 'bar'],
            3 => ['id' => 3, 'foo' => 'bar'],
        ];
        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 2, 3], \$helper->getIds());
    }

    public function testErrorsSetForAssociativeArrayWhenIdKeyIsNotFound(): void
    {
        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['foo' => 'bar'],
            ['id'  => 3, 'foo' => 'bar'],
        ];
        \$helper = new BatchIdToEntityHelper(\$parameters);
        \$this->assertEquals([1, 3], \$helper->getIds());

        \$this->assertTrue(\$helper->hasErrors());
        \$this->assertEquals([1 => 'mautic.api.call.id_missing'], \$helper->getErrors());
    }

    public function testOriginalKeyOrderingForIdKeyArray(): void
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->once())
            ->method('getId')
            ->willReturn(2);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->once())
            ->method('getId')
            ->willReturn(4);
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters      = ['ids' => [1, 2, 3, 4]];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));

        \$parameters      = ['ids' => [1 => 1, 2 => 2, 3 => 3, 4 => 4]];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 4], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForIdKeyCSVString(): void
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->never())
            ->method('getId');
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->never())
            ->method('getId');
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->never())
            ->method('getId');
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters      = ['ids' => '1,2,3,4'];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForSimpleArray(): void
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->once())
            ->method('getId')
            ->willReturn(2);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->once())
            ->method('getId')
            ->willReturn(4);
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters      = [1, 2, 3, 4];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));

        \$parameters      = [1 => 1, 2 => 2, 3 => 3, 4 => 4];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 4], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForAssociativeArray(): void
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2->expects(\$this->once())
            ->method('getId')
            ->willReturn(2);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4->expects(\$this->once())
            ->method('getId')
            ->willReturn(4);
        // Simulating ID 3 as not found
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1];

        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['id' => 2, 'foo' => 'bar'],
            ['id' => 3, 'foo' => 'bar'],
            ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2], array_keys(\$orderedEntities));

        \$parameters = [
            1 => ['id' => 1, 'foo' => 'bar'],
            2 => ['id' => 2, 'foo' => 'bar'],
            3 => ['id' => 3, 'foo' => 'bar'],
            4 => ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 4], array_keys(\$orderedEntities));
    }

    public function testOriginalKeyOrderingForFullAssociativeArray(): void
    {
        \$entityMock1 = \$this->createMock(Lead::class);
        \$entityMock1
            ->method('getId')
            ->willReturn(1);
        \$entityMock2 = \$this->createMock(Lead::class);
        \$entityMock2
            ->method('getId')
            ->willReturn(2);
        \$entityMock3 = \$this->createMock(Lead::class);
        \$entityMock3
            ->method('getId')
            ->willReturn(3);
        \$entityMock4 = \$this->createMock(Lead::class);
        \$entityMock4
            ->method('getId')
            ->willReturn(4);
        \$entities = [\$entityMock4, \$entityMock2, \$entityMock1, \$entityMock3];

        \$parameters = [
            ['id' => 1, 'foo' => 'bar'],
            ['id' => 2, 'foo' => 'bar'],
            ['id' => 3, 'foo' => 'bar'],
            ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([0, 1, 2, 3], array_keys(\$orderedEntities));
        foreach (\$parameters as \$key => \$contact) {
            Assert::assertEquals(\$orderedEntities[\$key]->getId(), \$entities[\$key]->getId());
        }

        \$parameters = [
            1 => ['id' => 1, 'foo' => 'bar'],
            2 => ['id' => 2, 'foo' => 'bar'],
            3 => ['id' => 3, 'foo' => 'bar'],
            4 => ['id' => 4, 'foo' => 'bar'],
        ];
        \$helper          = new BatchIdToEntityHelper(\$parameters);
        \$orderedEntities = \$helper->orderByOriginalKey(\$entities);
        \$this->assertEquals([1, 2, 3, 4], array_keys(\$orderedEntities));
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
        return "@bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php", "/app/docroot/app/bundles/ApiBundle/Tests/Helper/BatchIdToEntityHelperTest.php");
    }
}
