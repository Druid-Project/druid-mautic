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

/* @bundles/SmsBundle/Form/Type/ConfigType.php */
class __TwigTemplate_8bfabede52e43c944fde2b81caa8a883 extends Template
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

namespace Mautic\\SmsBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class ConfigType extends AbstractType
{
    public const SMS_DISABLE_TRACKABLE_URLS = 'sms_disable_trackable_urls';

    public function __construct(
        private TransportChain \$transportChain,
        private TranslatorInterface \$translator
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$choices    = [];
        \$transports = \$this->transportChain->getEnabledTransports();
        foreach (\$transports as \$transportServiceId=>\$transport) {
            \$choices[\$this->translator->trans(\$transportServiceId)] = \$transportServiceId;
        }

        \$builder->add('sms_transport', ChoiceType::class, [
            'label'      => 'mautic.sms.config.select_default_transport',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.sms.config.select_default_transport',
            ],
            'choices'           => \$choices,
        ]);

        \$builder->add(
            self::SMS_DISABLE_TRACKABLE_URLS,
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.sms.config.form.sms.disable_trackable_urls',
                'attr'  => [
                    'tooltip' => 'mautic.sms.config.form.sms.disable_trackable_urls.tooltip',
                ],
                'data'=> !empty(\$options['data'][self::SMS_DISABLE_TRACKABLE_URLS]) ? true : false,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'smsconfig';
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
        return "@bundles/SmsBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/SmsBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/SmsBundle/Form/Type/ConfigType.php");
    }
}
