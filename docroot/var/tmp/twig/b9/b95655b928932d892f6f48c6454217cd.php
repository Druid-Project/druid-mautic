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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/ClassMetadataBuilderTest.php */
class __TwigTemplate_cd6fbc03d7c0e961c5595b656501c9e2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\Mapping;

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use PHPUnit\\Framework\\MockObject\\MockObject;

class ClassMetadataBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|ClassMetadataInfo
     */
    private MockObject \$classMetadataInfo;

    private ClassMetadataBuilder \$classMetadataBuilder;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->classMetadataInfo    = \$this->createMock(ClassMetadataInfo::class);
        \$this->classMetadataBuilder = new ClassMetadataBuilder(\$this->classMetadataInfo);
    }

    public function testAddNullableFieldWithoutColumnName(): void
    {
        \$this->classMetadataInfo->expects(\$this->once())
            ->method('mapField')
            ->with([
                'fieldName' => 'column_name',
                'type'      => 'string',
                'length'    => 191,
                'nullable'  => true,
            ]);

        \$this->classMetadataBuilder->addNullableField('column_name');
    }

    public function testAddNullableFieldWithColumnName(): void
    {
        \$this->classMetadataInfo->expects(\$this->once())
            ->method('mapField')
            ->with([
                'fieldName'  => 'columnName',
                'columnName' => 'column_name',
                'type'       => 'string',
                'length'     => 191,
                'nullable'   => true,
            ]);

        \$this->classMetadataBuilder->addNullableField('columnName', Types::STRING, 'column_name');
    }

    public function testaddIndexWithOptions(): void
    {
        \$columns = [
            'column_1',
            'column_2',
        ];

        \$options = [
            'lengths' => [
                0 => 128,
            ],
        ];

        \$index_name = 'index';

        \$data = \$this->classMetadataBuilder->addIndexWithOptions(\$columns, \$index_name, \$options);

        \$this->assertEquals(\$columns, \$data->getClassMetadata()->table['indexes'][\$index_name]['columns']);
        \$this->assertEquals(\$options, \$data->getClassMetadata()->table['indexes'][\$index_name]['options']);
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
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/ClassMetadataBuilderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/ClassMetadataBuilderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Mapping/ClassMetadataBuilderTest.php");
    }
}
