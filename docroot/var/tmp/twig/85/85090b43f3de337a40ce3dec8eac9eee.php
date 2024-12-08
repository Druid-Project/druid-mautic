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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php */
class __TwigTemplate_994afe9558b55a28403a5b7381120a48 extends Template
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

class NormalizedValueDAO
{
    public const BOOLEAN_TYPE     = 'boolean';

    public const DATE_TYPE        = 'date';

    public const DATETIME_TYPE    = 'datetime';

    public const DOUBLE_TYPE      = 'double';

    public const EMAIL_TYPE       = 'email';

    public const FLOAT_TYPE       = 'float';

    public const INT_TYPE         = 'int';

    public const LOOKUP_TYPE      = 'lookup';

    public const MULTISELECT_TYPE = 'multiselect';

    public const PHONE_TYPE       = 'phone';

    public const SELECT_TYPE      = 'select';

    public const STRING_TYPE      = 'string';

    public const REGION_TYPE      = 'region';

    public const TEXT_TYPE        = 'text';

    public const TEXTAREA_TYPE    = 'textarea';

    public const TIME_TYPE        = 'time';

    public const URL_TYPE         = 'url';

    public const REFERENCE_TYPE   = 'reference';

    /**
     * @var mixed
     */
    private \$normalizedValue;

    /**
     * @param string \$type
     * @param mixed  \$value
     * @param mixed  \$normalizedValue
     */
    public function __construct(
        private \$type,
        private \$value,
        \$normalizedValue = null
    ) {
        \$this->normalizedValue = \$normalizedValue ?: \$value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return mixed
     */
    public function getOriginalValue()
    {
        return \$this->value;
    }

    /**
     * @return mixed
     */
    public function getNormalizedValue()
    {
        return \$this->normalizedValue;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php");
    }
}
