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

/* @bundles/CoreBundle/IpLookup/GeoipsLookup.php */
class __TwigTemplate_54d3cf52c0014aad042653c31b19c3c2 extends Template
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

class GeoipsLookup extends AbstractRemoteDataLookup
{
    public string \$continent_name = '';
    public string \$continent_code = '';
    public string \$country_code   = '';
    public string \$region_code    = '';
    public string \$county_name    = '';

    public function getAttribution(): string
    {
        return '<a href=\"http://www.geoips.com/\" target=\"_blank\">GeoIPs</a> offers tiered subscriptions for lookups.';
    }

    protected function getUrl(): string
    {
        return \"http://api.geoips.com/ip/{\$this->ip}/key/{\$this->auth}/output/json\";
    }

    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data && !empty(\$data->response->location)) {
            foreach (\$data->response->location as \$key => \$value) {
                switch (\$key) {
                    case 'city_name':
                        \$key = 'city';
                        break;
                    case 'region_name':
                        \$key = 'region';
                        break;
                    case 'country_name':
                        \$key = 'country';
                        break;
                    case 'owner':
                        \$key = 'isp';
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
        return "@bundles/CoreBundle/IpLookup/GeoipsLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/GeoipsLookup.php", "/app/docroot/app/bundles/CoreBundle/IpLookup/GeoipsLookup.php");
    }
}
