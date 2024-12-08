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

/* @bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php */
class __TwigTemplate_12a0096ae96b66db33c37dad408fd185 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\DataTransformer;

use Mautic\\LeadBundle\\Form\\DataTransformer\\FieldFilterTransformer;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class FieldFilterTransformerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    private FieldFilterTransformer \$transformer;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator  = \$this->createMock(TranslatorInterface::class);
        \$this->transformer = new FieldFilterTransformer(\$this->translator);
    }

    public function testTransform(): void
    {
        \$filters = \$this->transformer->transform([
            [
                'type'       => 'datetime',
                'properties' => [
                    'filter' => '2020-03-17 17:22:34',
                ],
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'properties' => [
                        'filter' => '2020-03-17 18:22',
                    ],
                ],
            ],
            \$filters
        );
    }

    public function testTransformWithBcFilter(): void
    {
        \$filters = \$this->transformer->transform([
            [
                'type'   => 'datetime',
                'filter' => '2020-03-17 17:22:34',
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'filter'     => '2020-03-17 17:22:34',
                    'properties' => [
                        'filter' => '2020-03-17 18:22',
                    ],
                ],
            ],
            \$filters
        );
    }

    public function testReverseTransform(): void
    {
        \$filters = \$this->transformer->reverseTransform([
            [
                'type'       => 'datetime',
                'properties' => [
                    'filter' => '2020-03-17 17:22:34',
                ],
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'properties' => [
                        'filter' => '2020-03-17 17:22',
                    ],
                ],
            ],
            \$filters
        );
    }

    public function testReverseTransformWithBcFilter(): void
    {
        \$filters = \$this->transformer->reverseTransform([
            [
                'type'   => 'datetime',
                'filter' => '2020-03-17 17:22:34',
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'filter'     => '2020-03-17 17:22:34',
                    'properties' => [
                        'filter' => '2020-03-17 17:22',
                    ],
                ],
            ],
            \$filters
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
        return "@bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php");
    }
}
