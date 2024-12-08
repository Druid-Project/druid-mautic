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

/* @bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php */
class __TwigTemplate_ff1f59e499dd3993dd1d19cc3c960db4 extends Template
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

class IP2LocationAPILookup extends AbstractRemoteDataLookup
{
    public function getAttribution(): string
    {
        return '<a href=\"http://IP2Location.com/\" target=\"_blank\">IP2Location </a> web service WS9 Package only.';
    }

    protected function getUrl(): string
    {
        return \"api.ip2location.com/?ip={\$this->ip}&key={\$this->auth}&package=WS9&format=json\";
    }

    protected function parseResponse(\$response)
    {
        try {
            \$record = json_decode(\$response);
            if (isset(\$record->country_name)) {
                \$this->country   = \$record->country_name;
                \$this->region    = \$record->region_name;
                \$this->city      = \$record->city_name;
                \$this->latitude  = \$record->latitude;
                \$this->longitude = \$record->longitude;
                // \$this->timezone  = \$record->location->timeZone;
                \$this->zipcode = \$record->zip_code;
            }
        } catch (\\Exception \$exception) {
            if (\$this->logger) {
                \$this->logger->warning('IP LOOKUP: '.\$exception->getMessage());
            }
        }
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
        return "@bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php", "/app/docroot/app/bundles/CoreBundle/IpLookup/IP2LocationAPILookup.php");
    }
}
