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

/* @bundles/MarketplaceBundle/Api/Connection.php */
class __TwigTemplate_95e00e2b94a196d55da7e1465e8f3c93 extends Template
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

namespace Mautic\\MarketplaceBundle\\Api;

use GuzzleHttp\\ClientInterface;
use GuzzleHttp\\Exception\\GuzzleException;
use GuzzleHttp\\Psr7\\Request;
use Mautic\\MarketplaceBundle\\Exception\\ApiException;
use Psr\\Log\\LoggerInterface;

class Connection
{
    public function __construct(
        private ClientInterface \$httpClient,
        private LoggerInterface \$logger
    ) {
    }

    /**
     * @throws ApiException
     */
    public function getPlugins(int \$page, int \$limit, string \$query = ''): array
    {
        return \$this->makeRequest(\"https://packagist.org/search.json?page={\$page}&per_page={\$limit}&type=mautic-plugin&q={\$query}\");
    }

    /**
     * @throws ApiException
     */
    public function getPackage(string \$pluginName): array
    {
        return \$this->makeRequest(\"https://packagist.org/packages/{\$pluginName}.json\");
    }

    public function makeRequest(string \$url): array
    {
        \$this->logger->debug('About to query the Packagist API: '.\$url);

        \$request  = new Request('GET', \$url, \$this->getHeaders());

        try {
            \$response = \$this->httpClient->send(\$request);
        } catch (GuzzleException \$e) {
            throw new ApiException(\$e->getMessage(), \$e->getCode());
        }

        \$body = (string) \$response->getBody();

        if (\$response->getStatusCode() >= 300) {
            throw new ApiException(\$body, \$response->getStatusCode());
        }

        \$payload = json_decode(\$body, true);

        \$this->logger->debug('Successful Packagist API response', ['payload' => \$payload]);

        return \$payload;
    }

    private function getHeaders(): array
    {
        return [
            'Content-Type'    => 'application/json',
            'Accept'          => 'application/json',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection'      => 'keep-alive',
            'User-Agent'      => 'Mautic Marketplace',
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
        return "@bundles/MarketplaceBundle/Api/Connection.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Api/Connection.php", "/app/docroot/app/bundles/MarketplaceBundle/Api/Connection.php");
    }
}
