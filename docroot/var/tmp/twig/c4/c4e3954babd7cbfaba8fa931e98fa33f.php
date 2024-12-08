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

/* @bundles/CoreBundle/Helper/MapHelper.php */
class __TwigTemplate_558c0bd230a272d0a62a24259e974e98 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\Intl\\Countries;

class MapHelper
{
    /**
     * @param array<string, int> \$legendValues
     */
    public static function getOptionLegendText(string \$legendText, array \$legendValues): string
    {
        return str_replace(array_keys(\$legendValues), array_values(\$legendValues), \$legendText);
    }

    /**
     * @param array<string, array<int, array<string, int|string>>> \$statsCountries
     * @param array<string, array<string, string>>                 \$mapOptions
     *
     * @return array<int, array<string, mixed>>
     */
    public static function buildMapData(array \$statsCountries, array \$mapOptions, string \$legendText): array
    {
        foreach (\$mapOptions as \$key => \$value) {
            \$mappedData = empty(\$statsCountries[\$key]) ? [] : self::mapCountries(\$statsCountries[\$key], \$key);

            \$result[] = [
                'data'       => \$mappedData['data'] ?? [],
                'label'      => \$value['label'],
                'legendText' => MapHelper::getOptionLegendText(
                    \$legendText,
                    [
                        '%total'       => \$mappedData['total'] ?? 0,
                        '%withCountry' => \$mappedData['totalWithCountry'] ?? 0,
                    ]
                ),
                'unit'       => \$value['unit'],
            ];
        }

        return \$result ?? [];
    }

    /**
     * @param array<int, array<string, int|string>> \$stats
     *
     * @return array<string, int|array<string, int>>
     */
    public static function mapCountries(array \$stats, string \$countKey): array
    {
        \$countries = array_flip(Countries::getNames('en'));
        \$results   = [
            'data'             => [],
            'total'            => 0,
            'totalWithCountry' => 0,
        ];

        foreach (\$stats as \$s) {
            \$countryName = \$s['country'];
            \$results['total'] += \$s[\$countKey];

            if (isset(\$countries[\$countryName])) {
                \$countryCode                   = \$countries[\$countryName];

                if (!empty(\$s[\$countKey])) {
                    \$results['data'][\$countryCode] = (int) \$s[\$countKey];
                }

                \$results['totalWithCountry'] += \$s[\$countKey];
            }
        }

        return \$results;
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
        return "@bundles/CoreBundle/Helper/MapHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/MapHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/MapHelper.php");
    }
}
