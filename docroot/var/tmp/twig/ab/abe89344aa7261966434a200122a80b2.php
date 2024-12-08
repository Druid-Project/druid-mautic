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

/* @bundles/LeadBundle/Entity/CustomFieldEntityInterface.php */
class __TwigTemplate_c81b0dc9202895f83cae1fe6a1ecfd43 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

interface CustomFieldEntityInterface
{
    /**
     * @param mixed[] \$fields
     *
     * @return mixed
     */
    public function setFields(\$fields);

    /**
     * @return mixed
     */
    public function getFields();

    /**
     * @param string \$alias
     * @param mixed  \$value
     * @param string \$oldValue
     *
     * @return mixed
     */
    public function addUpdatedField(\$alias, \$value, \$oldValue = '');

    /**
     * @return mixed
     */
    public function getUpdatedFields();

    /**
     * Get a field value (should include those in updated fields).
     *
     * @param string      \$field alias
     * @param string|null \$group
     *
     * @return mixed
     */
    public function getFieldValue(\$field, \$group = null);

    /**
     * Get field details.
     *
     * @param string \$key
     * @param string \$group
     *
     * @return array|false
     */
    public function getField(\$key, \$group = null);

    /**
     * Get flat array of profile fields without groups.
     *
     * @return mixed
     */
    public function getProfileFields();
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Entity/CustomFieldEntityInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CustomFieldEntityInterface.php", "/app/docroot/app/bundles/LeadBundle/Entity/CustomFieldEntityInterface.php");
    }
}
