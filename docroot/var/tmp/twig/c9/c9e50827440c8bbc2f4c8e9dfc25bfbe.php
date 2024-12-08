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

/* @bundles/CampaignBundle/Form/Type/CampaignType.php */
class __TwigTemplate_84d6b08ac9ce05e76b5a07309295c54e extends Template
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

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType;
use Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<Campaign>
 */
class CampaignType extends AbstractType
{
    public function __construct(
        private CorePermissions \$security,
        private TranslatorInterface \$translator
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['description' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('campaign', \$options));

        \$builder->add('name', TextType::class, [
            'label'      => 'mautic.core.name',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => ['class' => 'form-control'],
        ]);

        \$builder->add('description', TextareaType::class, [
            'label'      => 'mautic.core.description',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => ['class' => 'form-control editor'],
            'required'   => false,
        ]);

        \$builder->add('allowRestart',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.campaign.allow_restart',
                'attr'  => [
                    'tooltip' => 'mautic.campaign.allow_restart.tooltip',
                ],
            ]
        );

        // add category
        \$builder->add('category', CategoryListType::class, [
            'bundle' => 'campaign',
        ]);

        \$attr = [];
        if (!empty(\$options['data']) && \$options['data']->getId()) {
            \$readonly = !\$this->security->isGranted('campaign:campaigns:publish');
            \$data     = \$options['data']->isPublished(false);
            \$attr     = [
                'onchange'              => 'Mautic.showCampaignConfirmation(mQuery(this));',
                'data-toggle'           => 'confirmation',
                'data-message'          => \$this->translator->trans('mautic.campaign.form.confirmation.message'),
                'data-confirm-text'     => \$this->translator->trans('mautic.campaign.form.confirmation.confirm_text'),
                'data-confirm-callback' => 'dismissConfirmation',
                'data-cancel-text'      => \$this->translator->trans('mautic.campaign.form.confirmation.cancel_text'),
                'data-cancel-callback'  => 'setPublishedButtonToYes',
                'class'                 => 'btn btn-ghost',
            ];
        } elseif (!\$this->security->isGranted('campaign:campaigns:publish')) {
            \$readonly = true;
            \$data     = false;
        } else {
            \$readonly = false;
            \$data     = false;
        }

        \$attr['readonly'] = \$readonly;

        \$builder->add('isPublished', YesNoButtonGroupType::class, [
            'data' => \$data,
            'attr' => \$attr,
        ]);

        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);

        \$builder->add('sessionId', HiddenType::class, [
            'mapped' => false,
        ]);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }

        \$builder->add('buttons', FormButtonsType::class, [
            'pre_extra_buttons' => [
                [
                    'name'  => 'builder',
                    'label' => 'mautic.campaign.campaign.launch.builder',
                    'attr'  => [
                        'class'   => 'btn btn-ghost btn-dnd',
                        'icon'    => 'ri-organization-chart',
                        'onclick' => 'Mautic.launchCampaignEditor();',
                    ],
                ],
            ],
        ]);

        \$builder->add('version', HiddenType::class, [
            'mapped' => false,
        ]);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
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
        return "@bundles/CampaignBundle/Form/Type/CampaignType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignType.php", "/app/docroot/app/bundles/CampaignBundle/Form/Type/CampaignType.php");
    }
}
