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

/* @bundles/ReportBundle/Tests/Form/Type/FilterSelectorTypeTest.php */
class __TwigTemplate_0c734b263b78448e8b7bb5c706161c53 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Form\\Type;

use Mautic\\ReportBundle\\Form\\Type\\FilterSelectorType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;

final class FilterSelectorTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FormBuilderInterface
     */
    private MockObject \$formBuilder;

    private FilterSelectorType \$FilterSelectorType;

    protected function setUp(): void
    {
        \$this->formBuilder         = \$this->createMock(FormBuilderInterface::class);
        \$this->FilterSelectorType  = new FilterSelectorType();
    }

    public function testBuildFormWithTagFilter(): void
    {
        \$options = [
            'filterList' => [
                'tag' => 'Tag',
            ],
            'operatorList' => [
                'tag' => [
                    'in'    => 'including',
                    'notIn' => 'excluding',
                ],
            ],
        ];

        \$this->formBuilder
            ->method('addEventListener')
            ->withConsecutive(
                [
                    FormEvents::PRE_SET_DATA,
                    \$this->callback(
                        function (callable \$formModifier) {
                            /** @var FormInterface<FormBuilderInterface>|MockObject \$form */
                            \$form = \$this->createMock(FormInterface::class);
                            \$data = [
                                'column'    => 'tag',
                                'glue'      => 'and',
                                'dynamic'   => 0,
                                'condition' => 'in',
                                'value'     => ['1', '2'],
                            ];

                            \$form->expects(\$this->exactly(2))
                                ->method('add')
                                ->withConsecutive([
                                    'condition',
                                    ChoiceType::class,
                                    [
                                        'choices'           => [
                                            'including' => 'in',
                                            'excluding' => 'notIn',
                                        ],
                                        'expanded'          => false,
                                        'multiple'          => false,
                                        'label'             => 'mautic.report.report.label.filtercondition',
                                        'label_attr'        => ['class' => 'control-label filter-condition'],
                                        'placeholder'       => false,
                                        'required'          => false,
                                        'attr'              => [
                                            'class' => 'form-control not-chosen',
                                        ],
                                    ],
                                ], [
                                    'value', CollectionType::class, [
                                        'entry_type'    => TextType::class,
                                        'allow_add'     => true,
                                        'allow_delete'  => true,
                                        'label'         => 'mautic.report.report.label.filtervalue',
                                        'label_attr'    => ['class' => 'control-label'],
                                        'attr'          => ['class' => 'form-control filter-value'],
                                        'required'      => false,
                                    ],
                                ]);

                            \$formModifier(new FormEvent(\$form, \$data));

                            return true;
                        }
                    ),
                ],
            );

        \$this->FilterSelectorType->buildForm(\$this->formBuilder, \$options);
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
        return "@bundles/ReportBundle/Tests/Form/Type/FilterSelectorTypeTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Form/Type/FilterSelectorTypeTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Form/Type/FilterSelectorTypeTest.php");
    }
}
