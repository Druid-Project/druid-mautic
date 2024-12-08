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

/* @bundles/CoreBundle/IpLookup/ExtremeIpLookup.php */
class __TwigTemplate_23fe85c92dade68f02622e8593c435ac extends Template
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

class ExtremeIpLookup extends AbstractRemoteDataLookup
{
    public string \$businessWebsite = '';
    public string \$continent       = '';
    public string \$countryCode     = '';
    public string \$ipName          = '';
    public string \$ipType          = '';
    public string \$lat             = '';
    public string \$lon             = '';
    public string \$org             = '';
    public string \$query           = '';
    public string \$status          = '';

    /**
     * Return attribution HTML displayed in the configuration UI.
     */
    public function getAttribution(): string
    {
        return '<a href=\"https://extreme-ip-lookup.com/\" target=\"_blank\">extreme-ip-lookup.com</a> is a free lookup service that does not require an api key.';
    }

    /**
     * Get the URL to fetch data from.
     */
    protected function getUrl(): string
    {
        \$auth = !empty(\$this->auth) ? '?key='.\$this->auth : '';

        return 'https://extreme-ip-lookup.com/json/'.\$this->ip.\$auth;
    }

    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response, true);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                switch (\$key) {
                    case 'region':
                        \$key = 'region';
                        break;
                    case 'country':
                        \$key = 'country';
                        break;
                    case 'city':
                        \$key = 'city';
                        break;
                    case 'businessName':
                        \$key = 'organization';
                        break;
                }

                \$this->\$key = \$value;
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
        return "@bundles/CoreBundle/IpLookup/ExtremeIpLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/ExtremeIpLookup.php", "/app/docroot/app/bundles/CoreBundle/IpLookup/ExtremeIpLookup.php");
    }
}
