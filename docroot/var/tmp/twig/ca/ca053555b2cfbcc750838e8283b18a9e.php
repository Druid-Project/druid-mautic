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

/* @bundles/ApiBundle/Helper/BatchIdToEntityHelper.php */
class __TwigTemplate_883f96f3df03c28fa9a0ce2b50cfeb83 extends Template
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

namespace Mautic\\ApiBundle\\Helper;

class BatchIdToEntityHelper
{
    /**
     * @var array
     */
    private \$ids = [];

    private array \$originalKeys = [];

    private array \$errors = [];

    private bool \$isAssociative = false;

    /**
     * @param string \$idKey
     */
    public function __construct(
        array \$parameters,
        private \$idKey = 'id'
    ) {
        \$this->extractIds(\$parameters);
    }

    public function hasIds(): bool
    {
        return !empty(\$this->ids);
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return \$this->ids;
    }

    public function hasErrors(): bool
    {
        return !empty(\$this->errors);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return \$this->errors;
    }

    /**
     * Reorder the entities based on the original keys
     * BC allowed a request to have associative keys (don't ask why; yes it's terrible implementation but we're keeping BC here)
     * The issue this solves is the response should match the format given by the request. If the request had associative keys, the response
     * will return with associative keys (json object). If the request was a sequential numeric array starting with 0, the response will
     * be a simple array (json array).
     */
    public function orderByOriginalKey(array \$entities): array
    {
        if (!\$this->isAssociative) {
            // The request was keyed by sequential numbers starting with 0
            return array_values(\$entities);
        }

        // Ensure entities are keyed by ID in order to find the original keys assuming that some entities are missing if the ID was not found
        \$entitiesKeyedById = [];
        foreach (\$entities as \$entity) {
            \$entitiesKeyedById[\$entity->getId()] = \$entity;
        }

        \$orderedEntities = [];
        foreach (\$this->ids as \$key => \$id) {
            if (!isset(\$entitiesKeyedById[\$id])) {
                continue;
            }

            \$originalKey                   = \$this->originalKeys[\$key];
            \$orderedEntities[\$originalKey] = \$entitiesKeyedById[\$id];
        }

        return \$orderedEntities;
    }

    private function extractIds(array \$parameters): void
    {
        \$this->ids = [];

        if (isset(\$parameters['ids'])) {
            \$this->extractIdsFromIdKey(\$parameters['ids']);

            return;
        }

        \$this->extractIdsFromParams(\$parameters);
    }

    /**
     * @param mixed \$ids
     */
    private function extractIdsFromIdKey(\$ids): void
    {
        // ['ids' => [1,2,3]]
        if (is_array(\$ids)) {
            \$this->isAssociative = \$this->isAssociativeArray(\$ids);
            \$this->ids           = array_values(\$ids);
            \$this->originalKeys  = array_keys(\$ids);

            return;
        }

        // ['ids' => '1,2,3'] OR ['ids' => '1']
        if (str_contains(\$ids, ',') || is_numeric(\$ids)) {
            \$this->ids           = str_getcsv(\$ids);
            \$this->originalKeys  = array_keys(\$this->ids);
            \$this->isAssociative = false;

            return;
        }

        // Couldn't parse the 'ids' key; not throwing an exception in order to keep BC with
        // the old CommonApiController code and the use of a foreach in extractIdsFromParams
        \$this->errors[] = 'mautic.api.call.id_missing';
    }

    private function extractIdsFromParams(array \$parameters): void
    {
        \$this->isAssociative = \$this->isAssociativeArray(\$parameters);
        \$this->originalKeys  = array_keys(\$parameters);

        // [1,2,3]
        \$firstKey            = array_key_first(\$parameters);
        if (!is_array(\$parameters[\$firstKey])) {
            \$this->ids = array_values(\$parameters);

            return;
        }

        // [ ['id' => 1, 'foo' => 'bar'], ['id' => 2, 'bar' => 'foo'] ]
        foreach (\$parameters as \$key => \$params) {
            // Missing id column key in the array; terrible but keep BC
            if (!isset(\$params[\$this->idKey])) {
                \$this->errors[\$key] = 'mautic.api.call.id_missing';

                continue;
            }

            \$this->ids[] = \$params[\$this->idKey];
        }
    }

    private function isAssociativeArray(array \$array): bool
    {
        if (empty(\$array)) {
            return false;
        }
        \$firstKey = array_key_first(\$array);

        return array_keys(\$array) !== range(0, count(\$array) - 1) && 0 !== \$firstKey;
    }

    public function setIsAssociative(bool \$isAssociative): void
    {
        \$this->isAssociative = \$isAssociative;
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
        return "@bundles/ApiBundle/Helper/BatchIdToEntityHelper.php";
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
        return new Source("", "@bundles/ApiBundle/Helper/BatchIdToEntityHelper.php", "/app/docroot/app/bundles/ApiBundle/Helper/BatchIdToEntityHelper.php");
    }
}
