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

/* @bundles/ReportBundle/Config/config.php */
class __TwigTemplate_f33a3fa674882293410b0b7af406a16b extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_report_index' => [
                'path'       => '/reports/{page}',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::indexAction',
            ],
            'mautic_report_export' => [
                'path'       => '/reports/view/{objectId}/export/{format}',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::exportAction',
                'defaults'   => [
                    'format' => 'csv',
                ],
            ],
            'mautic_report_download' => [
                'path'       => '/reports/download/{reportId}/{format}',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::downloadAction',
                'defaults'   => [
                    'format' => 'csv',
                ],
            ],
            'mautic_report_view' => [
                'path'       => '/reports/view/{objectId}/{reportPage}',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::viewAction',
                'defaults'   => [
                    'reportPage' => 1,
                ],
                'requirements' => [
                    'reportPage' => '\\d+',
                ],
            ],
            'mautic_report_schedule_preview' => [
                'path'       => '/reports/schedule/preview/{isScheduled}/{scheduleUnit}/{scheduleDay}/{scheduleMonthFrequency}',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ScheduleController::indexAction',
                'defaults'   => [
                    'isScheduled'            => 0,
                    'scheduleUnit'           => '',
                    'scheduleDay'            => '',
                    'scheduleMonthFrequency' => '',
                ],
            ],
            'mautic_report_schedule' => [
                'path'       => '/reports/schedule/{reportId}/now',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ScheduleController::nowAction',
            ],
            'mautic_report_action' => [
                'path'       => '/reports/{objectAction}/{objectId}',
                'controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_reportsstandard' => [
                'standard_entity' => true,
                'name'            => 'reports',
                'path'            => '/reports',
                'controller'      => 'Mautic\\ReportBundle\\Controller\\Api\\ReportApiController',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.report.reports' => [
                'route'     => 'mautic_report_index',
                'iconClass' => 'ri-file-chart-2-fill',
                'access'    => [
                    'report:reports:viewown',
                    'report:reports:viewother',
                ],
                'priority' => 20,
            ],
        ],
    ],

    'services' => [
        'helpers' => [
            'mautic.report.helper.report' => [
                'class'     => Mautic\\ReportBundle\\Helper\\ReportHelper::class,
                'alias'     => 'report',
                'arguments' => [
                    'event_dispatcher',
                ],
            ],
        ],
        'validator' => [
            'mautic.report.validator.schedule_is_valid_validator' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Validator\\ScheduleIsValidValidator::class,
                'arguments' => [
                    'mautic.report.model.scheduler_builder',
                ],
                'tag' => 'validator.constraint_validator',
            ],
        ],
        'other' => [
            'mautic.report.model.scheduler_builder' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder::class,
                'arguments' => [
                    'mautic.report.model.scheduler_template_factory',
                ],
            ],
            'mautic.report.model.scheduler_template_factory' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory::class,
                'arguments' => [],
            ],
            'mautic.report.model.scheduler_date_builder' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Date\\DateBuilder::class,
                'arguments' => [
                    'mautic.report.model.scheduler_builder',
                ],
            ],
            'mautic.report.model.scheduler_planner' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner::class,
                'arguments' => [
                    'mautic.report.model.scheduler_date_builder',
                    'doctrine.orm.default_entity_manager',
                ],
            ],
            'mautic.report.model.send_schedule' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Model\\SendSchedule::class,
                'arguments' => [
                    'mautic.helper.mailer',
                    'mautic.report.model.message_schedule',
                    'mautic.report.model.file_handler',
                    'event_dispatcher',
                ],
            ],
            'mautic.report.model.file_handler' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Model\\FileHandler::class,
                'arguments' => [
                    'mautic.helper.file_path_resolver',
                    'mautic.helper.file_properties',
                    'mautic.helper.core_parameters',
                ],
            ],
            'mautic.report.model.message_schedule' => [
                'class'     => Mautic\\ReportBundle\\Scheduler\\Model\\MessageSchedule::class,
                'arguments' => [
                    'translator',
                    'mautic.helper.file_properties',
                    'mautic.helper.core_parameters',
                    'router',
                ],
            ],
            'mautic.report.model.report_data_adapter' => [
                'class'     => Mautic\\ReportBundle\\Adapter\\ReportDataAdapter::class,
                'arguments' => [
                    'mautic.report.model.report',
                ],
            ],
        ],
    ],

    'parameters' => [
        'report_temp_dir'                     => '%mautic.application_dir%/media/files/temp',
        'report_export_batch_size'            => 1000,
        'report_export_max_filesize_in_bytes' => 5_000_000,
        'csv_always_enclose'                  => false,
    ],
];
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ReportBundle/Config/config.php";
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
        return new Source("", "@bundles/ReportBundle/Config/config.php", "/app/docroot/app/bundles/ReportBundle/Config/config.php");
    }
}
