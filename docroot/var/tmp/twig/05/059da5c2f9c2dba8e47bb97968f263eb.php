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

/* @bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php */
class __TwigTemplate_d7b13e1a130baf5040e7bcfa3a8833db extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Factory;

use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\PointBundle\\Model\\TriggerModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class ModelFactoryTest extends TestCase
{
    /**
     * @var MockObject|ContainerInterface
     */
    private MockObject \$container;

    /**
     * @var ModelFactory<object>
     */
    private ModelFactory \$factory;

    protected function setUp(): void
    {
        \$this->container = \$this->createMock(ContainerInterface::class);
        \$this->factory   = new ModelFactory(\$this->container);
    }

    public function testModelKeyIsLowerCaseToMatchServiceKeys(): void
    {
        \$pointTriggerModel = \$this->createMock(TriggerModel::class);
        \$modelName         = 'point.triggerEvent';
        \$containerKey      = 'mautic.point.model.triggerEvent';

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with(\$containerKey)
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with(\$containerKey)
            ->willReturn(\$pointTriggerModel);

        \$givenPointTriggerModel = \$this->factory->getModel(\$modelName);

        \$this->assertInstanceOf(TriggerModel::class, \$givenPointTriggerModel);
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
        return "@bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php");
    }
}
