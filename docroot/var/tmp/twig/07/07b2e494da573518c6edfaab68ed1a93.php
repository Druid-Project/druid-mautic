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

/* @bundles/FormBundle/Form/Type/FormFieldSelectType.php */
class __TwigTemplate_1b1b1303ac19bcbd4e7f168fa32dc357 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class FormFieldSelectType extends AbstractType
{
    use SortableListTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if ('select' === \$options['field_type']) {
            \$this->addSortableList(\$builder, \$options);
        }

        \$builder->add(
            'placeholder',
            TextType::class,
            [
                'label'      => 'mautic.form.field.form.emptyvalue',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        if (!empty(\$options['parentData'])) {
            \$default = (empty(\$options['parentData']['properties']['multiple'])) ? false : true;
        } else {
            \$default = false;
        }
        \$builder->add(
            'multiple',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.field.form.multiple',
                'data'  => \$default,
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'field_type' => 'select',
                'parentData' => [],
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'formfield_select';
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
        return "@bundles/FormBundle/Form/Type/FormFieldSelectType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldSelectType.php", "/app/docroot/app/bundles/FormBundle/Form/Type/FormFieldSelectType.php");
    }
}
