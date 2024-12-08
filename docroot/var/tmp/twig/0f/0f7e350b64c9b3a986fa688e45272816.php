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

/* @bundles/LeadBundle/Form/FieldAliasToFqcnMap.php */
class __TwigTemplate_201ad940da09d4396c57b9436c0bf70b extends Template
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

namespace Mautic\\LeadBundle\\Form;

use Mautic\\CoreBundle\\Form\\Type\\BooleanType;
use Mautic\\CoreBundle\\Form\\Type\\CountryType;
use Mautic\\CoreBundle\\Form\\Type\\LocaleType;
use Mautic\\CoreBundle\\Form\\Type\\LookupType;
use Mautic\\CoreBundle\\Form\\Type\\MultiselectType;
use Mautic\\CoreBundle\\Form\\Type\\RegionType;
use Mautic\\CoreBundle\\Form\\Type\\SelectType;
use Mautic\\CoreBundle\\Form\\Type\\TelType;
use Mautic\\CoreBundle\\Form\\Type\\TimezoneType;
use Mautic\\LeadBundle\\Exception\\FieldNotFoundException;
use Mautic\\LeadBundle\\Form\\Type\\HtmlType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;

/**
 * Provides map between Mautic 2 (Symfony 2.8) form aliases and Mautic 3 (Symfony 3.4) FQCN.
 */
final class FieldAliasToFqcnMap
{
    /**
     * @format [field alias => field FQCN]
     */
    public const MAP = [
        'boolean'     => BooleanType::class,
        'country'     => CountryType::class,
        'date'        => DateType::class,
        'datetime'    => DateTimeType::class,
        'email'       => EmailType::class,
        'hidden'      => HiddenType::class,
        'locale'      => LocaleType::class,
        'lookup'      => LookupType::class,
        'multiselect' => MultiselectType::class,
        'number'      => NumberType::class,
        'region'      => RegionType::class,
        'select'      => SelectType::class,
        'tel'         => TelType::class,
        'text'        => TextType::class,
        'textarea'    => TextareaType::class,
        'time'        => TimeType::class,
        'timezone'    => TimezoneType::class,
        'url'         => UrlType::class,
        'html'        => HtmlType::class,
    ];

    public static function getFqcn(string \$alias): string
    {
        if (array_key_exists(\$alias, self::MAP)) {
            return self::MAP[\$alias];
        }

        throw new FieldNotFoundException(\"Field with alias {\$alias} not found\");
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
        return "@bundles/LeadBundle/Form/FieldAliasToFqcnMap.php";
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
        return new Source("", "@bundles/LeadBundle/Form/FieldAliasToFqcnMap.php", "/app/docroot/app/bundles/LeadBundle/Form/FieldAliasToFqcnMap.php");
    }
}
