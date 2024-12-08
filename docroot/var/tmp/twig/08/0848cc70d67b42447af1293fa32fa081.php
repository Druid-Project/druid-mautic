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

/* @bundles/LeadBundle/Tests/Model/LeadListModelTest.php */
class __TwigTemplate_6645e32961e2f8641754af8be7161893 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Model\\ListModel;

class LeadListModelTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$fixture;

    protected function setUp(): void
    {
        \$mockListModel = \$this->getMockBuilder(ListModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getEntities', 'getEntity'])
            ->getMock();

        \$mockListModel->expects(\$this->any())
            ->method('getEntity')
            ->willReturnCallback(function (\$id) {
                \$mockEntity = \$this->getMockBuilder(LeadList::class)
                    ->disableOriginalConstructor()
                    ->onlyMethods(['getName'])
                    ->getMock();

                \$mockEntity->expects(\$this->once())
                    ->method('getName')
                    ->willReturn((string) \$id);

                return \$mockEntity;
            });

        \$filters = 'a:1:{i:0;a:7:{s:4:\"glue\";s:3:\"and\";s:5:\"field\";s:8:\"leadlist\";s:6:\"object\";s:4:\"lead\";s:4:\"type\";s:8:\"leadlist\";s:6:\"filter\";a:2:{i:0;i:1;i:1;i:3;}s:7:\"display\";N;s:8:\"operator\";s:2:\"in\";}}';

        \$filters4 = 'a:1:{i:0;a:7:{s:4:\"glue\";s:3:\"and\";s:5:\"field\";s:8:\"leadlist\";s:6:\"object\";s:4:\"lead\";s:4:\"type\";s:8:\"leadlist\";s:6:\"filter\";a:1:{i:0;i:3;}s:7:\"display\";N;s:8:\"operator\";s:2:\"in\";}}';

        \$mockEntity = \$this->getMockBuilder(LeadList::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mockEntity1 = clone \$mockEntity;
        \$mockEntity1->expects(\$this->once())
            ->method('getFilters')
            ->willReturn([]);
        \$mockEntity1->expects(\$this->any())
            ->method('getId')
            ->willReturn(1);

        \$mockEntity2 = clone \$mockEntity;
        \$mockEntity2->expects(\$this->once())
            ->method('getFilters')
            ->willReturn(Serializer::decode(\$filters));
        \$mockEntity2->expects(\$this->any())
            ->method('getId')
            ->willReturn(2);

        \$mockEntity3 = clone \$mockEntity;
        \$mockEntity3->expects(\$this->once())
            ->method('getFilters')
            ->willReturn([]);
        \$mockEntity3->expects(\$this->any())
            ->method('getId')
            ->willReturn(3);

        \$mockEntity4 = clone \$mockEntity;
        \$mockEntity4->expects(\$this->once())
            ->method('getFilters')
            ->willReturn(Serializer::decode(\$filters4));
        \$mockEntity4->expects(\$this->any())
            ->method('getId')
            ->willReturn(4);

        \$mockListModel->expects(\$this->once())
            ->method('getEntities')
            ->willReturn([
                1 => \$mockEntity1,
                2 => \$mockEntity2,
                3 => \$mockEntity3,
                4 => \$mockEntity4,
            ]);

        \$this->fixture = \$mockListModel;
    }

    /**
     * @dataProvider segmentTestDataProvider
     */
    public function testSegmentsCanBeDeletedCorrecty(array \$arg, array \$expected, \$message): void
    {
        \$result = \$this->fixture->canNotBeDeleted(\$arg);

        \$this->assertEquals(\$expected, \$result, \$message);
    }

    public static function segmentTestDataProvider()
    {
        return [
            [
                [1],
                [1 => '1'],
                '2 is dependent on 1, so 1 cannot be deleted.',
            ],
            [
                [1, 3],
                [1 => '1', 3 => '3'],
                '2 is dependent on 1 & 3, so 1 & 3 cannot be deleted.',
            ],
            [
                [1, 2, 3, 4],
                [],
                'Since we are deleting all segments, it should not prevent any from being deleted.',
            ],
            [
                [2],
                [],
                'Segments without any other segment dependent on them should always be able to be deleted.',
            ],
        ];
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
        return "@bundles/LeadBundle/Tests/Model/LeadListModelTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/LeadListModelTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Model/LeadListModelTest.php");
    }
}
