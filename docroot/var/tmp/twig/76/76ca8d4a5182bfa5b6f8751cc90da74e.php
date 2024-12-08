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

/* @bundles/CoreBundle/Tests/Form/Type/LookupTypeTest.php */
class __TwigTemplate_0c98e49b229d35c689360bd5c23c1f10 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\LookupType;
use Symfony\\Component\\Form\\Test\\TypeTestCase;

class LookupTypeTest extends TypeTestCase
{
    /**
     * @param array<string, string> \$attributes
     * @param array<string, string> \$expected
     *
     * @dataProvider provideLookupAttributes
     */
    public function testCreateViewAddsAttributesWithoutOverride(array \$attributes, array \$expected): void
    {
        \$form = \$this->factory->create(LookupType::class, null, ['attr' => \$attributes]);
        \$view = \$form->createView();

        self::assertSame(\$expected, \$view->vars['attr']);
    }

    public static function provideLookupAttributes(): \\Generator
    {
        yield 'empty attributes' => [
            [],
            [
                'data-toggle' => 'field-lookup',
                'data-action' => 'lead:fieldList',
            ],
        ];

        yield 'other attributes' => [
            [
                'data-other' => 'value',
            ],
            [
                'data-toggle' => 'field-lookup',
                'data-action' => 'lead:fieldList',
                'data-other'  => 'value',
            ],
        ];

        yield 'does not override attributes (all)' => [
            [
                'data-toggle' => 'other-lookup',
                'data-action' => 'lead:lead',
            ],
            [
                'data-toggle' => 'other-lookup',
                'data-action' => 'lead:lead',
            ],
        ];

        yield 'does not override attributes (toggle)' => [
            [
                'data-toggle' => 'other-lookup',
            ],
            [
                'data-toggle' => 'other-lookup',
                'data-action' => 'lead:fieldList',
            ],
        ];

        yield 'does not override attributes (action)' => [
            [
                'data-action' => 'lead:lead',
            ],
            [
                'data-toggle' => 'field-lookup',
                'data-action' => 'lead:lead',
            ],
        ];
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
        return "@bundles/CoreBundle/Tests/Form/Type/LookupTypeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Form/Type/LookupTypeTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Form/Type/LookupTypeTest.php");
    }
}
