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

/* @bundles/WebhookBundle/Form/Type/ConfigType.php */
class __TwigTemplate_119624234c93d854b2d30b50ef981c56 extends Template
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
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<array<mixed>>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('queue_mode', ChoiceType::class, [
            'choices' => [
                'mautic.webhook.config.immediate_process' => 'immediate_process',
                'mautic.webhook.config.cron_process'      => 'command_process',
            ],
            'label' => 'mautic.webhook.config.form.queue.mode',
            'attr'  => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.webhook.config.form.queue.mode.tooltip',
            ],
            'placeholder' => false,
            'constraints' => [
                new NotBlank(
                    [
                        'message' => 'mautic.core.value.required',
                    ]
                ),
            ],
        ]);

        \$builder->add('events_orderby_dir', ChoiceType::class, [
            'choices' => [
                'mautic.webhook.config.event.orderby.chronological'         => Criteria::ASC,
                'mautic.webhook.config.event.orderby.reverse.chronological' => Criteria::DESC,
            ],
            'label' => 'mautic.webhook.config.event.orderby',
            'attr'  => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.webhook.config.event.orderby.tooltip',
            ],
            'required'          => false,
        ]);

        \$builder->add(
            'webhook_email_details',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.webhook.config.email.details',
                'data'  => (bool) (\$options['data']['webhook_email_details'] ?? null),
                'attr'  => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.webhook.config.email.details.tooltip',
                ],
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'webhookconfig';
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
        return "@bundles/WebhookBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/WebhookBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/WebhookBundle/Form/Type/ConfigType.php");
    }
}
