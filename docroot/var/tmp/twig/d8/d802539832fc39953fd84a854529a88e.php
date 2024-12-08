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

/* @bundles/CoreBundle/Service/LocalFileAdapterService.php */
class __TwigTemplate_74c757fb8962a508a3815f91ef0ff70d extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Service;

use League\\Flysystem\\Config;
use League\\Flysystem\\Local\\LocalFilesystemAdapter;
use League\\Flysystem\\UnixVisibility\\PortableVisibilityConverter;
use League\\Flysystem\\Visibility;

class LocalFileAdapterService extends LocalFilesystemAdapter
{
    public function __construct(string \$root)
    {
        parent::__construct(
            \$root,
            PortableVisibilityConverter::fromArray(
                [
                    'file' => [
                        'public'  => 0666,
                        'private' => 0600,
                    ],
                    'dir'  => [
                        'public'  => 0777,
                        'private' => 0700,
                    ],
                ],
                Visibility::PUBLIC
            ),
            LOCK_EX,
            self::DISALLOW_LINKS
        );
    }

    /**
     * @see https://github.com/thephpleague/flysystem/issues/1584#issuecomment-1527372297
     */
    public function createDirectory(string \$dirname, Config \$config): void
    {
        \$umask = umask(0);

        parent::createDirectory(\$dirname, \$config);

        umask(\$umask);
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
        return "@bundles/CoreBundle/Service/LocalFileAdapterService.php";
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
        return new Source("", "@bundles/CoreBundle/Service/LocalFileAdapterService.php", "/app/docroot/app/bundles/CoreBundle/Service/LocalFileAdapterService.php");
    }
}
