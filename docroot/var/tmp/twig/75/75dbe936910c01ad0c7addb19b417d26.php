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

/* @bundles/InstallBundle/Config/config.php */
class __TwigTemplate_bcfc29ddd8fd6ad5e0c87871a05c97a0 extends Template
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
        'public' => [
            'mautic_installer_home' => [
                'path'       => '/installer',
                'controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',
            ],
            'mautic_installer_remove_slash' => [
                'path'       => '/installer/',
                'controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',
            ],
            'mautic_installer_step' => [
                'path'       => '/installer/step/{index}',
                'controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',
            ],
            'mautic_installer_final' => [
                'path'       => '/installer/final',
                'controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::finalAction',
            ],
            'mautic_installer_catchcall' => [
                'path'         => '/installer/{noerror}',
                'controller'   => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',
                'requirements' => [
                    'noerror' => '^(?).+',
                ],
            ],
        ],
    ],

    'services' => [
        'fixtures' => [
            'mautic.install.fixture.lead_field' => [
                'class'     => Mautic\\InstallBundle\\InstallFixtures\\ORM\\LeadFieldData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => ['translator'],
            ],
            'mautic.install.fixture.role' => [
                'class'     => Mautic\\InstallBundle\\InstallFixtures\\ORM\\RoleData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => ['translator'],
            ],
            'mautic.install.fixture.report_data' => [
                'class'     => Mautic\\InstallBundle\\InstallFixtures\\ORM\\LoadReportData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => [],
            ],
            'mautic.install.fixture.grape_js' => [
                'class'     => Mautic\\InstallBundle\\InstallFixtures\\ORM\\GrapesJsData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
            ],
        ],
        'other' => [
            'mautic.install.configurator.step.check' => [
                'class'     => Mautic\\InstallBundle\\Configurator\\Step\\CheckStep::class,
                'arguments' => [
                    'mautic.configurator',
                    '%kernel.project_dir%',
                    'request_stack',
                    'mautic.cipher.openssl',
                ],
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 0,
                ],
            ],
            'mautic.install.configurator.step.doctrine' => [
                'class'     => Mautic\\InstallBundle\\Configurator\\Step\\DoctrineStep::class,
                'arguments' => [
                    'mautic.configurator',
                ],
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 1,
                ],
            ],
            'mautic.install.configurator.step.user' => [
                'class'        => Mautic\\InstallBundle\\Configurator\\Step\\UserStep::class,
                'tag'          => 'mautic.configurator.step',
                'tagArguments' => [
                    'priority' => 2,
                ],
            ],
            'mautic.install.service' => [
                'class'     => Mautic\\InstallBundle\\Install\\InstallService::class,
                'arguments' => [
                    'mautic.configurator',
                    'mautic.helper.cache',
                    'mautic.helper.paths',
                    'doctrine.orm.entity_manager',
                    'translator',
                    'kernel',
                    'validator',
                    'security.password_hasher',
                    'mautic.doctrine.loader.mautic_fixtures_loader',
                ],
            ],
            'mautic.install.leadcolumns' => [
                'class'     => Mautic\\InstallBundle\\EventListener\\DoctrineEventSubscriber::class,
                'tag'       => 'doctrine.event_subscriber',
                'arguments' => [],
            ],
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
        return "@bundles/InstallBundle/Config/config.php";
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
        return new Source("", "@bundles/InstallBundle/Config/config.php", "/app/docroot/app/bundles/InstallBundle/Config/config.php");
    }
}
