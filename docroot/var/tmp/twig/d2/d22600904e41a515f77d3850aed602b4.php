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

/* @bundles/MarketplaceBundle/DTO/PackageBase.php */
class __TwigTemplate_7781d985a8e95173f9164ad07a2dc29d extends Template
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

namespace Mautic\\MarketplaceBundle\\DTO;

final class PackageBase
{
    public function __construct(
        /**
         * Original name in format \"vendor/name\".
         */
        public string \$name,
        public string \$url,
        public string \$repository,
        public string \$description,
        public int \$downloads,
        public int \$favers,
        /**
         * E.g. mautic-plugin.
         */
        public ?string \$type,
        public ?string \$displayName = null
    ) {
    }

    public static function fromArray(array \$array): self
    {
        return new self(
            \$array['name'],
            \$array['url'],
            \$array['repository'],
            \$array['description'],
            (int) \$array['downloads'],
            (int) \$array['favers'],
            \$array['type'] ?? null,
            \$array['display_name'] ?? null
        );
    }

    /**
     * Just an alias to getName(). Used in Mautic helpers.
     */
    public function getId(): string
    {
        return \$this->name;
    }

    /**
     * Used in Mautic helpers.
     */
    public function getName(): string
    {
        return \$this->name;
    }

    public function getPackageName(): string
    {
        [, \$packageName] = explode('/', \$this->name);

        return \$packageName;
    }

    public function getHumanPackageName(): string
    {
        if (\$this->displayName) {
            return \$this->displayName;
        }

        return utf8_ucwords(str_replace('-', ' ', \$this->getPackageName()));
    }

    public function getVendorName(): string
    {
        [\$vendor] = explode('/', \$this->name);

        return \$vendor;
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
        return "@bundles/MarketplaceBundle/DTO/PackageBase.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/PackageBase.php", "/app/docroot/app/bundles/MarketplaceBundle/DTO/PackageBase.php");
    }
}
