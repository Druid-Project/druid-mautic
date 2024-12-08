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

/* @bundles/LeadBundle/Form/Type/LeadImportType.php */
class __TwigTemplate_0b9b45c4b357951858f7044861a9288a extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Validator\\Constraints\\FileEncoding as EncodingValidation;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class LeadImportType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'file',
            FileType::class,
            [
                'label' => 'mautic.lead.import.file',
                'attr'  => [
                    'accept' => '.csv',
                    'class'  => 'form-control',
                ],
                'constraints' => [
                    new File(
                        [
                            'mimeTypes'        => ['text/*', 'application/octet-stream', 'application/csv'],
                            'mimeTypesMessage' => 'mautic.core.invalid_file_type',
                        ]
                    ),
                    new EncodingValidation(
                        [
                            'encodingFormat'        => ['UTF-8'],
                            'encodingFormatMessage' => 'mautic.core.invalid_file_encoding',
                        ]
                    ),
                    new NotBlank(
                        ['message' => 'mautic.import.file.required']
                    ),
                ],
                'error_bubbling' => true,
            ]
        );

        \$constraints = [
            new NotBlank(
                ['message' => 'mautic.core.value.required']
            ),
        ];

        \$default = (empty(\$options['data']['delimiter'])) ? ',' : htmlspecialchars(\$options['data']['delimiter']);
        \$builder->add(
            'delimiter',
            TextType::class,
            [
                'label'      => 'mautic.lead.import.delimiter',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.import.delimiter.help',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$default = (empty(\$options['data']['enclosure'])) ? '\"' : htmlspecialchars(\$options['data']['enclosure']);
        \$builder->add(
            'enclosure',
            TextType::class,
            [
                'label'      => 'mautic.lead.import.enclosure',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.import.enclosure.help',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$default = (empty(\$options['data']['escape'])) ? '\\\\' : \$options['data']['escape'];
        \$builder->add(
            'escape',
            TextType::class,
            [
                'label'      => 'mautic.lead.import.escape',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.import.escape.help',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$default = (empty(\$options['data']['batchlimit'])) ? 100 : (int) \$options['data']['batchlimit'];
        \$builder->add(
            'batchlimit',
            TextType::class,
            [
                'label'      => 'mautic.lead.import.batchlimit',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.import.batchlimit_tooltip',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$builder->add(
            'start',
            SubmitType::class,
            [
                'attr' => [
                    'class'   => 'btn btn-tertiary btn-sm',
                    'icon'    => 'ri-import-line',
                    'onclick' => \"mQuery(this).prop('disabled', true); mQuery('form[name=\\'lead_import\\']').submit();\",
                ],
                'label' => 'mautic.lead.import.upload',
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
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
        return "@bundles/LeadBundle/Form/Type/LeadImportType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/LeadImportType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/LeadImportType.php");
    }
}
