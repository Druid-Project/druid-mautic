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

/* @bundles/WebhookBundle/Http/Client.php */
class __TwigTemplate_f2552e978bdfe623a91468f5564c2045 extends Template
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

namespace Mautic\\WebhookBundle\\Http;

use GuzzleHttp\\Psr7\\Request;
use Http\\Adapter\\Guzzle7\\Client as GuzzleClient;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Psr\\Http\\Message\\ResponseInterface;

class Client
{
    /**
     * @param GuzzleClient \$httpClient
     */
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private \$httpClient
    ) {
    }

    /**
     * @param string \$url
     *
     * @return ResponseInterface
     */

    /**
     * @return mixed|ResponseInterface
     *
     * @throws \\Http\\Client\\Exception
     */
    public function post(\$url, array \$payload, string \$secret = null)
    {
        \$jsonPayload = json_encode(\$payload);
        \$signature   = null === \$secret ? null : base64_encode(hash_hmac('sha256', \$jsonPayload, \$secret, true));
        \$headers     = [
            'Content-Type'      => 'application/json',
            'X-Origin-Base-URL' => \$this->coreParametersHelper->get('site_url'),
            'Webhook-Signature' => \$signature,
        ];

        return \$this->httpClient->sendRequest(new Request('POST', \$url, \$headers, \$jsonPayload));
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
        return "@bundles/WebhookBundle/Http/Client.php";
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
        return new Source("", "@bundles/WebhookBundle/Http/Client.php", "/app/docroot/app/bundles/WebhookBundle/Http/Client.php");
    }
}
