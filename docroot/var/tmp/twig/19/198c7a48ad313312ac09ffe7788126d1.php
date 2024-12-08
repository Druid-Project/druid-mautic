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

/* @bundles/MarketplaceBundle/Model/PackageModel.php */
class __TwigTemplate_8a3e3b8acbc1f8368df70f752ac5865c extends Template
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

namespace Mautic\\MarketplaceBundle\\Model;

use Mautic\\MarketplaceBundle\\Api\\Connection;
use Mautic\\MarketplaceBundle\\DTO\\PackageDetail;
use Mautic\\MarketplaceBundle\\Service\\Allowlist;

class PackageModel
{
    public function __construct(
        private Connection \$connection,
        private Allowlist \$allowlist
    ) {
    }

    public function getPackageDetail(string \$name): PackageDetail
    {
        \$allowlist      = \$this->allowlist->getAllowList();
        \$allowedPackage = \$allowlist->findPackageByName(\$name);
        \$payload        = \$this->connection->getPackage(\$name);

        return PackageDetail::fromArray(\$payload['package'] + \$allowedPackage->toArray());
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
        return "@bundles/MarketplaceBundle/Model/PackageModel.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Model/PackageModel.php", "/app/docroot/app/bundles/MarketplaceBundle/Model/PackageModel.php");
    }
}
