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

/* @bundles/CategoryBundle/Config/config.php */
class __TwigTemplate_8c0cf07d6944b2eda80b0cccc389721c extends Template
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
            'mautic_category_batch_contact_set' => [
                'path'       => '/categories/batch/contact/set',
                'controller' => 'Mautic\\CategoryBundle\\Controller\\BatchContactController::execAction',
            ],
            'mautic_category_batch_contact_view' => [
                'path'       => '/categories/batch/contact/view',
                'controller' => 'Mautic\\CategoryBundle\\Controller\\BatchContactController::indexAction',
            ],
            'mautic_category_index' => [
                'path'       => '/categories/{bundle}/{page}',
                'controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::indexAction',
                'defaults'   => [
                    'bundle' => 'category',
                ],
            ],
            'mautic_category_action' => [
                'path'       => '/categories/{bundle}/{objectAction}/{objectId}',
                'controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::executeCategoryAction',
                'defaults'   => [
                    'bundle' => 'category',
                ],
            ],
        ],
        'api' => [
            'mautic_api_categoriesstandard' => [
                'standard_entity' => true,
                'name'            => 'categories',
                'path'            => '/categories',
                'controller'      => Mautic\\CategoryBundle\\Controller\\Api\\CategoryApiController::class,
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'mautic.category.menu.index' => [
                'route'     => 'mautic_category_index',
                'access'    => 'category:categories:view',
                'iconClass' => 'ri-folder-6-line',
                'id'        => 'mautic_category_index',
                'parent'    => 'mautic.core.general',
                'priority'  => 20,
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
        return "@bundles/CategoryBundle/Config/config.php";
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
        return new Source("", "@bundles/CategoryBundle/Config/config.php", "/app/docroot/app/bundles/CategoryBundle/Config/config.php");
    }
}
