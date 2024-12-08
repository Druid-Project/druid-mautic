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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php */
class __TwigTemplate_08c07785b2bb22d80b6f0b760cd735c7 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor;

use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address;

class AddressTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that an email header with email addresses are parsed into array
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address::parseList
     */
    public function testArrayOfAddressesAreReturnedFromEmailHeader(): void
    {
        \$results = Address::parseList('<user@test.com>,<user2@test.com>');

        \$this->assertEquals(
            [
                'user@test.com'  => null,
                'user2@test.com' => null,
            ],
            \$results
        );
    }

    /**
     * @testdox Obtain hash ID from a special formatted email address
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address::parseList
     */
    public function testStatHashIsParsedFromEmail(): void
    {
        \$hash = Address::parseAddressForStatHash('hello+bounce_123abc@test.com');

        \$this->assertEquals('123abc', \$hash);
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php");
    }
}
