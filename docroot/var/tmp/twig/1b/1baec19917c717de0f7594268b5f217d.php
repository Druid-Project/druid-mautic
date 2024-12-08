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

/* @bundles/LeadBundle/Form/Type/SegmentConfigType.php */
class __TwigTemplate_a844a41ed2a665f6e2f219d83c7d4a65 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class SegmentConfigType extends AbstractType
{
    /**
     * @param FormBuilderInterface<FormBuilderInterface> \$builder
     * @param mixed[]                                    \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'segment_rebuild_time_warning',
            NumberType::class,
            [
                'label'      => 'mautic.lead.list.form.config.segment_rebuild_time_warning',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.list.form.config.segment_rebuild_time_warning.tooltip',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'segment_build_time_warning',
            NumberType::class,
            [
                'label'      => 'mautic.lead.list.form.config.segment_build_time_warning',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.list.form.config.segment_build_time_warning.tooltip',
                ],
                'required' => false,
            ]
        );
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
        return "@bundles/LeadBundle/Form/Type/SegmentConfigType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/SegmentConfigType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/SegmentConfigType.php");
    }
}
