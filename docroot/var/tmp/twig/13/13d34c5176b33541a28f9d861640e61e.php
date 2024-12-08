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

/* @bundles/LeadBundle/DataObject/ContactFieldToken.php */
class __TwigTemplate_64bdfe0ad5fc82f4e9dfb8b84aa4bbfb extends Template
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

namespace Mautic\\LeadBundle\\DataObject;

use Mautic\\CoreBundle\\Form\\DataTransformer\\BarStringTransformer;
use Mautic\\LeadBundle\\Exception\\InvalidContactFieldTokenException;

/**
 * A value object representation of a contact field token.
 */
class ContactFieldToken
{
    private string \$fieldAlias;

    private ?string \$defaultValue;

    /**
     * @throws InvalidContactFieldTokenException
     */
    public function __construct(
        private string \$fullToken
    ) {
        \$this->parse(trim(\$fullToken));
    }

    public function getFullToken(): string
    {
        return \$this->fullToken;
    }

    public function getFieldAlias(): string
    {
        return \$this->fieldAlias;
    }

    public function getDefaultValue(): ?string
    {
        return \$this->defaultValue;
    }

    private function parse(string \$fullToken): void
    {
        preg_match('/^{contactfield=(.*?)}\$/', \$fullToken, \$matches);

        if (empty(\$matches[1])) {
            throw new InvalidContactFieldTokenException(\"'{\$fullToken}' is not a valid contact field token. A valid token example: '{contactfield=firstname|John}'\");
        }

        \$barStringTransformer = new BarStringTransformer();
        \$array                = \$barStringTransformer->reverseTransform(\$matches[1]);
        \$this->fieldAlias     = \$array[0];
        \$this->defaultValue   = \$array[1] ?? null;
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
        return "@bundles/LeadBundle/DataObject/ContactFieldToken.php";
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
        return new Source("", "@bundles/LeadBundle/DataObject/ContactFieldToken.php", "/app/docroot/app/bundles/LeadBundle/DataObject/ContactFieldToken.php");
    }
}
