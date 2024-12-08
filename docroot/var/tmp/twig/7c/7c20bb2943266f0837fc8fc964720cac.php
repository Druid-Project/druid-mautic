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

/* @bundles/CoreBundle/Form/Type/AlertType.php */
class __TwigTemplate_dfd91d9e6f4db7f1d9ae5f31ff102af0 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class AlertType extends AbstractType
{
    /**
     * @param FormInterface<FormInterface> \$form
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        parent::buildView(\$view, \$form, \$options);

        \$view->vars['message']     = \$options['message'];
        \$view->vars['messageType'] = \$options['message_type'];
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        parent::configureOptions(\$resolver);

        \$resolver->setDefaults(
            [
                'label'         => false,
                'mapped'        => false,
                'required'      => false,
                'message_type'  => 'info',
            ]
        );

        \$resolver->setRequired(['message']);
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
        return "@bundles/CoreBundle/Form/Type/AlertType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/AlertType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/AlertType.php");
    }
}
