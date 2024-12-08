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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/TelizeLookupTest.php */
class __TwigTemplate_ee2da14694f6c95dbe5f12dd81dfae1d extends Template
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
use Mautic\\CoreBundle\\IpLookup\\TelizeLookup;

class TelizeLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    public function testIpLookupSuccessful(): void
    {
        // Mock http connector
        \$mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], '{\"offset\": \"-4\",\"longitude\": -77.4875,\"city\": \"Ashburn\",\"timezone\": \"America/New_York\",\"latitude\": 39.0437,\"area_code\": \"0\",\"region\": \"Virginia\",\"dma_code\": \"0\",\"organization\": \"AS14618 Amazon.com, Inc.\",\"country\": \"United States\",\"ip\": \"54.86.225.32\",\"country_code3\": \"USA\",\"postal_code\": \"20147\",\"continent_code\": \"NA\",\"country_code\": \"US\",\"region_code\": \"VA\"}');

        \$mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);

        \$ipService = new TelizeLookup(null, null, \$this->cacheDir, null, \$mockHttp);

        \$details = \$ipService->setIpAddress('54.86.225.32')->getDetails();

        \$this->assertEquals('Ashburn', \$details['city']);
        \$this->assertEquals('Virginia', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
        \$this->assertEquals('20147', \$details['zipcode']);
        \$this->assertEquals('39.0437', \$details['latitude']);
        \$this->assertEquals('-77.4875', \$details['longitude']);
        \$this->assertEquals('America/New_York', \$details['timezone']);
        \$this->assertEquals('AS14618 Amazon.com, Inc.', \$details['organization']);
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
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/TelizeLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/TelizeLookupTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/TelizeLookupTest.php");
    }
}
