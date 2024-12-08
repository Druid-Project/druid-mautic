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

/* @bundles/CoreBundle/Form/Type/YesNoButtonGroupType.php */
class __TwigTemplate_4281c27c1adb96cf5eb55d0a4e081be7 extends Template
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
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class YesNoButtonGroupType extends AbstractType
{
    public function getParent()
    {
        return ButtonGroupType::class;
    }

    public function getBlockPrefix()
    {
        return 'yesno_button_group';
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'choices'           => fn (Options \$options): array => [
                    \$options['no_label']  => \$options['no_value'],
                    \$options['yes_label'] => \$options['yes_value'],
                ],
                'choice_value'      => function (\$choiceKey) {
                    if (null === \$choiceKey || '' === \$choiceKey) {
                        return null;
                    }

                    return (is_string(\$choiceKey) && !is_numeric(\$choiceKey)) ? \$choiceKey : (int) \$choiceKey;
                },
                'expanded'          => true,
                'multiple'          => false,
                'label_attr'        => ['class' => 'control-label'],
                'label'             => 'mautic.core.form.active',
                'placeholder'       => false,
                'required'          => false,
                'no_label'          => 'mautic.core.form.no',
                'no_value'          => 0,
                'yes_label'         => 'mautic.core.form.yes',
                'yes_value'         => 1,
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
        return "@bundles/CoreBundle/Form/Type/YesNoButtonGroupType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/YesNoButtonGroupType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/YesNoButtonGroupType.php");
    }
}
