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

/* @bundles/ConfigBundle/Event/ConfigBuilderEvent.php */
class __TwigTemplate_2e142741989075a9d014c7950c21cfb4 extends Template
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

namespace Mautic\\ConfigBundle\\Event;

use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ConfigBuilderEvent extends Event
{
    /**
     * @var mixed[]
     */
    private array \$forms = [];

    /**
     * @var string[]
     */
    private array \$formThemes = [
        '@MauticConfig/FormTheme/_config_file_row.html.twig',
        '@MauticConfig/FormTheme/dsn_row.html.twig',
    ];

    /**
     * @var string[]
     */
    protected array \$encodedFields = [];

    public function __construct(
        private BundleHelper \$bundleHelper
    ) {
    }

    /**
     * Set new form to the forms array.
     *
     * @return \$this
     */
    public function addForm(array \$form)
    {
        if (isset(\$form['formTheme'])) {
            \$this->formThemes[] = \$form['formTheme'];
        }

        \$this->forms[\$form['formAlias']] = \$form;

        return \$this;
    }

    /**
     * Remove a form to the forms array.
     *
     * @param string \$formAlias
     */
    public function removeForm(\$formAlias): bool
    {
        if (isset(\$this->forms[\$formAlias])) {
            unset(\$this->forms[\$formAlias]);

            return true;
        }

        return false;
    }

    /**
     * Returns the forms array.
     *
     * @return array
     */
    public function getForms()
    {
        return \$this->forms;
    }

    /**
     * Returns the formThemes array.
     *
     * @return array
     */
    public function getFormThemes()
    {
        return \$this->formThemes;
    }

    /**
     * Get default parameters from config defined in bundles.
     *
     * @return array
     */
    public function getParametersFromConfig(\$bundle)
    {
        static \$allBundles;

        if (empty(\$allBundles)) {
            \$allBundles = \$this->bundleHelper->getMauticBundles(true);
        }

        if (isset(\$allBundles[\$bundle]) && \$allBundles[\$bundle]['config']['parameters']) {
            return \$allBundles[\$bundle]['config']['parameters'];
        } else {
            return [];
        }
    }

    /**
     * @return \$this
     */
    public function addFileFields(\$fields)
    {
        \$this->encodedFields = array_merge(\$this->encodedFields, (array) \$fields);

        return \$this;
    }

    /**
     * @return array
     */
    public function getFileFields()
    {
        return \$this->encodedFields;
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
        return "@bundles/ConfigBundle/Event/ConfigBuilderEvent.php";
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
        return new Source("", "@bundles/ConfigBundle/Event/ConfigBuilderEvent.php", "/app/docroot/app/bundles/ConfigBundle/Event/ConfigBuilderEvent.php");
    }
}
