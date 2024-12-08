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

/* @bundles/CoreBundle/IpLookup/IpinfodbLookup.php */
class __TwigTemplate_20185a71b4ee09e82e805bd5388afec6 extends Template
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

class IpinfodbLookup extends AbstractRemoteDataLookup
{
    public string \$statusCode    = '';
    public string \$statusMessage = '';
    public string \$ipAddress     = '';
    public string \$countryCode   = '';

    public function getAttribution(): string
    {
        return '<a href=\"http://www.ipinfodb.com/\" target=\"_blank\">iPInfoDB</a> offers a free service (2 lookups per second) that leverages data from IP2Location. API key required.';
    }

    protected function getUrl(): string
    {
        return \"http://api.ipinfodb.com/v3/ip-city/?key={\$this->auth}&format=json&ip={\$this->ip}\";
    }

    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                switch (\$key) {
                    case 'cityName':
                        \$key = 'city';
                        break;
                    case 'regionName':
                        \$key = 'region';
                        break;
                    case 'countryName':
                        \$key = 'country';
                        break;
                    case 'zipCode':
                        \$key = 'zipcode';
                        break;
                    case 'timeZone':
                        \$key = 'timezone';
                        break;
                }

                \$this->\$key = ucfirst(\$value);
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
        return "@bundles/CoreBundle/IpLookup/IpinfodbLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IpinfodbLookup.php", "/app/docroot/app/bundles/CoreBundle/IpLookup/IpinfodbLookup.php");
    }
}
