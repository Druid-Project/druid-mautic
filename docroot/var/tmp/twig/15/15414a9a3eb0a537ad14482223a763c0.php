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

/* @bundles/CoreBundle/Factory/TransifexFactory.php */
class __TwigTemplate_1f764261c52600ba5ff85bcf1837145a extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use Http\\Factory\\Guzzle\\RequestFactory;
use Http\\Factory\\Guzzle\\StreamFactory;
use Http\\Factory\\Guzzle\\UriFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\Transifex\\Config;
use Mautic\\Transifex\\Exception\\InvalidConfigurationException;
use Mautic\\Transifex\\Transifex;
use Mautic\\Transifex\\TransifexInterface;
use Psr\\Http\\Client\\ClientInterface;

class TransifexFactory
{
    private ?TransifexInterface \$transifex = null;

    public function __construct(
        private ClientInterface \$client,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @throws InvalidConfigurationException
     */
    public function getTransifex(): TransifexInterface
    {
        if (!\$this->transifex) {
            \$this->transifex = \$this->create(\$this->client, \$this->coreParametersHelper->get('transifex_api_token') ?? '');
        }

        return \$this->transifex;
    }

    /**
     * @throws InvalidConfigurationException
     */
    private function create(ClientInterface \$client, string \$apiToken): TransifexInterface
    {
        \$config = new Config();
        \$config->setApiToken(\$apiToken);
        \$config->setOrganization('mautic');
        \$config->setProject('mautic');

        return new Transifex(\$client, new RequestFactory(), new StreamFactory(), new UriFactory(), \$config);
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
        return "@bundles/CoreBundle/Factory/TransifexFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/TransifexFactory.php", "/app/docroot/app/bundles/CoreBundle/Factory/TransifexFactory.php");
    }
}
