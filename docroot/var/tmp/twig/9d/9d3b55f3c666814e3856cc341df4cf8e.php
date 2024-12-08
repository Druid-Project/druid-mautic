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

/* @bundles/ApiBundle/Form/Type/ConfigType.php */
class __TwigTemplate_bfc36233fd42591567134732ff5494e0 extends Template
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

namespace Mautic\\ApiBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'api_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.api.config.form.api.enabled',
                'data'  => isset(\$options['data']['api_enabled']) && (bool) \$options['data']['api_enabled'],
                'attr'  => [
                    'tooltip' => 'mautic.api.config.form.api.enabled.tooltip',
                ],
            ]
        );

        \$builder->add(
            'api_enable_basic_auth',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.api.config.form.api.basic_auth_enabled',
                'data'  => isset(\$options['data']['api_enable_basic_auth']) && (bool) \$options['data']['api_enable_basic_auth'],
                'attr'  => [
                    'tooltip' => 'mautic.api.config.form.api.basic_auth.tooltip',
                ],
            ]
        );

        \$builder->add(
            'api_oauth2_access_token_lifetime',
            NumberType::class,
            [
                'label' => 'mautic.api.config.form.api.oauth2_access_token_lifetime',
                'attr'  => [
                    'tooltip'      => 'mautic.api.config.form.api.oauth2_access_token_lifetime.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_apiconfig_api_enabled_1\":\"checked\"}',
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

        \$builder->add(
            'api_oauth2_refresh_token_lifetime',
            NumberType::class,
            [
                'label' => 'mautic.api.config.form.api.oauth2_refresh_token_lifetime',
                'attr'  => [
                    'tooltip'      => 'mautic.api.config.form.api.oauth2_refresh_token_lifetime.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_apiconfig_api_enabled_1\":\"checked\"}',
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
    }

    public function getBlockPrefix()
    {
        return 'apiconfig';
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
        return "@bundles/ApiBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/ApiBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/ApiBundle/Form/Type/ConfigType.php");
    }
}
