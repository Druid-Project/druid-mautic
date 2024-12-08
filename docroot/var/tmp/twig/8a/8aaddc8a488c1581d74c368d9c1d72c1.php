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

/* @bundles/CoreBundle/Form/Type/SortableValueLabelListType.php */
class __TwigTemplate_ca75ee20e99e7437e619951ce70d34bf extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * @extends AbstractType<mixed>
 */
class SortableValueLabelListType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'label',
            TextType::class,
            [
                'label'          => 'mautic.core.label',
                'error_bubbling' => true,
                'attr'           => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'value',
            TextType::class,
            [
                'label'          => 'mautic.core.value',
                'error_bubbling' => true,
                'attr'           => ['class' => 'form-control'],
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        parent::buildView(\$view, \$form, \$options);

        \$view->vars['preaddonAttr']  = \$options['attr']['preaddon_attr'] ?? [];
        \$view->vars['postaddonAttr'] = \$options['attr']['postaddon_attr'] ?? [];
        \$view->vars['preaddon']      = \$options['attr']['preaddon'] ?? [];
        \$view->vars['postaddon']     = \$options['attr']['postaddon'] ?? [];
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
        return "@bundles/CoreBundle/Form/Type/SortableValueLabelListType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SortableValueLabelListType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/SortableValueLabelListType.php");
    }
}
