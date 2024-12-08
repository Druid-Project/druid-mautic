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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/IpinfodbLookupTest.php */
class __TwigTemplate_b4c726bb4d7b3092ef1613d0168d72fc extends Template
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
use Mautic\\CoreBundle\\IpLookup\\IpinfodbLookup;

class IpinfodbLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    public function testIpLookupSuccessful(): void
    {
        // Mock http connector
        \$mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], '{\"statusCode\" : \"OK\",\"statusMessage\" : \"\",\"ipAddress\" : \"192.30.252.131\",\"countryCode\" : \"US\",\"countryName\" : \"United States\",\"regionName\" : \"California\",\"cityName\" : \"San Francisco\",\"zipCode\" : \"94107\",\"latitude\" : \"37.7757\",\"longitude\" : \"-122.395\",\"timeZone\" : \"-08:00\"}');

        \$mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);

        \$ipService = new IpinfodbLookup(null, null, \$this->cacheDir, null, \$mockHttp);

        \$details = \$ipService->setIpAddress('192.30.252.131')->getDetails();

        \$this->assertEquals('San Francisco', \$details['city']);
        \$this->assertEquals('California', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
        \$this->assertEquals('94107', \$details['zipcode']);
        \$this->assertEquals('37.7757', \$details['latitude']);
        \$this->assertEquals('-122.395', \$details['longitude']);
        \$this->assertEquals('-08:00', \$details['timezone']);
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
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/IpinfodbLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/IpinfodbLookupTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/IpinfodbLookupTest.php");
    }
}
