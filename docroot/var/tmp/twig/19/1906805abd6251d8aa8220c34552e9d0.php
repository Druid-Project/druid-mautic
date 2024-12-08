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

/* @bundles/NotificationBundle/Form/Type/MobileNotificationListType.php */
class __TwigTemplate_9d3bc3fdc9643a3210fcce00765f9b71 extends Template
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

namespace Mautic\\NotificationBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class MobileNotificationListType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'modal_route'         => 'mautic_mobile_notification_action',
                'modal_header'        => 'mautic.notification.mobile.header.new',
                'model'               => 'notification',
                'model_lookup_method' => 'getLookupResults',
                'lookup_arguments'    => fn (Options \$options): array => [
                    'type'    => 'mobile_notification',
                    'filter'  => '\$data',
                    'limit'   => 0,
                    'start'   => 0,
                    'options' => [
                        'notification_type' => \$options['notification_type'],
                    ],
                ],
                'ajax_lookup_action' => function (Options \$options): string {
                    \$query = [
                        'notification_type' => \$options['notification_type'],
                    ];

                    return 'notification:getLookupChoiceList&'.http_build_query(\$query);
                },
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'notification_type' => 'template',
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'mobilenotification_list';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityLookupType::class;
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
        return "@bundles/NotificationBundle/Form/Type/MobileNotificationListType.php";
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
        return new Source("", "@bundles/NotificationBundle/Form/Type/MobileNotificationListType.php", "/app/docroot/app/bundles/NotificationBundle/Form/Type/MobileNotificationListType.php");
    }
}
