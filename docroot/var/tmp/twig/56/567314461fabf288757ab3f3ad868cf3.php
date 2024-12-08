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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php */
class __TwigTemplate_a9ab6fbb53b9aea82d3d6a4f7bee3ae0 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

class CheckPhpVersion extends AbstractPreUpdateCheck
{
    public function runCheck(): PreUpdateCheckResult
    {
        \$metadata = \$this->getUpdateCandidateMetadata();

        if (
            version_compare(PHP_VERSION, \$metadata->getMinSupportedPHPVersion(), 'lt')
            || version_compare(PHP_VERSION, \$metadata->getMaxSupportedPHPVersion(), 'gt')
        ) {
            return new PreUpdateCheckResult(false, \$this, [
                new PreUpdateCheckError('mautic.core.update.check.phpversion', [
                    '%currentversion%' => PHP_VERSION,
                    '%lowestversion%'  => \$metadata->getMinSupportedPHPVersion(),
                    '%highestversion%' => \$metadata->getMaxSupportedPHPVersion(),
                ]),
            ]);
        }

        return new PreUpdateCheckResult(true, \$this);
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
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php", "/app/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php");
    }
}
