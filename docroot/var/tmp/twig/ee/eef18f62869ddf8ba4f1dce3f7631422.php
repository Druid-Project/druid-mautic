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

/* @bundles/DashboardBundle/Tests/Model/DashboardModelTest.php */
class __TwigTemplate_c8717629797650e89d7f4de5d2dbff2a extends Template
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

namespace Mautic\\DashboardBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\Filesystem;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\DashboardBundle\\Factory\\WidgetDetailEventFactory;
use Mautic\\DashboardBundle\\Model\\DashboardModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

final class DashboardModelTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private MockObject \$coreParametersHelper;

    /**
     * @var PathsHelper|MockObject
     */
    private MockObject \$pathsHelper;

    /**
     * @var MockObject|Filesystem
     */
    private MockObject \$filesystem;

    /**
     * @var MockObject|Session
     */
    private MockObject \$session;

    private DashboardModel \$model;

    private WidgetDetailEventFactory \$widgetDetailEventFactory;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->coreParametersHelper     = \$this->createMock(CoreParametersHelper::class);
        \$this->pathsHelper              = \$this->createMock(PathsHelper::class);
        \$this->widgetDetailEventFactory = \$this->createMock(WidgetDetailEventFactory::class);
        \$this->filesystem               = \$this->createMock(Filesystem::class);
        \$this->session                  = \$this->createMock(Session::class);
        \$requestStack                   = \$this->createMock(RequestStack::class);
        \$requestStack->method('getSession')
            ->willReturn(\$this->session);

        \$this->model = new DashboardModel(
            \$this->coreParametersHelper,
            \$this->pathsHelper,
            \$this->widgetDetailEventFactory,
            \$this->filesystem,
            \$requestStack,
            \$this->createMock(EntityManagerInterface::class),
            \$this->createMock(CorePermissions::class),
            \$this->createMock(EventDispatcherInterface::class),
            \$this->createMock(UrlGeneratorInterface::class),
            \$this->createMock(Translator::class),
            \$this->createMock(UserHelper::class),
            \$this->createMock(LoggerInterface::class)
        );
    }

    public function testGetDefaultFilterFromSession(): void
    {
        \$dateFromStr = '-1 month';
        \$dateFrom    = new \\DateTime(\$dateFromStr);
        \$dateTo      = new \\DateTime('23:59:59'); // till end of the 'to' date selected

        \$this->coreParametersHelper->expects(self::once())
            ->method('get')
            ->with('default_daterange_filter', \$dateFromStr)
            ->willReturn(\$dateFromStr);

        \$this->session->expects(\$this->exactly(2))
            ->method('get')
            ->willReturnOnConsecutiveCalls(
                \$dateFrom->format(\\DateTimeInterface::ATOM),
                \$dateTo->format(\\DateTimeInterface::ATOM)
            );

        \$filter = \$this->model->getDefaultFilter();

        Assert::assertSame(
            \$dateFrom->format(\\DateTimeInterface::ATOM),
            \$filter['dateFrom']->format(\\DateTimeInterface::ATOM)
        );

        Assert::assertSame(
            \$dateTo->format(\\DateTimeInterface::ATOM),
            \$filter['dateTo']->format(\\DateTimeInterface::ATOM)
        );
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
        return "@bundles/DashboardBundle/Tests/Model/DashboardModelTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Model/DashboardModelTest.php", "/app/docroot/app/bundles/DashboardBundle/Tests/Model/DashboardModelTest.php");
    }
}
