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

/* @bundles/CoreBundle/Helper/Update/Github/ReleaseParser.php */
class __TwigTemplate_7809ee8a41bd790f873d168b55bbad45 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\Github;

use GuzzleHttp\\Client;
use GuzzleHttp\\Exception\\GuzzleException;
use Mautic\\CoreBundle\\Helper\\Update\\Exception\\LatestVersionSupportedException;
use Mautic\\CoreBundle\\Helper\\Update\\Exception\\MetadataNotFoundException;
use Mautic\\CoreBundle\\Helper\\Update\\Exception\\UpdatePackageNotFoundException;
use Mautic\\CoreBundle\\Release\\Metadata;

class ReleaseParser
{
    public function __construct(
        private Client \$client
    ) {
    }

    /**
     * @throws LatestVersionSupportedException
     * @throws UpdatePackageNotFoundException
     */
    public function getLatestSupportedRelease(array \$releases, string \$mauticVersion, string \$allowedStability): Release
    {
        foreach (\$releases as \$release) {
            try {
                \$metadata = \$this->getMetadata(\$release['html_url']);
            } catch (MetadataNotFoundException) {
                continue;
            }

            if (
                ('stable' === \$allowedStability && 'stable' !== \$metadata->getStability())
                || ('stable' !== \$metadata->getStability() && version_compare(\$allowedStability, \$metadata->getStability(), 'gt'))
            ) {
                // This Mautic does support the given release's stability so continue
                continue;
            }

            if (version_compare(\$mauticVersion, \$metadata->getMinSupportedMauticVersion(), 'lt')) {
                // This Mautic version cannot be upgraded to the given release so continue
                continue;
            }

            if (version_compare(\$mauticVersion, \$metadata->getVersion(), 'ge')) {
                // This Mautic version is the same as the given release so continue
                continue;
            }

            return new Release(\$release, \$metadata);
        }

        // No compatible release found
        throw new LatestVersionSupportedException();
    }

    /**
     * @throws MetadataNotFoundException
     */
    private function getMetadata(string \$releaseUrl): Metadata
    {
        // Convert the release URL to a repository URL to fetch the contents of the release_metadata.json file
        // https://github.com/mautic/mautic/releases/tag/3.0.0-beta
        // https://raw.githubusercontent.com/mautic/mautic/3.0.0-beta

        \$contentUrl  = str_replace(['github.com', 'releases/tag/'], ['raw.githubusercontent.com', ''], \$releaseUrl);
        \$metadataUrl = \$contentUrl.'/app/release_metadata.json';

        try {
            \$response = \$this->client->request('GET', \$metadataUrl);
            if (200 !== \$response->getStatusCode()) {
                // A metadata file could not be found so let's assume that a release prior to the new upgrade
                // system has been encountered
                throw new MetadataNotFoundException();
            }

            \$contents = \$response->getBody()->getContents();
            \$metadata = json_decode(\$contents, true);
            if (!\$metadata || !isset(\$metadata['version'])) {
                // The contents do not match what is expected
                throw new MetadataNotFoundException();
            }

            return new Metadata(\$metadata);
        } catch (GuzzleException) {
            throw new MetadataNotFoundException();
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
        return "@bundles/CoreBundle/Helper/Update/Github/ReleaseParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/Github/ReleaseParser.php", "/app/docroot/app/bundles/CoreBundle/Helper/Update/Github/ReleaseParser.php");
    }
}
