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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json */
class __TwigTemplate_f7eb4b56ffe401a14b4fcb58c0a3a3bd extends Template
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
        yield "{
    \"data\": {
        \"attributes\": {
            \"date_created\": \"XXXX-XX-XXTXX:XX:XXZ\",
            \"date_modified\": \"XXXX-XX-XXTXX:XX:XXZ\",
            \"details\": {
                \"strings_created\": 0,
                \"strings_deleted\": 0,
                \"strings_skipped\": 0,
                \"strings_updated\": 0
            },
            \"errors\": [
                {
                    \"code\": \"parse_error\",
                    \"detail\": \"Could not decode JSON object\"
                }
            ],
            \"status\": \"done\"
        },
        \"id\": \"4abfc726-6a27-4c33-9d99-e5254c8df748\",
        \"links\": {
            \"self\": \"/resource_strings_async_uploads/4abfc726-6a27-4c33-9d99-e5254c8df748\"
        },
        \"relationships\": {
            \"resource\": {
                \"data\": {
                    \"id\": \"o:mautic:p:mautic:r:resource_slug\",
                    \"type\": \"resources\"
                },
                \"links\": {
                    \"related\": \"/resources/o:mautic:p:mautic:r:resource_slug\"
                }
            }
        },
        \"type\": \"resource_strings_async_uploads\"
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
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json", "/app/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json");
    }
}
