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

/* @bundles/StageBundle/Config/config.php */
class __TwigTemplate_6f1f9621744386fed079916457e33bef extends Template
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
            'mautic_stage_index' => [
                'path'       => '/stages/{page}',
                'controller' => 'Mautic\\StageBundle\\Controller\\StageController::indexAction',
            ],
            'mautic_stage_action' => [
                'path'       => '/stages/{objectAction}/{objectId}',
                'controller' => 'Mautic\\StageBundle\\Controller\\StageController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_stagesstandard' => [
                'standard_entity' => true,
                'name'            => 'stages',
                'path'            => '/stages',
                'controller'      => Mautic\\StageBundle\\Controller\\Api\\StageApiController::class,
            ],
            'mautic_api_stageddcontact' => [
                'path'       => '/stages/{id}/contact/{contactId}/add',
                'controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::addContactAction',
                'method'     => 'POST',
            ],
            'mautic_api_stageremovecontact' => [
                'path'       => '/stages/{id}/contact/{contactId}/remove',
                'controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::removeContactAction',
                'method'     => 'POST',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.stages.menu.index' => [
                'route'     => 'mautic_stage_index',
                'iconClass' => 'ri-barricade-fill flip-vertically',
                'access'    => ['stage:stages:view'],
                'priority'  => 25,
            ],
        ],
    ],

    'categories' => [
        'stage' => null,
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
        return "@bundles/StageBundle/Config/config.php";
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
        return new Source("", "@bundles/StageBundle/Config/config.php", "/app/docroot/app/bundles/StageBundle/Config/config.php");
    }
}
