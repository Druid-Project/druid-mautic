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

/* @bundles/LeadBundle/Tests/Helper/CustomFieldHelperTest.php */
class __TwigTemplate_4e6d9bdd361c99640a706c2442c6de46 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Helper\\CustomFieldHelper;

class CustomFieldHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testFixValueTypeForBooleans(): void
    {
        \$this->assertNull(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, null));
        \$this->assertTrue(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, 1));
        \$this->assertTrue(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, true));
        \$this->assertTrue(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, '1'));
        \$this->assertFalse(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, '0'));
        \$this->assertFalse(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, ''));
        \$this->assertFalse(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, false));
        \$this->assertFalse(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_BOOLEAN, 0));
    }

    public function testFixValueTypeForNumbers(): void
    {
        \$this->assertNull(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, null));
        \$this->assertEquals(1, CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, 1));
        \$this->assertEquals(1, CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, true));
        \$this->assertEquals(0, CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, false));
        \$this->assertEquals(5, CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, '5'));
        \$this->assertEquals(0, CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, ''));
        \$this->assertEquals(0, CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_NUMBER, '0'));
    }

    public function testFixValueTypeForSelect(): void
    {
        \$this->assertNull(CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_SELECT, null));
        \$this->assertEquals('1', CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_SELECT, true));
        \$this->assertEquals('', CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_SELECT, false));
        \$this->assertEquals('1', CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_SELECT, 1));
        \$this->assertEquals('1', CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_SELECT, '1'));
        \$this->assertEquals('one', CustomFieldHelper::fixValueType(CustomFieldHelper::TYPE_SELECT, 'one'));
    }

    public function testFieldsValuesTransformerWithoutRelativesDates(): void
    {
        \$values = [
            'customdate'         => '2020-11-01',
            'customdatetime'     => '2020-11-02 23:59:00',
            'customtime'         => '23:59:00',
            'customnulldatetime' => null,
        ];

        \$fields = [
            'customdate'         => [
                'type' => 'date',
            ],
            'customdatetime'     => [
                'type' => 'datetime',
            ],
            'customtime'         => [
                'type' => 'time',
            ],
            'customnulldatetime' => [
                'type' => 'datetime',
            ],
        ];

        \$this->assertSame(\$values, CustomFieldHelper::fieldsValuesTransformer(\$fields, \$values));
    }

    public function testFieldsValuesTransformerWithRelativesDates(): void
    {
        \$values = [
            'customdate'         => '-1 day',
            'customdatetime'     => '-1 day',
            'customtime'         => '-20 minutes',
            'customnulldatetime' => null,
        ];

        \$fields = [
            'customdate'         => [
                'type' => 'date',
            ],
            'customdatetime'     => [
                'type' => 'datetime',
            ],
            'customtime'         => [
                'type' => 'time',
            ],
            'customnulldatetime' => [
                'type' => 'datetime',
            ],
        ];

        \$expected = [
            'customdate'         => (new DateTimeHelper('-1 day'))->toLocalString('Y-m-d'),
            'customdatetime'     => (new DateTimeHelper('-1 day'))->toLocalString('Y-m-d H:i:s'),
            'customtime'         => (new DateTimeHelper('-20 minutes'))->toLocalString('H:i:s'),
            'customnulldatetime' => null,
        ];

        \$this->assertSame(\$expected, CustomFieldHelper::fieldsValuesTransformer(\$fields, \$values));
    }

    public function testFieldsValuesWithNullsOrEmptyStringsAreNotTransformedToRelativesDates(): void
    {
        \$values = [
            'customdate'        => null,
            'customdatetime'    => null,
            'customtime'        => null,
            'customemptystring' => '',
        ];

        \$fields = [
            'customdate'        => [
                'type' => 'date',
            ],
            'customdatetime'    => [
                'type' => 'datetime',
            ],
            'customtime'        => [
                'type' => 'time',
            ],
            'customemptystring' => [
                'type' => 'datetime',
            ],
        ];

        \$expected = [
            'customdate'        => null,
            'customdatetime'    => null,
            'customtime'        => null,
            'customemptystring' => null,
        ];

        \$this->assertSame(\$expected, CustomFieldHelper::fieldsValuesTransformer(\$fields, \$values));
    }

    public function testFieldsValuesTransformerForDifferingValueTypes(): void
    {
        \$fields = [
            'select'      => [
                'type' => 'select',
            ],
            'multiselect' => [
                'type' => 'multiselect',
            ],
            'number'      => [
                'type' => 'number',
            ],
            'string'      => [
                'type' => 'text',
            ],
            'boolean'     => [
                'type' => 'boolean',
            ],
        ];

        \$values = [
            'select'      => 'string',
            'multiselect' => [
                'array',
            ],
            'number'      => 100,
            'string'      => 'string',
            'boolean'     => 0,
        ];

        \$this->assertSame(\$values, CustomFieldHelper::fieldsValuesTransformer(\$fields, \$values));
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
        return "@bundles/LeadBundle/Tests/Helper/CustomFieldHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/CustomFieldHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/CustomFieldHelperTest.php");
    }
}
