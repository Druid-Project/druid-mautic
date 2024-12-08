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

/* @bundles/CoreBundle/Entity/TranslationEntityInterface.php */
class __TwigTemplate_bcfb2b72051340d02b1a0b79df3a6462 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;

interface TranslationEntityInterface
{
    /**
     * @return ?TranslationEntityInterface
     */
    public function getTranslationParent();

    /**
     * Set entity this is a translation of.
     *
     * @return mixed
     */
    public function setTranslationParent(TranslationEntityInterface \$parent = null);

    /**
     * Set this entity as a main content (remove translation parent).
     *
     * @return mixed
     */
    public function removeTranslationParent();

    /**
     * Get ArrayCollection of translated entities.
     *
     * @return ?ArrayCollection
     */
    public function getTranslationChildren();

    /**
     * @return mixed
     */
    public function addTranslationChild(TranslationEntityInterface \$child);

    /**
     * @return mixed
     */
    public function removeTranslationChild(TranslationEntityInterface \$child);

    /**
     * Get array with entities for this translation.
     *
     * If \$onlyChildren, then return just \$children; otherwise [\$parent, \$children]
     *
     * @return array
     */
    public function getTranslations(\$onlyChildren = false);

    /**
     * @param bool \$isChild True to return if the item is a translation of a parent
     *
     * @return bool
     */
    public function isTranslation(\$isChild = false);

    /**
     * @return mixed
     */
    public function getLanguage();
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Entity/TranslationEntityInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/TranslationEntityInterface.php", "/app/docroot/app/bundles/CoreBundle/Entity/TranslationEntityInterface.php");
    }
}
