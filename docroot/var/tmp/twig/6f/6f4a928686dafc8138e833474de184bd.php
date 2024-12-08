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

/* @bundles/CampaignBundle/Form/Type/CampaignLeadSourceType.php */
class __TwigTemplate_de54a5a8a9204bb25c4631a6fe19e945 extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class CampaignLeadSourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$sourceType    = \$options['data']['sourceType'];
        \$sourceChoices = \$options['source_choices'] ?? [];
        foreach (\$sourceChoices as \$key => \$val) {
            \$sourceChoices[\$key] = \$val.' ('.\$key.')';
        }

        switch (\$sourceType) {
            case 'lists':
                \$builder->add(
                    'lists',
                    ChoiceType::class,
                    [
                        'choices'           => array_flip(\$sourceChoices),
                        'multiple'          => true,
                        'label'             => 'mautic.campaign.leadsource.lists',
                        'label_attr'        => ['class' => 'control-label'],
                        'attr'              => [
                            'class' => 'form-control',
                        ],
                        'constraints' => [
                            new NotBlank(
                                [
                                    'message' => 'mautic.core.value.required',
                                ]
                            ),
                        ],
                    ]
                );
                break;
            case 'forms':
                \$builder->add(
                    'forms',
                    ChoiceType::class,
                    [
                        'choices'           => array_flip(\$sourceChoices),
                        'multiple'          => true,
                        'label'             => 'mautic.campaign.leadsource.forms',
                        'label_attr'        => ['class' => 'control-label'],
                        'attr'              => [
                            'class' => 'form-control',
                        ],
                        'constraints' => [
                            new NotBlank(
                                [
                                    'message' => 'mautic.core.value.required',
                                ]
                            ),
                        ],
                    ]
                );
                break;
            default:
                break;
        }

        \$builder->add('sourceType', HiddenType::class);

        \$builder->add('droppedX', HiddenType::class);

        \$builder->add('droppedY', HiddenType::class);

        \$update = !empty(\$options['data'][\$sourceType]);
        if (!empty(\$update)) {
            \$btnValue = 'mautic.core.form.update';
            \$btnIcon  = 'ri-edit-line';
        } else {
            \$btnValue = 'mautic.core.form.add';
            \$btnIcon  = 'ri-add-line';
        }

        \$builder->add('buttons', FormButtonsType::class, [
            'save_text'       => \$btnValue,
            'save_icon'       => \$btnIcon,
            'save_onclick'    => 'Mautic.submitCampaignSource(event)',
            'apply_text'      => false,
            'container_class' => 'bottom-form-buttons',
        ]);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(['source_choices']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'campaign_leadsource';
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
        return "@bundles/CampaignBundle/Form/Type/CampaignLeadSourceType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignLeadSourceType.php", "/app/docroot/app/bundles/CampaignBundle/Form/Type/CampaignLeadSourceType.php");
    }
}
