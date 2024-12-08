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

/* @bundles/LeadBundle/Helper/SegmentCountCacheHelper.php */
class __TwigTemplate_5aaa8cebb2651b57fcbba4a2c79bccbc extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;

class SegmentCountCacheHelper
{
    public function __construct(
        private CacheStorageHelper \$cacheStorageHelper
    ) {
    }

    /**
     * @throws \\Exception
     */
    public function getSegmentContactCount(int \$segmentId): int
    {
        return (int) \$this->cacheStorageHelper->get(\$this->generateCacheKey(\$segmentId));
    }

    /**
     * @throws \\Exception
     */
    public function setSegmentContactCount(int \$segmentId, int \$count): void
    {
        \$this->cacheStorageHelper->set(\$this->generateCacheKey(\$segmentId), \$count);
    }

    public function hasSegmentContactCount(int \$segmentId): bool
    {
        return \$this->cacheStorageHelper->has(\$this->generateCacheKey(\$segmentId));
    }

    public function invalidateSegmentContactCount(int \$segmentId): void
    {
        if (\$this->hasSegmentContactCount(\$segmentId)) {
            \$this->cacheStorageHelper->delete(\$this->generateCacheKey(\$segmentId));
        }
    }

    /**
     * @throws \\Exception
     */
    public function incrementSegmentContactCount(int \$segmentId): void
    {
        \$count = \$this->hasSegmentContactCount(\$segmentId) ? \$this->getSegmentContactCount(\$segmentId) : 0;
        \$this->setSegmentContactCount(\$segmentId, ++\$count);
    }

    /**
     * @throws \\Exception
     */
    public function decrementSegmentContactCount(int \$segmentId): void
    {
        if (\$this->hasSegmentContactCount(\$segmentId)) {
            \$count = \$this->getSegmentContactCount(\$segmentId);

            if (\$count <= 0) {
                \$count = 1;
            }

            \$this->setSegmentContactCount(\$segmentId, --\$count);
        }
    }

    private function generateCacheKey(int \$segmentId): string
    {
        return sprintf('%s.%s.%s', 'segment', \$segmentId, 'lead');
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
        return "@bundles/LeadBundle/Helper/SegmentCountCacheHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/SegmentCountCacheHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/SegmentCountCacheHelper.php");
    }
}
