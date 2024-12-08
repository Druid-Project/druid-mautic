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

/* @bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php */
class __TwigTemplate_a6b15e3bf3bdead61f1a46f5268cf65c extends Template
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

namespace Mautic\\FormBundle\\Tests\\Helper;

use Mautic\\FormBundle\\Helper\\PropertiesAccessor;
use Mautic\\FormBundle\\Model\\FormModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class PropertiesAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FormModel
     */
    private MockObject \$formModel;

    private PropertiesAccessor \$propertiesAccessor;

    protected function setUp(): void
    {
        \$this->formModel          = \$this->createMock(FormModel::class);
        \$this->propertiesAccessor = new PropertiesAccessor(
            \$this->formModel
        );
    }

    public function testGetPropertiesForCountryField(): void
    {
        \$field = [
            'type'        => 'country',
            'mappedField' => 'country',
        ];

        \$this->formModel->expects(\$this->once())
            ->method('getContactFieldPropertiesList')
            ->with('country')
            ->willReturn(['some_props_here']);

        \$this->assertSame(
            ['some_props_here'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForSyncList(): void
    {
        \$field = [
            'type'         => 'custom_select_a',
            'mappedField'  => 'contact_field_a',
            'mappedObject' => 'contact',
            'properties'   => ['syncList' => true],
        ];

        \$this->formModel->expects(\$this->once())
            ->method('getContactFieldPropertiesList')
            ->with('contact_field_a')
            ->willReturn(['some_props_here']);

        \$this->assertSame(
            ['some_props_here'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForTextField(): void
    {
        \$field = [
            'type'         => 'custom_text_a',
            'mappedField'  => 'contact_field_a',
            'mappedObject' => 'contact',
            'properties'   => ['syncList' => false],
        ];

        \$this->formModel->expects(\$this->never())
            ->method('getContactFieldPropertiesList');

        \$this->assertSame(
            [],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForListField(): void
    {
        \$field = [
            'type'       => 'custom_select_a',
            'properties' => [
                'syncList' => false,
                'list'     => ['list' => ['option_a' => 'Option A']],
            ],
        ];

        \$this->formModel->expects(\$this->never())
            ->method('getContactFieldPropertiesList');

        \$this->assertSame(
            ['option_a' => 'Option A'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetPropertiesForOptionlistField(): void
    {
        \$field = [
            'type'       => 'custom_select_a',
            'properties' => [
                'syncList'   => false,
                'optionlist' => ['list' => ['option_a' => 'Option A']],
            ],
        ];

        \$this->formModel->expects(\$this->never())
            ->method('getContactFieldPropertiesList');

        \$this->assertSame(
            ['option_a' => 'Option A'],
            \$this->propertiesAccessor->getProperties(\$field)
        );
    }

    public function testGetChoicesForWellFormattedChoices(): void
    {
        \$options = ['choice_a' => 'Choice A'];

        \$this->assertSame(
            array_flip(\$options),
            \$this->propertiesAccessor->getChoices(\$options)
        );
    }

    public function testGetChoicesForPipeFormattedChoices(): void
    {
        \$options = 'Choice A|Choice B';

        \$this->assertSame(
            ['Choice A' => 'Choice A', 'Choice B' => 'Choice B'],
            \$this->propertiesAccessor->getChoices(\$options)
        );
    }

    public function testGetChoicesForLabelValueArrayChoices(): void
    {
        \$options = [
            [
                'label' => 'Choice A',
                'value' => 'Value A',
            ],
        ];

        \$this->assertSame(
            ['Choice A' => 'Value A'],
            \$this->propertiesAccessor->getChoices(\$options)
        );
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
        return "@bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Helper/PropertiesAccessorTest.php");
    }
}
