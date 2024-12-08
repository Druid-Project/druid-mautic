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

/* @bundles/NotificationBundle/Integration/OneSignalIntegration.php */
class __TwigTemplate_128ee3314f58dda937f24a2539bb4c95 extends Template
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

namespace Mautic\\NotificationBundle\\Integration;

use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilder;

class OneSignalIntegration extends AbstractIntegration
{
    protected bool \$coreIntegration = true;

    public function getName(): string
    {
        return 'OneSignal';
    }

    public function getIcon(): string
    {
        return 'app/bundles/NotificationBundle/Assets/img/OneSignal.png';
    }

    public function getSupportedFeatures(): array
    {
        return [
            'mobile',
            'landing_page_enabled',
            'welcome_notification_enabled',
            'tracking_page_enabled',
        ];
    }

    public function getSupportedFeatureTooltips(): array
    {
        return [
            'landing_page_enabled'  => 'mautic.integration.form.features.landing_page_enabled.tooltip',
            'tracking_page_enabled' => 'mautic.integration.form.features.tracking_page_enabled.tooltip',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function getRequiredKeyFields(): array
    {
        return [
            'app_id'        => 'mautic.notification.config.form.notification.app_id',
            'safari_web_id' => 'mautic.notification.config.form.notification.safari_web_id',
            'rest_api_key'  => 'mautic.notification.config.form.notification.rest_api_key',
            'gcm_sender_id' => 'mautic.notification.config.form.notification.gcm_sender_id',
        ];
    }

    public function getAuthenticationType(): string
    {
        return 'none';
    }

    /**
     * @param \\Mautic\\PluginBundle\\Integration\\Form|FormBuilder \$builder
     * @param array                                             \$data
     * @param string                                            \$formArea
     */
    public function appendToForm(&\$builder, \$data, \$formArea): void
    {
        if ('features' == \$formArea) {
            /* @var FormBuilder \$builder */
            \$builder->add(
                'subdomain_name',
                TextType::class,
                [
                    'label'    => 'mautic.notification.form.subdomain_name.label',
                    'required' => false,
                    'attr'     => [
                        'class' => 'form-control',
                    ],
                ]
            );

            \$builder->add(
                'platforms',
                ChoiceType::class,
                [
                    'choices' => [
                        'mautic.integration.form.platforms.ios'     => 'ios',
                        'mautic.integration.form.platforms.android' => 'android',
                    ],
                    'attr'              => [
                        'tooltip'      => 'mautic.integration.form.platforms.tooltip',
                        'data-show-on' => '{\"integration_details_supportedFeatures_0\":\"checked\"}',
                    ],
                    'expanded'    => true,
                    'multiple'    => true,
                    'label'       => 'mautic.integration.form.platforms',
                    'placeholder' => false,
                    'required'    => false,
                ]
            );
        }
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
        return "@bundles/NotificationBundle/Integration/OneSignalIntegration.php";
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
        return new Source("", "@bundles/NotificationBundle/Integration/OneSignalIntegration.php", "/app/docroot/app/bundles/NotificationBundle/Integration/OneSignalIntegration.php");
    }
}
