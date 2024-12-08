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

/* @bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php */
class __TwigTemplate_94a0015f7b05316f44039d8e8bef8bad extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\EventListener;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class EditorFontsSubscriberTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['editor_fonts'] = [
            [
                'name' => 'Arial',
                'font' => 'Arial, Helvetica, sans-serif',
                'url'  => 'https://custom-font.test/arial.css',
            ],
            [
                'name' => 'Courier New',
                'font' => 'Courier New, Courier, monospace',
                'url'  => 'https://custom-font.test/courier.css',
            ],
        ];

        parent::setUp();
    }

    public function testEditorFontsAreLoadedWithDefinedConfigValues(): void
    {
        \$crawler  = \$this->client->request(Request::METHOD_GET, '/');
        \$response = \$crawler->html();

        Assert::assertTrue(\$this->client->getResponse()->isOk());

        Assert::assertStringContainsString(
            'var mauticEditorFonts               = [{\"name\":\"Arial\",\"font\":\"Arial, Helvetica, sans-serif\",\"url\":\"https:\\/\\/custom-font.test\\/arial.css\"},{\"name\":\"Courier New\",\"font\":\"Courier New, Courier, monospace\",\"url\":\"https:\\/\\/custom-font.test\\/courier.css\"}];',
            \$response
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
        return "@bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php");
    }
}
