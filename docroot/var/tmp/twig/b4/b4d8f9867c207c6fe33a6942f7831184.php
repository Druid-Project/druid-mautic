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

/* @bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php */
class __TwigTemplate_e8b35e2cf8a61536dccc118f19114e9a extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Service;

use FM\\ElfinderBundle\\Connector\\ElFinderConnector;
use FM\\ElfinderBundle\\Loader\\ElFinderLoader;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;

class LocalFileAdapterServiceTest extends MauticMysqlTestCase
{
    /**
     * @var string
     */
    private \$folderName;

    protected function beforeTearDown(): void
    {
        \$pathsHelper = static::getContainer()->get('mautic.helper.paths');
        \$folderPath  = \"{\$pathsHelper->getImagePath()}/\$this->folderName\";

        if (is_dir(\$folderPath)) {
            rmdir(\$folderPath);
        }
    }

    public function testElfinderCreateFolderPermissions(): void
    {
        \$elFinderLoader = new class(static::getContainer()) extends ElFinderLoader {
            public function __construct(ContainerInterface \$container)
            {
                parent::__construct(\$container->get('fm_elfinder.configurator'));
            }

            /**
             * @return array<mixed>
             */
            public function load(Request \$request)
            {
                \$connector = new ElFinderConnector(\$this->bridge);

                return \$connector->execute(\$request->query->all());
            }
        };

        static::getContainer()->set('fm_elfinder.loader', \$elFinderLoader);

        \$this->folderName = (string) time();
        \$this->loginUser('admin');
        \$_SERVER['REQUEST_METHOD'] = Request::METHOD_POST;
        \$this->client->request(
            Request::METHOD_POST,
            \"efconnect?cmd=mkdir&name=\$this->folderName&target=fls1_Lw\"
        );
        \$response = \$this->client->getResponse();
        self::assertSame(200, \$response->getStatusCode());
        /** @var PathsHelper \$pathsHelper */
        \$pathsHelper = static::getContainer()->get('mautic.helper.paths');
        \$folderPath  = \"{\$pathsHelper->getImagePath()}/\$this->folderName\";
        self::assertDirectoryExists(\$folderPath);
        self::assertSame('777', substr(sprintf('%o', fileperms(\$folderPath)), -3));
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
        return "@bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php");
    }
}
