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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php */
class __TwigTemplate_fc3a539ca3c382b9eca00682cca8a07f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Value;

class EncodedValueDAO
{
    public const STRING_TYPE   = 'string';

    public const INT_TYPE      = 'int';

    public const FLOAT_TYPE    = 'float';

    public const DOUBLE_TYPE   = 'double';

    public const DATETIME_TYPE = 'datetime';

    public const BOOLEAN_TYPE  = 'boolean';

    /**
     * @param string \$type
     * @param string \$value
     */
    public function __construct(
        private \$type,
        private \$value
    ) {
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php");
    }
}
