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

/* @bundles/CoreBundle/Tests/Unit/Helper/UrlHelperTest.php */
class __TwigTemplate_1e69f6a353b31f863e97e3ae0b6f5512 extends Template
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

use Mautic\\CoreBundle\\Helper\\UrlHelper;

class UrlHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testAppendQueryToUrl(): void
    {
        \$appendQueryString = 'utm_source=mautic.org';

        \$urls = [
            'https://mautic.org'               => 'https://mautic.org?'.\$appendQueryString,
            'https://mautic.org?'              => 'https://mautic.org?'.\$appendQueryString,
            'https://mautic.org?test=1'        => 'https://mautic.org?test=1&'.\$appendQueryString,
            'https://mautic.org?test=1&'       => 'https://mautic.org?test=1&'.\$appendQueryString,
            'https://mautic.org?test=1#anchor' => 'https://mautic.org?test=1&'.\$appendQueryString.'#anchor',
            'https://mautic.org?#anchor'       => 'https://mautic.org?'.\$appendQueryString.'#anchor',
            'https://mautic.org#anchor'        => 'https://mautic.org?'.\$appendQueryString.'#anchor',
        ];
        foreach (\$urls as \$url=>\$expectedUrl) {
            \$this->assertEquals(UrlHelper::appendQueryToUrl(\$url, \$appendQueryString), \$expectedUrl);
        }
    }

    public function testSanitizeAbsoluteUrlDoesNotModifyCorrectFullUrl(): void
    {
        \$this->assertEquals(
            'http://username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('http://username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlSetHttpIfSchemeIsMissing(): void
    {
        \$this->assertEquals(
            'http://username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlSetHttpIfSchemeIsRelative(): void
    {
        \$this->assertEquals(
            '//username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('//username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlDoNotSetHttpIfSchemeIsRelative(): void
    {
        \$this->assertEquals(
            '//username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('//username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlWithHttps(): void
    {
        \$this->assertEquals(
            'https://username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('https://username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlWithHttp(): void
    {
        \$this->assertEquals(
            'http://username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('http://username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlWithFtp(): void
    {
        \$this->assertEquals(
            'ftp://username:password@hostname:9090/path?arg=value#anchor',
            UrlHelper::sanitizeAbsoluteUrl('ftp://username:password@hostname:9090/path?arg=value#anchor')
        );
    }

    public function testSanitizeAbsoluteUrlSanitizeQuery(): void
    {
        \$this->assertEquals(
            'http://username:password@hostname:9090/path?ar_g1=value&arg2=some+email%40address.com#anchor',
            UrlHelper::sanitizeAbsoluteUrl(
                'http://username:password@hostname:9090/path?ar g1=value&arg2=some+email@address.com#anchor'
            )
        );

        \$this->assertEquals(
            'http://username:password@hostname:9090/path?a=',
            UrlHelper::sanitizeAbsoluteUrl(
                'http://username:password@hostname:9090/path?a'
            )
        );
    }

    public function testSanitizeAbsoluteUrlSanitizePathWhitespace(): void
    {
        \$this->assertEquals(
            'http://username:password@hostname:9090/some%20path%20with%20whitespace',
            UrlHelper::sanitizeAbsoluteUrl('http://username:password@hostname:9090/some path with whitespace')
        );
    }

    public function testGetUrlsFromPlaintextWithHttp(): void
    {
        \$this->assertEquals(
            ['http://mautic.org'],
            UrlHelper::getUrlsFromPlaintext('Hello there, http://mautic.org!')
        );
    }

    public function testGetUrlsFromPlaintextSkipDefaultTokenValues(): void
    {
        \$this->assertEquals(
            // 1 is skipped because it's set as the token default
            [0 => 'https://find.this', 2 => '{contactfield=website|http://skip.this}'],
            UrlHelper::getUrlsFromPlaintext(
                'Find this url: https://find.this, but allow this token because we know its a url: {contactfield=website|http://skip.this}! '
            )
        );
    }

    public function testGetUrlsFromPlaintextWith2Urls(): void
    {
        \$this->assertEquals(
            ['http://mautic.org', 'http://mucktick.org'],
            UrlHelper::getUrlsFromPlaintext(
                'Hello there, http://mautic.org is the correct URL. Not http://mucktick.org.'
            )
        );
    }

    public function testGetUrlsFromPlaintextWithSymbols(): void
    {
        \$this->assertEquals(
            [
                'https://example.org/with/square/brackets',
                'https://example.org/square/brackets/with/slash/and/comma/',
                'https://example.org/with/parentheses',
                'https://example.org/with/braces',
                'https://example.org/with/greater-than-symbol',
                'https://example.org/with/comma',
                'https://example.org/with/dot',
                'https://example.org/with/colon',
                'https://example.org/with/semi-colon',
                'https://example.org/with/simple-quotes',
                'https://example.org/with/double-quotes',
                'https://example.org/with/exclamation',
                'https://example.org/with/quotation',
                'https://example.org/with/query?utm_campaign=hello',
                'https://example.org/with/tokenized-query?foo={contactfield=bar}&bar=foo',
                'https://example.org/with/just-tokenized-query?foo={contactfield=bar}',
                'https://example.org/with/query?utm_campaign=_hello#_underscore-test',
            ],
            UrlHelper::getUrlsFromPlaintext(
                <<<STRING
This text contains URL with the square brackets [https://example.org/with/square/brackets]
also the square brackets with a slash and a comma [https://example.org/square/brackets/with/slash/and/comma/],
or parentheses (https://example.org/with/parentheses),
or braces {https://example.org/with/braces}
or greater than symbol <https://example.org/with/greater-than-symbol>
even with just a comma: https://example.org/with/comma,
or with a dot: https://example.org/with/dot.
https://example.org/with/colon: It is cool!
This website https://example.org/with/semi-colon; Very awesome!
A single example 'https://example.org/with/simple-quotes'
A double example \"https://example.org/with/double-quotes\"
Thanks for this https://example.org/with/exclamation!
Someone said “https://example.org/with/quotation”
Checkout my UTM tags https://example.org/with/query?utm_campaign=hello.
Hey what about https://example.org/with/tokenized-query?foo={contactfield=bar}&bar=foo.
What happens with this https://example.org/with/just-tokenized-query?foo={contactfield=bar}?
Underscore test https://example.org/with/query?utm_campaign=_hello#_underscore-test
STRING
            )
        );
    }

    public function testUrlValid(): void
    {
        \$this->assertTrue(UrlHelper::isValidUrl('https://domain.tld/e'));
        \$this->assertTrue(UrlHelper::isValidUrl('https://domain.tld/é'));
        \$this->assertFalse(UrlHelper::isValidUrl('notvalidurl'));
        \$this->assertFalse(UrlHelper::isValidUrl('notvalidurlé'));
    }

    /**
     * @dataProvider dataDecodeAmpersands
     */
    public function testDecodeAmpersands(string \$value, string \$expected): void
    {
        \$this->assertSame(\$expected, UrlHelper::decodeAmpersands(\$value));
    }

    /**
     * @return iterable<array<string>>
     */
    public function dataDecodeAmpersands(): iterable
    {
        yield 'With html encoded ampersands' => ['https://example.org/?utm_source=mautic&amp;utm_medium=phpunit&amp;utm_campaign=tests', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests'];
        yield 'With decimal encoded ampersands' => ['https://example.org/?utm_source=mautic&#38;utm_medium=phpunit&#38;utm_campaign=tests', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests'];
        yield 'With hex encoded ampersands' => ['https://example.org/?utm_source=mautic&#x26;utm_medium=phpunit&#x26;utm_campaign=tests', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests'];
        yield 'With mixed encoded ampersands' => ['https://example.org/?utm_source=mautic&amp;utm_medium=phpunit&#38;utm_campaign=tests', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests'];
        yield 'With double encoded ampersands' => ['https://example.org/?utm_source=mautic&#38;amp;utm_medium=phpunit&#38;amp;utm_campaign=tests', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests'];
        yield 'With other encoded characters' => ['https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=&#60;tests&#62;', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=&#60;tests&#62;'];
        yield 'Without encoded ampersands' => ['https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests', 'https://example.org/?utm_source=mautic&utm_medium=phpunit&utm_campaign=tests'];
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/UrlHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/UrlHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/UrlHelperTest.php");
    }
}
