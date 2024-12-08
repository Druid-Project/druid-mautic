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

/* @bundles/DashboardBundle/Entity/WidgetRepository.php */
class __TwigTemplate_aed61e7938296944f6138f6971e94a3e extends Template
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

namespace Mautic\\DashboardBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Widget>
 */
class WidgetRepository extends CommonRepository
{
    /**
     * Update widget ordering.
     *
     * @param array \$ordering
     * @param int   \$userId
     */
    public function updateOrdering(\$ordering, \$userId): void
    {
        \$widgets = \$this->getEntities(
            [
                'filter' => [
                    'createdBy' => \$userId,
                ],
            ]
        );

        foreach (\$widgets as &\$widget) {
            if (isset(\$ordering[\$widget->getId()])) {
                \$widget->setOrdering((int) \$ordering[\$widget->getId()]);
            }
        }

        \$this->saveEntities(\$widgets);
    }

    protected function getDefaultOrder(): array
    {
        return [
            ['w.ordering', 'ASC'],
        ];
    }

    public function getTableAlias(): string
    {
        return 'w';
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
        return "@bundles/DashboardBundle/Entity/WidgetRepository.php";
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
        return new Source("", "@bundles/DashboardBundle/Entity/WidgetRepository.php", "/app/docroot/app/bundles/DashboardBundle/Entity/WidgetRepository.php");
    }
}
