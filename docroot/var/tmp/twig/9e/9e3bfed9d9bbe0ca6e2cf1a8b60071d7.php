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

/* @bundles/ReportBundle/Form/Type/ReportWidgetType.php */
class __TwigTemplate_42371ce6a038965718de49417c13f1ad extends Template
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

namespace Mautic\\ReportBundle\\Form\\Type;

use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class ReportWidgetType extends AbstractType
{
    public function __construct(
        protected ReportModel \$model
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$choices = [];
        if (\$reports = \$this->model->getReportsWithGraphs()) {
            foreach (\$reports as \$report) {
                \$choices[\$report['name']] = [];

                \$graphs = Serializer::decode(\$report['graphs']);

                foreach (\$graphs as \$graph) {
                    \$graphValue                       = \$report['id'].':'.\$graph;
                    \$choices[\$report['name']][\$graph] = \$graphValue;
                }
            }
        }

        // Build a list of data sources
        \$builder->add(
            'graph',
            ChoiceType::class,
            [
                'choices'           => \$choices,
                'expanded'          => false,
                'multiple'          => false,
                'label'             => 'mautic.report.report.form.choose_graphs',
                'label_attr'        => ['class' => 'control-label'],
                'placeholder'       => false,
                'required'          => false,
                'attr'              => [
                    'class' => 'form-control',
                ],
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
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
        return "@bundles/ReportBundle/Form/Type/ReportWidgetType.php";
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
        return new Source("", "@bundles/ReportBundle/Form/Type/ReportWidgetType.php", "/app/docroot/app/bundles/ReportBundle/Form/Type/ReportWidgetType.php");
    }
}
