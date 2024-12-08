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

/* @bundles/ConfigBundle/Config/config.php */
class __TwigTemplate_e07101bd62fcdd03a6d1d474311b34d8 extends Template
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
            'mautic_config_action' => [
                'path'       => '/config/{objectAction}/{objectId}',
                'controller' => 'Mautic\\ConfigBundle\\Controller\\ConfigController::executeAction',
            ],
            'mautic_sysinfo_index' => [
                'path'       => '/sysinfo',
                'controller' => 'Mautic\\ConfigBundle\\Controller\\SysinfoController::indexAction',
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'mautic.config.menu.index' => [
                'route'           => 'mautic_config_action',
                'routeParameters' => ['objectAction' => 'edit'],
                'iconClass'       => 'ri-settings-5-line',
                'id'              => 'mautic_config_index',
                'parent'          => 'mautic.core.general',
                'access'          => 'admin',
                'priority'        => 16,
            ],
            'mautic.sysinfo.menu.index' => [
                'route'     => 'mautic_sysinfo_index',
                'iconClass' => 'ri-information-2-line',
                'id'        => 'mautic_sysinfo_index',
                'parent'    => 'mautic.core.general',
                'access'    => 'admin',
                'priority'  => 04,
                'checks'    => [
                    'parameters' => [
                        'sysinfo_disabled' => false,
                    ],
                ],
            ],
        ],
    ],

    'parameters' => [
        'config_allowed_parameters' => [
            'kernel.project_dir',
            'kernel.logs_dir',
        ],
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
        return "@bundles/ConfigBundle/Config/config.php";
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
        return new Source("", "@bundles/ConfigBundle/Config/config.php", "/app/docroot/app/bundles/ConfigBundle/Config/config.php");
    }
}
