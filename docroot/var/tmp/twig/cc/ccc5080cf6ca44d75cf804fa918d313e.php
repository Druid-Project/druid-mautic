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

/* @bundles/PluginBundle/Form/Type/CompanyFieldsType.php */
class __TwigTemplate_8e9233aa2984efecbf9a06d6c6abd206 extends Template
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

namespace Mautic\\PluginBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class CompanyFieldsType extends AbstractType
{
    use FieldsTypeTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$this->buildFormFields(\$builder, \$options, \$options['integration_fields'], \$options['mautic_fields'], 'company', \$options['limit'], \$options['start']);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$this->configureFieldOptions(\$resolver, 'company');
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'integration_company_fields';
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$this->buildFieldView(\$view, \$options);
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
        return "@bundles/PluginBundle/Form/Type/CompanyFieldsType.php";
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
        return new Source("", "@bundles/PluginBundle/Form/Type/CompanyFieldsType.php", "/app/docroot/app/bundles/PluginBundle/Form/Type/CompanyFieldsType.php");
    }
}
