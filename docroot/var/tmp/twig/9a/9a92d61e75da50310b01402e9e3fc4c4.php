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

/* @bundles/IntegrationsBundle/Sync/ValueNormalizer/ValueNormalizer.php */
class __TwigTemplate_38707d6a76f8ac6a7f4dd6740351dead extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

final class ValueNormalizer implements ValueNormalizerInterface
{
    /**
     * @param mixed \$value
     */
    public function normalizeForMautic(string \$type, \$value): NormalizedValueDAO
    {
        switch (\$type) {
            case NormalizedValueDAO::STRING_TYPE:
            case NormalizedValueDAO::TEXT_TYPE:
            case NormalizedValueDAO::TEXTAREA_TYPE:
            case NormalizedValueDAO::URL_TYPE:
            case NormalizedValueDAO::EMAIL_TYPE:
            case NormalizedValueDAO::SELECT_TYPE:
            case NormalizedValueDAO::MULTISELECT_TYPE:
            case NormalizedValueDAO::REGION_TYPE:
            case NormalizedValueDAO::LOOKUP_TYPE:
                return new NormalizedValueDAO(\$type, \$value, (string) \$value);
            case NormalizedValueDAO::INT_TYPE:
                return new NormalizedValueDAO(\$type, \$value, (int) \$value);
            case NormalizedValueDAO::FLOAT_TYPE:
            case NormalizedValueDAO::DOUBLE_TYPE:
                return new NormalizedValueDAO(\$type, \$value, (float) \$value);
            case NormalizedValueDAO::DATE_TYPE:
            case NormalizedValueDAO::DATETIME_TYPE:
                // We expect a string value.
                if (is_string(\$value)) {
                    return new NormalizedValueDAO(\$type, \$value, new \\DateTime(\$value));
                }

                // Other value types we normalize to null.
                return new NormalizedValueDAO(\$type, \$value, null);
            case NormalizedValueDAO::BOOLEAN_TYPE:
                \$value = 'false' === \$value ? false : \$value;
                \$value = 'true' === \$value ? true : \$value;

                return new NormalizedValueDAO(\$type, \$value, (bool) \$value);
            default:
                throw new \\InvalidArgumentException('Variable type, '.\$type.', not supported');
        }
    }

    /**
     * @return mixed
     */
    public function normalizeForIntegration(NormalizedValueDAO \$value)
    {
        return \$value->getNormalizedValue();
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
        return "@bundles/IntegrationsBundle/Sync/ValueNormalizer/ValueNormalizer.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/ValueNormalizer/ValueNormalizer.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/ValueNormalizer/ValueNormalizer.php");
    }
}
