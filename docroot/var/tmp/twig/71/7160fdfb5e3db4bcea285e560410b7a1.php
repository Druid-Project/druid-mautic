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

/* @bundles/StageBundle/Form/Type/GenericStageActionType.php */
class __TwigTemplate_d57ad88f44c997cdb72c4166823d2c53 extends Template
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

namespace Mautic\\StageBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class GenericStageActionType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$default = (empty(\$options['data']['weight'])) ? 0 : (int) \$options['data']['weight'];
        \$builder->add('weight', NumberType::class, [
            'label'      => 'mautic.stage.action.weight',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.stage.action.weight.help',
            ],
            'scale' => 0,
            'data'  => \$default,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'genericstage_settings';
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
        return "@bundles/StageBundle/Form/Type/GenericStageActionType.php";
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
        return new Source("", "@bundles/StageBundle/Form/Type/GenericStageActionType.php", "/app/docroot/app/bundles/StageBundle/Form/Type/GenericStageActionType.php");
    }
}
