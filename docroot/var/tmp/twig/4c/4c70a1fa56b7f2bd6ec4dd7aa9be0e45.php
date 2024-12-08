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

/* @bundles/ReportBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_176c11933f1b006da4ec467860cbff9b extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType;
use Mautic\\ReportBundle\\Model\\ReportModel;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'report';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'report' => [
            'formAlias' => ReportWidgetType::class,
        ],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'report:reports:viewown',
        'report:reports:viewother',
    ];

    public function __construct(
        protected ReportModel \$reportModel,
        protected CorePermissions \$security
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);

        if ('report' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();
            if (!\$event->isCached()) {
                [\$reportId, \$graph]     = explode(':', \$params['graph']);
                \$report                 = \$this->reportModel->getEntity(\$reportId);

                if (\$report && \$this->security->hasEntityAccess('report:reports:viewown', 'report:reports:viewother', \$report->getCreatedBy())) {
                    \$reportData = \$this->reportModel->getReportData(
                        \$report,
                        null,
                        [
                            'ignoreTableData' => true,
                            'graphName'       => \$graph,
                            'dateFrom'        => \$params['dateFrom'],
                            'dateTo'          => \$params['dateTo'],
                        ]
                    );

                    if (isset(\$reportData['graphs'][\$graph])) {
                        \$graphData = \$reportData['graphs'][\$graph];
                        if (!isset(\$graphData['data']['data'])) {
                            \$graphData['data']['data'] = \$graphData['data'];
                        }
                        \$event->setTemplateData(
                            [
                                'chartData'   => \$graphData['data'],
                                'chartType'   => \$graphData['type'],
                                'chartHeight' => \$widget->getHeight() - 90,
                                'reportId'    => \$report->getId(),
                                'dateFrom'    => \$params['dateFrom'],
                                'dateTo'      => \$params['dateTo'],
                            ]
                        );
                    }
                }
            }
            \$event->setTemplate('@MauticReport/SubscribedEvents/Dashboard/widget.html.twig');
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
        return "@bundles/ReportBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/DashboardSubscriber.php", "/app/docroot/app/bundles/ReportBundle/EventListener/DashboardSubscriber.php");
    }
}
