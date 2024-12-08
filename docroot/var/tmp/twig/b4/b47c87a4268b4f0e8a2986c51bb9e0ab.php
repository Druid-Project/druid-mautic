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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php */
class __TwigTemplate_8e583d1d9870f0f380697588048a48d3 extends Template
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
use Mautic\\CoreBundle\\IpLookup\\ExtremeIpLookup;

class ExtemeIpLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    public function testIpLookupSuccessful(): void
    {
        // Mock http connector
        \$mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], '{\"businessName\" : \"Sandhills Publishing Company\",\"businessWebsite\" : \"www.sandhills.com\",\"city\" : \"Lincoln\",\"continent\" : \"North America\",\"country\" : \"United States\",\"countryCode\" : \"US\",\"ipName\" : \"proxy.sandhills.com\",\"ipType\" : \"Business\",\"isp\" : \"Sandhills Publishing Company\",\"lat\" : \"40.8615\",\"lon\" : \"-96.7119\",\"org\" : \"Sandhills Publishing Company\",\"query\" : \"63.70.164.200\",\"region\" : \"Nebraska\",\"status\" : \"success\"}');

        \$mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);

        \$ipService = new ExtremeIpLookup(null, null, \$this->cacheDir, null, \$mockHttp);

        \$details = \$ipService->setIpAddress('63.70.164.200')->getDetails();

        \$this->assertEquals('Lincoln', \$details['city']);
        \$this->assertEquals('Nebraska', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
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
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php");
    }
}
