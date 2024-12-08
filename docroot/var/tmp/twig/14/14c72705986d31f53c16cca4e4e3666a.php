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

/* @bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php */
class __TwigTemplate_c6c0a96751de487cd472dc4a2d1dc8db extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper;

use Mautic\\EmailBundle\\Helper\\UrlMatcher;

class UrlMatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testUrlIsFound(): void
    {
        \$urls = [
            'google.com',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'google.com'));
    }

    public function testUrlWithSlashIsMatched(): void
    {
        \$urls = [
            'https://google.com',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com'));
    }

    public function testUrlWithEscapedSlashesIsMatched(): void
    {
        \$urls = [
            'https:\\/\\/google.com\\/hello',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
    }

    public function testUrlWithEndingSlash(): void
    {
        \$urls = [
            'https://google.com/hello/',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello/'));
    }

    public function testUrlWithoutHttpPrefix(): void
    {
        \$urls = [
            'google.com/hello',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'http://google.com/hello/'));
    }

    public function testUrlWithoutHttp(): void
    {
        \$urls = [
            '//google.com/hello',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, '//google.com/hello'));
    }

    public function testUrlMismatch(): void
    {
        \$urls = [
            'http://google.com',
        ];

        \$this->assertFalse(UrlMatcher::hasMatch(\$urls, 'https://yahoo.com'));
    }

    public function testFTPSchemeMisMatch(): void
    {
        \$urls = [
            'ftp://google.com',
        ];

        \$this->assertFalse(UrlMatcher::hasMatch(\$urls, 'https://google.com'));
    }

    public function testFTPSchemeMatch(): void
    {
        \$urls = [
            'ftp://google.com',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'ftp://google.com'));
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
        return "@bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php");
    }
}
