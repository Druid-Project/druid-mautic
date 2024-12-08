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

/* @bundles/NotificationBundle/Form/Type/ConfigType.php */
class __TwigTemplate_b42627814dda8b434256cafcba10b0ba extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 *
 * @extends AbstractType<array<mixed>>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'notification_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.notification.config.form.notification.enabled',
                'data'  => (bool) \$options['data']['notification_enabled'],
                'attr'  => [
                    'tooltip' => 'mautic.notification.config.form.notification.enabled.tooltip',
                ],
            ]
        );

        \$builder->add(
            'notification_landing_page_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.notification.config.form.notification.landingpage.enabled',
                'data'  => (bool) \$options['data']['notification_landing_page_enabled'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.landingpage.enabled.tooltip',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'notification_tracking_page_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.notification.config.form.notification.trackingpage.enabled',
                'data'  => (bool) \$options['data']['notification_tracking_page_enabled'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.trackingpage.enabled.tooltip',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'notification_app_id',
            TextType::class,
            [
                'label' => 'mautic.notification.config.form.notification.app_id',
                'data'  => \$options['data']['notification_app_id'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.app_id.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'notification_safari_web_id',
            TextType::class,
            [
                'label' => 'mautic.notification.config.form.notification.safari_web_id',
                'data'  => \$options['data']['notification_safari_web_id'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.safari_web_id.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'notification_rest_api_key',
            TextType::class,
            [
                'label' => 'mautic.notification.config.form.notification.rest_api_key',
                'data'  => \$options['data']['notification_rest_api_key'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.rest_api_key.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );
        \$builder->add(
            'gcm_sender_id',
            TextType::class,
            [
                'label' => 'mautic.notification.config.form.notification.gcm_sender_id',
                'data'  => \$options['data']['gcm_sender_id'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.gcm_sender_id.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'notification_subdomain_name',
            TextType::class,
            [
                'label' => 'mautic.notification.config.form.notification.subdomain_name',
                'data'  => \$options['data']['notification_subdomain_name'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.subdomain_name.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'welcomenotification_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.notification.config.form.notification.welcome.enabled',
                'data'  => (bool) \$options['data']['welcomenotification_enabled'],
                'attr'  => [
                    'tooltip'      => 'mautic.notification.config.form.notification.welcome.enabled.tooltip',
                    'data-show-on' => '{\"config_notificationconfig_notification_enabled_1\":\"checked\"}',
                ],
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'notificationconfig';
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
        return "@bundles/NotificationBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/NotificationBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/NotificationBundle/Form/Type/ConfigType.php");
    }
}
