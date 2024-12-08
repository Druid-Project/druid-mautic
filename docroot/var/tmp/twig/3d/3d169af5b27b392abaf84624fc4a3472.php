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

/* @bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php */
class __TwigTemplate_8619eca56eb02c3893bf8f8a20a445c8 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CsvHelper;

class CsvHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSanitizeHeaders(): void
    {
        \$headers = [
            'withoutSpaces',
            ' with spaces ',
            ' left space',
            'right space ',
        ];

        \$expected = [
            'withoutSpaces',
            'with spaces',
            'left space',
            'right space',
        ];

        \$this->assertEquals(\$expected, CsvHelper::sanitizeHeaders(\$headers));
    }

    public function testConvertHeadersIntoFields(): void
    {
        \$headers = [
            'České znáčky',
            '',
            'First Name',
        ];

        \$expected = [
            'first_name' => 'First Name',
            'esk_znky'   => 'České znáčky',
        ];

        \$this->assertEquals(\$expected, CsvHelper::convertHeadersIntoFields(\$headers));
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/CsvHelperTest.php");
    }
}
