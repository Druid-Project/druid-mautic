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

/* @bundles/CoreBundle/Twig/Helper/ThemeHelper.php */
class __TwigTemplate_822a4cf9518c914d231599d9be02bfe8 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Exception\\BadConfigurationException;
use Mautic\\CoreBundle\\Exception\\FileNotFoundException;
use Mautic\\CoreBundle\\Helper\\PathsHelper;

/**
 * final class ThemeHelper.
 */
final class ThemeHelper
{
    private string \$themeDir;

    private string \$themePath;

    /**
     * @var mixed
     */
    private \$config;

    /**
     * @param string \$theme
     *
     * @throws BadConfigurationException
     * @throws FileNotFoundException
     */
    public function __construct(
        PathsHelper \$pathsHelper,
        private \$theme
    ) {
        \$this->themeDir  = \$pathsHelper->getSystemPath('themes').'/'.\$this->theme;
        \$this->themePath = \$pathsHelper->getSystemPath('themes_root').'/'.\$this->themeDir;

        // check to make sure the theme exists
        if (!file_exists(\$this->themePath)) {
            throw new FileNotFoundException(\$this->theme.' not found!');
        }

        // get the config
        if (file_exists(\$this->themePath.'/config.json')) {
            \$this->config = json_decode(file_get_contents(\$this->themePath.'/config.json'), true);
        } else {
            throw new BadConfigurationException(\$this->theme.' is missing a required config file');
        }

        if (!isset(\$this->config['name'])) {
            throw new BadConfigurationException(\$this->theme.' does not have a valid config file');
        }
    }

    /**
     * Return  name of the template.
     *
     * @return mixed
     */
    public function getName()
    {
        return \$this->config['name'];
    }

    /**
     * Returns the theme folder name.
     *
     * @return string
     */
    public function getTheme()
    {
        return \$this->theme;
    }

    /**
     * Get the theme's config.
     *
     * @return mixed
     */
    public function getConfig()
    {
        return \$this->config;
    }

    /**
     * Get the theme's slots.
     *
     * @param string \$type
     *
     * @return array<string, mixed>
     */
    public function getSlots(\$type)
    {
        return \$this->config['slots'][\$type] ?? [];
    }

    /**
     * Returns path to this theme.
     *
     * @param bool \$relative
     */
    public function getThemePath(\$relative = false): string
    {
        return (\$relative) ? \$this->themeDir : \$this->themePath;
    }

    /**
     * Returns template.
     *
     * @param string \$code
     *
     * @return bool|string
     */
    public function getErrorPageTemplate(\$code)
    {
        \$errorPage = \$this->getThemePath().\"/error_{\$code}.html.twig\";
        if (file_exists(\$errorPage)) {
            return \"@themes/{\$this->theme}/error_{\$code}.html.twig\";
        } else {
            return false;
        }
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
        return "@bundles/CoreBundle/Twig/Helper/ThemeHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/ThemeHelper.php", "/app/docroot/app/bundles/CoreBundle/Twig/Helper/ThemeHelper.php");
    }
}
