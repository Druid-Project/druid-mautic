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

/* @bundles/DashboardBundle/Tests/Dashboard/WidgetTest.php */
class __TwigTemplate_386141ad03cd03a24ca0e2f4d34ed58e extends Template
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

namespace Mautic\\DashboardBundle\\Tests\\Dashboard;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\DashboardBundle\\Dashboard\\Widget;
use Mautic\\DashboardBundle\\Entity\\Widget as WidgetEntity;
use Mautic\\DashboardBundle\\Model\\DashboardModel;
use Mautic\\UserBundle\\Entity\\User;
use PhpOffice\\PhpSpreadsheet\\Shared\\Date;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

class WidgetTest extends TestCase
{
    private const USER_ID = 1;

    /**
     * @var DashboardModel|MockObject
     */
    private MockObject \$dashboardModel;

    /**
     * @var UserHelper|MockObject
     */
    private MockObject \$userHelper;

    /**
     * @var MockObject|Session
     */
    private MockObject \$session;

    /**
     * @var User|MockObject
     */
    private MockObject \$user;

    private Widget \$widget;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dashboardModel = \$this->createMock(DashboardModel::class);
        \$this->userHelper     = \$this->createMock(UserHelper::class);
        \$this->session        = \$this->createMock(Session::class);

        \$this->user = \$this->createMock(User::class);
        \$this->user
            ->method('getId')
            ->willReturn(self::USER_ID);

        \$this->widget = new Widget(
            \$this->dashboardModel,
            \$this->userHelper,
            \$this->session
        );
    }

    public function testGetSuccess(): void
    {
        \$widgetId = 2;
        \$widget   = \$this->createMock(WidgetEntity::class);
        \$widget->expects(self::once())
            ->method('getId')
            ->willReturn(\$widgetId);
        \$widget->expects(self::once())
            ->method('getCreatedBy')
            ->willReturn(self::USER_ID);

        \$widget->setCreatedBy(self::USER_ID);
        \$filter = [
            'dateFrom' => new Date(),
            'dateTo'   => new Date(),
        ];

        \$this->dashboardModel->expects(self::once())
            ->method('getEntity')
            ->with(\$widgetId)
            ->willReturn(\$widget);

        \$this->userHelper->expects(self::once())
            ->method('getUser')
            ->willReturn(\$this->user);

        \$this->dashboardModel->expects(self::once())
            ->method('getDefaultFilter')
            ->willReturn(\$filter);

        \$this->dashboardModel->expects(self::once())
            ->method('populateWidgetContent')
            ->with(\$widget, \$filter);

        \$this->widget->get(\$widgetId);
    }

    public function testGetNotFoundHttpException(): void
    {
        \$widgetId = 2;
        \$widget   = null;

        \$this->dashboardModel->expects(self::once())
            ->method('getEntity')
            ->with(\$widgetId)
            ->willReturn(\$widget);

        \$this->expectException(NotFoundHttpException::class);
        \$this->widget->get(\$widgetId);
    }

    public function testGetNotFoundHttpExceptionEmptyEntity(): void
    {
        \$widgetId = 2;
        \$widget   = \$this->createMock(WidgetEntity::class);
        \$widget->expects(self::once())
            ->method('getId')
            ->willReturn(null);

        \$widget->setCreatedBy(self::USER_ID);

        \$this->dashboardModel->expects(self::once())
            ->method('getEntity')
            ->with(\$widgetId)
            ->willReturn(\$widget);

        \$this->expectException(NotFoundHttpException::class);
        \$this->widget->get(\$widgetId);
    }

    public function testGetAccessDeniedException(): void
    {
        \$widgetId = 2;
        \$widget   = \$this->createMock(WidgetEntity::class);
        \$widget->expects(self::once())
            ->method('getId')
            ->willReturn(\$widgetId);
        \$widget->expects(self::once())
            ->method('getCreatedBy')
            ->willReturn(self::USER_ID + 1);

        \$widget->setCreatedBy(self::USER_ID);

        \$this->dashboardModel->expects(self::once())
            ->method('getEntity')
            ->with(\$widgetId)
            ->willReturn(\$widget);

        \$this->userHelper->expects(self::once())
            ->method('getUser')
            ->willReturn(\$this->user);

        \$this->expectException(AccessDeniedException::class);
        \$this->widget->get(\$widgetId);
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
        return "@bundles/DashboardBundle/Tests/Dashboard/WidgetTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Dashboard/WidgetTest.php", "/app/docroot/app/bundles/DashboardBundle/Tests/Dashboard/WidgetTest.php");
    }
}
