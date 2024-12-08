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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/IpstackLookupTest.php */
class __TwigTemplate_a99e25cd01d75320796b4132754a2d33 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\IpLookup;

use GuzzleHttp\\Client;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\IpLookup\\IpstackLookup;

class IpstackLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    public function testIpLookupSuccessful(): void
    {
        // Mock http connector
        \$mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], '{\"ip\":\"192.30.252.131\",\"country_code\":\"US\",\"country_name\":\"United States\",\"region_code\":\"CA\",\"region_name\":\"California\",\"city\":\"San Francisco\",\"zip\":\"94107\",\"time_zone\":\"America/Los_Angeles\",\"latitude\":37.7697,\"longitude\":-122.3933,\"metro_code\":807}');

        \$mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);

        \$ipService = new IpstackLookup('mockApiToken', null, \$this->cacheDir, null, \$mockHttp);

        \$details = \$ipService->setIpAddress('192.30.252.131')->getDetails();

        \$this->assertEquals('San Francisco', \$details['city']);
        \$this->assertEquals('California', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
        \$this->assertEquals('94107', \$details['zipcode']);
        \$this->assertEquals('37.7697', \$details['latitude']);
        \$this->assertEquals('-122.3933', \$details['longitude']);
        \$this->assertEquals('America/Los_Angeles', \$details['timezone']);
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
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/IpstackLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/IpstackLookupTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/IpstackLookupTest.php");
    }
}
