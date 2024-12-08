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

/* @bundles/PageBundle/Form/Type/DashboardHitsInTimeWidgetType.php */
class __TwigTemplate_4388f9a05f40e8d2811ce9e6cadcd568 extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class DashboardHitsInTimeWidgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('flag', ChoiceType::class, [
            'label'   => 'mautic.page.visit.flag.filter',
            'choices' => [
                'mautic.page.show.total.visits'            => '',
                'mautic.page.show.unique.visits'           => 'unique',
                'mautic.page.show.unique.and.total.visits' => 'total_and_unique',
            ],
            'label_attr'        => ['class' => 'control-label'],
            'attr'              => ['class' => 'form-control'],
            'empty_data'        => '',
            'required'          => false,
        ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'page_dashboard_hits_in_time_widget';
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
        return "@bundles/PageBundle/Form/Type/DashboardHitsInTimeWidgetType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/DashboardHitsInTimeWidgetType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/DashboardHitsInTimeWidgetType.php");
    }
}
