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

/* @bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php */
class __TwigTemplate_b9d6a4c60d6bddb61ab7bedeb4199cc9 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\EmailBundle\\Form\\Type\\DashboardBestHoursWidgetType;
use Mautic\\EmailBundle\\Model\\EmailModel;

class DashboardBestHoursSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'email';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'emails.best.hours' => [
            'formAlias' => DashboardBestHoursWidgetType::class,
        ],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'email:emails:viewown',
        'email:emails:viewother',
    ];

    public function __construct(
        protected EmailModel \$emailModel
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('email:emails:viewother');

        if ('emails.best.hours' == \$event->getType()) {
            \$widget     = \$event->getWidget();
            \$params     = \$widget->getParams();
            \$filterKeys = ['companyId', 'campaignId', 'segmentId'];

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'bar',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->emailModel->getBestHours(
                        'date_read',
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        ArrayHelper::select(\$filterKeys, \$params),
                        \$canViewOthers,
                        \$params['timeFormat']
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
        return "@bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php");
    }
}
