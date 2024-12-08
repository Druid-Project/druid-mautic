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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/resource/GoodConfig/Config/config.php */
class __TwigTemplate_329d692d859451dae5e882a6473980c6 extends Template
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
    'routes'   => [
        'main' => [
            'mautic_core_ajax' => [
                'path'       => '/ajax',
                'controller' => 'Mautic\\CoreBundle\\Controller\\AjaxController::delegateAjaxAction',
            ],
        ],
    ],
    'menu'     => [
        'main' => [
            'mautic.core.components' => [
                'id'        => 'mautic_components_root',
                'iconClass' => 'fa-puzzle-piece',
                'priority'  => 60,
            ],
        ],
    ],
    'services' => [
        'helpers'  => [
            'mautic.helper.bundle' => [
                'class'     => Mautic\\CoreBundle\\Helper\\BundleHelper::class,
                'arguments' => [
                    '%mautic.bundles%',
                    '%mautic.plugin.bundles%',
                ],
            ],
        ],
        'other'    => [
            'mautic.http.client' => [
                'class' => GuzzleHttp\\Client::class,
            ],
        ],
        'fixtures' => [
            'mautic.test.fixture' => [
                'class'    => 'Foo\\Bar\\NonExisting',
                'optional' => true,
            ],
        ],
    ],

    'ip_lookup_services' => [
        'extreme-ip' => [
            'display_name' => 'Extreme-IP',
            'class'        => Mautic\\CoreBundle\\IpLookup\\ExtremeIpLookup::class,
        ],
    ],

    'parameters' => [
        'log_path'      => '%kernel.project_dir%/var/logs',
        'max_log_files' => 7,
        'image_path'    => 'media/images',
        'bool_value'    => false,
        'null_value'    => null,
        'array_value'   => [],
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/resource/GoodConfig/Config/config.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/resource/GoodConfig/Config/config.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/resource/GoodConfig/Config/config.php");
    }
}
