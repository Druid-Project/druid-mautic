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

/* @bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php */
class __TwigTemplate_8c89d90e11518a96c8de70e940409415 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Language;

use Mautic\\CoreBundle\\Helper\\Language\\Installer;
use Symfony\\Component\\Filesystem\\Filesystem;

class InstallerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testInstaller(): void
    {
        \$translationsDirectory = __DIR__.'/../resource/language';

        \$installer = new Installer(\$translationsDirectory.'/translations');

        \$zipper  = new \\ZipArchive();
        \$zipper->open(\$translationsDirectory.'/es.zip');
        \$zipper->extractTo(\$translationsDirectory.'/tmp');

        \$this->assertFileExists(\$translationsDirectory.'/tmp/es');

        \$installer->install(\$translationsDirectory.'/tmp', 'es');

        // did the installer create the language folder?
        \$languagePath = \$translationsDirectory.'/translations/es';
        \$this->assertFileExists(\$languagePath);

        // did it copy the config?
        \$this->assertFileExists(\$languagePath.'/config.json');

        // did it ignore the php config?
        \$this->assertFileDoesNotExist(\$languagePath.'/config.php');

        // did it ignore the extra files?
        \$this->assertFileDoesNotExist(\$languagePath.'/random.txt');
        \$this->assertFileDoesNotExist(\$languagePath.'/RandomFolder');

        // did it create the bundles?
        \$this->assertFileExists(\$languagePath.'/CoreBundle');
        \$this->assertFileExists(\$languagePath.'/CampaignBundle');

        // did it copy the INI files?
        \$this->assertFileExists(\$languagePath.'/CoreBundle/messages.ini');
        \$this->assertFileExists(\$languagePath.'/CoreBundle/flashes.ini');
        \$this->assertFileExists(\$languagePath.'/CampaignBundle/messages.ini');
        \$this->assertFileExists(\$languagePath.'/CampaignBundle/flashes.ini');

        // did it ignore the bundle's extra files?
        \$this->assertFileDoesNotExist(\$languagePath.'/CoreBundle/random.txt');

        // did the installer cleanup appropriately
        \$this->assertFileExists(\$translationsDirectory.'/tmp/es');
        \$installer->cleanup();
        \$this->assertFileDoesNotExist(\$translationsDirectory.'/tmp/es');

        // cleanup the test
        (new Filesystem())->remove(\$languagePath);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Language/InstallerTest.php");
    }
}
