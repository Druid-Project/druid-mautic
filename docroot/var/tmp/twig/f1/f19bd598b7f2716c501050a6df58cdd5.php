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

/* @bundles/FormBundle/Tests/Form/Type/FormFieldNumberTypeTest.php */
class __TwigTemplate_76fa7dd49a2f2133386408e1011632e9 extends Template
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

use Mautic\\FormBundle\\Form\\Type\\FormFieldNumberType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\Test\\TypeTestCase;

final class FormFieldNumberTypeTest extends TypeTestCase
{
    /**
     * @var MockObject|FormBuilderInterface
     */
    private \$formBuilder;

    /**
     * @var AbstractType<FormFieldNumberType>
     */
    private \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder = \$this->createMock(FormBuilderInterface::class);
        \$this->form        = new FormFieldNumberType();
    }

    public function testBuildFormIfParentIsEmpty(): void
    {
        \$options = [
            'data' => [
                'precision' => 0,
            ],
        ];

        \$this->formBuilder->expects(\$this->exactly(2))
            ->method('add')
            ->withConsecutive(
                [
                    'placeholder',
                    TextType::class,
                    [
                        'label'      => 'mautic.form.field.form.property_placeholder',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => ['class' => 'form-control'],
                        'required'   => false,
                    ],
                ],
                [
                    'precision',
                    IntegerType::class,
                    [
                        'label'      => 'mautic.form.field.form.number_precision',
                        'label_attr' => ['class' => 'control-label'],
                        'data'       => 0,
                        'required'   => false,
                        'attr'       => [
                            'class'   => 'form-control',
                            'tooltip' => 'mautic.form.field.form.number_precision.tooltip',
                        ],
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
    }

    public function testSubmitValidData(): void
    {
        \$formData = [
            'placeholder' => 'test',
            'precision'   => 1,
        ];
        \$form = \$this->factory->create(FormFieldNumberType::class);

        \$form->submit(\$formData);

        \$this->assertTrue(\$form->isSynchronized());
        \$this->assertNotEmpty(\$form->getData());

        \$view     = \$form->createView();
        \$children = \$view->children;

        foreach (array_keys(\$formData) as \$key) {
            \$this->assertArrayHasKey(\$key, \$children);
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
        return "@bundles/FormBundle/Tests/Form/Type/FormFieldNumberTypeTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Form/Type/FormFieldNumberTypeTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Form/Type/FormFieldNumberTypeTest.php");
    }
}
