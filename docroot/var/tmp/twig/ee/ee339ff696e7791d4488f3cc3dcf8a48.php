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

/* @bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php */
class __TwigTemplate_0bc036eebf96b2c269e12ee395a81ee5 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\VariableExpresser;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer\\ValueNormalizer;

final class VariableExpresserHelper implements VariableExpresserHelperInterface
{
    public const TRUE_BOOLEAN_VALUE  = 'true';

    public const FALSE_BOOLEAN_VALUE = 'false';

    private ValueNormalizer \$valueNormalizer;

    public function __construct()
    {
        \$this->valueNormalizer = new ValueNormalizer();
    }

    public function decodeVariable(EncodedValueDAO \$encodedValueDAO): NormalizedValueDAO
    {
        \$value = \$encodedValueDAO->getValue();

        return \$this->valueNormalizer->normalizeForMautic(\$encodedValueDAO->getType(), \$value);
    }

    /**
     * @param mixed \$var
     */
    public function encodeVariable(\$var): EncodedValueDAO
    {
        if (is_null(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::STRING_TYPE, '');
        }

        if (is_int(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::INT_TYPE, (string) \$var);
        }

        if (is_string(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::STRING_TYPE, (string) \$var);
        }

        if (is_float(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::FLOAT_TYPE, (string) \$var);
        }

        if (is_double(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::DOUBLE_TYPE, (string) \$var);
        }

        if (\$var instanceof \\DateTime) {
            return new EncodedValueDAO(EncodedValueDAO::DATETIME_TYPE, \$var->format('c'));
        }

        if (is_bool(\$var)) {
            return new EncodedValueDAO(
                EncodedValueDAO::BOOLEAN_TYPE,
                true === \$var ? self::TRUE_BOOLEAN_VALUE : self::FALSE_BOOLEAN_VALUE
            );
        }

        throw new \\InvalidArgumentException('Variable type for '.var_export(\$var, true).' not supported');
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
        return "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php");
    }
}
