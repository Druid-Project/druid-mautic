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

/* @bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php */
class __TwigTemplate_15d9cef7ca8a01127c294716ca818017 extends Template
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

use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class FormSubmitActionDownloadFileType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'asset',
            AssetListType::class,
            [
                'expanded'    => false,
                'multiple'    => false,
                'label'       => 'mautic.asset.form.submit.assets',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => 'mautic.asset.form.submit.latest.category',
                'required'    => false,
                'attr'        => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.asset.form.submit.assets_descr',
                ],
            ]
        );

        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'label'         => 'mautic.asset.form.submit.latest.category',
                'label_attr'    => ['class' => 'control-label'],
                'placeholder'   => false,
                'required'      => false,
                'bundle'        => 'asset',
                'return_entity' => false,
                'attr'          => [
                    'class'        => 'form-control',
                    'tooltip'      => 'mautic.asset.form.submit.latest.category_descr',
                    'data-show-on' => '{\"formaction_properties_asset\":\"\"}',
                ],
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'asset_submitaction_downloadfile';
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
        return "@bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php", "/app/docroot/app/bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php");
    }
}
