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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/language-stats.json */
class __TwigTemplate_7e112b95101e40798f92a4b2c3823283 extends Template
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
  \"data\": [
    {
      \"id\": \"o:mautic:p:mautic:r:webhookbundle-messages:l:cs\",
      \"type\": \"resource_language_stats\",
      \"attributes\": {
        \"last_proofread_update\": \"XXXX-XX-XXTXX:XX:XXZ\",
        \"last_review_update\": \"XXXX-XX-XXTXX:XX:XXZ\",
        \"last_translation_update\": \"XXXX-XX-XXTXX:XX:XXZ\",
        \"last_update\": \"XXXX-XX-XXTXX:XX:XXZ\",
        \"proofread_strings\": 10,
        \"proofread_words\": 10,
        \"reviewed_strings\": 10,
        \"reviewed_words\": 10,
        \"total_strings\": 10,
        \"total_words\": 10,
        \"translated_strings\": 10,
        \"translated_words\": 10,
        \"untranslated_strings\": 10,
        \"untranslated_words\": 10
      },
      \"links\": {
        \"self\": \"/resource_stats/o:mautic:p:mautic:r:webhookbundle-messages:l:language_code\"
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
      }
    }
  ],
  \"links\": {
    \"last\": \"/resource_language_stats/o:mautic:p:mautic:r:webhookbundle-messages:l:language_code&page[cursor]=XXX\",
    \"next\": \"/resource_language_stats/o:mautic:p:mautic:r:webhookbundle-messages:l:language_code&page[cursor]=XXX\",
    \"self\": \"/resource_language_stats/o:mautic:p:mautic:r:webhookbundle-messages:l:language_code\"
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
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/language-stats.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/language-stats.json", "/app/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/language-stats.json");
    }
}
