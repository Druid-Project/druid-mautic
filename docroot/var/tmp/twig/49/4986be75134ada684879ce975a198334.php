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

/* @bundles/CoreBundle/IpLookup/AbstractLookup.php */
class __TwigTemplate_f7730a3a75c80d8497b2a5efb5194921 extends Template
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

namespace Mautic\\CoreBundle\\IpLookup;

use GuzzleHttp\\Client;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Psr\\Log\\LoggerInterface;

abstract class AbstractLookup
{
    public \$city         = '';

    public \$region       = '';

    public \$zipcode      = '';

    public \$country      = '';

    public \$latitude     = '';

    public \$longitude    = '';

    public \$isp          = '';

    public \$organization = '';

    public \$timezone     = '';

    public \$extra        = '';

    /**
     * @var string|null IP Address
     */
    protected \$ip;

    /**
     * Return attribution HTML displayed in the configuration UI.
     *
     * @return string
     */
    abstract public function getAttribution();

    /**
     * Executes the lookup of the IP address.
     */
    abstract protected function lookup();

    public function __construct(
        protected ?string \$auth = null,
        protected \$config = null,
        protected ?string \$cacheDir = null,
        protected ?LoggerInterface \$logger = null,
        protected ?Client \$client = null,
        protected ?CoreParametersHelper \$coreParametersHelper = null
    ) {
    }

    /**
     * @return \$this
     */
    public function setIpAddress(\$ip)
    {
        \$this->ip = \$ip;

        if (\$this->shouldPerformLookup()) {
            // Fetch details from the service
            \$this->lookup();
        }

        return \$this;
    }

    /**
     * Return details of the IP address lookup.
     *
     * @return array
     */
    public function getDetails()
    {
        return [
            'city'         => \$this->city,
            'region'       => \$this->region,
            'zipcode'      => \$this->zipcode,
            'country'      => \$this->country,
            'latitude'     => \$this->latitude,
            'longitude'    => \$this->longitude,
            'isp'          => \$this->isp,
            'organization' => \$this->organization,
            'timezone'     => \$this->timezone,
            'extra'        => \$this->extra,
        ];
    }

    protected function shouldPerformLookup(): bool
    {
        return true;
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
        return "@bundles/CoreBundle/IpLookup/AbstractLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/AbstractLookup.php", "/app/docroot/app/bundles/CoreBundle/IpLookup/AbstractLookup.php");
    }
}
