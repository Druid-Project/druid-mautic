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

/* @bundles/StageBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_82153a187f21099ba27fbf7505597d40 extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\StageBundle\\Model\\StageModel;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'stage';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'stages.in.time' => [],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'stage:stages:viewown',
        'stage:stages:viewother',
    ];

    public function __construct(
        protected StageModel \$stageModel
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('stage:stages:viewother');

        if ('stages.in.time' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'line',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->stageModel->getStageLineChartData(
                        \$params['timeUnit'],
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        \$params['dateFormat'],
                        [],
                        \$canViewOthers
                    ),
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
            \$event->stopPropagation();
        }
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
        return "@bundles/StageBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/DashboardSubscriber.php", "/app/docroot/app/bundles/StageBundle/EventListener/DashboardSubscriber.php");
    }
}
