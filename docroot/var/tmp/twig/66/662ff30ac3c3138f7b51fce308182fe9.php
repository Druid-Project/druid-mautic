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

/* @bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php */
class __TwigTemplate_f3d5b4b479e959e0ed132e6af1f1c5e7 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\FormBundle\\Form\\Type\\FormFieldConditionType;
use Mautic\\FormBundle\\Helper\\PropertiesAccessor;
use Mautic\\FormBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

final class FormFieldConditionTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FieldModel
     */
    private MockObject \$fieldModel;

    /**
     * @var MockObject|PropertiesAccessor
     */
    private MockObject \$propertiesAccessor;

    /**
     * @var MockObject&FormBuilderInterface<string|FormBuilderInterface>
     */
    private MockObject \$formBuilder;

    private FormFieldConditionType \$form;

    protected function setUp(): void
    {
        \$this->fieldModel         = \$this->createMock(FieldModel::class);
        \$this->propertiesAccessor = \$this->createMock(PropertiesAccessor::class);
        \$this->formBuilder        = \$this->createMock(FormBuilderInterface::class);
        \$this->form               = new FormFieldConditionType(
            \$this->fieldModel,
            \$this->propertiesAccessor
        );
    }

    public function testBuildFormIfParentIsEmpty(): void
    {
        \$options = [];

        \$this->fieldModel->expects(\$this->never())
            ->method('getSessionFields');

        \$this->propertiesAccessor->expects(\$this->never())
            ->method('getChoices');

        \$this->formBuilder->expects(\$this->exactly(3))
            ->method('add')
            ->withConsecutive(
                [
                    'values',
                    ChoiceType::class,
                    [
                        'choices'  => [],
                        'multiple' => true,
                        'label'    => false,
                        'attr'     => [
                            'class'        => 'form-control',
                            'data-show-on' => '{\"formfield_conditions_any_0\": \"checked\",\"formfield_conditions_expr\": \"notIn\"}',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'any',
                    YesNoButtonGroupType::class,
                    [
                        'label' => 'mautic.form.field.form.condition.any_value',
                        'attr'  => [
                            'data-show-on' => '{\"formfield_conditions_expr\": \"in\"}',
                        ],
                        'data' => false,
                    ],
                ],
                [
                    'expr',
                    ChoiceType::class,
                    [
                        'choices'  => [
                            'mautic.core.operator.in'    => 'in',
                            'mautic.core.operator.notin' => 'notIn',
                        ],
                        'label'       => false,
                        'placeholder' => false,
                        'attr'        => [
                            'class' => 'form-control',
                        ],
                        'required' => false,
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
    }

    public function testBuildFormIfParentExists(): void
    {
        \$options = [
            'parent' => 'parent_field_id',
            'formId' => 'form_id',
        ];

        \$this->fieldModel->expects(\$this->once())
            ->method('getSessionFields')
            ->with('form_id')
            ->willReturn(['parent_field_id' => ['some_field_props_here']]);

        \$this->propertiesAccessor->expects(\$this->once())
            ->method('getProperties')
            ->with(['some_field_props_here'])
            ->willReturn(['some_choice_here' => 'Some choice here']);

        \$this->propertiesAccessor->expects(\$this->once())
            ->method('getChoices')
            ->with(['some_choice_here' => 'Some choice here'])
            ->willReturn(['some_choice_here' => 'Some choice here']);

        \$this->formBuilder->method('add')
            ->withConsecutive(
                [
                    'values',
                    ChoiceType::class,
                    [
                        'choices'  => ['some_choice_here' => 'Some choice here'],
                        'multiple' => true,
                        'label'    => false,
                        'attr'     => [
                            'class'        => 'form-control',
                            'data-show-on' => '{\"formfield_conditions_any_0\": \"checked\",\"formfield_conditions_expr\": \"notIn\"}',
                        ],
                        'required' => false,
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
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
        return "@bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php");
    }
}
