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

/* @bundles/EmailBundle/Form/Type/VariantType.php */
class __TwigTemplate_bae867d511e5a18b5fcbcf3b8a749b3e extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class VariantType extends AbstractType
{
    public function __construct(
        private EmailModel \$emailModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('weight',
            IntegerType::class,
            [
                'label'      => 'mautic.core.ab_test.form.traffic_weight',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.core.ab_test.form.traffic_weight.help',
                ],
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.email.variant.weight.notblank']
                    ),
                ],
            ]
        );

        \$abTestWinnerCriteria = \$this->emailModel->getBuilderComponents(null, 'abTestWinnerCriteria');

        if (!empty(\$abTestWinnerCriteria)) {
            \$criteria = \$abTestWinnerCriteria['criteria'];
            \$choices  = \$abTestWinnerCriteria['choices'];

            \$builder->add(
                'winnerCriteria',
                ChoiceType::class, [
                    'label'             => 'mautic.core.ab_test.form.winner',
                    'label_attr'        => ['class' => 'control-label'],
                    'attr'              => [
                        'class'    => 'form-control',
                        'onchange' => 'Mautic.getAbTestWinnerForm(\\'email\\', \\'emailform\\', this);',
                    ],
                    'expanded'    => false,
                    'multiple'    => false,
                    'choices'     => \$choices,
                    'placeholder' => 'mautic.core.form.chooseone',
                    'constraints' => [
                        new NotBlank(
                            ['message' => 'mautic.core.ab_test.winner_criteria.not_blank']
                        ),
                    ],
                ]
            );

            \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) use (\$criteria): void {
                \$form = \$event->getForm();
                \$data = \$event->getData();

                if (isset(\$data['winnerCriteria'])) {
                    if (!empty(\$criteria[\$data['winnerCriteria']]['formType'])) {
                        \$formTypeOptions = [
                            'required' => false,
                            'label'    => false,
                        ];
                        if (!empty(\$criteria[\$data]['formTypeOptions'])) {
                            \$formTypeOptions = array_merge(\$formTypeOptions, \$criteria[\$data]['formTypeOptions']);
                        }
                        \$form->add('properties', \$criteria[\$data]['formType'], \$formTypeOptions);
                    }
                }
            });
        }
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'emailvariant';
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
        return "@bundles/EmailBundle/Form/Type/VariantType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/VariantType.php", "/app/docroot/app/bundles/EmailBundle/Form/Type/VariantType.php");
    }
}
