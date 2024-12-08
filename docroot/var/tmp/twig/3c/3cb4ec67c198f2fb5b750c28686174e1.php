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

/* @bundles/LeadBundle/Segment/Query/QueryException.php */
class __TwigTemplate_0da268cfabe835bbb0cdace5255ae11f extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query;

/**
 * @since 2.1.4
 */
class QueryException extends \\Doctrine\\DBAL\\Exception
{
    public static function unknownAlias(\$alias, \$registeredAliases): self
    {
        return new self(\"The given alias '\".\$alias.\"' is not part of \".
            'any FROM or JOIN clause table. The currently registered '.
            'aliases are: '.implode(', ', \$registeredAliases).'.');
    }

    public static function nonUniqueAlias(\$alias, \$registeredAliases): self
    {
        return new self(\"The given alias '\".\$alias.\"' is not unique \".
            'in FROM and JOIN clause table. The currently registered '.
            'aliases are: '.implode(', ', \$registeredAliases).'.');
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
        return "@bundles/LeadBundle/Segment/Query/QueryException.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/QueryException.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/QueryException.php");
    }
}
