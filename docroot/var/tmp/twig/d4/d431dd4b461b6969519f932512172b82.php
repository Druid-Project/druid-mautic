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

/* @bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php */
class __TwigTemplate_216362cd6d593ef290e5feab1f443c59 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Controller\\Api\\FieldApiController;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class FieldApiControllerTest extends TestCase
{
    private \$defaultWhere = [
        [
            'col'  => 'object',
            'expr' => 'eq',
            'val'  => null,
        ],
    ];

    public function testgetWhereFromRequestWithNoWhere(): void
    {
        \$request = \$this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$result = \$this->getResultFromProtectedMethod('getWhereFromRequest', [\$request], \$request);

        \$this->assertEquals(\$this->defaultWhere, \$result);
    }

    public function testgetWhereFromRequestWithSomeWhere(): void
    {
        \$where = [
            [
                'col'  => 'id',
                'expr' => 'eq',
                'val'  => 5,
            ],
        ];

        \$request = \$this->getMockBuilder(Request::class)
            ->onlyMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();

        \$request->method('get')
            ->willReturnMap([
                ['where', [], \$where],
            ]);

        \$result = \$this->getResultFromProtectedMethod('getWhereFromRequest', [\$request], \$request);

        \$this->assertEquals(array_merge(\$where, \$this->defaultWhere), \$result);
    }

    protected function getResultFromProtectedMethod(\$method, array \$args, Request \$request)
    {
        \$requestStack = \$this->createMock(RequestStack::class);
        \$requestStack->method('getCurrentRequest')
            ->willReturn(\$request);

        \$fieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$fieldModel      = \$this->createMock(FieldModel::class);
        \$fieldModel->method('getRepository')
            ->willReturn(\$fieldRepository);
        \$modelFactory = \$this->createMock(ModelFactory::class);
        \$modelFactory->method('getModel')
            ->with('lead.field')
            ->willReturn(\$fieldModel);
        \$controller   = new FieldApiController(
            \$this->createMock(CorePermissions::class),
            \$this->createMock(Translator::class),
            \$this->createMock(EntityResultHelper::class),
            \$this->createMock(Router::class),
            \$this->createMock(FormFactoryInterface::class),
            \$this->createMock(AppVersion::class),
            \$requestStack,
            \$this->createMock(ManagerRegistry::class),
            \$modelFactory,
            \$this->createMock(EventDispatcherInterface::class),
            \$this->createMock(CoreParametersHelper::class),
            \$this->createMock(MauticFactory::class),
        );

        \$controllerReflection = new \\ReflectionClass(FieldApiController::class);
        \$method               = \$controllerReflection->getMethod(\$method);
        \$method->setAccessible(true);

        return \$method->invokeArgs(\$controller, \$args);
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
        return "@bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerTest.php");
    }
}
