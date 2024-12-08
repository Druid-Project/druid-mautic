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

/* @bundles/IntegrationsBundle/Tests/Unit/Helper/FieldFilterHelperTest.php */
class __TwigTemplate_b5ace86ef961fdd96f7730a01a7473a6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Helper;

use Mautic\\IntegrationsBundle\\Helper\\FieldFilterHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;
use PHPUnit\\Framework\\TestCase;

class FieldFilterHelperTest extends TestCase
{
    public function testFieldsFilteredByPage(): void
    {
        \$integrationObject = \$this->getIntegrationObject();
        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);

        \$fieldFilterHelper->filterFieldsByPage('test', 2, 3);
        \$this->assertEquals(5, \$fieldFilterHelper->getTotalFieldCount());
        \$filteredFields = \$fieldFilterHelper->getFilteredFields();

        \$this->assertFalse(isset(\$filteredFields['field1']));
        \$this->assertFalse(isset(\$filteredFields['field2']));
        \$this->assertFalse(isset(\$filteredFields['field3']));
        \$this->assertTrue(isset(\$filteredFields['field4']));
        \$this->assertTrue(isset(\$filteredFields['field5']));
    }

    public function testFieldsFilteredByKeyword(): void
    {
        \$integrationObject = \$this->getIntegrationObject();
        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);

        \$fieldFilterHelper->filterFieldsByKeyword('test', 'three', 1);
        \$this->assertEquals(1, \$fieldFilterHelper->getTotalFieldCount());
        \$filteredFields = \$fieldFilterHelper->getFilteredFields();

        \$this->assertFalse(isset(\$filteredFields['field1']));
        \$this->assertFalse(isset(\$filteredFields['field2']));
        \$this->assertTrue(isset(\$filteredFields['field3']));
        \$this->assertFalse(isset(\$filteredFields['field4']));
        \$this->assertFalse(isset(\$filteredFields['field5']));
    }

    public function testFieldsFilteredByKeywordAndPage(): void
    {
        \$integrationObject = \$this->getIntegrationObject();
        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);

        \$fieldFilterHelper->filterFieldsByKeyword('test', 'field', 2, 3);
        \$this->assertEquals(5, \$fieldFilterHelper->getTotalFieldCount());
        \$filteredFields = \$fieldFilterHelper->getFilteredFields();

        \$this->assertFalse(isset(\$filteredFields['field1']));
        \$this->assertFalse(isset(\$filteredFields['field2']));
        \$this->assertFalse(isset(\$filteredFields['field3']));
        \$this->assertTrue(isset(\$filteredFields['field4']));
        \$this->assertTrue(isset(\$filteredFields['field5']));
    }

    /**
     * @return \\PHPUnit\\Framework\\MockObject\\MockObject|ConfigFormSyncInterface
     */
    private function getIntegrationObject()
    {
        \$field1 = \$this->createMock(MappedFieldInfoInterface::class);
        \$field1->method('getLabel')
            ->willReturn('field one');
        \$field2 = \$this->createMock(MappedFieldInfoInterface::class);
        \$field2->method('getLabel')
            ->willReturn('field two');
        \$field3 = \$this->createMock(MappedFieldInfoInterface::class);
        \$field3->method('getLabel')
            ->willReturn('field three');
        \$field4 = \$this->createMock(MappedFieldInfoInterface::class);
        \$field4->method('getLabel')
            ->willReturn('field four');
        \$field5 = \$this->createMock(MappedFieldInfoInterface::class);
        \$field5->method('getLabel')
            ->willReturn('field five');

        \$integrationObject = \$this->createMock(ConfigFormSyncInterface::class);
        \$integrationObject->method('getAllFieldsForMapping')
            ->willReturn(
                [
                    'field1' => \$field1,
                    'field2' => \$field2,
                    'field3' => \$field3,
                    'field4' => \$field4,
                    'field5' => \$field5,
                ]
            );

        return \$integrationObject;
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Helper/FieldFilterHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Helper/FieldFilterHelperTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Helper/FieldFilterHelperTest.php");
    }
}
