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

/* @bundles/CoreBundle/Model/TranslationModelTrait.php */
class __TwigTemplate_cd902c3588a15ca6d6efc07a88d87215 extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Entity\\TranslationEntityInterface;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Provides helper methods for determine the requested language from contact's profile and/or request.
 */
trait TranslationModelTrait
{
    /**
     * Get the entity based on requested translation.
     *
     * @param Lead|array|null \$lead
     *
     * @return array[\$parentEntity, TranslationEntityInterface \$entity]
     */
    public function getTranslatedEntity(TranslationEntityInterface \$entity, \$lead = null, Request \$request = null): array
    {
        [\$translationParent, \$translationChildren] = \$entity->getTranslations();

        \$leadPreference = \$chosenLanguage = null;

        if (count(\$translationChildren)) {
            if (\$translationParent) {
                \$translationChildren = \$translationParent->getTranslationChildren();
            } else {
                \$translationParent = \$entity;
            }

            // Generate a list of translations
            \$translations = [\$translationParent->getId() => \$translationParent->getLanguage()];
            foreach (\$translationChildren as \$c) {
                \$translations[\$c->getId()] = \$c->getLanguage();
            }

            // Generate a list of translations for this entity
            \$translationList = [];
            foreach (\$translations as \$id => \$language) {
                \$core = \$this->getTranslationLocaleCore(\$language);
                if (!isset(\$translationList[\$core])) {
                    \$translationList[\$core] = [];
                }
                \$translationList[\$core][\$language] = \$id;
            }

            // Get the contact's preferred language if defined
            \$languageList   = [];
            \$leadPreference = null;
            if (\$lead) {
                if (\$lead instanceof Lead) {
                    \$languageList[\$leadPreference] = \$lead->getPreferredLocale();
                } elseif (is_array(\$lead) && isset(\$lead['preferred_locale'])) {
                    \$languageList[\$leadPreference] = \$lead['preferred_locale'];
                }
            }

            // Check request for language
            if (null !== \$request) {
                \$browserLanguages = \$request->server->get('HTTP_ACCEPT_LANGUAGE');
                if (!empty(\$browserLanguages)) {
                    \$browserLanguages = explode(',', \$browserLanguages);
                    foreach (\$browserLanguages as \$language) {
                        if ((\$pos = strpos(\$language, ';q=')) !== false) {
                            // remove weights
                            \$language = substr(\$language, 0, \$pos + 1);
                        }
                        // change - to _
                        \$language = str_replace('-', '_', \$language);

                        if (!isset(\$languageList[\$language])) {
                            \$languageList[\$language] = \$language;
                        }
                    }
                }
            }

            \$matchFound    = false;
            \$preferredCore = false;
            foreach (\$languageList as \$language) {
                \$core = \$this->getTranslationLocaleCore(\$language);
                if (isset(\$translationList[\$core])) {
                    // Does the dialect exist?
                    if (isset(\$translationList[\$core][\$language])) {
                        // There's a match
                        \$matchFound     = \$translationList[\$core][\$language];
                        \$chosenLanguage = \$language;
                        break;
                    } elseif (!\$preferredCore) {
                        // This will be the fallback if no matches are found
                        \$preferredCore = \$core;
                    }
                }
            }

            if (\$matchFound) {
                // A translation was found based on language preference
                \$entity = (\$matchFound == \$translationParent->getId()) ? \$translationParent : \$translationChildren[\$matchFound];
            } elseif (\$preferredCore) {
                // Return the best matching language
                \$bestMatch      = array_values(\$translationList[\$preferredCore])[0];
                \$entity         = (\$bestMatch == \$translationParent->getId()) ? \$translationParent : \$translationChildren[\$bestMatch];
                \$chosenLanguage = \$preferredCore;
            }
        }

        // Save the preferred language to the lead's profile
        if (!\$leadPreference && !empty(\$chosenLanguage) && \$lead instanceof Lead) {
            \$lead->addUpdatedField('preferred_locale', \$chosenLanguage);
        }

        // Return the translation parent and translated entity
        return [\$translationParent, \$entity];
    }

    /**
     * Run post saving a translation aware entity.
     */
    public function postTranslationEntitySave(TranslationEntityInterface \$entity): void
    {
        // If parent, add this entity as a child of the parent so that it populates the list in the tab (due to Doctrine hanging on to entities in memory)
        if (\$translationParent = \$entity->getTranslationParent()) {
            \$translationParent->addTranslationChild(\$entity);
        }
    }

    /**
     * @return string
     */
    protected function getTranslationLocaleCore(\$locale)
    {
        if (str_contains(\$locale, '_')) {
            \$locale = substr(\$locale, 0, 2);
        }

        return \$locale;
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
        return "@bundles/CoreBundle/Model/TranslationModelTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Model/TranslationModelTrait.php", "/app/docroot/app/bundles/CoreBundle/Model/TranslationModelTrait.php");
    }
}
