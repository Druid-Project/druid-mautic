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

/* @bundles/MessengerBundle/Form/Type/ConfigType.php */
class __TwigTemplate_fcd52ec88e6aab0289d7e75f473b4fd3 extends Template
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

namespace Mautic\\MessengerBundle\\Form\\Type;

use Mautic\\ConfigBundle\\Form\\Type\\DsnType;
use Mautic\\MessengerBundle\\Validator\\Dsn;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ConfigType extends AbstractType
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$testButton = [
            'action' => 'messenger:sendTestMessage',
            'label'  => \$this->translator->trans('mautic.messenger.config.dsn.send_test_message'),
        ];

        \$builder->add(
            'messenger_dsn_email',
            DsnType::class,
            [
                'constraints' => [new Dsn()],
                'test_button' => \$testButton,
            ]
        );

        \$builder->add(
            'messenger_dsn_hit',
            DsnType::class,
            [
                'constraints' => [new Dsn()],
                'test_button' => \$testButton,
            ]
        );

        \$builder->add(
            'messenger_dsn_failed',
            DsnType::class,
            [
                'constraints' => [new Dsn()],
                'required'    => false,
                'test_button' => \$testButton,
            ]
        );

        \$builder->add(
            'messenger_retry_strategy_max_retries',
            NumberType::class,
            [
                'label'      => 'mautic.messenger.config.retry_strategy.max_retries',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class' => 'form-control',
                ],
            ]
        );

        \$builder->add(
            'messenger_retry_strategy_delay',
            NumberType::class,
            [
                'label'      => 'mautic.messenger.config.retry_strategy.delay',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class' => 'form-control',
                ],
            ]
        );

        \$builder->add(
            'messenger_retry_strategy_multiplier',
            NumberType::class,
            [
                'scale'      => 2,
                'label'      => 'mautic.messenger.config.retry_strategy.multiplier',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class' => 'form-control',
                ],
            ]
        );

        \$builder->add(
            'messenger_retry_strategy_max_delay',
            NumberType::class,
            [
                'label'      => 'mautic.messenger.config.retry_strategy.max_delay',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class' => 'form-control',
                ],
            ]
        );
    }

    public function getBlockPrefix(): string
    {
        return 'messengerconfig';
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
        return "@bundles/MessengerBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/MessengerBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/MessengerBundle/Form/Type/ConfigType.php");
    }
}
