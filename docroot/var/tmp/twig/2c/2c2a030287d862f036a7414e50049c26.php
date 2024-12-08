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

/* @bundles/MarketplaceBundle/DTO/AllowlistEntry.php */
class __TwigTemplate_6e5ecaf6f8ad42dc392d069083dded74 extends Template
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

final class AllowlistEntry
{
    public function __construct(
        /**
         * Packagist package in the format vendor/package.
         */
        public string \$package,
        /**
         * Human readable name.
         */
        public string \$displayName,
        /**
         * Minimum Mautic version in semver format (e.g. 4.1.2).
         */
        public ?string \$minimumMauticVersion,
        /**
         * Maximum Mautic version in semver format (e.g. 4.1.2).
         */
        public ?string \$maximumMauticVersion
    ) {
    }

    /**
     * @param array<string,mixed> \$array
     */
    public static function fromArray(array \$array): AllowlistEntry
    {
        return new self(
            \$array['package'],
            \$array['display_name'] ?? '',
            \$array['minimum_mautic_version'],
            \$array['maximum_mautic_version']
        );
    }

    /**
     * @return array<string,string>
     */
    public function toArray(): array
    {
        return [
            'package'                => \$this->package,
            'display_name'           => \$this->displayName,
            'minimum_mautic_version' => \$this->minimumMauticVersion,
            'maximum_mautic_version' => \$this->maximumMauticVersion,
        ];
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
        return "@bundles/MarketplaceBundle/DTO/AllowlistEntry.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/AllowlistEntry.php", "/app/docroot/app/bundles/MarketplaceBundle/DTO/AllowlistEntry.php");
    }
}
