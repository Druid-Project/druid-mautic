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

/* @bundles/EmailBundle/Tests/Helper/PlainTextHelperTest.php */
class __TwigTemplate_46c7baa645e0e16c86e0276311f0bb99 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper;

use Mautic\\EmailBundle\\Helper\\PlainTextHelper;
use PHPUnit\\Framework\\TestCase;

class PlainTextHelperTest extends TestCase
{
    /**
     * @dataProvider emailContentProvider
     */
    public function testGetText(string \$htmlContent, string \$expectedPlainText): void
    {
        \$plainTextHelper = new PlainTextHelper();
        \$plainTextHelper->setHtml(\$htmlContent);
        \$actualPlainText = \$plainTextHelper->getText();

        \$this->assertEquals(\$expectedPlainText, \$actualPlainText);
    }

    /**
     * @return array<int, array<int, string>>
     */
    public function emailContentProvider(): array
    {
        return [
            // Test case 1: Simple paragraph
            [
                '<p>This is a simple paragraph.</p>',
                'This is a simple paragraph.',
            ],
            // Test case 2: Line breaks
            [
                '<p>This is line one.<br>This is line two.</p>',
                \"This is line one.\\nThis is line two.\",
            ],
            // Test case 3: Links
            [
                '<p>Check this <a href=\"http://example.com\">link</a>.</p>',
                'Check this link [http://example.com].',
            ],
            // Test case 4: Bold text
            [
                '<p>This is <strong>bold</strong> text.</p>',
                'This is bold text.',
            ],
            // Test case 5: Full html body
            [
                '<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Test Email</title>
</head>
<body>
    <h1>Welcome to Our Newsletter</h1>
    <p>This is an example paragraph in our email content.</p>
    <!-- More HTML content here -->
</body>
</html>',
                \"WELCOME TO OUR NEWSLETTER\\n\\nThis is an example paragraph in our email content.\",
            ],
        ];
    }

    /**
     * @dataProvider getPreviewProvider
     */
    public function testGetPreview(?int \$previewLength, string \$htmlContent, string \$expectedPlainText): void
    {
        \$options = [];
        if (\$previewLength) {
            \$options['preview_length'] = \$previewLength;
        }
        \$plainTextHelper = new PlainTextHelper(\$options);
        \$plainTextHelper->setHtml(\$htmlContent);
        \$actualPlainText = \$plainTextHelper->getPreview();

        \$this->assertEquals(\$expectedPlainText, \$actualPlainText);
    }

    /**
     * @return array<int, array<int, string|int|null>>
     */
    public function getPreviewProvider(): array
    {
        return [
            // Test case 1: Simple paragraph, with default options
            [
                null,
                '<p>This is a simple paragraph.</p>',
                'This is a simple paragraph.',
            ],
            // Test case 2: Simple paragraph, with length set to 10 (whitespace truncated)
            [
                10,
                '<p>This is a simple paragraph.</p>',
                'This is a...',
            ],
            // Test case 3: Full html body
            [
                25,
                '<h1>Welcome to Our Newsletter</h1>
    <p>This is an example paragraph in our email content.</p>',
                'WELCOME TO OUR NEWSLETTER...',
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
        return "@bundles/EmailBundle/Tests/Helper/PlainTextHelperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/PlainTextHelperTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/PlainTextHelperTest.php");
    }
}
