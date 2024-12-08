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

/* @bundles/CoreBundle/Helper/CsvHelper.php */
class __TwigTemplate_d16d36e9b280f96acbe5a041f24d292a extends Template
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

namespace Mautic\\CoreBundle\\Helper;

class CsvHelper
{
    /**
     * @param string \$filename
     * @param string \$delimiter
     *
     * @return array
     */
    public static function csv_to_array(\$filename = '', \$delimiter = ',')
    {
        if (!file_exists(\$filename) || !is_readable(\$filename)) {
            return false;
        }

        \$header = null;
        \$data   = [];
        if (false !== (\$handle = fopen(\$filename, 'r'))) {
            while (false !== (\$row = fgetcsv(\$handle, 1000, \$delimiter))) {
                if (!\$header) {
                    \$header = \$row;
                } else {
                    \$data[] = array_combine(\$header, \$row);
                }
            }
            fclose(\$handle);
        }

        return \$data;
    }

    public static function sanitizeHeaders(array \$headers): array
    {
        return array_map('trim', \$headers);
    }

    public static function convertHeadersIntoFields(array \$headers): array
    {
        sort(\$headers);

        \$importedFields = [];

        foreach (\$headers as \$header) {
            \$fieldName = strtolower(InputHelper::alphanum(\$header, false, '_'));

            // Skip columns with empty names as they cannot be mapped.
            if (!empty(\$fieldName)) {
                \$importedFields[\$fieldName] = \$header;
            }
        }

        return \$importedFields;
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
        return "@bundles/CoreBundle/Helper/CsvHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CsvHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/CsvHelper.php");
    }
}
