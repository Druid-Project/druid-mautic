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

/* @bundles/MarketplaceBundle/DTO/Version.php */
class __TwigTemplate_bc25b3ec377fcab0c5980ec68460951c extends Template
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

final class Version
{
    public function __construct(
        public string \$version,
        public array \$license,
        public \\DateTimeInterface \$time,
        public string \$homepage,
        public string \$issues,
        public string \$wiki,
        public array \$require,
        public array \$keywords,
        public ?string \$type,
        public ?string \$directoryName,
        public ?string \$displayName
    ) {
    }

    public static function fromArray(array \$array): Version
    {
        return new self(
            \$array['version'],
            \$array['license'],
            new \\DateTimeImmutable(\$array['time']),
            \$array['homepage'],
            \$array['support']['issues'] ?? '',
            \$array['support']['wiki'] ?? '',
            \$array['require'] ?? [],
            \$array['keywords'] ?? [],
            \$array['type'] ?? null,
            \$array['extra']['install-directory-name'] ?? null,
            \$array['extra']['display-name'] ?? null
        );
    }

    /**
     * Consider a version stable if it is in SemVer fomrat \"d.d.d\".
     */
    public function isStable(): bool
    {
        return 1 === preg_match('/^(\\d+\\.)?(\\d+\\.)?(\\*|\\d+)\$/', \$this->version);
    }

    /**
     * Consider a version pre-release if it is in fomrat \"d.d.d-s\".
     */
    public function isPreRelease(): bool
    {
        return 1 === preg_match('#^(\\d+\\.)?(\\d+\\.)?(\\d+)(-[a-z0-9]+)?\$#i', \$this->version);
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
        return "@bundles/MarketplaceBundle/DTO/Version.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/Version.php", "/app/docroot/app/bundles/MarketplaceBundle/DTO/Version.php");
    }
}
