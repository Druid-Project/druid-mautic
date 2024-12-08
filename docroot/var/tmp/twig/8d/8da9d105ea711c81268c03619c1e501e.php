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

/* @bundles/MarketplaceBundle/DTO/PackageDetail.php */
class __TwigTemplate_379441759ebbd742528a15852b6d4caa extends Template
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

use Mautic\\MarketplaceBundle\\Collection\\MaintainerCollection;
use Mautic\\MarketplaceBundle\\Collection\\VersionCollection;

final class PackageDetail
{
    public function __construct(
        public PackageBase \$packageBase,
        public VersionCollection \$versions,
        public MaintainerCollection \$maintainers,
        public GitHubInfo \$githubInfo,
        public int \$monthlyDownloads,
        public int \$dailyDownloads,
        public \\DateTimeInterface \$time
    ) {
    }

    public static function fromArray(array \$array): self
    {
        return new self(
            new PackageBase(
                \$array['name'],
                \"https://packagist.org/packages/{\$array['name']}\",
                \$array['repository'],
                \$array['description'],
                (int) \$array['downloads']['total'],
                (int) \$array['favers'],
                \$array['type'] ?? null,
                \$array['display_name'] ?? null
            ),
            VersionCollection::fromArray(\$array['versions']),
            MaintainerCollection::fromArray(\$array['maintainers']),
            new GitHubInfo(
                \$array['github_stars'],
                \$array['github_watchers'],
                \$array['github_forks'],
                \$array['github_open_issues']
            ),
            \$array['downloads']['monthly'],
            \$array['downloads']['daily'],
            new \\DateTimeImmutable(\$array['time'])
        );
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
        return "@bundles/MarketplaceBundle/DTO/PackageDetail.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/PackageDetail.php", "/app/docroot/app/bundles/MarketplaceBundle/DTO/PackageDetail.php");
    }
}
