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

/* @bundles/LeadBundle/Helper/FieldAliasHelper.php */
class __TwigTemplate_f7ab1b111f37a04b8e005ec035348f19 extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;

class FieldAliasHelper
{
    public function __construct(
        private FieldModel \$fieldModel
    ) {
    }

    /**
     * Cleans the alias and if it's not unique it will make it unique.
     */
    public function makeAliasUnique(LeadField \$field): LeadField
    {
        // alias cannot be changed for existing fields
        if (\$field->getId()) {
            return \$field;
        }

        // set alias as name if alias is empty
        \$alias = (\$field->getAlias() ?: \$field->getName()) ?: '';

        // clean the alias
        \$alias = \$this->fieldModel->cleanAlias(\$alias, 'f_', 25);

        // make sure alias is not already taken
        \$repo      = \$this->fieldModel->getRepository();
        \$testAlias = \$alias;
        \$aliases   = \$repo->getAliases(\$field->getId(), false, true, null);
        \$count     = (int) in_array(\$testAlias, \$aliases);
        \$aliasTag  = \$count;

        while (\$count) {
            \$testAlias = \$alias.\$aliasTag;
            \$count     = (int) in_array(\$testAlias, \$aliases);
            ++\$aliasTag;
        }

        if (\$testAlias !== \$alias) {
            \$alias = \$testAlias;
        }

        \$field->setAlias(\$alias);

        return \$field;
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
        return "@bundles/LeadBundle/Helper/FieldAliasHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/FieldAliasHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/FieldAliasHelper.php");
    }
}
