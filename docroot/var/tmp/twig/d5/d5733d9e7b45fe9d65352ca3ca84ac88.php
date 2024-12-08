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

/* @bundles/CoreBundle/Factory/IpLookupFactory.php */
class __TwigTemplate_4e39c6941811b6cc90c9f016a840a56b extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use GuzzleHttp\\Client;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\IpLookup\\AbstractLookup;
use Psr\\Log\\LoggerInterface;

class IpLookupFactory
{
    public function __construct(
        protected array \$lookupServices,
        protected ?LoggerInterface \$logger = null,
        protected ?Client \$client = null,
        protected ?string \$cacheDir = null,
        protected ?CoreParametersHelper \$coreParametersHelper = null
    ) {
    }

    /**
     * @return AbstractLookup|null
     */
    public function getService(\$service, \$auth = null, array \$ipLookupConfig = [])
    {
        static \$services = [];

        if (empty(\$service)) {
            return null;
        }

        if (!isset(\$services[\$service]) || (null !== \$auth || null !== \$ipLookupConfig)) {
            if (!isset(\$this->lookupServices[\$service])) {
                throw new \\InvalidArgumentException(\$service.' not registered.');
            }

            \$className = \$this->lookupServices[\$service]['class'];
            if (!str_starts_with(\$className, '\\\\')) {
                \$className = '\\\\'.\$className;
            }

            \$services[\$service] = new \$className(
                \$auth,
                \$ipLookupConfig,
                \$this->cacheDir,
                \$this->logger,
                \$this->client,
                \$this->coreParametersHelper
            );
        }

        return \$services[\$service];
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
        return "@bundles/CoreBundle/Factory/IpLookupFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/IpLookupFactory.php", "/app/docroot/app/bundles/CoreBundle/Factory/IpLookupFactory.php");
    }
}
