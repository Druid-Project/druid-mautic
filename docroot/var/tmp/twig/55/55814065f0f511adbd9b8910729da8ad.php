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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/GeobytesLookupTest.php */
class __TwigTemplate_6b927e2bc9d6c4b46712c10e4b464e95 extends Template
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
use Mautic\\CoreBundle\\IpLookup\\GeobytesLookup;

class GeobytesLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    public function testIpLookupSuccessful(): void
    {
        // Mock http connector
        \$mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], '{\"geobytesforwarderfor\":\"\",\"geobytesremoteip\":\"1.2.3.4\",\"geobytesipaddress\":\"192.30.252.131\",\"geobytescertainty\":\"100\",\"geobytesinternet\":\"US\",\"geobytescountry\":\"United States\",\"geobytesregionlocationcode\":\"USMD\",\"geobytesregion\":\"Maryland\",\"geobytescode\":\"MD\",\"geobyteslocationcode\":\"USMDKNOX\",\"geobytescity\":\"Knoxville\",\"geobytescityid\":\"29706\",\"geobytesfqcn\":\"Knoxville, MD, United States\",\"geobyteslatitude\":\"39.352600\",\"geobyteslongitude\":\"-77.664101\",\"geobytescapital\":\"Washington, DC\",\"geobytestimezone\":\"-05:00\",\"geobytesnationalitysingular\":\"American\",\"geobytespopulation\":\"278058881\",\"geobytesnationalityplural\":\"Americans\",\"geobytesmapreference\":\"North America \",\"geobytescurrency\":\"US Dollar\",\"geobytescurrencycode\":\"USD\",\"geobytestitle\":\"The United States\"}');

        \$mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);

        \$ipService = new GeobytesLookup(null, null, \$this->cacheDir, null, \$mockHttp);

        \$details = \$ipService->setIpAddress('192.30.252.131')->getDetails();

        \$this->assertEquals('Knoxville', \$details['city']);
        \$this->assertEquals('Maryland', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
        \$this->assertEquals('', \$details['zipcode']);
        \$this->assertEquals('39.352600', \$details['latitude']);
        \$this->assertEquals('-77.664101', \$details['longitude']);
        \$this->assertEquals('-05:00', \$details['timezone']);
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
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/GeobytesLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/GeobytesLookupTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/GeobytesLookupTest.php");
    }
}
