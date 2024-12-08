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

/* @bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php */
class __TwigTemplate_2f6eed30205e110f1726cf70533183db extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Model;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Model\\AbstractCommonModel;
use Mautic\\CoreBundle\\Model\\IteratorExportDataModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class IteratorExportDataModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|AbstractCommonModel<object>
     */
    private MockObject \$commonModel;

    /**
     * @var MockObject|CommonRepository<object>
     */
    private MockObject \$commonRepository;

    private IteratorExportDataModel \$iteratorExportDataModel;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->commonModel      = \$this->createMock(AbstractCommonModel::class);
        \$this->commonRepository = \$this->createMock(CommonRepository::class);
        \$args                   = ['limit' => 1000];
        \$callback               = fn (\$var) => \$var;

        \$this->iteratorExportDataModel = new IteratorExportDataModel(\$this->commonModel, \$args, \$callback);
    }

    public function testWorkflowWithItems(): void
    {
        \$this->commonModel->expects(\$this->once())
            ->method('getEntities')
            ->with(['limit' => 1000, 'start' => 0, 'skipOrdering' => false])
            ->willReturn(['results' => [['a'], ['b']]]);

        \$this->commonModel->method('getRepository')->willReturn(\$this->commonRepository);

        \$this->assertSame(0, \$this->iteratorExportDataModel->key());
        \$this->iteratorExportDataModel->rewind();
        \$this->iteratorExportDataModel->next();
        \$this->assertSame(1, \$this->iteratorExportDataModel->key());
    }

    public function testWorkflowWithoutItems(): void
    {
        \$this->commonModel->expects(\$this->once())
            ->method('getEntities')
            ->with(['limit' => 1000, 'start' => 0, 'skipOrdering' => false])
            ->willReturn(['results' => []]);

        \$this->commonModel->method('getRepository')->willReturn(\$this->commonRepository);

        \$this->assertSame(0, \$this->iteratorExportDataModel->key());
        \$this->iteratorExportDataModel->rewind();
        \$this->iteratorExportDataModel->next();
        \$this->assertSame(1, \$this->iteratorExportDataModel->key());
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
        return "@bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php");
    }
}
