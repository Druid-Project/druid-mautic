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

/* @bundles/CoreBundle/Tests/Functional/Twig/Extension/ConfigExtensionTest.php */
class __TwigTemplate_343efca33b5dd91342965affba7b50b2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Twig\\Extension;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class ConfigExtensionTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['editor_fonts'] = [
            [
                'name' => 'Courier New',
                'font' => 'Courier New, Courier, monospace',
                'url'  => 'https://custom-font.test/courier.css',
            ],
            [
                'name' => 'Arial',
                'font' => 'Arial, Helvetica, sans-serif',
                'url'  => 'https://custom-font.test/arial.css',
            ],
        ];

        parent::setUp();
    }

    public function testSortedEditorFonts(): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, '/');

        Assert::assertStringContainsString(
            '[{\"name\":\"Arial\",\"font\":\"Arial, Helvetica, sans-serif\",\"url\":\"https:\\/\\/custom-font.test\\/arial.css\"},{\"name\":\"Courier New\",\"font\":\"Courier New, Courier, monospace\",\"url\":\"https:\\/\\/custom-font.test\\/courier.css\"}];',
            \$crawler->html()
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
        return "@bundles/CoreBundle/Tests/Functional/Twig/Extension/ConfigExtensionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Twig/Extension/ConfigExtensionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Twig/Extension/ConfigExtensionTest.php");
    }
}
