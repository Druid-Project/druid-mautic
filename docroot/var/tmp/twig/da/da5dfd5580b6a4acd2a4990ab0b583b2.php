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

/* @bundles/MarketplaceBundle/DTO/Allowlist.php */
class __TwigTemplate_093df0354e32a1fa0c313b1494698dd1 extends Template
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

use Mautic\\MarketplaceBundle\\Exception\\RecordNotFoundException;

final class Allowlist
{
    /**
     * @param AllowlistEntry[] \$entries
     */
    public function __construct(
        public array \$entries
    ) {
    }

    /**
     * @param array<string,mixed> \$array
     */
    public static function fromArray(array \$array): Allowlist
    {
        return new self(
            array_map(fn (array \$item) => AllowlistEntry::fromArray(\$item), \$array['allowlist'] ?? []),
        );
    }

    public function findPackageByName(string \$packageName): AllowlistEntry
    {
        foreach (\$this->entries as \$entry) {
            if (\$entry->package === \$packageName) {
                return \$entry;
            }
        }

        throw new RecordNotFoundException(\"Package '\$packageName' not found in allowlist.\");
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
        return "@bundles/MarketplaceBundle/DTO/Allowlist.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/Allowlist.php", "/app/docroot/app/bundles/MarketplaceBundle/DTO/Allowlist.php");
    }
}
