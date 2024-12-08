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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json */
class __TwigTemplate_c3db9a2958b4c4d8e04615693dd0df1f extends Template
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
      \"errors\": [],
      \"status\": \"pending\"
    },
    \"id\": \"4abfc726-6a27-4c33-9d99-e5254c8df748\",
    \"links\": {
      \"self\": \"/resource_translations_async_uploads/4abfc726-6a27-4c33-9d99-e5254c8df748\"
    },
    \"relationships\": {
      \"language\": {
        \"data\": {
          \"id\": \"l:cs\",
          \"type\": \"languages\"
        },
        \"links\": {
          \"related\": \"/languages/l:cs\"
        }
      },
      \"resource\": {
        \"data\": {
          \"id\": \"o:mautic:p:mautic:r:webhookbundle-messages\",
          \"type\": \"resources\"
        },
        \"links\": {
          \"related\": \"/resources/o:mautic:p:mautic:r:webhookbundle-messages\"
        }
      }
    },
    \"type\": \"resource_translations_async_downloads\"
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
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json", "/app/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json");
    }
}
