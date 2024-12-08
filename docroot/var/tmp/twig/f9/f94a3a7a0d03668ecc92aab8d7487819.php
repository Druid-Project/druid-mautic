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

/* @bundles/LeadBundle/Helper/FormFieldHelper.php */
class __TwigTemplate_734d1c88f9a26a296fb89429244f7fcf extends Template
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

use Mautic\\CoreBundle\\Helper\\AbstractFormFieldHelper;
use Symfony\\Component\\Intl\\Locales;

class FormFieldHelper extends AbstractFormFieldHelper
{
    private static array \$types = [
        'text' => [
            'properties' => [],
        ],
        'textarea' => [
            'properties' => [],
        ],
        'multiselect' => [
            'properties' => [
                'list' => [
                    'required'  => true,
                    'error_msg' => 'mautic.lead.field.select.listmissing',
                ],
            ],
        ],
        'select' => [
            'properties' => [
                'list' => [
                    'required'  => true,
                    'error_msg' => 'mautic.lead.field.select.listmissing',
                ],
            ],
        ],
        'boolean' => [
            'properties' => [
                'yes' => [
                    'required'  => true,
                    'error_msg' => 'mautic.lead.field.boolean.yesmissing',
                ],
                'no' => [
                    'required'  => true,
                    'error_msg' => 'mautic.lead.field.boolean.nomissing',
                ],
            ],
        ],
        'lookup' => [
            'properties' => [
                'list' => [],
            ],
        ],
        'date' => [
            'properties' => [
                'format' => [],
            ],
        ],
        'datetime' => [
            'properties' => [
                'format' => [],
            ],
        ],
        'time' => [
            'properties' => [],
        ],
        'timezone' => [
            'properties' => [],
        ],
        'email' => [
            'properties' => [],
        ],
        'html' => [
            'properties' => [],
        ],
        'number' => [
            'properties' => [
                'roundmode' => [],
                'scale'     => [],
            ],
        ],
        'tel' => [
            'properties' => [],
        ],
        'url' => [
            'properties' => [],
        ],
        'country' => [
            'properties' => [],
        ],
        'region' => [
            'properties' => [],
        ],
        'locale' => [
            'properties' => [],
        ],
    ];

    /**
     * Set the translation key prefix.
     */
    public function setTranslationKeyPrefix(): void
    {
        \$this->translationKeyPrefix = 'mautic.lead.field.type.';
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return self::\$types;
    }

    public static function getListTypes(): array
    {
        return ['select', 'multiselect', 'boolean', 'lookup', 'country', 'region', 'timezone', 'locale'];
    }

    /**
     * @return array{0: bool, 1:string}
     */
    public static function validateProperties(\$type, &\$properties): array
    {
        if (!array_key_exists(\$type, self::\$types)) {
            // ensure the field type is supported
            return [false, 'mautic.lead.field.typenotrecognized'];
        }

        \$fieldType = self::\$types[\$type]['properties'];
        foreach (\$fieldType as \$key => \$property) {
            \$value = array_key_exists(\$key, \$properties) ? \$properties[\$key] : null;
            if (!empty(\$property['required']) && empty(\$value)) {
                return [false, \$property['error_msg']];
            }
        }

        return [true, ''];
    }

    /**
     * @return array<string, string>
     */
    public static function getCountryChoices(): array
    {
        \$customFile = \$_ENV['MAUTIC_UPLOAD_DIR'].'/countries.json';
        \$listFile   = file_exists(\$customFile) ? \$customFile : __DIR__.'/../../CoreBundle/Assets/json/countries.json';
        \$json       = file_get_contents(\$listFile);
        \$countries  = json_decode(\$json);

        return array_combine(\$countries, \$countries);
    }

    /**
     * @return array<string, array<string, string>>
     */
    public static function getRegionChoices(): array
    {
        \$customFile = \$_ENV['MAUTIC_UPLOAD_DIR'].'/regions.json';
        \$listFile   = file_exists(\$customFile) ? \$customFile : __DIR__.'/../../CoreBundle/Assets/json/regions.json';
        \$json       = file_get_contents(\$listFile);
        \$regions    = json_decode(\$json);

        \$choices = [];

        foreach (\$regions as \$country => \$regionGroup) {
            \$choices[\$country] = array_combine(\$regionGroup, \$regionGroup);
        }

        return \$choices;
    }

    /**
     * Symfony deprecated and changed Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType::getTimezones to private
     * in 3.0 - so duplicated code here.
     *
     * @return array<string, mixed>
     */
    public static function getTimezonesChoices()
    {
        static \$timezones;

        if (null === \$timezones) {
            \$timezones = [];

            foreach (\\DateTimeZone::listIdentifiers() as \$timezone) {
                \$parts = explode('/', \$timezone);

                if (count(\$parts) > 2) {
                    \$region = \$parts[0];
                    \$name   = \$parts[1].' - '.\$parts[2];
                } elseif (count(\$parts) > 1) {
                    \$region = \$parts[0];
                    \$name   = \$parts[1];
                } else {
                    \$region = 'Other';
                    \$name   = \$parts[0];
                }

                \$timezones[\$region][str_replace('_', ' ', \$name)] = \$timezone;
            }
        }

        return \$timezones;
    }

    /**
     * Get locale choices.
     *
     * @return array<string, string>
     */
    public static function getLocaleChoices(): array
    {
        return array_flip(Locales::getNames());
    }

    /**
     * Get date field choices.
     */
    public function getDateChoices(): array
    {
        return [
            'anniversary' => \$this->translator->trans('mautic.campaign.event.timed.choice.anniversary'),
            '+P0D'        => \$this->translator->trans('mautic.campaign.event.timed.choice.today'),
            '-P1D'        => \$this->translator->trans('mautic.campaign.event.timed.choice.yesterday'),
            '+P1D'        => \$this->translator->trans('mautic.campaign.event.timed.choice.tomorrow'),
        ];
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
        return "@bundles/LeadBundle/Helper/FormFieldHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/FormFieldHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/FormFieldHelper.php");
    }
}
