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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/resources-create.json */
class __TwigTemplate_17621aa214d58a1e3cb098ce403b890d extends Template
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
            \"accept_translations\": true,
            \"categories\": [],
            \"datetime_created\": \"XXXX-XX-XXTXX:XX:XXZ\",
            \"datetime_modified\": \"XXXX-XX-XXTXX:XX:XXZ\",
            \"i18n_options\": {
                \"allow_duplicate_strings\": true
            },
            \"i18n_version\": 1,
            \"mp4_url\": \"https://some.host.net/some_mp4_url\",
            \"name\": \"Resource Name\",
            \"ogg_url\": \"https://some.host.net/some_ogg_url\",
            \"priority\": \"normal\",
            \"slug\": \"webhookbundle-messages\",
            \"string_count\": 0,
            \"webm_url\": \"https://some.host.net/some_webm_url\",
            \"word_count\": 0,
            \"youtube_url\": \"https://www.youtube.com/\"
        },
        \"id\": \"o:mautic:p:mautic:r:resource_slug\",
        \"links\": {
            \"self\": \"/resources/o:mautic:p:mautic:r:resource_slug\"
        },
        \"relationships\": {
            \"i18n_format\": {
                \"data\": {
                    \"id\": \"YML_KEY\",
                    \"type\": \"i18n_formats\"
                }
            },
            \"project\": {
                \"data\": {
                    \"id\": \"o:mautic:p:mautic\",
                    \"type\": \"projects\"
                },
                \"links\": {
                    \"related\": \"/projects/o:mautic:p:mautic\"
                }
            }
        },
        \"type\": \"resources\"
    }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources-create.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources-create.json", "/app/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/resources-create.json");
    }
}
