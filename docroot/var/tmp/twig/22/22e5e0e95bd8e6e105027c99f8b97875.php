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

/* @bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php */
class __TwigTemplate_82bf83a653b9ea907aa4c81e9470d8b4 extends Template
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

namespace Mautic\\CoreBundle\\IpLookup\\DoNotSellList;

use Mautic\\CoreBundle\\Exception\\BadConfigurationException;
use Mautic\\CoreBundle\\Exception\\FileNotFoundException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class MaxMindDoNotSellList implements DoNotSellListInterface
{
    private int \$position = 0;

    private \$list = [];

    private \$listPath;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->listPath  = \$coreParametersHelper->get('maxmind_do_not_sell_list_path', '');
    }

    public function loadList(): bool
    {
        \$listPath = \$this->getListPath();

        if (false == \$listPath) {
            throw new BadConfigurationException('Please configure the path to the MaxMind Do Not Sell List.');
        }

        if (!file_exists(\$listPath)) {
            throw new FileNotFoundException('Please make sure the MaxMind Do Not Sell List file has been downloaded.');
        }

        \$json = file_get_contents(\$listPath);

        if (\$data = json_decode(\$json, true)) {
            \$this->list = \$data['exclusions'];

            return true;
        }

        return false;
    }

    /**
     * This function trims the CIDR notation from an IP address
     * i.e given '1.2.3.4/32' it will return '1.2.3.4'.
     */
    public static function stripCIDR(string \$ip): string
    {
        if (\$position = strpos(\$ip, '/')) {
            return substr_replace(\$ip, '', \$position, 3);
        }

        return \$ip;
    }

    public function getListPath(): string
    {
        return \$this->listPath;
    }

    public function setListPath(string \$path): void
    {
        \$this->listPath = \$path;
    }

    public function getList(): array
    {
        return \$this->list;
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function current(): mixed
    {
        return \$this->list[\$this->position];
    }

    public function key(): mixed
    {
        return \$this->position;
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->list[\$this->position]);
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
        return "@bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php", "/app/docroot/app/bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php");
    }
}
