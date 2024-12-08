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

/* @bundles/AssetBundle/Form/Type/ConfigType.php */
class __TwigTemplate_8341fdbb0e0c5fd1f535a8bd89cbfbea extends Template
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

namespace Mautic\\AssetBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
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
            'upload_dir',
            TextType::class,
            [
                'label'      => 'mautic.asset.config.form.upload.dir',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.asset.config.form.upload.dir.tooltip',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'mautic.core.value.required',
                    ]),
                ],
            ]
        );

        \$builder->add(
            'max_size',
            TextType::class,
            [
                'label'      => 'mautic.asset.config.form.max.size',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.asset.config.form.max.size.tooltip',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'mautic.core.value.required',
                    ]),
                ],
            ]
        );

        \$arrayStringTransformer = new ArrayStringTransformer();
        \$builder->add(
            \$builder->create(
                'allowed_extensions',
                TextType::class,
                [
                    'label'      => 'mautic.asset.config.form.allowed.extensions',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.asset.config.form.allowed.extensions.tooltip',
                    ],
                    'required' => false,
                ]
            )->addViewTransformer(\$arrayStringTransformer)
        );
    }

    public function getBlockPrefix()
    {
        return 'assetconfig';
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
        return "@bundles/AssetBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/AssetBundle/Form/Type/ConfigType.php");
    }
}
