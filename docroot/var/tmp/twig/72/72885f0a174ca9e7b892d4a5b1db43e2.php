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

/* @bundles/FormBundle/Collector/AlreadyMappedFieldCollector.php */
class __TwigTemplate_1b2663e35fc4e6c3959c32215e31bfcb extends Template
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

namespace Mautic\\FormBundle\\Collector;

use Mautic\\CacheBundle\\Cache\\CacheProviderInterface;

/**
 * We need to store mapped fields in the form field builder so we could remove the used ones from the select box.
 */
final class AlreadyMappedFieldCollector implements AlreadyMappedFieldCollectorInterface
{
    private const EXPIRATION_IN_SECONDS = 18000;

    public function __construct(
        private CacheProviderInterface \$cacheProvider
    ) {
    }

    public function getFields(string \$formId, string \$object): array
    {
        \$cacheItem = \$this->cacheProvider->getItem(\$this->buildCacheKey(\$formId, \$object));

        return json_decode(\$cacheItem->get() ?? '[]', true);
    }

    public function addField(string \$formId, string \$object, string \$fieldKey): void
    {
        \$this->fetchAndSave(\$formId, \$object, function (array \$fields) use (\$fieldKey): array {
            if (!in_array(\$fieldKey, \$fields, true)) {
                \$fields[] = \$fieldKey;
            }

            return \$fields;
        });
    }

    public function removeField(string \$formId, string \$object, string \$fieldKey): void
    {
        \$this->fetchAndSave(\$formId, \$object, function (array \$fields) use (\$fieldKey) {
            \$cacheKey = array_search(\$fieldKey, \$fields, true);

            if (false !== \$cacheKey) {
                unset(\$fields[\$cacheKey]);

                // Reset indexes.
                \$fields = array_values(\$fields);
            }

            return \$fields;
        });
    }

    public function removeAllForForm(string \$formId): void
    {
        \$this->cacheProvider->invalidateTags([\$this->buildCacheTag(\$formId)]);
    }

    private function fetchAndSave(string \$formId, string \$object, callable \$callback): void
    {
        \$cacheItem = \$this->cacheProvider->getItem(\$this->buildCacheKey(\$formId, \$object));
        \$fields    = json_decode(\$cacheItem->get() ?? '[]', true);
        \$cacheItem->set(json_encode(\$callback(\$fields)));
        \$cacheItem->expiresAfter(self::EXPIRATION_IN_SECONDS);
        \$cacheItem->tag(\$this->buildCacheTag(\$formId));
        \$this->cacheProvider->save(\$cacheItem);
    }

    private function buildCacheKey(string \$formId, string \$object): string
    {
        return sprintf('mautic.form.%s.object.%s.fields.mapped', \$formId, \$object);
    }

    private function buildCacheTag(string \$formId): string
    {
        return sprintf('mautic.form.%s.fields.mapped', \$formId);
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
        return "@bundles/FormBundle/Collector/AlreadyMappedFieldCollector.php";
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
        return new Source("", "@bundles/FormBundle/Collector/AlreadyMappedFieldCollector.php", "/app/docroot/app/bundles/FormBundle/Collector/AlreadyMappedFieldCollector.php");
    }
}
