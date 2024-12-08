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

/* @bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php */
class __TwigTemplate_e0122fa6a26cc877d60a1e56f578df50 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\RandomHelper;

final class RandomHelper implements RandomHelperInterface
{
    /**
     * Based on \\Nette\\Utils\\Random.
     *
     * @param int    \$length
     * @param string \$charlist
     */
    public function generate(\$length = 10, \$charlist = '0-9a-z'): string
    {
        \$charlist = count_chars(preg_replace_callback('#.-.#', fn (array \$m): string => implode('', range(\$m[0][0], \$m[0][2])), \$charlist), 3);
        \$chLen    = strlen(\$charlist);
        if (\$length < 1) {
            throw new \\InvalidArgumentException('Length must be greater than zero.');
        } elseif (\$chLen < 2) {
            throw new \\InvalidArgumentException('Character list must contain as least two chars.');
        }
        \$res = '';
        for (\$i = 0; \$i < \$length; ++\$i) {
            \$res .= \$charlist[random_int(0, \$chLen - 1)];
        }

        return \$res;
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
        return "@bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php");
    }
}
