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

/* @bundles/FormBundle/Form/Type/FormFieldGroupType.php */
class __TwigTemplate_8323fc80e65f5e93140119f6dda86bf7 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class FormFieldGroupType extends AbstractType
{
    use SortableListTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'labelAttributes',
            TextType::class,
            [
                'label'      => 'mautic.form.field.group.labelattr',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'     => 'form-control',
                    'tooltip'   => 'mautic.form.field.help.group.labelattr',
                    'maxlength' => '191',
                ],
                'required' => false,
            ]
        );

        if (isset(\$options['data']['optionlist'])) {
            \$data = \$options['data']['optionlist'];
        } elseif (isset(\$options['data']['list'])) {
            // BC support
            \$data = ['list' => \$options['data']['list']];
        } else {
            \$data = [];
        }

        \$this->addSortableList(\$builder, \$options, 'optionlist', \$data);
    }

    public function getBlockPrefix()
    {
        return 'formfield_group';
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
        return "@bundles/FormBundle/Form/Type/FormFieldGroupType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldGroupType.php", "/app/docroot/app/bundles/FormBundle/Form/Type/FormFieldGroupType.php");
    }
}
