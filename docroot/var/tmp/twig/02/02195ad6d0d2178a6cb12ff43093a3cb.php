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

/* @bundles/PageBundle/Form/Type/AbTestPropertiesType.php */
class __TwigTemplate_f42e0de467ea5d1b8c92afc94964a83d extends Template
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
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class AbTestPropertiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$options = ['label' => false];
        if (isset(\$options['formTypeOptions'])) {
            \$options = array_merge(\$options, \$options['formTypeOptions']);
        }
        \$builder->add('properties', \$options['formType'], \$options);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefined([
            'formType',
            'formTypeOptions',
        ]);
    }

    public function getBlockPrefix()
    {
        return 'page_abtest_settings';
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
        return "@bundles/PageBundle/Form/Type/AbTestPropertiesType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/AbTestPropertiesType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/AbTestPropertiesType.php");
    }
}
