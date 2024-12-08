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

/* @bundles/CoreBundle/Form/Type/LookupType.php */
class __TwigTemplate_76bac1ae1aae5a87342d5953d60aff25 extends Template
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
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * @extends AbstractType<mixed>
 */
class LookupType extends AbstractType
{
    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$attr = \$view->vars['attr'];

        if (!is_array(\$attr)) {
            \$attr = [];
        }

        \$view->vars['attr'] = array_merge([
            'data-toggle' => 'field-lookup',
            'data-action' => 'lead:fieldList',
        ], \$attr);
    }

    public function getParent(): string
    {
        return TextType::class;
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
        return "@bundles/CoreBundle/Form/Type/LookupType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/LookupType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/LookupType.php");
    }
}
