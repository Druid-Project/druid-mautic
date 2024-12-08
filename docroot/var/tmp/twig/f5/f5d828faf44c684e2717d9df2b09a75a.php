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

/* @bundles/CoreBundle/Helper/ColorHelper.php */
class __TwigTemplate_9957cdb5a122a4c74ec6aa7e88191bc4 extends Template
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

/**
 * Helper class for operations with colors.
 */
class ColorHelper
{
    /**
     * @var int
     */
    protected \$red = 0;

    /**
     * @var int
     */
    protected \$green = 0;

    /**
     * @var int
     */
    protected \$blue = 0;

    /**
     * @param string \$hex in format #xxxxxx or #xxx
     */
    public function __construct(\$hex = null)
    {
        if (\$hex) {
            \$this->setHex(\$hex);
        }
    }

    /**
     * Sets random values to RGB properties. It will avoid too black or too wight colors.
     *
     * @return ColorHelper
     */
    public function buildRandomColor()
    {
        \$this->red   = random_int(20, 236);
        \$this->green = random_int(20, 236);
        \$this->blue  = random_int(20, 236);

        return \$this;
    }

    /**
     * Populate color from hexadecimal code.
     *
     * @param  string in format #xxxxxx or #xxx
     *
     * @return ColorHelper
     */
    public function setHex(\$hex)
    {
        if (4 === strlen(\$hex)) {
            \$format          = '#%1s%1s%1s';
            [\$r, \$g, \$b]     = sscanf(\$hex, \$format);
            \$this->red       = hexdec(\"\$r\$r\");
            \$this->green     = hexdec(\"\$g\$g\");
            \$this->blue      = hexdec(\"\$b\$b\");
        } else {
            \$format                                     = '#%2x%2x%2x';
            [\$this->red, \$this->green, \$this->blue]     = sscanf(\$hex, \$format);
        }

        return \$this;
    }

    /**
     * Returns array of [R, G, B] of current state.
     */
    public function getColorArray(): array
    {
        return [\$this->red, \$this->green, \$this->blue];
    }

    /**
     * Returns array of [R, G, B] of current state.
     */
    public function toRgb(): string
    {
        return sprintf('rgb(%d,%d,%d)', \$this->red, \$this->green, \$this->blue);
    }

    /**
     * Returns array of [R, G, B] of current state with alpha.
     *
     * @param  float (0 - 1)
     */
    public function toRgba(\$alpha = 1): string
    {
        return sprintf('rgba(%d,%d,%d,%g)', \$this->red, \$this->green, \$this->blue, (float) \$alpha);
    }

    /**
     * Returns current color to hexadecimal hash.
     */
    public function toHex(): string
    {
        \$hex = '#';
        \$hex .= str_pad(dechex(\$this->red), 2, '0', STR_PAD_LEFT);
        \$hex .= str_pad(dechex(\$this->green), 2, '0', STR_PAD_LEFT);

        return \$hex.str_pad(dechex(\$this->blue), 2, '0', STR_PAD_LEFT);
    }

    public function getRed(): int
    {
        return \$this->red;
    }

    public function getGreen(): int
    {
        return \$this->green;
    }

    public function getBlue(): int
    {
        return \$this->blue;
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
        return "@bundles/CoreBundle/Helper/ColorHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ColorHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/ColorHelper.php");
    }
}
