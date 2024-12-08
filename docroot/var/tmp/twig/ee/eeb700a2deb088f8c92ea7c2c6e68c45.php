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

/* @bundles/WebhookBundle/Form/Type/WebhookType.php */
class __TwigTemplate_5e0565d2b3e7ec0158c1694956166086 extends Template
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

namespace Mautic\\WebhookBundle\\Form\\Type;

use Doctrine\\Common\\Collections\\Criteria;
use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Form\\DataTransformer\\EventsToArrayTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Webhook>
 */
class WebhookType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['description' => 'strict_html']));

        /** @var Webhook \$webhook */
        \$webhook = \$builder->getData();

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.core.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => true,
            ]
        );

        \$builder->add(
            'description',
            TextareaType::class,
            [
                'label'    => 'mautic.webhook.form.description',
                'required' => false,
                'attr'     => [
                    'class' => 'form-control',
                ],
            ]
        );

        \$builder->add(
            'webhookUrl',
            UrlType::class,
            [
                'label'      => 'mautic.webhook.form.webhook_url',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => true,
            ]
        );

        \$builder->add(
            'secret',
            TextType::class,
            [
                'label'      => 'mautic.webhook.form.secret',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.webhook.secret.tooltip',
                ],
                'data'     => \$webhook->getSecret() ?? EncryptionHelper::generateKey(),
                'required' => false,
            ]
        );

        \$events = \$options['events'];

        \$choices = [];
        foreach (\$events as \$type => \$event) {
            \$choices[\$event['label']] = \$type;
        }

        \$builder->add(
            'events',
            ChoiceType::class,
            [
                'choices'    => \$choices,
                'multiple'   => true,
                'expanded'   => true,
                'label'      => 'mautic.webhook.form.webhook.events',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => ''],
            ]
        );

        \$builder->get('events')->addModelTransformer(new EventsToArrayTransformer(\$options['data']));

        \$builder->add('buttons', FormButtonsType::class);

        \$builder->add(
            'sendTest',
            ButtonType::class,
            [
                'attr'  => ['class' => 'btn btn-tertiary', 'onclick' => 'Mautic.sendHookTest(this)'],
                'label' => 'mautic.webhook.send.test.payload',
            ]
        );

        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'bundle' => 'Webhook',
            ]
        );

        \$builder->add('isPublished', YesNoButtonGroupType::class);

        \$builder->add(
            'eventsOrderbyDir',
            ChoiceType::class,
            [
                'choices' => [
                    'mautic.webhook.config.event.orderby.chronological'         => Criteria::ASC,
                    'mautic.webhook.config.event.orderby.reverse.chronological' => Criteria::DESC,
                ],
                'label' => 'mautic.webhook.config.event.orderby',
                'attr'  => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.webhook.config.event.orderby.tooltip',
                ],
                'placeholder' => 'mautic.core.form.default',
                'required'    => false,
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'data_class' => Webhook::class,
            ]
        );

        \$resolver->setDefined(['events']);
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
        return "@bundles/WebhookBundle/Form/Type/WebhookType.php";
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
        return new Source("", "@bundles/WebhookBundle/Form/Type/WebhookType.php", "/app/docroot/app/bundles/WebhookBundle/Form/Type/WebhookType.php");
    }
}
