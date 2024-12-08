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

/* @bundles/PageBundle/Config/config.php */
class __TwigTemplate_2fe745e3265f34fe5e83fd269301d86a extends Template
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
            'mautic_page_index' => [
                'path'       => '/pages/{page}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PageController::indexAction',
            ],
            'mautic_page_action' => [
                'path'       => '/pages/{objectAction}/{objectId}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PageController::executeAction',
            ],
            'mautic_page_results' => [
                'path'       => '/pages/results/{objectId}/{page}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PageController::resultsAction',
            ],
            'mautic_page_export' => [
                'path'       => '/pages/results/{objectId}/export/{format}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PageController::exportAction',
                'defaults'   => [
                    'format' => 'csv',
                ],
            ],
        ],
        'public' => [
            'mautic_page_tracker' => [
                'path'       => '/mtracking.gif',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingImageAction',
            ],
            'mautic_page_tracker_cors' => [
                'path'       => '/mtc/event',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingAction',
            ],
            'mautic_page_tracker_getcontact' => [
                'path'       => '/mtc',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::getContactIdAction',
            ],
            'mautic_url_redirect' => [
                'path'       => '/r/{redirectId}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',
            ],
            'mautic_page_redirect' => [
                'path'       => '/redirect/{redirectId}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',
            ],
            'mautic_page_preview' => [
                'path'       => '/page/preview/{id}',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::previewAction',
            ],
            'mautic_gated_video_hit' => [
                'path'       => '/video/hit',
                'controller' => 'Mautic\\PageBundle\\Controller\\PublicController::hitVideoAction',
            ],
        ],
        'api' => [
            'mautic_api_pagesstandard' => [
                'standard_entity' => true,
                'name'            => 'pages',
                'path'            => '/pages',
                'controller'      => Mautic\\PageBundle\\Controller\\Api\\PageApiController::class,
            ],
        ],
        'catchall' => [
            'mautic_page_public' => [
                'path'         => '/{slug}',
                'controller'   => 'Mautic\\PageBundle\\Controller\\PublicController::indexAction',
                'requirements' => [
                    'slug' => '^(?!(_(profiler|wdt)|css|images|js|favicon.ico|apps/bundles/|plugins/)).+',
                ],
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'items' => [
                'mautic.page.pages' => [
                    'route'    => 'mautic_page_index',
                    'access'   => ['page:pages:viewown', 'page:pages:viewother'],
                    'parent'   => 'mautic.core.components',
                    'priority' => 100,
                ],
            ],
        ],
    ],

    'categories' => [
        'page' => null,
    ],

    'services' => [
        'fixtures' => [
            'mautic.page.fixture.page_category' => [
                'class'     => Mautic\\PageBundle\\DataFixtures\\ORM\\LoadPageCategoryData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => ['mautic.category.model.category'],
            ],
            'mautic.page.fixture.page' => [
                'class'     => Mautic\\PageBundle\\DataFixtures\\ORM\\LoadPageData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => ['mautic.page.model.page'],
            ],
            'mautic.page.fixture.page_hit' => [
                'class'     => Mautic\\PageBundle\\DataFixtures\\ORM\\LoadPageHitData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
                'arguments' => ['mautic.page.model.page'],
            ],
        ],
        'other' => [
            'mautic.page.helper.token' => [
                'class'     => Mautic\\PageBundle\\Helper\\TokenHelper::class,
                'arguments' => 'mautic.page.model.page',
            ],
            'mautic.page.helper.tracking' => [
                'class'     => Mautic\\PageBundle\\Helper\\TrackingHelper::class,
                'arguments' => [
                    'mautic.tracker.contact',
                    'mautic.cache.provider',
                    'mautic.helper.core_parameters',
                    'request_stack',
                ],
            ],
        ],
    ],

    'parameters' => [
        'cat_in_page_url'                       => false,
        'google_analytics'                      => null,
        'track_contact_by_ip'                   => false,
        'track_by_fingerprint'                  => false,
        'track_by_tracking_url'                 => false,
        'google_analytics_id'                   => null,
        'google_analytics_trackingpage_enabled' => false,
        'google_analytics_landingpage_enabled'  => false,
        'google_analytics_anonymize_ip'         => false,
        'facebook_pixel_id'                     => null,
        'facebook_pixel_trackingpage_enabled'   => false,
        'facebook_pixel_landingpage_enabled'    => false,
        'do_not_track_404_anonymous'            => false,
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
        return "@bundles/PageBundle/Config/config.php";
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
        return new Source("", "@bundles/PageBundle/Config/config.php", "/app/docroot/app/bundles/PageBundle/Config/config.php");
    }
}
