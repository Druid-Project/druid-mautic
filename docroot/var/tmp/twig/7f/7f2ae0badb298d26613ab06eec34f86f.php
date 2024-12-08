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

/* @bundles/DashboardBundle/Form/Type/UploadType.php */
class __TwigTemplate_a40d66067f8bcd5add0adba2e84209d3 extends Template
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

namespace Mautic\\DashboardBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class UploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'file',
            FileType::class,
            [
                'label' => 'mautic.lead.import.file',
                'attr'  => [
                    'accept' => '.json',
                    'class'  => 'form-control',
                ],
            ]
        );

        \$builder->add(
            'start',
            SubmitType::class,
            [
                'attr' => [
                    'class'   => 'btn btn-primary',
                    'icon'    => 'ri-upload-line',
                    'onclick' => \"mQuery(this).prop('disabled', true); mQuery('form[name=\\'dashboard_upload\\']').submit();\",
                ],
                'label' => 'mautic.lead.import.upload',
            ]);
        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'dashboard_upload';
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
        return "@bundles/DashboardBundle/Form/Type/UploadType.php";
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
        return new Source("", "@bundles/DashboardBundle/Form/Type/UploadType.php", "/app/docroot/app/bundles/DashboardBundle/Form/Type/UploadType.php");
    }
}
